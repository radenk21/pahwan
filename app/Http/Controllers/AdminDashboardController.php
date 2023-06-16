<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $pengguna = Pengguna::get();
        
        $pertanyaan = Pertanyaan::get();
        return view('admin.index');
    }
}
