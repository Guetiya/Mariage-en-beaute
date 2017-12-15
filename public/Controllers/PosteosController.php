<?php

namespace App\Http\Controllers;

use App\Posteo;
use Storage;
use Illuminate\Http\Request;

class PosteosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posteos = Posteo::orderBy('created_at', 'desc')->paginate(3);
      $variables = [
        "posteos" => $posteos,
      ];
      return view("posteos.index", $variables);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $posteos = Posteo::paginate(3);
      $variables = [
        "posteos" => $posteos,
      ];
      return view("posteos.index", $variables);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $rules = [
          'name' => 'required|string|max:255',
          'email' => 'required',
          'message' => 'required|max:2000',
          'avatarPath' => 'mimes:jpeg,bmp,png|dimensions:min_width=100,min_height=200',
        ];

        $messages = [
          "required" => "El :attribute es requerido!",
          "max" => "El :attribute tiene que haber como maximo :max!",
          "mines" => "El :attribute tiene que respectar el formato :min_width y :min_height!",
          "dimensions" => "El :attribute tiene que respectar el formato entre :min_width y :min_height!"
        ];

        $request->validate($rules, $messages);

      //  dd($request->file('avatarPath'));

  // $file = Input::file('avatarPath');
       if ( $request->file('avatarPath') !== null) {
         $extensionImagen = $request->file('avatarPath')->getClientOriginalExtension();
         $avatarPath = $request->file('avatarPath')->storeAs('posteos', uniqid() . "." . $extensionImagen, 'public');
       } else {
         $avatarPath = "";
       }

        $posteo = Posteo::create([
          'name' => $request->input('name'),
          'email' => $request->input('email'),
          'message' => $request->input('message'),
          'avatarpath' => $avatarPath,
          // 'avatar' => $request->input('avatar'),
        ]);
          // dd($avatarPath);
        // dd($posteo);
          return redirect('/posteos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Posteo  $posteo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posteo = Posteo::find($id);
        $variables = [
          "posteo" => $posteo,
        ];
        return view('admin.posteos.show', $variables);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Posteo  $posteo
     * @return \Illuminate\Http\Response
     */
    public function edit(Posteo $posteo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Posteo  $posteo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posteo $posteo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Posteo  $posteo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posteo = Posteo::find($id);
        $posteo->delete();
        return redirect('/posteos');
    }
}
