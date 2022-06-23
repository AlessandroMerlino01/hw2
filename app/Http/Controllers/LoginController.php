<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller {

   public function login() {
        if(session('user') != null) {
            return redirect("home");
        }
        else {
            return view('login');
        }
     }

     public function checkLogin() {
        $user = User::where('username', request('username'))->where('password',request('password'))->first();
         if($user !== null) {
            if($user->id === 1){
                Session::put('user_id', $user->id);
                Session::put('user_username', $user->username);
                return redirect('main');
             }else{
                Session::put('user_id', $user->id);
                Session::put('user_username', $user->username);
                return redirect('home');
             }
         }
         else {
            return view('login')
            ->with("error", "Username e/o Password errati");
            }
     }

     public function logout() {
        Session::flush();
        return redirect('login');
    }

}
?>