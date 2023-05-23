<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lurah extends Model
{
    protected $table = "lurah";
    protected $primaryKey = "id";
    protected $fillable = [
        'id' ,'nama_kecamatan', 'nama_kelurahan', 'jumlah_rt', 'jumlah_rw'];
}

