<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\post;

class comment extends Model
{
    public function post() {
        return $this->belongsTo(post::class);
    }
}
