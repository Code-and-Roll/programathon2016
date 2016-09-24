<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class redsocial extends Model
{
  protected $table = 'usuario'
  protected $primaryKey = ['TipoRedSocialID','PymeID']/*ojo aqui tiene dos llaves*/
  public $timestamps = false;
}
