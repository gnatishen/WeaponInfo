<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramBotController extends Controller
{
    /**
     * Обробляємо запит від телеграм бота.
     *
     * @param Request $request
     *
     * @return string
     */
    public function handleRequest(Request $request)
    {
        $update = Telegram::getWebhookUpdate();

        // Розбираємо об'єкт отриманого повідомлення та викликаємо відповідний метод для обробки
        if (isset($update['message'])) {
            $this->handleMessage($update['message']);
        } elseif (isset($update['callback_query'])) {
            $this->handleCallbackQuery($update['callback_query']);
        } elseif (isset($update['inline_query'])) {
            $this->handleInlineQuery($update['inline_query']);
        }

        return 'OK';
    }

    /**
     * Обробляємо текстове повідомлення від телеграм бота.
     *
     * @param array $message
     */
    private function handleMessage($message)
    {
        // Записуємо повідомлення до лог файлу
        Log::channel('telegram')->info('Received message from ' . $message['chat']['id'] . ': ' . $message['text']);

        // Обробляємо текстове повідомлення
        // ...
    }

    /**
     * Обробляємо callback query від телеграм бота.
     *
     * @param array $callbackQuery
     */
    private function handleCallbackQuery($callbackQuery)
    {
        // Записуємо повідомлення до лог файлу
        Log::channel('telegram')->info('Received callback query from ' . $callbackQuery['from']['id'] . ': ' . $callbackQuery['data']);

        // Обробляємо callback query
        // ...
    }

    /**
     * Обробляємо inline query від телеграм бота.
     *
     * @param array $inlineQuery
     */
    private function handleInlineQuery($inlineQuery)
    {
        // Записуємо повідомлення до лог файлу
        Log::channel('telegram')->info('Received inline query from ' . $inlineQuery['from']['id'] . ': ' . $inlineQuery['query']);

        // Обробляємо inline query
        // ...
    }
}
