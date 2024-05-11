<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class AdminJabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.jabatan.index', [
            "title" => "Jabatan",
            "jabatans" => Jabatan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.jabatan.create', [
            'title' => 'Jabatan Baru',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255|unique:jabatans',
        ]);

        Jabatan::create($validatedData);

        return redirect('/dashboard/jabatan')->with('success', 'Jabatan Baru Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function show(Jabatan $jabatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Jabatan $jabatan)
    {
        return view('dashboard.jabatan.edit',[
            'title' => 'Edit Jabatan',
            'jabatan' => $jabatan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jabatan $jabatan)
    {
        $rules = [
            'nama' => 'required|max:255'
        ];

        if($request->nama != $jabatan->nama){
            $rules['nama'] = 'required|max:255|unique:jabatans';
        }

        $validatedData = $request->validate($rules);

        Jabatan::where('id', $jabatan->id)
                        ->update($validatedData);

        return redirect('/dashboard/jabatan')->with('success', 'Nama Jabatan Telah Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jabatan $jabatan)
    {
        Jabatan::destroy($jabatan->id);

        return redirect('/dashboard/jabatan')->with('success', 'Jabatan Telah Dihapus!');
    }
}
