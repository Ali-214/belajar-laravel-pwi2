<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $dataMahasiswa = [
            'Muhamad Nuriza Ali',
            'Sendy Prayogo',
            'Rizky Pratama',
            'Nadia Putri'
        ];

        return view('pages.mahasiswa', [
            'mahasiswa' => $dataMahasiswa,
        ]);
    }
}