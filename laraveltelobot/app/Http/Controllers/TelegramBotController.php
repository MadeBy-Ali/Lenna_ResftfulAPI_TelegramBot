<?php

namespace App\Http\Controllers;

use Telegram\Bot\Api;
use Illuminate\Http\Request;

class TelegramBotController extends Controller
{
    public function __construct(){
        $this->telegram = new Api('5612862534:AAHsGriRUYhtKWoS0WXU6Q1QT0MfokbKVTs');
    }   

    public function sendMessage($id){
        return $this->telegram->sendMessage([
            'chat_id' => $id, 
            'text' => 'Welcome to Lenna Zomato Integration'
        ]);
    }

    public function messages(){
        return $this->telegram->getUpdates();
    }
}
