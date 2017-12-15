<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
  protected $fillable = ['name', 'duration', 'price', 'category_id', 'group_id'];

  public function category() {
    return $this->belongsTo('\App\Category', 'category_id', 'id');
  }

}
