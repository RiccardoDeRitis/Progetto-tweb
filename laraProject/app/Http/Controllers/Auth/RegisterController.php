<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = '/';

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
            'Nome' => ['required', 'string', 'max:255'],
            'Cognome' => ['required', 'string', 'max:255'],
            'Telefono' => ['required', 'string', 'max:100'],
            'Città' => ['required', 'string', 'max:100'],
            'Indirizzo' => ['required', 'string', 'max:255'],
            'Data_di_nascita' => ['required', 'string', 'max:255'],
            'Codice_Fiscale' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'Visibilità' => ['required', 'string', 'max:255'],
            'Descrizione' => ['required', 'string', 'max:255'],
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
        return User::create([
            'Nome' => $data['Nome'],
            'Cognome' => $data['Cognome'],
            'Telefono' => $data['Telefono'],
            'Città' => $data['Città'],
            'Indirizzo' => $data['Indirizzo'],
            'Data_di_nascita' => $data['Data_di_nascita'],
            'Codice_Fiscale' => $data['Codice_Fiscale'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'Visibilità' => $data['Visibilità'],
            'Descrizione' => $data['Descrizione'],
        ]);
    }
}
