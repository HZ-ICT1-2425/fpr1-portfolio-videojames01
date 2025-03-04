<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'summary', 'body', 'slug'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
