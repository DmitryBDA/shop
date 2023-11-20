<?php

namespace App\Logging\Telegram;

use Monolog\Logger;

class TelegramLoggerFactory
{
    public function __invoke(array $config): Logger
    {
        $telegram = new Logger('telegram');
        $telegram->pushHandler(new TelegramLoggerHandler($config));

        return $telegram;
    }
}