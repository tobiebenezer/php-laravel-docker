<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPrompt extends Model
{
    use HasFactory;

    protected $fillable = [
        'prompt',
        'user_id',
        'response',
        'media_urls',
    ];

    protected $casts = [
        'media_urls' => 'array'
    ];
}
