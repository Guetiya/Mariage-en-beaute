<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articulo;
use App\Category;

class ArticulosController extends Controller
{
  public function index() //NE SAIS PAS SUIS BLOQUEE
  {
    $articulos = Articulo::all();
    $category = Category::find($id);
    $variables = [
      "articulos" => $articulos,
      "category" => $category,
    ];
    return view('articulos.index', $variables);
  }

  public function listar($id) //ok
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
