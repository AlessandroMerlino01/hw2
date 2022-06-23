<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\Contenent;
use App\Models\Favourite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller {

    public function index() {
        $session_id = session('user_id');
        $user = User::find($session_id);
        if (!isset($user))
            return view('login');
        
        return view("home")->with("user", $user);
    }

    public function loadContenuti(){
        $contenent = Contenent::all();
        return $contenent;
    }

    public function checkPreferiti(){
        $preferiti = Favourite::all();
        return $preferiti;
    }

    public function checkCurrentUser(){
        return session('user_id');
    }

    public function addPreferiti(){
        $request = request();
        $favourite = new Favourite;
        $favourite -> user_id = session('user_id');
        $favourite -> contenent_id = $request['postid'];
        $favourite -> save();
    }

    public function removePreferiti(){
        $request = request();
        $favourite = Favourite::where('user_id', session('user_id'))
        -> where('contenent_id',$request['postid'])->delete();
    }

    public function getSong(){
        $client_id = 'd8ae63b9fb3d4821a40bcfff6e7c0c6b'; 
    $client_secret = '94900dd4cfc0440dbd97c59065b2422e'; 

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_URL, "https://accounts.spotify.com/api/token");
        curl_setopt($curl, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
        $headers = array("Authorization: Basic ".base64_encode($client_id.":".$client_secret));
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        
        $token = json_decode($result)->access_token;
        curl_close($curl);

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "https://api.spotify.com/v1/search?type=playlist&q=orologio%20bar-coffe");
        $headers = array("Authorization: Bearer ".$token);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        curl_close($curl);
        return $result;

    }
}

?>