<?php

namespace Modules\ManagePost\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'status',

    ];

    protected static function newFactory()
    {
        return \Modules\ManagePost\Database\factories\PostFactory::new();
    }
}
