<?php

namespace App\Http\Controllers;

use App\Models\comment;
use Illuminate\Http\Request;

class comments extends Controller
{
    public function index() {
        return comment::find(11)->post;
        // return $comment;
    }
}
