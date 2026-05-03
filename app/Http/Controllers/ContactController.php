<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $anggota = [
            [
                'nama' => 'Andika Bayu Pratama',
                'nim' => '24104410005',
                'foto_profil' => 'andika.jpeg',
                'instagram' => 'https://instagram.com/andika_bp',
                'github' => 'https://github.com/andikabp',
                'email' => 'andika.bp@student.ac.id',
                'alamat' => 'Malang, Jawa Timur'
            ],
            [
                'nama' => 'Muchamad Agung Dwi Wijayanto',
                'nim' => '24104410024',
                'foto_profil' => 'agung.jpeg',
                'instagram' => 'https://instagram.com/agung_dwi',
                'github' => 'https://github.com/agungdwi',
                'email' => 'agung.dwi@student.ac.id',
                'alamat' => 'Malang, Jawa Timur'
            ],
            [
                'nama' => 'Agus Alvianto',
                'nim' => '24104410015',
                'foto_profil' => 'agus.jpeg',
                'instagram' => 'https://instagram.com/agus_alvianto',
                'github' => 'https://github.com/agusalvianto',
                'email' => 'agus.alvianto@student.ac.id',
                'alamat' => 'Malang, Jawa Timur'
            ],
            [
                'nama' => 'Muhammad Aziz',
                'nim' => '24104410031',
                'foto_profil' => 'https://mhdaziz.vercel.app/img/avatar.png',
                'instagram' => 'https://instagram.com/mhd_aziz',
                'github' => 'https://github.com/mhdaziz',
                'email' => 'muhammad.aziz@student.ac.id',
                'alamat' => 'Malang, Jawa Timur'
            ]
        ];

        return view('contact', compact('anggota'));
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'subjek' => 'required|string',
            'pesan' => 'required|string'
        ]);
        
        return redirect()->back()->with('success', 'Pesan Anda berhasil dikirim!');
    }
}
