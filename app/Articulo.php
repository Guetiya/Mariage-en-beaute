<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $fillable = ["titulo", 'resumen', 'contenido', 'category_id', 'image'];

    public function category() {
      return $this->belongsTo('\App\Category', 'category_id', 'id');
    }



    public function getDateMejor()
    {
        return $this->created_at->format('d.m.Y');
    }
}
