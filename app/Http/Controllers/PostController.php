<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\Contenent;
use App\Models\Favourite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PostController extends Controller {

    public function index() {
        $session_id = session('user_id');
        $user = User::find($session_id);
        if (!isset($user))
            return view('login');
        
        return view("Post")->with("user", $user);
    }

    public function nuovoPost() {
        $request = request();
        if($request['foto'] !== null && $request['titolo'] !== null && $request['descrizione'] !== null){
            $newContenent = new Contenent;
            $newContenent -> foto = $request['foto'];
            $newContenent -> titolo = $request['titolo'];
            $newContenent -> descrizione = $request['descrizione'];
            $newContenent -> save();
            return redirect('main');
        }
        else{
            return view('Post')
            ->with("error1", "Inserisci tutti i campi");
        }
    }
}

?>