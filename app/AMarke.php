<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AMarke extends Model
{
    protected $table = 'amarke';
    protected $primaryKey = 'id';
    protected $keyType = 'Integer';
    public $incrementing = true;
    protected $fillable = array('name');
}
