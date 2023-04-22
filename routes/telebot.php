<?php

// Adding handlers on initialization
use App\Http\Controllers\TelegramController;
use WeStacks\TeleBot\TeleBot;

//$bot = new TeleBot([
//    'token' => env('TELEGRAM_BOT_TOKEN'),
//    'handlers' => [
//        TelegramController::class,
//        TelegramController::TelegramUpdateHandler(),
//    ]
//]);
//
//// Adding handlers on existing bot instance
//$bot->addHandler(TelegramController::class);
//$bot->addHandler(TelegramController::TelegramUpdateHandler());
