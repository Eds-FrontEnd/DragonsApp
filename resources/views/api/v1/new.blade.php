


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DragonsApp</title>

    </head>
    <body>
    <div class="img_dragon">
    <form class="formulario" method="POST" action="{{ url('api/add') }}">
                        @csrf
                     <div class="loginbox">
                        
                        <a class="voltar" href="{{ url('home') }}"> ← </a>
                        <div class="login_int_row">
                            <div class="image_dragon">
                        <img src="../img/logo_login.png"  alt="logo da DragonsApp">
                        </div>
                        @yield('dragon')
                               <div>
                             <input type="date" class="campo" name="date" placeholder="Digite a Data" value="" required="Digite uma data">
                               </div>    
                               <div>
                             <input type="text" class="campo" name="name" placeholder="Nome" value="" required="Digite um nome">
                               </div>   
                               <div>
                             <input type="text" class="campo" name="type" placeholder="Tipo" value="" required="Digite um tipo">
                               </div>         
                              <div>
                                <button type="submit" class="entrar">
                                    {{ __('CRIAR') }}
                                </button>
                            </div>
                   
                        
                        </div>
                        </div>
                    </form>     
            </div>
    </body>
</html>


<script>

</script>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    list-style: none;
}
:root {
    --gray: #ccc;
    --grayb: #333;
    --red: #ff0000;
    --white: #fff;
    --black: #000;
    --roboto: Roboto, Sans-Serif;
}

body{
    width: 100%;
    height: auto;
    margin: 0 auto;
    font-family: var(--roboto);
    background-color: var(--red);
}
.voltar {
    font-size: 35px;
    color: var(--black);
    float: left;
    margin-bottom: 10px;
    margin-top: 10px;
    margin-left:-210px;
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
    transform: translateY(25%);
    align-items: center;
}
.image_dragon{
    padding-bottom: 10px;
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
.entrar {
    width: 250px;
    height: 50px;
    font-size: 18px;
    margin-top: 8px;
    background-color: var(--black);
    color: var(--white);
    border: none;
    border-radius: 15px;
    cursor: pointer;
    border: 3px solid var(--black);
    transition: all .3s ease-in-out;
}

.entrar:hover{
    background-color: var(--white);
    color: var(--black);
    border: 3px solid var(--black);
}
.senha {
    padding-top: 5px;
    padding-bottom: 15px;
}
.senha a{
    color: var(--black);
}
.img_dragon {
    background-image: url("../img/create_dragon.png");
    height: 100vh;
    margin: 0 auto;
    background-size: 100%;
    background-position: center;
    background-repeat: no-repeat;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-attachment: fixed;
}

</style>
