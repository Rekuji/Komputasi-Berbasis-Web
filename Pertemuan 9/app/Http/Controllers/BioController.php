<?php   

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BioController extends Controller
{
    public function index()
    {
        return "Halo, Selamat datang di tutorial belajar laravel www.malasngoding.com";
    }

    public function halo($nama)
    {
        return "HAAAAAI $nama";
    }

    public function panggil($nama, $panjang)
    {
        return "HAAAAAI $nama $panjang";
    }
}
