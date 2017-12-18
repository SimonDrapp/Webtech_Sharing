<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AModell extends Model
{
    protected $table = 'AModell';
    protected $primaryKey = 'id';
    protected $keyType = 'Integer';
    public $incrementing = true;
    protected $fillable = array('aModellname');

}
