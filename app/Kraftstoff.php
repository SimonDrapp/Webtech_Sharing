<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kraftstoff extends Model
{
    protected $table = 'kraftstoff';
    protected $primaryKey = 'id';
    protected $keyType = 'Integer';
    public $incrementing = true;
    protected $fillable = array('name');
}
