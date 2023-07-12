<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $title
 * @property string $content
 * @property string $description
 * @property boolean $is_published
 */
//PHP Doc's
class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'description',
        'is_published',
    ];
}
