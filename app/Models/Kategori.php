<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategoris';

    public function informasis()
    {
        return $this->hasMany(Informasi::class, 'kategori_id');
    }
}