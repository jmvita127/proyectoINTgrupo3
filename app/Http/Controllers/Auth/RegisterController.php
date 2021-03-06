<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/exito';

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
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required','string', 'email', 'max:255', 'unique:Users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'avatar' => ['nullable', 'image', 'max:255'],
            'sec_question' => ['nullable', 'string', 'max:255'],
            'sec_answer' => ['nullable', 'string', 'max:255'],
            'updated_at' => ['nullable', 'string', 'max:255'],
            'created_at' => ['nullable', 'string', 'max:255'],
            'isAdmin' => ['nullable']

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      //dd($data);
  $nombreArchivo = 'user_default.jpg';
  //debemos tener en cuenta que si hay nun archivo, lo subimos y le guardamos la ruta
  if(isset($data['avatar'])){
    //al archivo que subi lo voy a guardar en el filesystem de laravel
    $rutaDelArchivo = $data['avatar']->store('public');
    //le saco solo el nombre
    $nombreArchivo = basename($rutaDelArchivo);
  }
    return User::create([
        'name' => $data['name'],
        'last_name' => $data['last_name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'avatar' => $nombreArchivo,
    ]);
    }

    public function showRegistrationForm()
    {
      return  view('registro');
    }
}
