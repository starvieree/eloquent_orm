<?php

namespace App\Http\Controllers;

use App\Models\BibliografiKategori;
use Illuminate\Http\Request;

class BibliografiKategoriController extends Controller
{
    public function Store(Request $request) {
        $bibliografiKategori = new BibliografiKategori;
        $bibliografiKategori->deskripsi = 'Bibliografi Selektif';
        if ($bibliografiKategori->save()) {
            return 'Data Bibliografi Kategori Tersimpan';
        }
    }

    public function Display() {
        $bibliografiKategori = BibliografiKategori::all();

        foreach ($bibliografiKategori as $data) {
            echo $data->deskripsi . "<br>";
        }
    }

    public function Edit($id, $deskripsi) {
        $bibliografiKategori = BibliografiKategori::find($id);
        $bibliografiKategori->deskripsi = $deskripsi;
        $bibliografiKategori->save();

        return 'Data urutan ' . $bibliografiKategori->id . " telah diganti dengan " . $bibliografiKategori->deskripsi;
    }

    public function Delete($id) {
        $bibliografiKategori = BibliografiKategori::find($id);
        $bibliografiKategori->delete();

        return 'Data urutan ' . $id . " telah dihapus";
    }
}
