<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;
use App\Models\userCompte ;
class HomeController extends Controller
{
    public function signUp(Request $req){
        $name=$req->input("name");
        $email=$req->input("email");
        $password=$req->input("password");
        $user = Utilisateur::Where('email','=',$email)->get();
        if (count($user)){
            return response()->json(['status'=>"no","message"=>"email exist deja"]);
        }
        Utilisateur::create(['name'=>$name,'email'=>$email,'password'=>$password]);
        return response()->json(['status'=>"ok","message"=>"compte cree"]);
    }
    
    // public function signIn(Request $req){
    //     $email=$req->input("email");
    //     $password=$req->input("password");
    //     $user = Utilisateur::Where('email','=',$email)->get();
    //     if (count($user)){
    //         return response()->json(['status'=>"oki",'user'=>$user[0]] ) ; 
    //     }
        

    //     return response()->json(['status'=>"no","message"=>"compte n'existe pas"]);
    // }

    public function signIn(Request $req){
        $email = $req->input("email");
        $password = $req->input("password");
        $user = Utilisateur::where('email','=',$email)->first();
        
        if ($user) {
            // if (password_verify($password, $user->password)) {
                if($password==$user->password){
                    return response()->json(["ex"=>1]);
                }else{
                    return response()->json(["ex"=>2]);
                }
            // } else {
            //     return response()->json(['status' => "no", "message" => "Mot de passe incorrect"]);
            // }
        } else {
            return response()->json(["ex"=>0]);
        }
    }
    
}
