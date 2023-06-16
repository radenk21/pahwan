<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Kategori;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class AdminJawabanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $kategori = Kategori::where('id', $request->idKategori)->first();

        $pertanyaanIds = Pertanyaan::where('kategori_id', $request->idKategori)->pluck('id');

        // dd($pertanyaanIds);

        $jawabans = Jawaban::with('pertanyaan', 'report_jawaban')->whereIn('pertanyaan_id', $pertanyaanIds)->where('jawaban', 'like', '%' . $request->query('pencarian') . '%')->latest()->simplePaginate(5)->withQueryString();

        return view("admin.jawaban", [
            'kategori' => $kategori,
            'jawabans' => $jawabans,
        ]);
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
    public function show(Jawaban $jawaban)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jawaban $jawaban)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jawaban $jawaban)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jawaban $jawaban)
    {
        Jawaban::destroy($jawaban->id);

        return redirect()->back();
    }
}