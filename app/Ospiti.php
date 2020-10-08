<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ospiti extends Model
{
  protected  $table = 'ospiti';

  protected $fillable = [// serve soltanto con FORM??

    // 'firstname',
    'lastname'
  ];


  protected $attributes = [ // per dare default value alla chiave, SE NON METTIAMO NEL FILLABLE
      'firstname' => 'Null'
  ];
}
