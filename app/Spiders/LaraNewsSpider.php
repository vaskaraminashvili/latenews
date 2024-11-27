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
    public array $startUrls = [
        'https://www.theverge.com/tech'
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
        $items = $response
            ->filter('section div.duet--content-cards--content-card')
            ->each(function (Crawler $node) {
                $titleNode = $node->filter('h2 a');
                $authorNode = $node->filter('div.inline-block a');
                $descNode = $node->filter('p.duet--article--dangerously-set-cms-markup');
                return [
                    'title' => $titleNode->count() ? $titleNode->text() : 'No title',
                    'url' => $titleNode->count() ? $titleNode->link()->getUri() : 'No URL',
                    'author' => $authorNode->count() ? $authorNode->text() : 'No author',
                    'desc' => $descNode->count() ? $descNode->text() : 'No description',
                ];
            });

        foreach ($items as &$item) {
            yield $this->request('GET', $item['url'], 'parseNewsPage', ['item' => &$item]);
        }
//        yield $this->item($items);
    }

    public function parseNewsPage(Response $response): Generator
    {
        $item = $response->getRequest()->getOptions()['item'];

        $item['description'] = $response->filter('div.duet--article--article-body-component p')->innerText();
        $item['img'] = $response->filter('figure.duet--article--lede-image img')->attr('src');
        yield $this->item($item);
    }
}
