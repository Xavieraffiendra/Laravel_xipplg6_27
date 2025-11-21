<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ekskul;

class EkskulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ekskul = Ekskul::all();
        return view('admin.ekskul.index_ekskul', compact('ekskul'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ekskul.create_ekskul');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            $request->validate([
                'nama_ekskul' => 'required',
                'pembina' => 'required',
                'hari' => 'required',
                'jam' => 'required', 
                'keterangan' => 'required',
            ]);
    
            Ekskul::create($request->all());
            return redirect()->route('admin.ekskul.index')->with('success', 'Data berhasil disimpan!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Ekskul $ekskul)
    {
        return view('admin.ekskul.show_ekskul', compact('ekskul'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ekskul $ekskul)
    {
        return view('admin.ekskul.edit_ekskul', compact('ekskul'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ekskul $ekskul)
    {
        $validated = $request->validate([
            'nama_ekskul' => 'required',
            'pembina' => 'required',
            'hari' => 'required',
            'jam' => 'required',
            'keterangan' => 'required',
        ]);
    
        $ekskul->update($validated);
        return redirect()->route('admin.ekskul.index')->with('success', 'Data siswa berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ekskul $ekskul)
    {
        $ekskul->delete();
        return redirect()->route('admin.ekskul.index')->with('success, Data ekskul berhasil dihapus');
    }
}
