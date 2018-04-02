<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corporate extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'corporate-clId';
    protected $table = 'corporate-cl';
}
