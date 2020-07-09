<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPerbandingan extends Model
{
    protected $table = 'data_perbandingan';
    protected $fillable = ['tanggal','positif_harian','i','gap'];
}