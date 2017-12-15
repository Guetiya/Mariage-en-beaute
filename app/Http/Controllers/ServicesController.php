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

     public function consultarPrecio() //ok
     {
       // $services = Service::all();
       $categories = Category::all();
       $variables = [
         "categories" => $categories,
       ];
       return view('precio', $variables);
     }

    public function mostrar($id) //ok
    {
      $category = Category::find($id);
      $services = Service::where("category_id",$id)->get();
      $variables = [
        "category" => $category,
        "services" => $services,
      ];
      return view('services.mostrar', $variables);
    }

    public function show($id) // n'existe plus
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
    // public function create() //n'existe plus
    // {
    //   $categories = Category::all();
    //   $groups = Group::all();
    // 	$variables = [
    // 		"categories" => $categories,
    //     "groups" => $groups,
    // 	];
	  //  return view('services.create', $variables);
    //
    // }


}
