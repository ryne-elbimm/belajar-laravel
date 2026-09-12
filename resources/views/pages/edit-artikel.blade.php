@extends('layout.app')
@section('judul-tab', 'Edit Artikel')

@section('artikel')

<div class="container-artikel">

<form action="/artikel/{{ $artikel->id }}" method="POST" class="form-tambah">

    @csrf
    @method('PUT')
    <h1>Edit Artikel</h1>

    <div>
        <label>Judul</label>
        <input type="text" name="judul" value="{{ $artikel->judul }}">
    </div>

    <div>
        <label>Penulis</label>
        <input type="text" name="penulis" value="{{ $artikel->penulis }}">
    </div>

    <div>
        <label>Tanggal Publikasi</label>
        <input type="date" name="tanggal_publikasi" value="{{ $artikel->tanggal_publikasi }}">
    </div>

    <div>
        <label>Kategori</label>
        <input type="text" name="kategori" value="{{ $artikel->kategori }}">
    </div>

    <div>
        <label>Isi Artikel</label>
        <textarea name="isi" rows="8">{{ $artikel->isi }}</textarea>
    </div>

    <div class="tmbl-di-edit">
        <button type="submit">Simpan Perubahan</button>
        <a href="/artikel">Kembali</a>
    </div>

</form>

</div>

@endsection
