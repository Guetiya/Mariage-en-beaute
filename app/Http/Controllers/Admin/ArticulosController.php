<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Articulo;
use App\Category;

class ArticulosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //ok
    {
      $articulos = Articulo::all();
      $variables = [
        "articulos" => $articulos,
      ];
      return view('admin.articulos.index', $variables);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) //ok
    {
      $categories = Category::all();
    	$variables = [
    		"categories" => $categories,
    	];
	     return view('admin.articulos.create', $variables);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //ok
    {
      $input = $request->except('_token');
      $rules = [
        "titulo" => "required|string",
        "resumen" => "required",
        "contenido" => "required|string",
        "category_id" => "required|numeric"
      ];

      $messages = [
        "required" => "El :attribute es requerido!",
        "unique" => "El :attribute tiene que ser único!",
        // "between" => "El :attribute tiene que estar entre :min y :max!"
      ];

      $request->validate($rules, $messages);

      $extensionImagen = $request->file('image')->getClientOriginalExtension();

      $image = $request->file('image')->storeAs('articles', uniqid() . "." . $extensionImagen, 'public');
      $articulo = \App\Articulo::create([
        'titulo' => $request->input('titulo'),
        'resumen' => $request->input('resumen'),
        'contenido' => $request->input('contenido'),
        'category_id' => $request->input('category_id'),
        'image' => $image,
      ]);

      $articulo->save();

        return redirect('/admin/article');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function show($id) //je ne sais pas vraiment l'utilité
    {
      $articulo = Articulo::find($id);
      $variables = [
        "articulo" => $articulo,
        "category" => $articulo->category
      ];
      return view('admin.articulos.show', $variables);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function edit($id) //fait
    {
      $articulo = Articulo::find($id);
      $categories = Category::all();
      return view('admin.articulos.edit', ['categories' => $categories, 'articulo' => $articulo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) //ok
    {
      $articulo = Articulo::find($id);
      $articulo->update($request->all());
      return redirect('/admin/article');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) //ok
    {
      $articulo = Articulo::find($id);
      // $service->properties()->sync([]); //agregando el sync() con un array vacío, Laravel se encarga de eliminar las propiedades correspondientes
      $articulo->delete();

      return redirect('/admin/article');
    }
}
