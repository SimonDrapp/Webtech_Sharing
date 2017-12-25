<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FModell extends Model
{
    protected $table = 'fmodell';
    protected $primaryKey = 'id';
    protected $keyType = 'Integer';
    public $incrementing = true;
    protected $fillable = array('name');
}
