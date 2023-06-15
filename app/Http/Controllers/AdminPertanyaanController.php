<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class AdminPertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $kategori = Kategori::where('id', $request->idKategori)->first();

        $pertanyaans = Pertanyaan::with('jawaban', 'report_pertanyaan')->where('kategori_id', $request->idKategori)->where('pertanyaan', 'like', '%' . $request->query('pencarian') . '%')->latest()->simplePaginate(5)->withQueryString();

        return view('admin.pertanyaan', [
            'kategori'    => $kategori,
            'pertanyaans' => $pertanyaans,
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
    public function show(Pertanyaan $pertanyaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pertanyaan $pertanyaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pertanyaan $pertanyaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pertanyaan $pertanyaan)
    {
        Pertanyaan::destroy($pertanyaan->id);

        return redirect()->back();
    }
}