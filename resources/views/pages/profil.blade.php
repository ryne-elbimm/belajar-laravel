@extends('layout.app')
@section('judul-tab', 'Halaman Profil')

@section('profil')

<h1>Profil Siswa</h1>

<p>Nama : {{ $nama }}</p>
<p>Kelas : {{ $kelas }}</p>
<p>Sekolah : {{ $sekolah }}</p>
<p>Absen : {{ $no_absen }}</p>

@endsection