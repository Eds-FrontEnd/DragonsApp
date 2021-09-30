@extends('layouts.app') @section('content')
<div>
    <div>
        <div>
            <div>
                <div>{{ __('Reset Password') }}</div>

                <div class="loginbox">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}" />

                        <div>
                            <label for="email">{{ __('E-Mail Address') }}</label>

                            <div>
                                <input id="email" type="email" class="campo @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus />

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="password">{{ __('Password') }}</label>

                            <div>
                                <input type="password" class="campo @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" />

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>

                            <div>
                                <input id="password-confirm" type="password" class="campo" name="password_confirmation" required autocomplete="new-password" />
                            </div>
                        </div>

                        <div>
                            <div>
                                <button type="submit" class="cadastrar">
                                    {{ __('Reset Password') }}
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
        height: 430px;
        margin: 0 auto;
        background-color: var(--white);
        border-radius: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        transform: translateY(15%);
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
