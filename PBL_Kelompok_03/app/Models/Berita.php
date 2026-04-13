<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    //
    protected $fillable = [
        'InformasiPerumahan_id',
        'NamaBerita',
        'IsiBerita',
        'TanggalPublikasi',
    ];
    public function informasiPerumahan()
    {
        return $this->belongsTo(InformasiPerumahan::class);
    }
}
