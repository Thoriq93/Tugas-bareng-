@extends('adminlte::page')

@section('title', 'Tambah Cast')

@section('content_header')
    <h1 class="text-center mb-4">Tambah Cast</h1>
@stop

@section('content')
    <style>
        .card-form {
            max-inline-size: 700px;
            margin: auto;
            background: linear-gradient(135deg, #e3efff, #fdfbff);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            border: 1px solid #cfd8dc;
        }

        .card-form h2 {
            text-align: center;
            margin-block-end: 25px;
            font-weight: 700;
            color: #343a40;
        }

        .form-group label {
            font-weight: 600;
            color: #495057;
        }

        .form-control {
            border-radius: 6px;
            padding: 8px 12px;
            font-size: 14px;
            border: 1px solid #ced4da;
        }

        .form-control:focus {
            border-color: #4e73df;
            box-shadow: 0 0 0 0.15rem rgba(78, 115, 223, 0.25);
        }

        .btn-group {
            display: flex;
            justify-content: space-between;
        }

        .btn-primary {
            background-color: #4e73df;
            border-color: #4e73df;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
    </style>

    <div class="card-form">
        <h2>Formulir Cast Baru</h2>
        <form action="{{ url('/cast') }}" method="POST">
            @csrf

            <div class="form-group mb-3">
                <label for="id">ID</label>
                <input type="text" class="form-control" name="id" required>
            </div>

            <div class="form-group mb-3">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" required>
            </div>

            <div class="form-group mb-3">
                <label for="umur">Umur</label>
                <input type="text" class="form-control" name="umur" required>
            </div>

            <div class="form-group mb-4">
                <label for="bio">Bio</label>
                <textarea class="form-control" name="bio" rows="4"></textarea>
            </div>

            <div class="btn-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ url('/cast') }}" class="btn btn-secondary">Balik dei</a>
            </div>
        </form>
    </div>
@stop
