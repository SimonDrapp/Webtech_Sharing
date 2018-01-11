<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class autovermietung extends Model
{
    protected $table = 'autovermietung';
    protected $primaryKey = 'id';
    protected $keyType = 'Integer';
    public $incrementing = true;
    public $fillable = array('preis', 'marke', 'modell', 'farbe','kraftstoff','bild','details',
        'startdate', 'enddate', 'postleitzahl', 'ort', 'strasseNr');
}