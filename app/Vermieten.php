<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vermieten extends Model
{
    protected $table = 'Vermieten';
    protected $primaryKey = 'id';
    protected $keyType = 'Integer';
    public $incrementing = true;
    protected $fillable = array('preis', 'von', 'bis');


}