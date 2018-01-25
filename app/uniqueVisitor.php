<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class uniqueVisitor extends Model
{
    protected $table = 'unique_visitors';
    protected $primaryKey = 'date';
    protected $keyType = 'date';
    protected $fillable = array('date', 'ip', 'views');
}
