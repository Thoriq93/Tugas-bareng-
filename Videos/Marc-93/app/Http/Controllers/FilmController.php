<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Genre;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::with('genre')->paginate(3);
        return view('film.index', compact('films'));
    }

    public function create()
    {
        $genres = Genre::all();
        $film = new Film(); 
        return view('film.create', compact('genres'));
    }

    public function store(Request $request)
    {
         $validated = $request->validate([
        'judul' => 'required|string|max:255',
        'ringkasan' => 'required|string',
        'tahun' => 'required|integer',
        'poster' => 'nullable|file|mimes:jpeg,png,jpg,gif,pdf|max:20480', // Maksimal 20MB
        'genre_id' => 'required|exists:genres,id',
        'video_url' => 'nullable|url', 
    ]);

    if ($request->hasFile('poster')) {
        $validated['poster'] = $request->file('poster')->store('posters', 'public');
    }

    Film::create($validated);

    return redirect()->route('films.index')->with('success', 'Film berhasil ditambahkan!');
    }

    public function edit(Film $film)
    {
        $genres = Genre::all();
        return view('film.edit', compact('film', 'genres'));
    }

    public function update(Request $request, Film $film)
    {
      $data = $request->validate([
        'judul' => 'required|string',
        'ringkasan' => 'required|string',
        'tahun' => 'required|integer',
        'poster' => 'nullable|file|mimes:jpeg,png,jpg,gif,pdf|max:20480',
        'genre_id' => 'required|exists:genres,id',
        'video_url' => 'nullable|url', 
    ]);

        if ($request->hasFile('poster')) {
            $data['poster'] = $request->file('poster')->store('posters', 'public');
        }

        $film->update($data);

        return redirect()->route('films.index')->with('success', 'Film berhasil diupdate.');
    }

    public function destroy(Film $film)
    {
        $film->delete();
        return redirect()->route('films.index')->with('success', 'Film berhasil dihapus.');
    }

  public function ringkasan()
{
    $films = Film::paginate(3); // Batasi jumlah per halaman
    return view('film.ringkasan', compact('films'));
}



}