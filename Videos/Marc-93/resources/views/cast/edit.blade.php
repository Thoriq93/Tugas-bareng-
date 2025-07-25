@extends('adminlte::page')

@section('title', 'Edit Cast')

@section('content_header')
    <h1>Edit Cast</h1>
@endsection

@section('content')
    <form action="{{ route('cast.update', $cast) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>ID</label>
            <input type="number" name="id" class="form-control" value="{{ $cast->id }}" required>
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $cast->nama }}" required>
        </div>
        <div class="mb-3">
            <label>Umur</label>
            <input type="number" name="umur" class="form-control" value="{{ $cast->umur }}" required>
        </div>
        <div class="mb-3">
            <label>Bio</label>
            <textarea name="bio" class="form-control">{{ $cast->bio }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection