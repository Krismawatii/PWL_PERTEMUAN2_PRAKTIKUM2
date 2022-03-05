<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }

    public function about()
    {
        $html = '
            <!DOCTYPE html>
            <html lang="en">
            <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>About</title>
            </head>
            <body>
                <thead>
                <tr>
                    <td>NIM</td>
                    <td>Nama</td>
                    <td>Kelas</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>2041720019</td>
                    <td>KRISMAWATI</td>
                    <td>TI-2D</td>
                </tr>
                </tbody>
            </body>
            </html>
        ';
        return $html;
    }

    public function articles($id)
    {
        return 'ID anda : ' . $id;
    }
}

