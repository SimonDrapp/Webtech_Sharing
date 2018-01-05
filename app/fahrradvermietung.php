<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fahrradvermietung extends Model
{
    protected $table = 'fahrradvermietung';
    protected $primaryKey = 'id';
    protected $keyType = 'Integer';
    public $incrementing = true;
    public $fillable = array('art', 'marke', 'modell', 'farbe','preis','bild','details', 'postleitzahl', 'ort', 'strasseNr' ,'startdate', 'enddate');
}
