<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posteo;
use App\Category;
use App\User;

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
      $posteos = Posteo::orderBy('created_at', 'desc')->paginate(3);
      // $user = User::where('id','=',auth()->user()->id)->orderBy('id', 'DESC')->first();
      // $user = User::all();
      $variables = [
        "posteos" => $posteos,
        "categories" => $categories,
        // "user" => $user,
      ];
      return view("home", $variables);
    }

    public function welcome() //no me anda
    {
      $categories = Category::all();
      $posteos = Posteo::orderBy('created_at', 'desc')->paginate(3);
      // $user = User::all();
      // $user = User::where('id','=',auth()->user()->id)->orderBy('id', 'DESC')->first();
      $variables = [
        "posteos" => $posteos,
        "categories" => $categories,
        // "user" => $user,
      ];
      return view("welcome", $variables);
    }
}
