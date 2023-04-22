<?php

namespace App\Logics;

use WeStacks\TeleBot\Handlers\UpdateHandler;

class TelegramLogic extends UpdateHandler {
    public function trigger() : bool
    {
        return isset($this->update->message);
    }

    public function handle()
    {
        $update = $this->update;
        $bot = $this->bot;

        // chat_id => $this->update->message->chat->id
        return $this->sendMessage([
            'text' => 'Hello, World!'
        ]);
    }
}
