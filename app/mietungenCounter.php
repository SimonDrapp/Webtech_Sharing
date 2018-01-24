<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mietungenCounter extends Model
{
    protected $table = 'mietungenCounter';
    protected $primaryKey = 'id';
    protected $keyType = 'Integer';
    public $incrementing = true;
    protected $fillable = array('view');
}
