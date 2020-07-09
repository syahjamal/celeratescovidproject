<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataModel extends Model
{
    protected $table = 'data_model';
    protected $fillable = ['hari','s','i','r','d'];
}
