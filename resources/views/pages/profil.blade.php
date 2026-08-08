@extends('layout.app')
@section('judul-tab', 'Halaman Profil')

@section('profil')

<h1>Profil Siswa</h1>

<p>Nama : {{ $data_siswa['nama'] }}</p>
<p>Kelas : {{ $data_siswa['kelas'] }}</p>
<p>Sekolah : {{ $data_siswa['sekolah'] }}</p>
<p>Absen : {{ $data_siswa['no_absen'] }}</p>

<h3>Selamat datang, {{ $nama_pengunjung }}</h3>

@endsection