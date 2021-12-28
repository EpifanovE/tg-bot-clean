<?php

declare(strict_types=1);

namespace App\Commands;

class StartCommand extends BaseCommand
{
    protected static $aliases = [ '/start', '/s' ];

    protected static $description = 'Send "/start" or "/s" to start the bot."';

    public function handle()
    {
        $this->sendMessage([
            "text" => "Здравствуйте!\n\nПриветственное сообщение."
        ]);
    }
}