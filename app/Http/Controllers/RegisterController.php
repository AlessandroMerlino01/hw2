<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller {

    protected function create()
    {
        $request = request();

        if($this->countErrors($request) === 0) {
            $newUser =  new User;
            $newUser -> username = $request['username'];
            $newUser -> password = $request['password'];
            $newUser -> email = $request['email'];
            $newUser -> name = $request['name'];
            $newUser -> surname = $request['surname'];
            $newUser -> save();

            if ($newUser) {
                Session::put('user_id', $newUser->id);
                Session::put('user_username', $newUser->username);
                return redirect('home');
            } 
            else {
                return redirect('register')->withInput();
            }
        }
        else {
            return redirect('register')->withInput();
        }
        
    }

    private function countErrors($data) {
        $error = array();
        
        
        if(!preg_match('/^[a-zA-Z0-9_]{1,15}$/', $data['username'])) {
            $error[] = "Username non valido";
        } else {
            $username = User::where('username', $data['username'])->first();
            if ($username !== null) {
                $error[] = "Username già utilizzato";
            }
        }
        //PASSWORD
        if (!preg_match('/^(?=.*[0-9])(?=.*[!@#$%^&*_])[a-zA-Z0-9!@#$%^&*_]{8,16}$/', $data['password'])) {
            $error[] = "Password non valida";
        } 
        //CONFERMA PASSWORD
        if (strcmp($data["password"], $data["confirm_password"]) != 0) {
            $error[] = "Le password non coincidono";
        }
        //EMAIL
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $error[] = "Email non valida";
        } else {
            $email = User::where('email', $data['email'])->first();
            if ($email !== null) {
                $error[] = "Email già utilizzata";
            }
        }
        return count($error);
    }

    public function checkUsername($query) {
        $exist = User::where('username', $query)->exists();
        return ['exists' => $exist];
    }

    public function checkEmail($query) {
        $exist = User::where('email', $query)->exists();
        return ['exists' => $exist];
    }

    public function index() {
        return view('register');
       
    }

}
?>