<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataHarian extends Model
{
    protected $table = 'dataharian';
    protected $fillable = ['tanggal','positif_harian','sembuh_harian','mati_harian'];
}
