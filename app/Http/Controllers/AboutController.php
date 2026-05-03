<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $anggota = [
            [
                'nama' => 'Andika Bayu Pratama',
                'nim' => '24104410005',
                'peran' => 'Membuat halaman About',
                'foto_profil' => 'andika.jpeg', 
                'deskripsi' => 'Bertanggung jawab dalam pembuatan dan pengembangan halaman About'
            ],
            [
                'nama' => 'Muchamad Agung Dwi Wijayanto',
                'nim' => '24104410024',
                'peran' => 'Membuat halaman Contact',
                'foto_profil' => 'agung.jpeg',
                'deskripsi' => 'Bertanggung jawab dalam pembuatan dan pengembangan halaman Contact'
            ],
            [
                'nama' => 'Agus Alvianto',
                'nim' => '24104410015',
                'peran' => 'Membuat halaman Home',
                'foto_profil' => 'agus.jpeg',
                'deskripsi' => 'Bertanggung jawab dalam pembuatan dan pengembangan halaman Home'
            ],
            [
                'nama' => 'Muhammad Aziz',
                'nim' => '24104410031',
                'peran' => 'Membuat halaman Blog',
                'foto_profil' => 'https://mhdaziz.vercel.app/img/avatar.png', 
                'deskripsi' => 'Bertanggung jawab dalam pembuatan dan pengembangan halaman Blog'
            ]
        ];

        return view('about', compact('anggota'));
    }
}
