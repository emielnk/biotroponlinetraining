<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Validator;

use App\Models\User;


class coPengguna extends Controller
{
	function cekLogin(Request $req){

		$validator = Validator::make($req->all(), [

            'email' => [
            				'required',
            				'min:3',
            				'exists:user,email'

            			],
            'password' => [
            				'required',
            				'min:3',
            			],

        ]);

        if ($validator->fails()) {
            return redirect('login')
                        ->withErrors($validator)
                        ->withInput();
        }

        $email= $req->email;
    		$password = $req->password;


        $check = user::where('email',$email)->where('password',$password)->count();

        if( !($check > 0) )  {
        	 return redirect('login')->with('status', 'salah');
        }


        $take = user::where('email',$email)->where('password',$password)->first();

        session(['email' => $take->email]);
        session(['password' => true]);

        return redirect('dashboard');

	}

	function logout(Request $req){

		$req->session()->regenerate();
    	$req->session()->flush();

    	return redirect('login');

	}
}
