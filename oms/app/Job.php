<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'jobId';
    protected $table = 'job';

    public function user(){


        return $this->belongsTo('App\User','userId','user_id');
    }

}
