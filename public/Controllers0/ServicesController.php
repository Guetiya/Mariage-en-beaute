<?php

namespace App\Http\Controllers;

use App\Service;
use App\Category;
use App\Group;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //   $services = Service::all();
    //   $variables = [
    //     "services" => $services,
    //   ];
    //   return view('services.index', $variables);
    // }


    public function mostrar($id)
    {
      $category = Category::find($id);
      $services = Service::where("category_id",$id)->get();
      $variables = [
        "category" => $category,
        "services" => $services,
      ];
      return view('services.mostrar', $variables);
    }

    public function show($id)
    {
      $service = Service::find($id);
      $variables = [
        "service" => $service,
        "category" => $service->category
      ];
      return view('services.show', $variables);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categories = Category::all();
      $groups = Group::all();
    	$variables = [
    		"categories" => $categories,
        "groups" => $groups,
    	];
	   return view('services.create', $variables);

      // $categories = Category::all();
      // $variables = [
      //   "categories" => $categories,
      // ];
      // return view("layouts.formPresentService");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //   $input = $request->except('_token');
    //       $rules = [
    //           "name" => "required|unique:services",
    //           "duration" => "required|string",
    //           "price" => "required|numeric",
    //           "category_id" => "required|numeric|between:1,3",
    //           "group_id" => "required|numeric|between:1,3",
    //       ];
    //
    //       $messages = [
    //           "required" => "El :attribute es requerido!",
    //           "unique" => "El :attribute tiene que ser único!",
    //           "numeric" => "El :attribute tiene que ser numérico!",
    //           "between" => "El :attribute tiene que estar entre :min y :max!"
    //       ];
    //
    //       $request->validate($rules, $messages);
    //
    //       $service = Service::create([
    //           'name' => $request->input('name'),
    //           'duration' => $request->input('duration'),
    //           'price' => $request->input('price'),
    //           'category_id' => $request->input('category_id'),
    //           'group_id' => $request->input('group_id'),
    //       ]);
    //
    //       $category = Category::find($request->input('category_id'));
    //
    //       // $product->properties()->sync($request->input('properties'));
    //       // $service->category()->associate($category);
    //       $service->save();
    //
    //         return redirect('/admin/service');
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    // public function show(Service $service)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $service = Service::find($id);
    //     $groups = Group::all();
   	//     $categories = Category::all();
    //     return view('services.edit', ['categories' => $categories, 'service' => $service, 'groups' => $groups]);
    //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //   $service = Service::find($id);
    //  	$service->update($request->all());
    // 	return redirect('/admin/service');
    //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    //   public function destroy($id)
    // {
    //   $service = Service::find($id);
    //   // $service->properties()->sync([]); //agregando el sync() con un array vacío, Laravel se encarga de eliminar las propiedades correspondientes
    //   $service->delete();
    //
    //   return redirect('/admin/service');
    // }

    public function consultarPrecio() //à revoir
    {
      // $services = Service::all();
      // $services = Service::where("service", $id)->get();
      $categories = Category::all();
      
      $variables = [
        "categories" => $categories,
      ];
      // $service->properties()->sync([]); //agregando el sync() con un array vacío, Laravel se encarga de eliminar las propiedades correspondientes
      return view('precio', $variables);
    }
}
