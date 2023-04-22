<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use WeStacks\TeleBot\Laravel\TeleBot;
use WeStacks\TeleBot\Objects\Update;

class TelegramController extends Controller
{
    public static function TelegramUpdateHandler(): \Closure
    {
        return function(TeleBot $bot, Update $update, $next) {
            if ($update->message->text === '/start') {
                return $bot->sendMessage([
                    'chat_id' => $update->chat()->id,
                    'text' => 'Hello, World!'
                ]);
            }

            return $next();
        };
    }
}
