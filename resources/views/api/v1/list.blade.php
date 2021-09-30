
<template>
    @extends('layouts.app')
    
   
    
    @section('content')
    <div class="formulario">
        <div >
            <div >
                <div class="formulario_completo">
                    
                    <div class="formulario_corpo">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <div class="topo-lista">
                                <h1>Lista de Dragões</h1>
                                    <div class="criar">
                                        <a href="{{ url('api/new')}}">Criar Novo Dragão</a>                                
                                    </div>
                               </div>           
                        <table id="tablet" class="table table-bordered table-striped">
                         <thead>
                            <tr>
                                <th scope="col">Data</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Deletar</th>
                            </tr>
                            </thead>
                            <tbody>
    
                           @foreach( $api as $u )
    
                            <tr class="tabela" class="dragon">
                                <td id="dataReverse" class="createdAt">{{ date( 'd/m/Y' , strtotime($u->date)) }}</td>
                                <td class="dragon_name" name="name">{{ $u->name }}</td>
                                <td class="type" name="text">{{ $u->type }}</td>
                                <td>
                                    <a href="api/{{ $u->id }}/edit" class="botao" id="botao-editar">Editar</a>
                                </td>
                                <td>
                                 <form action="api/delete/{{ $u->id }}" method="post">
                                 @csrf
                                 @method('delete')
                                    <button class="botao" id="botao-deletar">Deletar</button>
                                 </form>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    
    </template>
    
    <script >
    
    if(tabela === ''){
    window.setTimeout(function(){ window.location = "{{ url('api') }}"; },1000);
    }
 
    </script>
    
    
    <style>
    body{
        background-color: black !important;
    }
    .formulario{
        width: 100%;
        height: auto;
        margin: 0 auto;
        max-width: 1080px;
    }
    .formulario_corpo {
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1.25rem;
    } 
    
    main {
        background-color: var(--black);
    }
    
    *, *::before, *::after {
        box-sizing: border-box;
    }
    
    div {
        display: block;
    }
    .topo-lista {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }
    .topo-lista h1{
        padding-top: 25px;
    }
    .formulario_completo {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, 0.125);
        border-radius: 0.25rem;
    }
    body {
        margin: 0;
        font-family: "Nunito", sans-serif;
        font-size: 0.9rem;
        font-weight: 400;
        line-height: 1.6;
        color: #212529;
        text-align: left;
        background-color: var(--red);
    }
    :root {
        --gray: #ccc;
        --white: #fff;
        --black: #000;
        --red: #ff0000;
    }
    html {
        font-family: sans-serif;
        line-height: 1.15;
        -webkit-text-size-adjust: 100%;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    .table-bordered, tr, th, td{
        border: 1px solid var(--gray) !important;
    }
    #botao-editar{
        color: var(--white);
        background-color: var(--black);
        border: 2px solid var(--black);
        outline: none;
        list-style: none;
        text-decoration: none;
    }
    
    .criar a {
        width: 90px;
        height: 90px;
        line-height: 20px;
        padding-top: 23px;
        margin: 10px;
        color: var(--white);
        background-color: var(--black);
        border: 2px solid var(--black);
        border-radius: 50px;
        display: flex;
        outline: none;
        list-style: none;
        text-decoration: none;
        text-align: center;
        transition: all 0.3s ease;
    }
    .criar a:hover {
        color: var(--black);
        background-color: var(--white);
        border: 2px solid var(--black);
        outline: none;
        list-style: none;
        text-decoration: none;
    }
    #botao-deletar{
        color: var(--white);
        background-color: var(--red);
        border: 2px solid var(--red);
        outline: none;
        list-style: none;
        text-decoration: none;
    }
    #botao-deletar:hover{
        background-color: var(--white);
        border: 2px solid var(--red);
        color: var(--red);
    }
    #botao-editar:hover{
        background-color: var(--white);
        color: var(--black);
        border: 2px solid var(--black);
    }
    .botao {
        display: inline-block;
        font-weight: 400;
        color: #212529;
        text-align: center;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-color: transparent;
        border: 1px solid transparent;
        padding: 0.375rem 0.75rem;
        font-size: 0.9rem;
        line-height: 1.6;
        border-radius: 0.25rem;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }
    a {
        color: #3490dc;
        text-decoration: none;
        background-color: transparent;
    }
    .invisible{
        display: none;
    }
    </style>
    