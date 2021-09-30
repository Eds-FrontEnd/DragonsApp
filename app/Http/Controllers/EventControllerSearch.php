<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventControllerSearch extends Controller
{
    public function index(){

    $search = request('search');
    if($search){

        $events = Event::where([
            ['title','like','%'.$search.'%']
        ])->get();
        return view('api', ['events' => $events, 'search' =>$search]);

    } else {

        alert('Pesquisa não encontrada, tente novamente...');
        // $events = Event::all();
    }

    return view('api', ['events' => $events, 'search' =>$search]);
    }

}
