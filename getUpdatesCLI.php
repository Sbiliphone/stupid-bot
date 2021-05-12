#!/usr/bin/env php
<?php
require __DIR__ . '/vendor/autoload.php';

$bot_api_key  = '1720006800:AAEfYMlfv2hjdBRyPp6yHUF6CmgA9GLLLTE';
$bot_username = 'stupidFabioLigu_bot';

$mysql_credentials = [
    'host'     => 'localhost',
    'port'     => 3306, // optional
    'user'     => 'dbuser',
    'password' => 'dbpass',
    'database' => 'dbname',
];



try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    // Enable MySQL
    // Handle telegram getUpdates request
    $telegram->useGetUpdatesWithoutDatabase();
    $telegram->handleGetUpdates();
    var_dump($telegram);
    
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // log telegram errors
    // echo $e->getMessage();
}