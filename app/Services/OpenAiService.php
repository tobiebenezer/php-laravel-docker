<?php

namespace App\Services;

use App\Models\UserPrompt;
use Illuminate\Support\Facades\Http;

class OpenAiService
{
    public function generate(string $prompt, float $min_density, float $max_density, string $tone)
    {

        $body = [
            "model" => "gpt-3.5-turbo",
            // "model" => "gpt-4",
            "messages" => [
                [
                    "role" => "user",
                    "content" => $this->createPrompt($prompt,$min_density,$max_density,$tone)
                ],
                // [
                //     "role" => "assistant",
                //     "content" => ""
                // ],
            ],
            "temperature" => 1,
            "max_tokens" => 109,
            "top_p" => 1,
            "frequency_penalty" => 0.2,
            "presence_penalty" => 0
        ];

        $response = Http::withHeaders([
            "Authorization" => "Bearer ".config('openai.token')
        ])->post('https://api.openai.com/v1/chat/completions',$body);

        if(!$response->successful()){
            return [false,$response];
        }

        return [true,$response->collect('choices')[0]["message"]["content"]];
    }

    public function createPrompt(string $prompt, float $min_density, float $max_density, string $tone)
    {
        $pt = "write an articule on the keyword: {$prompt}, keyword desity between {$min_density} and {$max_density} and tone {$tone}";

        return $pt;
    }

    public function generateImage(string $prompt, string $tone)
    {
        $body = [
            'model' => "dall-e-3",
            'prompt' => $this->generateImagePrompt($prompt,$tone),
            'n' =>1,
            "size" => "1024x1024"
        ];

        $response = Http::withHeaders([
            'Authorization' => "Bearer " . config('openai.token')
        ])->post('https://api.openai.com/v1/images/generations',$body);

        
        if(!$response->successful()){
            return [];
        }
        
        return $response->collect('data')[0]['url'];

    }

    public function generateImagePrompt(string $prompt, string $tone)
    {
        $pt = "generate image on the topic $prompt that show $tone emotions";
        return $pt;
    }

    public function saveResult($prompt, $response, array $media_url)
    {
        $userPromt = UserPrompt::create([
            'prompt' => $prompt,
            'user_id' => auth()->id(),
            'response' => $response,
            'media_urls' => $media_url,
        ]);

        return $userPromt;
    }
}
