<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Passport\Client;

class AuthController extends Controller
{
	private $client;
	public function __construct(){
		$this->client = Client::find(1);
	}

    public function postLogin(Request $request){
    	$this->validate($request,[
    		'username' => 'required',
    		'password' => 'required'
    	]);
    	return response()->json([
    	    'message'=>'hello'
        ],200);
    }
}
