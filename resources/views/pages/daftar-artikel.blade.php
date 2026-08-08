@extends('layout.app')
@section('judul-tab', 'Halaman Daftar Artikel')

@section('artikel')

@forelse ($data_artikel as $artikel)

<div class="box-artikel">
    <h4>{{ $artikel['judul'] }}</h4>
    <p>
        Nama Penulis: {{ $artikel['penulis'] }}
        <br>
        Kategori: {{ $artikel['kategori'] }}
        <br>
        Tanggal Publikasi: {{ $artikel['tanggal_publikasi'] }}
    </p>
    <p>
        <a href="/artikel/{{ $artikel['id'] }}">Baca Selengkapnya</a>
    </p>

</div>

@empty
<p>Belum ada artikel yang tersedia.</p>
@endforelse

@endsection