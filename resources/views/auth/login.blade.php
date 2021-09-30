<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>DragonsApp</title>
    </head>
    <body>
        <form class="formulario" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="img_dragon">
                <div class="loginbox">
                    <a class="voltar" href="{{ url('/') }}"> ← </a>
                    <div class="login_int_row">
                        <div class="image_dragon">
                            <img src="../img/logo_login.png" alt="logo da DragonsApp" />
                        </div>

                        <div class="login_int_row">
                            <input id="email" type="email" class="campo" name="email" value="{{ old('email') }}" placeholder="E-mail" required autocomplete="email" autofocus />

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="">
                        <div class="">
                            <input id="password" type="password" class="campo" name="password" placeholder="Senha" required autocomplete="current-password" />

                            @error('password')
                            <span class="" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="">
                        <div class="">
                            @if (Route::has('password.request'))
                            <div class="senha">
                                <a class="" href="{{ route('password.request') }}">
                                    {{ __('Esqueci a senha') }}
                                </a>
                            </div>
                            @endif
                            <button type="submit" class="entrar">
                                {{ __('Entrar') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
        margin-left: -210px;
    }

    .formulario {
        width: 100%;
        height: auto;
        margin: 0 auto;
        text-align: center;
    }
    .loginbox {
        width: 300px;
        min-height: 385px;
        margin: 0 auto;
        background-color: var(--white);
        border-radius: 20px;
        display: flex;
        flex-direction: column;
        transform: translateY(30%);
        align-items: center;
    }
    .image_dragon {
        padding-bottom: 10px;
    }
    .campo {
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
        background-color: var(--black);
        color: var(--white);
        border: none;
        border: 3px solid var(--black);
        border-radius: 15px;
        margin-bottom: 25px;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
    }

    .entrar:hover {
        background-color: var(--white);
        color: var(--black);
        border: 3px solid var(--black);
    }
    .senha {
        padding-top: 5px;
        padding-bottom: 15px;
    }
    .senha a {
        color: var(--black);
    }
</style>
