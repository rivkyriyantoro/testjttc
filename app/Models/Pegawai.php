<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    public function jabatan()
    {
        return $this->belongsTo(JabatanPegawai::class);
    }

    public function kontrak()
    {
        return $this->belongsTo(Kontrak::class);
    }
}

