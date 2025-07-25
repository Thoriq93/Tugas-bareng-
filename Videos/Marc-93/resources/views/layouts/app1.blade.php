@extends('adminlte::page')

@section('title', 'Daftar Film')

@section('content_header')
    <h1>Daftar Film</h1>
@stop

@section('content')
    <a href="{{ route('films.create') }}" class="btn btn-primary mb-3">Tambah Film</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Ringkasan</th>
                <th>Tahun</th>
                <th>Poster</th>
                <th>Genre</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($film as $film)
                <tr>
                    <td>{{ $film->judul }}</td>
                    <td>{{ $film->ringkasan }}</td>
                    <td>{{ $film->tahun }}</td>
                    <td>
                        @if ($film->poster)
                            <img src="{{ asset('storage/' . $film->poster) }}" width="60">
                        @else
                            Tidak ada
                        @endif
                    </td>
                    <td>{{ $film->genre->nama ?? '-' }}</td>
                    <td>
                        <a href="{{ route('films.edit', $film) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('films.destroy', $film) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Yakin ingin hapus film ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
   <div class="d-flex justify-content-center mt-3">
    <nav aria-label="Page navigation">
        <ul class="pagination">
            @if ($films->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link">&laquo; Previous</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $films->previousPageUrl() }}" rel="prev">&laquo; Previous</a>
                </li>
            @endif

            @foreach ($films->getUrlRange(1, $films->lastPage()) as $page => $url)
                <li class="page-item {{ $page == $films->currentPage() ? 'active' : '' }}">
                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                </li>
            @endforeach

            @if ($films->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $films->nextPageUrl() }}" rel="next">Next &raquo;</a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link">Next &raquo;</span>
                </li>
            @endif
        </ul>
    </nav>
</div>
@stop