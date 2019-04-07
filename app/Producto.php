<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
  public function user(){
    //este producto pertenece a un usuario
      return $this->belongsTo('User');
  }
    // public $timestamps = false;
}
