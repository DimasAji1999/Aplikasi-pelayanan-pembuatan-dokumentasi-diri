<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_pengajuan extends Model
{
    protected $table = 'm_pengajuan';

    public function kategori_r(){
        return $this->belongsTo('App\Models\M_layanan','kategori','id');
    }
}
