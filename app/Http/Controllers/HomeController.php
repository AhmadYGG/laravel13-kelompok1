<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'nama_website' => 'Kelompok 1 Informatika',
            'tagline' => 'Kami Membangun Solusi Digital Yang Bermakna',
            'nama_kelompok' => 'Kelompok 1',
            'semester' => '5 (Lima)'
        ];

        return view('home', $data);
    }
}
