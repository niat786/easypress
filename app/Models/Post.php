<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    use \Spatie\Tags\HasTags;

    protected $casts = [
        'categories' => 'array',
    ];

    protected $fillable = ['title','slug', 'description', 'content','featured_image','categories'];

}
