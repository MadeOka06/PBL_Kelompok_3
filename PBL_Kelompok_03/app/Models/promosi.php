<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class promosi extends Model
{
    //
     protected $fillable = [
        'LokasiPerumahan_id',
        'NamaPromosi',
        'Deskripsi',
        'TanggalUpload',
    ];
     public function lokasiPerumahan()
    {
        return $this->belongsTo(LokasiPerumahan::class);
    }
}
