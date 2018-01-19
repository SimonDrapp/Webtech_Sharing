<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mieten extends Model
{
    protected $table = 'mieten';
    protected $primaryKey = 'id';
    protected $keyType = 'Integer';
    public $incrementing = true;
    protected $fillable = array('von', 'bis');

}
