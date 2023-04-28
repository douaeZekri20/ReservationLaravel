<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
public function sorte(Request $request){
    $reservation=new Reservation;
    $reservation->origine=$request->input('origine');
    $reservation->destination=$request->input('destination');
    $reservation->dateDepart=$request->input('dateDepart');
    $reservation->dateRetour=$request->input('dateRetour');
    $reservation->classe=$request->input('classe');
    $reservation->passagers=$request->input('passagers');
    $reservation->codereduction=$request->input('codereduction');
    $reservation->modePaiment=$request->input('modePaiment');

    $reservation->save();
    return response()->json(['message'=>'reservation ajoute avec succes !','reservation'=>$reservation]);
}
}
