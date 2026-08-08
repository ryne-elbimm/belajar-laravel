@extends('layout.app')
@section('judul-tab', 'Halaman Profil')

@section('artikel')

@forelse ($data_artikel as $artikel)

<div class="box-artikel">
    <h3>{{ $artikel['judul'] }}</h3>
    <p>
        Nama Penulis: {{ $artikel['penulis'] }}
        <br>
        Kategori: {{ $artikel['kategori'] }}
    </p>
    <p>
        {{ $artikel['isi'] }}
    </p>
    <p>
        <a href="/artikel">Kembali ke Daftar Artikel</a>
    </p>

</div>
@empty
<p>Belum ada artikel yang tersedia.</p>
@endforelse


@endsection 