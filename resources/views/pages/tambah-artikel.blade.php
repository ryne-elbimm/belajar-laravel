@extends('layout.app')
@section('judul-tab', 'Halaman Tambah Artikel')

@section('artikel')

    <form action="/artikel" method="POST" class="form-tambah">
        @csrf
        <h1>Tambah Artikel</h1>
        <div>
            <label>Judul Artikel</label> <br>
            <input type="text" name="judul">
        </div>
        <br>
        <div>
            <label>Penulis</label> <br>
            <input type="text" name="penulis">
        </div>
        <br>
        <div> <label>Tanggal Publikasi</label> <br> <input type="date" name="tanggal_publikasi"> </div>
        <br>
        <div> <label>Kategori</label> <br> <input type="text" name="kategori"> </div>
        <br>
        <div> <label>Isi Artikel</label> <br> <textarea name="isi" rows="8"></textarea> </div>
        <br>
        <button type="submit">Kirim Artikel</button>
        <a href="/artikel">Kembali</a>
    </form>

@endsection