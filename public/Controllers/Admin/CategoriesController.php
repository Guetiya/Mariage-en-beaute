<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Service;
use App\Group;

class CategoriesController extends Controller
{

      public function index(){ //ok
        $categories = Category::all();
        $variables = [
          "categories" => $categories,
        ];
        return view('admin.categories.index', $variables);
        // vue des catégories qui existent avec un lien quand on clique dessus qui doit renvoyer à un détail
      }

      public function show($id){ //ok
        $category = Category::find($id);
        $services = Service::where("category_id", $id)->get();
        $variables = [
      		"category" => $category,
          "services" => $services,
        ];
        return view('admin.categories.show', $variables);
        // vue des catégories qui existent avec un lien quand on clique dessus qui doit renvoyer à un détail
      }

      public function create() //ok
      {
        return view("admin.categories.create");
      }

      public function store(Request $request) //ok
      {
          $rules = [
            'name' => 'required|string|max:255',
            'description' => 'required', //pourquoi il attend un numéro???
          ];

          $messages = [
            "required" => "El :attribute es requerido!",
            "unique" => "El :attribute debe ser unico!",
            "string" => "El :attribute debe ser un string!",
            "max" => "El :attribute debe tener un maximo de 255!",
          ];

          $request->validate($rules, $messages);

          $extensionImagen = $request->file('image')->getClientOriginalExtension();

          $image = $request->file('image')->storeAs('categories', uniqid() . "." . $extensionImagen, 'public');

          $category = Category::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => $image,
          ]);
//je n'arrive pas à garder la description et l'image dans BDD
          $category->save();
            return redirect('/admin/categories');

      }

      public function edit($id) //ok
     {
       	$services = Service::all();
       	$category = Category::find($id);
        $groups = Group::all();
    	   return view('admin.categories.edit', ['category' => $category, 'services' => $services, 'groups' => $groups]);
      }

      public function update(Request $request, $id) //ok
      {
        $category = Category::find($id);
       	$category->update($request->all());
      	return redirect('/admin/categories');

      }
}
