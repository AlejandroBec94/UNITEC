<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Redirect to register template
     */
    public function index()
    {
        $CatalogInformation = DB::table('catalog_information')->get();
        return view('register.index', ['CatalogInformation' => $CatalogInformation]);
    }

    public function createUser(Request $request)
    {

        $request->validate([

            'email' => 'required|string|email|unique:users',
            'password' => 'required|string',

        ]);
        $user = User::create([
            'name' => $request['first_name'],
            'last_name_dad' => $request['last_name_dad'],
            'last_name_mom' => $request['last_name_mom'],
            'gender' => $request['gender'],
            'age' => $request['age'],
            'civil_state' => $request['civil_state'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        $this->guard()->login($user);

        return redirect()->route('home');

    }
}
