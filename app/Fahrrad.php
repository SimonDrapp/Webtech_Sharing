<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fahrrad extends Model
{
    protected $table = 'fahrrad';
    protected $primaryKey = 'id';
    protected $keyType = 'Integer';
    public $incrementing = true;
    protected $fillable = array('details');
}
