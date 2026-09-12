<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Komentar;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{

    // menampilkan daftar artikel
    
    public function index() 
    {
        $data_artikel = Artikel::all();
        return view('pages.daftar-artikel', [
            'data_artikel' => $data_artikel
        ]);
    }

    //Create
    public function create() 
    {
        return view('pages.tambah-artikel');
    }

    //Read
    public function show($id)
    {
        $artikel = Artikel::with('komentars')->findOrFail($id);

        return view('pages.detail-artikel', [
            'data_artikel' => $artikel,
        ]);
    }
    

    //Update & Edit
    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);

        return view('pages.edit-artikel', [
            'artikel' => $artikel
        ]);
    }

    public function update(Request $request, $id) 
    {
        $artikel = Artikel::find($id);

        $artikel->judul = $request->judul;
        $artikel->penulis = $request->penulis;
        $artikel->tanggal_publikasi = $request->tanggal_publikasi;
        $artikel->kategori = $request->kategori;
        $artikel->isi = $request->isi;

        $artikel->save();


        return redirect('/artikel');
    }

    //Delete
    public function destroy($id) 
    {
        $artikel = Artikel::findOrFail($id);
        $artikel->delete();

        return redirect('artikel')
            ->with('success', 'Artikel berhasil dihapus.');
    }
    
    //Store
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //    'judul' => 'required|min:5|max:255',
        //    'penulis' => 'required',
        //    'tanggal_publikasi' => 'required|date',
        //    'kategori' => 'required',
        //    'isi' => 'required'
        // ]);

        // Artikel::create($validatedData);

        // return redirect('/artikel')->with('success', 'Artikel berhasil ditambahkan!');
        Artikel::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tanggal_publikasi' => $request->tanggal_publikasi,
            'kategori' => $request->kategori,
            'isi' => $request->isi
        ]);

        return redirect('/artikel');
    }

    // Komentar
    public function kirimKomentar(Request $request, $id)
    {
        $artikel = Artikel::findOrFail($id);

        Komentar::create([
            'artikel_id' => $artikel->id,
            'nama' => $request->nama,
            'komentar' => $request->komentar,
        ]);

        return redirect('/artikel/' . $id)
            ->with('success', 'Komentar berhasil ditambahkan.');
    }

    public function destroyKomentar($id)
    {
        $komentar = Komentar::findOrFail($id);
        $artikel_id = $komentar->artikel_id;

        $komentar->delete();

        return redirect('/artikel/' . $artikel_id)
            ->with('success', 'Komentar berhasil dihapus.');
    }

}