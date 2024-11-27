<?php

use duncan3dc\Speaker\Providers\GoogleProvider;
use duncan3dc\Speaker\TextToSpeech;

Route::get('/', function () {
    $provider = new GoogleProvider();
    $provider = $provider->withLanguage("ka");
    $text = "გამარჯობა";

// Generate speech file
    $filename = "speech_".uniqid().".mp3";
    $tempFile = tempnam(sys_get_temp_dir(), "tts");

// Create speech file
    $tts = new TextToSpeech($text, $provider);
    $tts->save($tempFile);

// Save to Laravel storage (e.g., 'public' disk)
    Storage::disk("public")->put($filename, file_get_contents($tempFile));

// Optional: Delete temporary file
    unlink($tempFile);

// Return file path or URL
    return Storage::url($filename);
});
