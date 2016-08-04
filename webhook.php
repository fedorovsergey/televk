<?php

$loader = require __DIR__.'/vendor/autoload.php';

$API_KEY = '197232756:AAG-0ZBcvYPU_xVdyptrRXFo5HfJajvNfuQ';
$BOT_NAME = 'tele2vk_bot';

try {
    $telegram = new Longman\TelegramBot\Telegram($API_KEY, $BOT_NAME);

    $telegram->handle();
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // echo $e->getMessage();
}