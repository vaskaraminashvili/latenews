<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ParaphraseService
{
    private string $key = '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';
    private $api_url = 'https://api-inference.huggingface.co/models/mistralai/Mistral-Nemo-Instruct-2407';


    public function paraphrase(string $text)
    {
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer '.$this->key
        ])->post($this->api_url, [
            'inputs' => "Paraphrase the text : {$text}",
            'parameters' => [
                'max_new_tokens' => 180
            ]
        ]);

        if ($response->successful()) {
            $text = $response->object()[0]->generated_text;
            return str_replace("Paraphrase the text : ", "", $text);
        } else {
            dd($response->body());
        }
    }
}