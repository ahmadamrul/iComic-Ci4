<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | iComics'
        ];
        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About | iComics',
            'tes' => ['1', '2', '3']
        ];
        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact | iComics',
            'about' => [
                [
                    'instagram' => '@ahmad.amrul',
                    'github' => 'https://github.com/ahmadamrul',
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
