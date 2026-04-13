<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class brosur extends Model
{
    //
     protected $fillable = [
        'InformasiPerumahan_id',
        'NamaBrosur',
        'FormatFile',
        'TanggalUpload',
    ];

    public function informasiPerumahan()
    {
        return $this->belongsTo(InformasiPerumahan::class);
    }
}
