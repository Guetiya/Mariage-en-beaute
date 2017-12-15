<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foto;

class FotosController extends Controller
{

  public function index() //ok
  {
    $fotos = Foto::all();
    $variables = [
      "fotos" => $fotos,
    ];
    return view('front.galeria', $variables);
  }

  public function create(Request $request) //ok
  {
    $fotos = Foto::all();
    $variables = [
      "fotos" => $fotos,
    ];
     return view('admin.fotos.create', $variables);
  }

  public function store(Request $request) //n'arrive pas à garder certaines photos
  {
    $input = $request->except('_token');

    $extensionImagen = $request->file('foto')->getClientOriginalExtension();

    $image = $request->file('foto')->storeAs('galeria', uniqid() . "." . $extensionImagen, 'public');
    $foto = \App\Foto::create([
    
      'foto' => $image,
    ]);
    $foto->save();

      return redirect('/galeria');
  }

  public function mostrar($id){ //pourrait mettre un texte explicatif à garder qui serait gardé dans la BDD
    $foto = Foto::find($id);
    $variables = [
      "foto" => $foto,
    ];
    return view('front.mostrarFoto', $variables);
  }

}
