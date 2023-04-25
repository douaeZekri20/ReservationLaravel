<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
public function sorte(Request $request){
    $request->validate([
        'origine'=>'required',
        'destination'=>'required',
        'dateDepart'=>'required',
        'dateRetour'=>'required',
        'classe'=>'required',
        'passagers'=>'required',
        'codereduction'=>'required'
    ]);
    $reservation=new Reservation;
    $reservation->origine=$request->input('origine');
    $reservation->destination=$request->input('destination');
    $reservation->dateDepart=$request->input('dateDepart');
    $reservation->dateRetour=$request->input('dateRetour');
    $reservation->classe=$request->input('classe');
    $reservation->passagers=$request->input('passagers');
    $reservation->codereduction=$request->input('codereduction');

    $reservation->save();
    return response()->json(['message'=>'reservation ajoute avec succes !','reservation'=>$reservation]);
}
}
