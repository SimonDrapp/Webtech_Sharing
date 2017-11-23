<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baujahr extends Model
{
    protected $table = 'baujahr';
    protected $primaryKey = 'id';
    protected $keyType = 'Integer';
    public $incrementing = true;
    public $fillable = array('jahr');
}
