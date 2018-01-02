<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bilder extends Model
{
    protected $table = 'Bilder';
    protected $primaryKey = 'id';
    protected $keyType = 'Integer';
    public $incrementing = true;
   //protected $fillable = array('name');
}
