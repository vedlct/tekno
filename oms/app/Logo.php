<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'logoId';
    protected $table = 'logo';
}
