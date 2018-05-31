<?php

require_once __DIR__ . '/vendor/autoload.php';

use Longman\TelegramBot\Exception\TelegramException;
use Longman\TelegramBot\Telegram;

$botApiKey  = '580636020:AAHvYhE3kljSpU53frr5aLVivZVbsWhl9hY';
$botUsername = 'VueManriBot';
$ngrokUrl = $_GET['ngrok'].'/';
$hookUrl = $ngrokUrl.'webhook.php';

try {

    // Create Telegram API object
    $telegram = new Telegram($botApiKey, $botUsername);

    // Set webhook
    $result = $telegram->setWebhook($hookUrl);
    if ($result->isOk()) {
        echo $result->getDescription().PHP_EOL.$hookUrl;
    }
} catch (TelegramException $e) {
    // log telegram errors
    echo $e->getMessage();
}

