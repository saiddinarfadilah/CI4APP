<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        /*.. karena return hanya bisa memangil satu fungsi maka diganti menggunakan echo
        return view(''); ..*/

        // membuat title dinamis menggunakan array
        $data = [
            'title' => 'Home | SDF',
            'tes' => ['satu', 'dua', 'tiga']
        ];

        // echo view('layout/header', $data);
        // echo view('pages/home');
        // echo view('layout/footer');
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About | SDF'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact | SDF',
            'alamat' =>
            [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Tubagus Ismail',
                    'kota' => 'Bandung'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. Tubagus Ismail',
                    'kota' => 'Bandung'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
