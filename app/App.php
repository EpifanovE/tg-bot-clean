<?php

declare(strict_types=1);

namespace App;

use WeStacks\TeleBot\TeleBot;

class App
{
    private TeleBot $bot;

    private array $config = [];

    private static ?self $instance = null;

    private function __construct()
    {
        $this->config = require_once __DIR__ . "/../config.php";

        $this->bot = new TeleBot([
            'token' => $this->config["token"],
            'api_url' => 'https://api.telegram.org',
            'exceptions' => true,
            'async' => false,
            'handlers' => $this->config["handlers"],
        ]);
    }

    public static function instance(): self
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function run()
    {
        $this->bot->handleUpdate();
    }

    public function set()
    {
        $this->bot->setWebhook([
            "url" => $this->config["webhook"]
        ]);
    }

    public function getConfig(): array
    {
        return $this->config;
    }
}