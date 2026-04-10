<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LokasiPerumahan extends Model
{
    //
    protected $fillable = [
        'namaperumahan',
        'alamat',
        'daerah'
    ];
}
