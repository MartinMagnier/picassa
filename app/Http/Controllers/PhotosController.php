<?php

namespace App\Http\Controllers;

use App\Photos;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PhotosController extends Controller
{
    public function index() {
        $photos = Photos::all();
        return view('index', ['photos' => $photos]);
    }

    public function new(){
        return view('new');
    }

    public function create(Request $request){

        if($request->hasFile('photo')  && $request->file('photo')->isValid()){
            $c = new Photos();
            $c->title = $request->input('titre');
            $c->album_id = 1;
            $c->size = 1;
            $c->utilisateur_id = Auth::id();

            $c->photo = $request->file('photo')->store("public/photos/".auth::id());
            $c->photo = str_replace("public/", "/storage/", $c->photo);
            $c->save();
        }

        return redirect("/");
    }




    public function utilisateur($id){

        $utilisateur = User::find($id);

        if($utilisateur==false){
            abort("404");
        }

        return view('utilisateur', ['utilisateur' => $utilisateur]);
    }


    public function suivi($id){
        $utilisateur = User::find($id);

        if($utilisateur==false){
            abort("403");
        }

        Auth::user()->jeLesSuit()->toggle($id);
        return back()->with('toastr', ['statut' => 'success', 'message' => 'Suivi modifié']);
    }

    public function recherche($s){
        $users = User::whereRaw("name LIKE CONCAT(?, '%')", [$s])->get();
        $photos = Photos::whereRaw("title LIKE CONCAT(?, '%')", [$s])->get();
        return view("recherche", ['utilisateurs' => $users, 'photos'=>$photos]);
    }

    public function testajax() {
        return redirect('/recherche/mar');
    }


}
