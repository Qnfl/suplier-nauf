<?php
// Ini adalah komentar yang menjelaskan kelas HomeController

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Pastikan ini ada

class HomeController extends Controller
{
    public function index()
    {
        return view('home'); // Pastikan nama file Blade sesuai
    }
}
