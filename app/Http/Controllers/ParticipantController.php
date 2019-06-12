<?php

namespace App\Http\Controllers;
use App\Http\Requests\cmsRequest;
use App\Participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller

{

    public function create(){

        return view("projets.participant");


    }

    public function store(cmsRequest $request) {
        return "saved"; 

    $participant = new participant();
    $participant->nom = $request->input('nom');
    $participant->role = $request->input('role');
    $participant->projet_id = $request->input('projet_id');
    $participant->save();

    
    
    }
}
