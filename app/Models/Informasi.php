<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    protected $table = 'informasis';

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}