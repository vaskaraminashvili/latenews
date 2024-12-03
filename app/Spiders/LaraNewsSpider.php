<?php

namespace App\Spiders;

use App\Spiders\ItemProcessor\LaraNewsProcessor;
use Generator;
use RoachPHP\Downloader\Middleware\RequestDeduplicationMiddleware;
use RoachPHP\Extensions\LoggerExtension;
use RoachPHP\Extensions\StatsCollectorExtension;
use RoachPHP\Http\Response;
use RoachPHP\Spider\BasicSpider;
use RoachPHP\Spider\ParseResult;
use Symfony\Component\DomCrawler\Crawler;

class LaraNewsSpider extends BasicSpider
{
    public array $data = [];
    public string $category_slug = '';

    public array $startUrls = [
        'https://www.theverge.com/amazon'
    ];

    public array $downloaderMiddleware = [
        RequestDeduplicationMiddleware::class,
    ];

    public array $spiderMiddleware = [
        //
    ];

    public array $itemProcessors = [
        LaraNewsProcessor::class,
    ];

    public array $extensions = [
        LoggerExtension::class,
        StatsCollectorExtension::class,
    ];

    public int $concurrency = 2;

    public int $requestDelay = 1;

    /**
     * @return Generator<ParseResult>
     */
    public function parse(Response $response): \Generator
    {
        $category_slug = substr(strrchr($this->startUrls[0], '/'), 1);

        $items = $response
            ->filter('.duet--content-cards--content-card.relative.flex.flex-row.border-b.border-solid.border-gray-cc.px-0.last-of-type\:border-b-0.dark\:border-gray-31.py-16.hover\:bg-\[\#FBF9FF\].dark\:hover\:bg-gray-18.max-w-container-md.last-of-type\:border-b-0.md\:pl-20')
            ->each(function (Crawler $node) use (&$category_slug) {
                $titleNode = $node->filter('.inline.pr-4.text-17.font-bold.md\:text-17');
                $descNode = $this->getNewsDescription($node);
                $dateTime = $this->getNewsDate($node);
                $nextPageLink = $node->filter("a.hover\:shadow-underline-inherit.after\:absolute.after\:inset-0")->link()->getUri();
                return [
                    'title' => $titleNode->text(),
                    'description' => $descNode,
                    'date' => $dateTime,
                    'link' => $nextPageLink,
                    'category_slug' => $category_slug,
                ];
            });
        foreach ($items as $item) {
            yield $this->request('GET', $item['link'], 'newInnerPage', ['item' => $item]);
        }
    }

    public function getNewsDescription(Crawler $node): string
    {
        $descNode = $node->filter('.font-polysans.text-black.dark\:text-gray-ef.leading-130 p');
        $descText = '';
        if ($descNode->count() > 0) {
            $descNode->each(function (Crawler $node) use (&$descText) {
                $descText .= $node->text();
            });
        }
        return $descText;
    }

    public function getNewsDate(Crawler $node): string
    {
        $dateTime = $node->filter('time.flex.items-center.font-normal')->attr('datetime');
        $timestamp = $dateTime;
        $carbonDate = \Carbon\Carbon::parse($timestamp);
        return $carbonDate->format('Y-m-d H:i:s');
    }


    public function newInnerPage(Response $response): Generator
    {
        $item = $response->getRequest()->getOptions()['item'];
        $img_url = $response->filter('img.rounded-sm');
        if ($img_url->count() > 0) {
            $item['img'] = $response->filter('img.rounded-sm')->attr('src');
        }
        yield $this->item($item);
    }


    // EXAMPLE
//    public function parseNewsPage(Response $response): Generator
//    {
//        $item = $response->getRequest()->getOptions()['item'];
//        $item['description'] = $response->filter('div.duet--article--article-body-component p')->innerText();
//        $item['img'] = $response->filter('figure.duet--article--lede-image img')->attr('src');
//        yield $this->item($item);
//    }
}
