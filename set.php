<?php

use WeStacks\TeleBot\TeleBot;

require_once __DIR__ . "/vendor/autoload.php";

$bot = new TeleBot([
    'token' => "1037610622:AAH6xpAVoueNlYpzBnT4uKnk-v1xVY4Lt2M",
    'api_url' => 'https://api.telegram.org',
    'exceptions' => true,
    'async' => false,
    'webhook' => 'https://5496-91-144-163-27.ngrok.io',
    'handlers' => [
        \App\Commands\StartCommand::class,
    ]
]);

$bot->setWebhook(

);