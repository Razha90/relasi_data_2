<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;


class posts extends Controller
{
    public function index() {

        $post = post::find(1)->comments;
        return $post;
    }
}
