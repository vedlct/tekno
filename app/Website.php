<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'websiteId';
    protected $table = 'website';
}
