<?php

namespace App\Http\Controllers;

use App\Models\posts;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function post($id)
    {
        $post = posts::find($id);
        return view('post');

    }
}
