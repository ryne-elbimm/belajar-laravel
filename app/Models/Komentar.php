<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $fillable = [
        'artikel_id',
        'nama',
        'komentar',
    ];

    public function artikel()
    {
        return $this->belongsTo(Artikel::class);
    }
}
