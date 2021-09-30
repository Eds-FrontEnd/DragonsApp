

<div>
    <div>
        <div>
            <div>
                <div class="loginbox">
                    <a class="voltar" href="{{ url('api') }}">←</a>
                    <div class="image_dragon">
                        <img src="../../img/logo_login.png"  alt="logo da DragonsApp">
                        </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Request::is('*/edit'))

                    <form action="{{ url('api/update')}}/{{ $usuario->id }}" method="post">
                    @csrf
                    <div>
                        
                        <input type="date" class="campo" name="date" placeholder="Data" value="{{ $usuario->date }}">
                    </div>
                    <div>
                        
                        <input type="text" class="campo" name="name" placeholder="Nome" value="{{ $usuario->name }}">
                    </div>
                    <div>
                        
                        <input type="text" class="campo" name="type" placeholder="Tipo" value="{{ $usuario->type }}">
                    </div>

                    <button type="submit" class="atualizar">Atualizar</button>
                    </form>

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    if(tbody === ''){
    window.setTimeout(function(){ window.location = "{{ url('api') }}"; },1000);
    }
 </script>

<style>
    body{
        background-color: red !important;
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
        border: 2px solid #000;
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
    *, *::before, *::after {
        box-sizing: border-box;
    }
 
    .atualizar {
        width: 250px;
        height: 50px;
        border: 3px solid var(--black);
        border-radius: 15px;
        font-size: 18px;
        background-color: var(--black);
        color: var(--white);
        margin: 10px;
        list-style: none;
        text-decoration: none;
        padding: 5px 10px;
        outline: none;
        text-align: center;
        cursor: pointer;
        transition: all .3s ease-in-out;
    }

    .atualizar:hover{
        background-color: var(--white);
        color: var(--black);
        border: 3px solid var(--black);
    }
    .voltar {
        font-size: 35px;
        color: var(--black);
        float: left;
        margin-bottom: 10px;
        margin-top: 10px;
        margin-left:-210px;
        list-style: none;
        text-decoration: none;
    }
    .voltar:hover{
        font-size: 35px;
        color: var(--black);
        float: left;
        margin-bottom: 10px;
        margin-top: 10px;
        margin-left:-210px;
        list-style: none;
        text-decoration: none;
    }

    .formulario {
        width: 100%;
        height: auto;
        margin: 0 auto;
        text-align: center;
    }
    .loginbox{
        width: 300px;
        height: 430px;
        margin: 0 auto;
        background-color: var(--white);
        border-radius: 20px;    
        display: flex;
        flex-direction: column;
        justify-content: center;
        transform: translateY(22%);
        align-items: center;
    }
    .image_dragon{
        margin-top: -35px;
        padding-bottom: 20px;

    }
    .campo{
        width: 250px;
        height: 50px;
        border: 3px solid var(--black);
        border-radius: 15px;
        font-size: 18px;
        color: var(--black);
        margin: 10px;
        list-style: none;
        text-decoration: none;
        padding: 5px 10px;
        outline: none;
        text-align: center;
    }
 </style>
