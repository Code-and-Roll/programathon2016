<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class usuario extends Model
{
    protected $table = 'usuario';
    public $timestamps = false;
}
