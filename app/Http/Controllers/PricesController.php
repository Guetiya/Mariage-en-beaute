<?php

namespace App\Http\Controllers;

use App\Price;
use App\Category;
use App\Service;
use App\Group;
use Illuminate\Http\Request;

class PricesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index() //fait mais pourquoi adm pour montrer les prix
    // {
    //   $categories = Category::all();
    //   $services = Service::all();
    //   $variables = [
    //     "categories" => $categories,
    //     "services" => $services,
    //   ];
    //   return view('admin.prices.index', $variables);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function show(Price $price)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function edit() //ok mais à revoir car pas fonctionnel
    {
      $services = Service::all();
      $categories = Category::all();
      $variables = [
        "categories" => $categories,
        "services" => $services,
      ];
      return view('admin.prices.edit', $variables);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) //ne marche pas!!!!!!!!!!!!!!!!!
    {
      $services = Service::all();
      $services->update($request->all());

      return redirect('/admin/price/mostrar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function destroy(Price $price)
    {
      //
    }
}
