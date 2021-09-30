@extends('layouts.app') @section('content')
<div>
    <div>
        <div>
            <div>
                <div class="loginbox">
                    @if (session('status'))
                    <div role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div>
                            <h1 class="title">Nova Senha</h1>
                            <div>
                                <input type="email" class="campo" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Digite seu e-mail.." />
                                <div>
                                    <div>
                                        <input id="password" type="password" class="campo @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Digite sua senha..." />

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div></div>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <div>
                                <button type="submit" class="cadastrar" onclick="enviar()">
                                    {{ __('Criar Nova Senha') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
<style>
    body {
        background-color: black !important;
    }

    main {
        background-color: var(--black);
    }

    *,
    *::before,
    *::after {
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
    .topo-lista h1 {
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
    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    .cadastrar {
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
        transition: all 0.3s ease-in-out;
    }

    .cadastrar:hover {
        background-color: var(--white);
        color: var(--black);
        border: 3px solid var(--black);
    }

    .title {
        font-size: 25px;
        padding-top: 35px;
        text-align: center;
        font-weight: 900px;
    }
    input {
        width: 100%;
        height: auto;
        margin: 0 auto;
        text-align: center;
    }
    .loginbox {
        width: 300px;
        height: 290px;
        margin: 0 auto;
        background-color: var(--white);
        border-radius: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        transform: translateY(35%);
        align-items: center;
    }
    .image_dragon {
        margin-top: -35px;
        padding-bottom: 20px;
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
    #cadastrar {
        display: none;
    }
</style>

<script>
    function enviar() {
        alert("Sua nova senha foi enviada por e-mail...");
        window.setTimeout(function () {
            window.location = "{{ url('login') }}";
        }, 100);
    }
</script>
