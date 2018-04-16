<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'notificationId';
    protected $table = 'notification';
}
