<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class AdminUserListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user_list = Pengguna::with('pertanyaan', 'jawaban', 'komentar','report_pertanyaan', 'report_jawaban', 'report_komentar')->where('nama', 'like', '%' . $request->query('pencarian') . '%')->orderBy('id', 'desc')->simplePaginate(10)->withQueryString();
        return view('admin.user-list', compact('user_list'));
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
    public function update(Request $request, $id)
    {
        Pengguna::find($id)->update(['is_ban' => $request->is_ban]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengguna $pengguna)
    {
        Pengguna::destroy($pengguna->id);
        return redirect()->back();
    }
}
