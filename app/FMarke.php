<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FMarke extends Model
{
    protected $table = 'fmarke';
    protected $primaryKey = 'id';
    protected $keyType = 'Integer';
    public $incrementing = true;
    protected $fillable = array('name');
}
