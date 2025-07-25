@extends('adminlte::page')

@section('title', 'Edit Genre')

@section('content_header')
    <h1>Edit Genre</h1>
@stop

@section('content')
    <form action="{{ route('genres.update', $genre) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Genre</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama', $genre->nama) }}" required>
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
@stop