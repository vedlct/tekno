<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'chatId';
    protected $table = 'chat';
}
