<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ["name", 'image', 'description'];

    public function services() {
    	return $this->hasMany('\App\Service', 'category_id', 'id');
    }

    public function articulos() {
    	return $this->hasMany('\App\Articulo', 'category_id', 'id');
    }

}
