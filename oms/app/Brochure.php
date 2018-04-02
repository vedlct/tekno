<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brochure extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'brochureId';
    protected $table = 'brochure';
}
