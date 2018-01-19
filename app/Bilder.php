<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bilder extends Model
{
    protected $table = 'bilder';
    protected $primaryKey = 'id';
    protected $keyType = 'Integer';
    public $incrementing = true;
   //protected $fillable = array('name');
}
