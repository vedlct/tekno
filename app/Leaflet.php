<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leaflet extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'leafletId';
    protected $table = 'leaflet';
}
