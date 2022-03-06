<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        echo 'Selamat Datang';
    }

    public function about()
    {
        echo "NIM   : 2041720019";
        echo "Nama  : KRISMAWATI ";
        echo "Kelas : TI-2D";
    }

    public function articles($id)
    {
        return 'HALAMAN INI MERUPAKAN HALAMAN DENGAN ID : ' . $id;
    }
}
