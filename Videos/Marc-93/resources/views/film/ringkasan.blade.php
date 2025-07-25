@extends('film.index')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title m-0">Ringkasan & Poster Film</h3>
        <a href="{{ route('films.index') }}" class="btn btn-secondary btn-sm">Kembali ke Daftar Film</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover">
            <thead class="table-light">
                <tr>
                    <th>Ringkasan</th>
                    <th>Poster</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($films as $film)
                <tr>
                    <td>{{ $film->ringkasan }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $film->poster) }}" alt="Poster" width="100" class="img-thumbnail poster-hover">
                    </td>
                    <td>
                        <a href="{{ route('films.edit', $film->id) }}" class="btn btn-sm btn-edit mb-1">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('films.destroy', $film->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin hapus film ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-delete">
                                <i class="fas fa-trash-alt"></i> Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

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

@push('css')
<style>
    .poster-hover {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
    }

    .poster-hover:hover {
        transform: translateY(-5px) scale(1.1);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .btn-edit {
        background-color: transparent;
        color: #f4a261;
        border: 2px solid #f4a261;
        transition: all 0.2s ease-in-out;
        font-weight: 500;
    }

    .btn-edit:hover {
        background-color: #f4a261;
        color: white;
    }

    .btn-delete {
        background-color: transparent;
        color: #e63946;
        border: 2px solid #e63946;
        transition: all 0.2s ease-in-out;
        font-weight: 500;
    }

    .btn-delete:hover {
        background-color: #e63946;
        color: white;
    }
</style>
@endpush
@stop
