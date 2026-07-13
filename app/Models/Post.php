<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //追加
    protected $casts = [
    'published_at' => 'datetime',   // ← ここを追加
    ];

    protected $fillable = [
        'title',
        'content',
        'published_at',
    ];
}
