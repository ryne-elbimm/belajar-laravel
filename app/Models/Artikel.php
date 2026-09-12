<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Komentar;

class Artikel extends Model
{
    protected $fillable = [
        'judul',
        'penulis',
        'tanggal_publikasi',
        'kategori',
        'isi',
    ];

    public function komentars()
    {
        return $this->hasMany(Komentar::class);
    }
}
