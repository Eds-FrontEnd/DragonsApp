<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>DragonsApp</title>
    </head>
    <body>
        <div class="home">
            <div class="img_dragon">
                <div>
                    <div>
                        <div class="loginbox">
                            <div class="sair">
                                <div>
                                    <a
                                        class="dropdown-item"
                                        href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"
                                    >
                                        {{ __('X') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                            <div class="boas-vindas">
                                @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                                @endif
                                <h2>Olá!</h2>
                                <h2>Seja Bem-vindo(a) {{ Auth::user()->name }}!</h2>
                                <div class="button">
                                    <a href="{{ url('api/new') }}" class="button">COMEÇAR</a>
                                </div>
                                <div class="lista">
                                    <a href="{{ url('api') }}" class="button">Lista de Dragões</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<script></script>
<style>
    * {
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

    body {
        background-color: var(--red);
    }
    .home {
        width: 100%;
        height: auto;
        margin: 0 auto;
    }

    .home_int {
        width: 100%;
        height: auto;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        flex: 1;
    }
    .img_dragon {
        background-image: url("img/dragon_parallax.png");
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
    .img_dragon img {
        height: auto;
        margin: 0 auto;
        margin-bottom: 10px;
    }
    .boas-vindas {
        text-align: center;
        font-size: 20px;
    }
    .boas-vindas {
        margin-top: 80px;
    }
    .loginbox {
        width: 300px;
        height: 385px;
        margin: 0 auto;
        background-color: var(--white);
        border-radius: 20px;
        transform: translateY(30%);
    }
    .button {
        margin-top: 50px;
    }
    .button a {
        width: 250px;
        height: 50px;
        font-size: 18px;
        padding: 10px 15px;
        background-color: var(--black);
        color: var(--white);
        border: none;
        border-radius: 15px;
        border: 3px solid var(--black);
        cursor: pointer;
        transition: all 0.3s ease-in-out;
    }

    .button a:hover {
        background-color: var(--white);
        color: var(--black);
        border: 3px solid var(--black);
    }
    .lista {
        margin-top: 25px;
    }
    .lista a {
        color: var(--black);
        font-size: 15px;
    }

    .sair {
        padding-top: 15px;
        padding-left: 5px;
    }
    .sair a {
        padding-top: 125px;
        color: var(--black);
        padding: 8px 12px;
        font-size: 20px;
        font-weight: 700;
    }
    .sair a:hover {
        background-color: var(--white);
        color: var(--black);
    }
</style>
