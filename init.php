<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

$API_KEY = '197232756:AAG-0ZBcvYPU_xVdyptrRXFo5HfJajvNfuQ';
$BOT_NAME = 'tele2vk_bot';
$hook_url = 'https://televk.herokuapp.com/webhook.php';
try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($API_KEY, $BOT_NAME);

    // Set webhook
    $result = $telegram->setWebHook($hook_url);
    echo '<pre>';
    print_r($result);
    echo '</pre>';
    die();
    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    echo $e;
}