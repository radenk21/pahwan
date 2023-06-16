<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\Pertanyaan;
use App\Models\Report_Jawaban;
use App\Models\Report_Pertanyaan;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $pertanyaan = Pertanyaan::get()->count();
        $pengguna_list = Pengguna::get()->count();
        $report_list = Report_Jawaban::get()->count() + Report_Pertanyaan::get()->count() + Report_Pertanyaan::get()->count();
        $status = [
            'Pertanyaan' => $pertanyaan, 
            'Pengguna' => $pengguna_list, 
            'Report' => $report_list,
        ];
        return view('admin.index', compact('status'));
    }
}
