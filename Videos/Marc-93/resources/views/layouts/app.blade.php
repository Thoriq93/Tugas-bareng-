@extends('adminlte::page')

@section('title', 'Daftar Genre')

@section('content_header')
    <h1>Daftar Genre</h1>
@stop

@section('content')
    <a href="{{ route('genres.create') }}" class="btn btn-primary mb-3">Tambah Genre</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($genres as $genre)
                <tr>
                    <td>{{ $genre->nama }}</td>
                    <td>
                        <a href="{{ route('genres.edit', $genre) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('genres.destroy', $genre) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop