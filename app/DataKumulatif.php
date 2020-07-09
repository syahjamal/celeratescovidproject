<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataKumulatif extends Model
{
    protected $table = 'datakumulatif';
    protected $fillable = ['tanggal','positif_kumulatif','sembuh_kumulatif','mati_kumulatif'];
}
