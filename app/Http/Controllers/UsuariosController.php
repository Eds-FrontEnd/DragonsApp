<?php

namespace App\Http\Controllers;

use Redirect;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index(){
        $api = Usuario::orderBy('name', 'asc')->get(); //nomes em forma alfabética crescente.
    
         //$api = Usuario::get();
        return view('api/v1/list', ['api' => $api],);
   }
    public function new(){
        return view('api/v1/new');
   }
    public function add( Request $request ){
    $usuario = new Usuario;
    $usuario = $usuario->create( $request->all() );
    return Redirect::to('/api');
  }
  
    public function edit($id){
      $usuario = Usuario::findOrFail( $id );
      return view('api/v1/form', ['usuario' => $usuario]);
  }
    public function update( $id, Request $request ){
    $usuario = Usuario::findOrFail( $id );
    $usuario->update( $request->all() );
    return Redirect::to('/api');
  }
  public function delete($id){
    $usuario = Usuario::findOrFail( $id );
    $usuario->delete();
    return Redirect::to('/api');
  }
}
