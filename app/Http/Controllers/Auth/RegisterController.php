<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Storage;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
      $reglas = [
          "apellido" => "required|string|min:2",
          "nombre" => "required|string|min:2",
          "correo" => "required|email|unique:users,email",
          "contrasena" => "required|min:8|confirmed",
          // "avatar" => ""
            // 'name' => 'required|string|max:255',
            // 'email' => 'required|string|email|max:255|unique:users',
            // 'password' => 'required|string|min:6|confirmed',
        ];
        $mensajes = [
          "required" => "El campo :attribute es requerido",
          "min" => "El campo :attribute tiene que haber un mínimo de :min caracteres",
          "unique" => "El campo :attribute tiene que ser único!",
          "confirmed" => "Las contrasenas deben ser iguales"
        ];
        return Validator::make($data, $reglas, $mensajes);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data, $avatar)
    {
        return User::create([
          'name' => $data['nombre'],
          'email' => $data['correo'],
          'password' => bcrypt($data['contrasena']),
          'gender' => $data["genero"],
          "surname" => $data["apellido"],
          "avatar" => $avatar
      ]);
    }

    public function showRegistrationForm()
    {
        $generos = ["", "Hombre", "Mujer"];
        return view('auth.register', compact("generos"));
    }

    public function register(Request $request)
    {
      $this->validator($request->all())->validate();

      $avatar = $request->file("imgPerfil");
      $nombreAvatar = Storage::putFile("public/perfiles", $avatar);

      event(new Registered($user = $this->create($request->all(), $nombreAvatar)));

      $this->guard()->login($user);

      return $this->registered($request, $user)
                      ?: redirect($this->redirectPath());
    }
}
