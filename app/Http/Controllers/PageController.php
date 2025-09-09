<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function articles()
    {
        $articles = [
            [
                'title' => 'Artikel Pertama',
                'description' => 'Ini adalah deskripsi artikel pertama.'
            ],
            [
                'title' => 'Artikel Kedua',
                'description' => 'Ini adalah deskripsi artikel kedua.'
            ],
            [
                'title' => 'Artikel Ketiga',
                'description' => 'Ini adalah deskripsi artikel ketiga.'
            ]
        ];

        return view('articles', compact('articles'));
    }

    public function contact()
    {
        return view('contact');
    }
}

