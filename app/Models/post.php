<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\comment;

class post extends Model
{
    // public function comments()

    // {

    //     return $this->hasMany(Comment::class);

    // }

    public function comments() {
        return $this->hasMany(comment::class);
    }
}
