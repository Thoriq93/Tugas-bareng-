@csrf
<div class="container mt-5">
    <div class="card shadow rounded">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">{{ $submit ?? 'Form Film' }}</h5>
        </div>
        <div class="card-body">
            @csrf

            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control"
                    value="{{ old('judul', $film->judul ?? '') }}" required>
            </div>

            <div class="mb-3">
                <label for="ringkasan" class="form-label">Ringkasan</label>
                <input type="text" name="ringkasan" id="ringkasan" class="form-control"
                    value="{{ old('ringkasan', $film->ringkasan ?? '') }}" required>
            </div>

            <div class="mb-3">
                <label for="tahun" class="form-label">Tahun</label>
                <input type="number" name="tahun" id="tahun" class="form-control"
                    value="{{ old('tahun', $film->tahun ?? '') }}" required>
            </div>

            <div class="mb-3">
                <label for="genre_id" class="form-label">Genre</label>
                <select name="genre_id" class="form-control" required>
                    <option value="">-- Pilih Genre --</option>
                    @foreach($genres as $genre)
                        <option value="{{ $genre->id }}"
                            {{ old('genre_id', $film->genre_id ?? '') == $genre->id ? 'selected' : '' }}>
                            {{ $genre->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="poster" class="form-label">Poster</label>
                <input type="file" name="poster" id="poster" class="form-control">
                @if (!empty($film->poster))
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $film->poster) }}" alt="Poster" width="120" class="img-thumbnail">
                    </div>
                @endif
            </div>
             <div class="mb-3">
           <label for="video_url" class="form-label">URL Video</label>
           <input type="url" class="form-control" id="video_url" name="video_url" value="{{ old('video_url', $film->video_url ?? '') }}">
             </div>
            <div class="mb-3 text-end">
                <button type="submit" class="btn btn-success px-4">{{ $submit ?? 'Submit' }}</button>
                <a href="{{ url('/films') }}" class="btn btn-secondary">Kembali</a>
            </div>
        
        </div>
    </div>
</div>
