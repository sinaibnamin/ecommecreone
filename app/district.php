<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class district extends Model
{
  public function division(){
    return $this->belongsTo('App\Division','division_id');
  }
}
