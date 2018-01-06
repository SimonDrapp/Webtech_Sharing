<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ort extends Model
{
    protected $table = 'ort';
    protected $primaryKey = 'id';
    protected $keyType = 'Integer';
    public $incrementing = true;
    protected $fillable = array('name');
}
