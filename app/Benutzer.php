<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Benutzer extends Model
{
    protected $table = 'benutzer';
    protected $primaryKey = 'id';
    protected $keyType = 'Integer';
    public $incrementing = true;
    protected $fillable = array('name', 'vorname', 'email', 'telefonnummer', 'passwort');
}
