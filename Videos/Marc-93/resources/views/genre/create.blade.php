@extends('adminlte::page')

@section('title', 'Tambah Genre')

@section('content_header')
    <h1>Tambah Genre</h1>
@stop

@section('content')
    <form action="{{ route('genres.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Genre</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <button class="btn btn-primary">Simpan</button>
    </form>
@stop