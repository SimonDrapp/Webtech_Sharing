<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farbe extends Model
{
    protected $table = 'farbe';
    protected $primaryKey = 'id';
    protected $keyType = 'Integer';
    public $incrementing = true;
    protected $fillable = array('name');
}
