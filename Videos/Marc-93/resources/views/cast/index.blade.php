@extends('adminlte::page')

@section('title', 'Daftar Cast')

@section('content_header')
    <h1 class="text-center mb-4">Daftar Cast</h1>
@endsection

@section('content')
    <style>
        .btn-primary {
            background-color: #4e73df;
            border-color: #4e73df;
        }

        .table-custom {
            background-color: #f8f9fc;
            font-size: 14px;
            border-collapse: collapse;
            inline-size: 100%;
            border-radius: 8px;
            overflow: hidden;
        }

        .table-custom thead {
            background-color: #4e73df;
            color: white;
        }

        .table-custom th, .table-custom td {
            padding: 10px 12px;
            border: 1px solid #dee2e6;
        }

        .table-custom tbody tr:nth-child(even) {
            background-color: #eef1f8;
        }

        .table-custom tbody tr:hover {
            background-color: #dde3f0;
        }

        .action-buttons a,
        .action-buttons form {
            display: inline-block;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            padding: 10px 15px;
            border-radius: 6px;
        }
    </style>

    <a href="{{ route('cast.create') }}" class="btn btn-primary mb-3">Tambah Cast</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table-custom">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Bio</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cast as $cast)
                <tr>
                    <td>{{ $cast->id }}</td>
                    <td>{{ $cast->nama }}</td>
                    <td>{{ $cast->umur }}</td>
                    <td>{{ $cast->bio }}</td>
                    <td class="action-buttons">
                        <a href="{{ route('cast.edit', $cast) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('cast.destroy', $cast) }}" method="POST" onsubmit="return confirm('Yakin?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
