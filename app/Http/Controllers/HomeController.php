<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::get();
        $jawabans = Jawaban::with('pertanyaan', 'pengguna', 'gambar_jawaban', 'arsip', 'komentar', 'like', 'report_jawaban')->get();

        return view('index', [
            'kategoris' => $kategoris,
            'jawabans'  => $jawabans
        ]);
    }
}