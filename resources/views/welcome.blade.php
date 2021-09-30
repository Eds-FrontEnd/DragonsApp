<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>DragonsApp</title>
    </head>
    <body>
        <div>
            @if (Route::has('login'))
            <div class="register">
                <div class="buttons">
                    <div class="logo">
                        <img src="../img/applaravel_logo.png" />
                    </div>
                    @auth
                    <a href="{{ url('/home') }}" class="button">{{ Auth::user()->name }}</a>
                    @else
                    <a href="{{ route('login') }}" class="button">ACESSAR</a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="link">Crie sua conta</a>
                    @endif @endauth
                </div>
            </div>
            @endif
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

    * {
        background-color: var(--red);
        color: var(--white);
    }
    body {
        width: 100%;
        height: auto;
        margin: 0 auto;
        font-family: var(--roboto);
        position: relative;
    }

    .register {
        width: 100%;
        height: auto;
        margin: 0 auto;
        display: inline-block;
        text-align: center;
    }
    .buttons {
        width: 100%;
        height: auto;
        margin: 0 auto;
        text-align: center;
        clear: both;
        display: flex;
        flex: 1;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        transition: all 0.3s ease;
    }

    .buttons a {
        padding: 10px 35px;
        list-style: none;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    .button {
        background-color: var(--black);
        color: var(--white);
        padding: 10px, 15px;
        border-radius: 5px;
        transition: all 0.3s ease;
    }
    .button a {
        list-style: none;
        text-decoration: none;
        transition: all 0.3s ease-in-out;
    }
    .button:hover {
        background-color: var(--white);
        color: var(--black);
    }
    .link {
        color: var(--black);
        transition: all 0.3s ease-in-out;
    }
    .link:hover {
        color: var(--white);
    }
    .logo img {
        width: 120px;
        margin-bottom: 20px;
    }
    .foto {
        margin: 0 auto;
        width: 100%;
        position: absolute;
    }
</style>
