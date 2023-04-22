<?php

namespace App\Providers;

use App\Http\Controllers\TelegramController;
use App\Logics\TelegramLogic;
use Illuminate\Support\ServiceProvider;
use WeStacks\TeleBot\TeleBot;

class CustomServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     * @throws \WeStacks\TeleBot\Exceptions\TeleBotException
     */
    public function register()
    {
        // Adding handlers on initialization
        $bot = new TeleBot([
            'token' => env('TELEGRAM_BOT_TOKEN', "5752204112:AAHR4w3ZpFYkuW7TqTzCBpqJ9gwmKv8huRo"),
            'handlers' => [
                TelegramLogic::class
            ]
        ]);

        // Adding handlers on existing bot instance
        $bot->addHandler(TelegramLogic::class);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
