<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class AdminKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoris = Kategori::get();

        return view('admin.kategori', [
            'kategoris' => $kategoris,
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
        $kategori = $request->validate([
            'kategori' => 'required|max:255|unique:kategoris',
        ]);

        Kategori::create($kategori);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategori)
    {
        $validated = $request->validate([
            'kategori' => 'required|max:255|unique:kategoris',
        ]);

        Kategori::where('id', $kategori->id)->update($validated);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        Kategori::destroy($kategori->id);

        return redirect()->back();
    }
}