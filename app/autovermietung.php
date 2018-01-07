<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class autovermietung extends Model
{
    protected $table = 'autovermietung';
    protected $primaryKey = 'id';
    protected $keyType = 'Integer';
    public $incrementing = true;
    public $fillable = array('autopreis', 'automarke', 'automodell', 'autofarbe','autokraftstoff','autobild','autodetails',
        'autostartdate', 'autoenddate', 'autopostleitzahl', 'autoort', 'autostrasseNr');
}