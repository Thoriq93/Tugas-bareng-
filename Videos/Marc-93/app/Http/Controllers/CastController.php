<?php

namespace App\Http\Controllers;

use App\models\Cast;
use Illuminate\Http\Request;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
{
    $cast = Cast::all(); // Ambil semua data cast dari database
    return view('cast.index', compact('cast')); // Kirim ke view
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('cast.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'nama' => 'required|max:45',
            'umur' => 'required|integer',
            'bio' => 'nullable',
        ]);

        Cast::create($request->all());
        return redirect()->route('cast.index')->with('success', 'Cast berhasil ditambahkan.');
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
    public function edit(Cast $cast)
    {
        return view('cast.edit', compact('cast'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cast $cast)
{
    $validated = $request->validate([
        
        'nama' => 'required|string|max:255',
        'umur' => 'required|integer',
        'bio'  => 'required|string',
    ]);

    $cast->update($validated);

    return redirect()->route('cast.index')->with('success', 'Data berhasil diupdate!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cast $cast)
    {
        $cast->delete();
        return redirect()->route('cast.index')->with('success', 'Cast berhasil dihapus');
    }
}