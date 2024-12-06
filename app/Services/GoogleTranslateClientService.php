<?php

namespace App\Services;

use Google\Cloud\Core\Exception\GoogleException;
use Google\Cloud\Translate\V2\TranslateClient;

class GoogleTranslateClientService
{
    private string $key = 'AIzaSyCeunyta6zPFpxITmXecwuJ41OEKl4HXcs';
    private TranslateClient $translateClient;

    /**
     * @throws GoogleException
     */
    function __construct()
    {
        $this->translateClient = new TranslateClient([
            'key' => $this->key
        ]);
    }


    public function translate(string $text, string $target_lang = 'ka'): string
    {
        $translated = $this->translateClient->translate(
            e($text),
            [
                "target" => $target_lang
            ]
        );
        return html_entity_decode($translated["text"]);
    }
}