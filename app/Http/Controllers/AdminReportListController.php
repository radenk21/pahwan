<?php

namespace App\Http\Controllers;

use App\Models\Report_Jawaban;
use App\Models\Report_Komentar;
use App\Models\Report_Pertanyaan;
use Illuminate\Http\Request;

class AdminReportListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $report_pertanyaans = Report_Pertanyaan::with('pertanyaan', 'pengguna')
            ->whereHas('pertanyaan', function ($query) use ($request) {
                $query->where('pertanyaan', 'like', '%' . $request->query('pencarianPertanyaan') . '%');
            })
            ->orWhereHas('pengguna', function ($query) use ($request) {
                $query->where('nama', 'like', '%' . $request->query('pencarianPertanyaan') . '%');
            })
            ->orderBy('id', 'desc')->simplePaginate(5, ['*'], 'pertanyaan')->withQueryString();

        $report_jawabans = Report_Jawaban::with('jawaban', 'pengguna')
            ->whereHas('jawaban', function ($query) use ($request) {
                $query->where('jawaban', 'like', '%' . $request->query('pencarianJawaban') . '%');
            })
            ->orWhereHas('pengguna', function ($query) use ($request) {
                $query->where('nama', 'like', '%' . $request->query('pencarianJawaban') . '%');
            })
            ->orderBy('id', 'desc')->simplePaginate(5, ['*'], 'jawaban')->withQueryString();

        $report_komentars = Report_Komentar::with('komentar', 'pengguna')
            ->whereHas('komentar', function ($query) use ($request) {
                $query->where('komentar', 'like', '%' . $request->query('pencarianKomentar') . '%');
            })
            ->orWhereHas('pengguna', function ($query) use ($request) {
                $query->where('nama', 'like', '%' . $request->query('pencarianKomentar') . '%');
            })
            ->orderBy('id', 'desc')->simplePaginate(5, ['*'], 'komentar')->withQueryString();

        return view('admin.report-list', compact('report_pertanyaans', 'report_jawabans', 'report_komentars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyPertanyaan(Report_Pertanyaan $report_pertanyaan)
    {
        Report_Pertanyaan::destroy($report_pertanyaan->id);
        return redirect()->back();
    }
    public function destroyJawaban(Report_Jawaban $report_jawaban)
    {
        Report_Jawaban::destroy($report_jawaban->id);
        return redirect()->back();
    }
    public function destroyKomentar(Report_Komentar $report_komentar)
    {
        Report_Komentar::destroy($report_komentar->id);
        return redirect()->back();
    }
}
