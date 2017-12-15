<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posteo;
use App\Category;
use App\User;
use App\Articulo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $categories = Category::all();
      // $users = User::all();
      $posteos = Posteo::orderBy('created_at', 'desc')->paginate(3);
      $variables = [
        "posteos" => $posteos,
        "categories" => $categories,
        // "users" => $users,
      ];
      return view("home", $variables);
    }

    public function welcome()
    {
      $categories = Category::all();
      $articulos = Articulo::where('category_id', '<=', '3')
        ->orderBy('created_at', 'desc')
        ->take(1)
        ->get();

      // $articulo = Articulo::where('category_id', '4')
      //   ->orderBy('created_at', 'desc')
      //   ->take(1)
      //   ->get();

      // $articulos = Articulo::orderBy('created_at', 'desc')->where("category_id",4)->get();
      // $services = Service::where("category_id",$id)->get();
      // $articulos = Articulo::all();
      $posteos = Posteo::orderBy('created_at', 'desc')->paginate(3);;
      $variables = [
        "posteos" => $posteos,
        "categories" => $categories,
        "articulos" => $articulos,
        // "articulo" => $articulo,
      ];
      return view("welcome", $variables);
    }
}
