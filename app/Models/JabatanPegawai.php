<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JabatanPegawai extends Model
{
    public function pegawais()
    {
        return $this->hasMany(Pegawai::class);
    }
}

