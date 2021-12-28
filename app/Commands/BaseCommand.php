<?php

declare(strict_types=1);

namespace App\Commands;

use App\App;
use WeStacks\TeleBot\Handlers\CommandHandler;
use WeStacks\TeleBot\Objects\Update;
use WeStacks\TeleBot\TeleBot;

abstract class BaseCommand extends CommandHandler
{
    protected App $app;

    public function __construct(TeleBot $bot, Update $update)
    {
        parent::__construct($bot, $update);
        $this->app = App::instance();
    }
}