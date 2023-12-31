<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;

class DifussionService
{
    public function generate(string $prompt,string $tone)
    {

        $body = json_encode([
            "key" => config('difu_token'),
            "prompt" => $this->generatePrompt($prompt,$tone),
            "negative_prompt" => null,
            "width" => "512",
            "height" => "512",
            "samples" => "2",
            "num_inference_steps" => "20",
            "seed" => null,
            "guidance_scale" => 7.5,
            "safety_checker" => "yes",
            "multi_lingual" => "no",
            "panorama" => "no",
            "self_attention" => "no",
            "upscale" => "no",
            "embeddings_model" => null,
            "webhook" => null,
            "track_id" => null
        ]);

        $response = Http::withHeaders([
            "Content-Type"=> "application/json",
        ])->withBody($body)->post('https://stablediffusionapi.com/api/v3/text2img');

           
        if($response->collect()['status']=="error")
        {
            return [];
        }

        return $response->collect()['output'];

    //    return  ["https://pub-3626123a908346a7a8be8d9295f44e26.r2.dev/generations/71726bfd-7c85-4851-9af3-93401f2fe60e-0.png",
    //   "https://pub-3626123a908346a7a8be8d9295f44e26.r2.dev/generations/71726bfd-7c85-4851-9af3-93401f2fe60e-1.png"];
    }

    public function generatePrompt(string $prompt,string $tone)
    {
        $pt = "generate image on the topic $prompt that show $tone emotions";
        return $pt;
    }

}