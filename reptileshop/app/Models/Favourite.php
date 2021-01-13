<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\User;

class Favourite extends Model
{
    public function user()
    {
        return $this->hasMany('App\Models\User');
    }

    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }
}
