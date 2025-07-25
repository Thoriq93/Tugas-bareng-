@extends('adminlte::page')

@section('title', 'Daftar Film')

@section('content_header')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="fw-bold">🎬 Daftar Film</h1>
    <a href="{{ route('films.create') }}" class="btn btn-primary btn-sm shadow-sm">
        <i class="fas fa-plus-circle"></i> Tambah Film
    </a>
</div>
@stop

@section('content')
@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="card shadow-sm border-0">
    <div class="card-header bg-light d-flex justify-content-between align-items-center">
        <span class="fw-bold text-dark">📋 List Film</span>
        <a href="{{ route('film.ringkasan') }}" class="btn btn-info btn-sm shadow-sm">
            <i class="fas fa-images"></i> Ringkasan & Poster
        </a>
    </div>

    <div class="card-body p-0">
        <table class="table table-striped table-hover table-bordered mb-0 text-center align-middle">
            <thead class="table-secondary">
                <tr>
                    <th>Judul</th>
                    <th>Tahun</th>
                    <th>Genre</th>
                    <th>Video</th>
                    <th width="160px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($films as $film)
                <tr>
                    <td>{{ $film->judul }}</td>
                    <td>{{ $film->tahun }}</td>
                    <td>{{ $film->genre->nama ?? '-' }}</td>
                    <td>
                        @if($film->video_url)
                        <a href="{{ $film->video_url }}" target="_blank">Lihat Video</a>
                        @else
                        -
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('films.edit', $film) }}" class="btn btn-sm btn-edit me-1">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('films.destroy', $film) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin hapus film ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-delete">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center text-muted">Belum ada data film.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if ($films->hasPages())
    <div class="card-footer d-flex justify-content-center">
        <nav class="mt-3">
            <ul class="pagination justify-content-center shadow-sm p-2 rounded-pill bg-white">
                {{-- Tombol Sebelumnya --}}
                @if ($films->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link rounded-pill bg-light border-0 text-muted">←</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link rounded-pill bg-white border-0 text-primary fw-bold" href="{{ $films->previousPageUrl() }}" rel="prev">←</a>
                    </li>
                @endif

                {{-- Tombol Halaman --}}
                @foreach ($films->links()->elements[0] as $page => $url)
                    @if ($page == $films->currentPage())
                        <li class="page-item active">
                            <span class="page-link rounded-pill bg-primary border-0">{{ $page }}</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link rounded-pill bg-white border-0 text-primary fw-bold" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach

                {{-- Tombol Selanjutnya --}}
                @if ($films->hasMorePages())
                    <li class="page-item">
                        <a class="page-link rounded-pill bg-white border-0 text-primary fw-bold" href="{{ $films->nextPageUrl() }}" rel="next">→</a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <span class="page-link rounded-pill bg-light border-0 text-muted">→</span>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
    @endif
</div>

@push('css')
<style>
    .btn-primary {
        background-color: #1d3557;
        border: none;
    }

    .btn-primary:hover {
        background-color: #457b9d;
    }

    .btn-edit {
        background-color: transparent;
        color: #f4a261;
        border: 2px solid #f4a261;
        transition: all 0.2s ease-in-out;
    }

    .btn-edit:hover {
        background-color: #f4a261;
        color: #fff;
    }

    .btn-delete {
        background-color: transparent;
        color: #e63946;
        border: 2px solid #e63946;
        transition: all 0.2s ease-in-out;
    }

    .btn-delete:hover {
        background-color: #e63946;
        color: #fff;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f8f9fa;
    }

    .table-hover tbody tr:hover {
        background-color: #e9ecef;
    }

    h1.fw-bold {
        font-size: 1.8rem;
        color: #1d3557;
    }

    .pagination .page-link {
        padding: 0.5rem 0.9rem;
        font-size: 0.9rem;
        border-radius: 30px;
    }

    .pagination .active .page-link {
        background-color: #1d3557 !important;
        color: #fff !important;
    }

    /* Center all table content */
    .table td, .table th {
        text-align: center;
        vertical-align: middle;
    }
</style>
@endpush
@stop
