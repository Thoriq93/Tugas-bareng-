@extends('adminlte::page')

@section('title', 'Edit Film')

@section('content_header')
    <h1>Edit Film</h1>
@stop

@section('content')
    <form action="{{ route('films.update', $film) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('film._form', ['submit' => 'Update', 'film' => $film, 'genres' => $genres])
    </form>
@stop