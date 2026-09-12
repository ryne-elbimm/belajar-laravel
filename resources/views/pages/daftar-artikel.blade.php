@extends('layout.app')
@section('judul-tab', 'Halaman Daftar Artikel')

@section('artikel')

<div class="container-artikel">
    <div class="container-tmbl-tmbh">
        <a href="artikel/tambah" class="tmbl-tmbh-artikel">
            + Tambah Artikel
        </a>
    </div>

    <table class="table-artikel">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Nama Penulis</th>
                <th>Kategori</th>
                <th>Tanggal Publikasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data_artikel as $artikel)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $artikel['judul'] }}</td>
                    <td>{{ $artikel['penulis'] }}</td>
                    <td>{{ $artikel['kategori'] }}</td>
                    <td>{{ $artikel['tanggal_publikasi'] }}</td>
                    <td>
                        <a href="/artikel/{{ $artikel->id }}" class="detail-artikel">
                            Detail
                        </a>
                        <a href="/artikel/{{ $artikel->id }}/edit" class="edit-artikel">
                            Edit
                        </a>
                        <form action="/artikel/{{ $artikel->id }}" method="POST" style="display: inline;" class="hapus-artikel">
                            @csrf
                            @method('DELETE')

                            <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Belum ada artikel</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>  

@endsection