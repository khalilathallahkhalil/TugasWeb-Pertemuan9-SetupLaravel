<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $skills = ['Laravel', 'PHP', 'Tailwind CSS'];
        return view('home', compact('skills'));
    }

    public function about()
    {
        $info = [
            'nama' => 'Khalil athallah',
            'kelas' => 'PSIK 25C'
        ];
        return view('about', compact('info'));
    }

    public function contact()
    {
        $kontak = [
            'email' => 'adalah pokoknya@gmail.com',
            'phone' => '08rahasia'
        ];
        return view('contact', compact('kontak'));
    }
}