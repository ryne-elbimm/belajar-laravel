@extends('layout.app')
@section('judul-tab', 'Detail Artikel')

@section('artikel')

<div class="container-detail-artikel">

    <h3>{{ $data_artikel->judul }}</h3>

    <p>
        Nama Penulis: {{ $data_artikel->penulis }}
        <br>
        Kategori: {{ $data_artikel->kategori }}
        <br>
        Tanggal Publikasi: {{ $data_artikel->tanggal_publikasi }}
    </p>

    <hr>

    <p>
        {{ $data_artikel->isi }}
    </p>

    <hr>

    <h3>Tambah Komentar</h3>

    <form action="/artikel/{{ $data_artikel->id }}/komentar" method="POST">

        @csrf

        <div>
            <label>Nama</label>
            <input type="text" name="nama" required>
        </div>

        <div>
            <label>Komentar</label>
            <textarea name="komentar" required></textarea>
        </div>

        <button type="submit">
            Kirim Komentar
        </button>

    </form>

    <hr>

    <h3>Komentar</h3>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @forelse($data_artikel->komentars as $komentar)

        <div class="komentar">
            <strong>{{ $komentar->nama }}</strong>

            <p>
                {{ $komentar->komentar }}
            </p>
            <small>
                {{ $komentar->created_at->format('d M Y H:i') }}
            </small>

            <form action="/komentar/{{ $komentar->id }}" method="POST" class="hapus-komentar">
                @csrf
                @method('DELETE')

                <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus komentar ini?')">
                    Hapus
                </button>
            </form>
        </div>

    @empty

        <p>Belum ada komentar.</p>

    @endforelse

    <p class="kembali-detail">
        <a href="/artikel">Kembali</a>
    </p>


</div>

@endsection