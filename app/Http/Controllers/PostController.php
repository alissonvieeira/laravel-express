<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            0 => 'Descrição do post 1',
            1 => 'Descrição do post 2',
            2 => 'Descrição do post 3',
            3 => 'Descrição do post 4',
            4 => 'Descrição do post 5',
        ];

        return view('posts.index', compact('posts'));
    }
}
