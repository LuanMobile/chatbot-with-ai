<?php

namespace App\Services;

use Gemini\Enums\Role;
use Gemini\Data\Content;
use Gemini\Laravel\Facades\Gemini;

class GeminiService
{
    public function hotelReviews(string $prompt): string
    {
        $chat = Gemini::chat()
            ->startChat(history: [
                Content::parse(part: 'Bring me comments about the best hotels in Brazilian cities. And if something is requested outside of this context, return a response politely informing that what was requested is outside of your context. And the answers must be in Portuguese, right?'),
                Content::parse(part: 'Yes I understand. Answers must be in Portuguese and if something out of context is requested, respond politely.', role: Role::MODEL)
            ]);

        $response = $chat->sendMessage($prompt);
        return $response->text();
    }
}
