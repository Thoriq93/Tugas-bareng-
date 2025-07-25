@extends('adminlte::page')

@section('title', 'Tambah Film')

@section('content_header')
    <h1>Tambah Film</h1>
@stop

@section('content')
    <form action="{{ route('films.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('film._form', ['submit' => 'Simpan']) 
    </form>
@stop