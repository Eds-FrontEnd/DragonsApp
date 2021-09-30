<div>
    <div>
        <div>
            <div class="loginbox">
                <a class="voltar" href="{{ url('http://127.0.0.1:8000') }}">←</a>
                <div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div>
                            <h1 class="title">Criar conta</h1>

                            <div>
                                <input id="name" type="text" class="campo @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Digite seu nome..." />

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <div>
                                <input type="email" class="campo @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Digite seu e-mail..." />

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

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

                        <div>
                            <div>
                                <input type="password" class="campo" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme sua senha..." />
                            </div>
                        </div>

                        <div>
                            <div>
                                <button type="submit" class="atualizar">
                                    {{ __('Cadastrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    body {
        background-color: var(--red) !important;
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
        transition: all 0.3s ease-in-out;
    }

    .atualizar:hover {
        background-color: var(--white);
        color: var(--black);
        border: 3px solid var(--black);
    }
    .voltar {
        font-size: 35px;
        color: var(--black);
        float: left;
        margin-top: 10px;
        margin-left: -210px;
        list-style: none;
        text-decoration: none;
    }
    .voltar:hover {
        font-size: 35px;
        color: var(--black);
        float: left;
        margin-left: -210px;
        list-style: none;
        text-decoration: none;
    }

    .title {
        font-size: 25px;
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
        min-height: 430px;
        margin: 0 auto;
        background-color: var(--white);
        border-radius: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        transform: translateY(12%);
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
