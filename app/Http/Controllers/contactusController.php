<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\Contenent;
use App\Models\Favourite;
use App\Models\Contactu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class contactusController extends Controller {

    public function index() {
        $session_id = session('user_id');
        $user = User::find($session_id);
        if (!isset($user))
            return view('login');
        
        return view("contactus")->with("user", $user);
    }

    public function invio() {
        $session_id = session('user_id');
        $user = User::find($session_id);
        $request = request();
        if($request['email'] !== null && $request['testo'] !== null){
            $newContact = new Contactu;
            $newContact -> email = $request['email'];
            $newContact -> testo = $request['testo'];
            $newContact -> save();
            return redirect('home');
        }
        else{
            return view('contactus')
            ->with("error1", "Inserisci tutti i campi")
            ->with("user", $user);
        }
    }
}



?>