<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corporate extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'corporate-ciId';
    protected $table = 'corporate-cl';
}
