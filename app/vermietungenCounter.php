<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vermietungenCounter extends Model
{
    protected $table = 'vermietungenCounter';
    protected $primaryKey = 'id';
    protected $keyType = 'Integer';
    public $incrementing = true;
    protected $fillable = array('view');
}
