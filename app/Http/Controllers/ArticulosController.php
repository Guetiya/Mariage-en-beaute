<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articulo;
use App\Category;

class ArticulosController extends Controller
{
  public function index() //ok
  {
    $categories = Category::all();
    $variables = [
      "categories" => $categories,
    ];
    return view('articulos.index', $variables);
  }

  public function listar($id) //no anda la lista me tira un error
  {
    $category = Category::find($id);
    $articulos = Articulo::where("category_id", $id)->get();
    $variables = [
      "articulos" => $articulos,
      "category" => $category,
    ];
    return view('articulos.listar', $variables);
  }

  public function show($id) //ok
  {
    $articulo = Articulo::find($id);
    $categories = Category::all();
    $variables = [
      "articulo" => $articulo,
      "categories" => $categories,
    ];
    return view('articulos.show', $variables);
  }

}
