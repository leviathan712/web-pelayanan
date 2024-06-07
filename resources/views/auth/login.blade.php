@extends('layouts.app')

@section('content')
    <div class="login-container">
        <form class="login-form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <input type="text" name="email" placeholder="Email" class="input-field">
                @error('email')
                    <span role="alert" style="color: red;">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input name="password" type="password" placeholder="Password" class="input-field" required>
                @error('password')
                    <span role="alert" style="color: red;">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <input class="form-check-input mt-3" type="checkbox" name="remember" id="remember"
                {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label mt-3 mb-2" for="remember">
                {{ __('Remember Me') }}
            </label>
            <div class="button-container">
                <button class="register-button" type="button">
                    <a href="{{ route('register') }}" style="color: black; font-style: none;">Register</a>
                </button>
                <button class="login-button" type="submit">Login</button>
            </div>
            <div class="row mb-0">
                <div class="col-md-8 offset-md-4">

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
@endsection


@section('page-css')
    <style>
        @media(min-width: 769px) {
            .login-container {
                background-color: #fff;
                border-radius: 8px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                overflow: hidden;
                width: 710px;
                margin-left: auto;
                margin-right: auto;
                margin-top: 50px;
                padding: 33px;
            }
        }

        @media(max-width: 768px) {
            .login-container {
                background-color: #fff;
                border-radius: 8px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                overflow: hidden;
                width: 450px;
                margin-left: auto;
                margin-right: auto;
                margin-top: 50px;
                padding: 33px;
            }
        }

        .login-form {
            padding: 20px;
            box-sizing: border-box;
        }

        .input-field {
            width: 100%;
            padding: 12px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-top: 20px;
            background-color: #fff;
            color: #333;
            outline: none;
            transition: border-color 0.3s, background-color 0.3s;
        }

        .input-field:hover,
        .input-field:focus {
            border-color: #3498db;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
        }

        .login-button,
        .register-button {
            flex: 1;
            padding: 12px;
            box-sizing: border-box;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-right: 10px;
        }

        .login-button {
            background-color: #3498db;
            color: #fff;
        }

        .login-button:hover {
            background-color: #2980b9;
        }

        .register-button {
            /* background-color: #babfbb; */
            stroke: #333 color: #FFF;
        }

        .register-button:hover {
            color: #3498db;
        }

        @media screen and (max-width: 600px) {
            .login-container {
                width: 90%;
            }
        }
    </style>
@endsection
