<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    //
    protected $fillable = [
        'InformasiPerumahan_id',
        'TanggalPemesanan',
        'StatusPemesanan',
    ];

    public function informasiPerumahan()
    {
        return $this->belongsTo(InformasiPerumahan::class);
    }
}
