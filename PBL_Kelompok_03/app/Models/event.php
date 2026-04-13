<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    //
    protected $fillable = [
        'InformasiPerumahan_id',
        'NamaEvent',
        'Deskripsi',
        'TanggalEvent',
        'LokasiEvent',
    ];

    public function informasiPerumahan()
    {
        return $this->belongsTo(InformasiPerumahan::class);
    }
}
