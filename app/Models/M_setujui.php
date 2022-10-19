<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_setujui extends Model
{
    protected $table = 'setujui';

    public function layanan_r(){
        return $this->belongsTo('App\Models\M_layanan','layanan');
    }
    public function user_r(){
        return $this->belongsTo('App\Models\User','user');
    }
}
