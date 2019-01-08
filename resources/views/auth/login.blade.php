@extends('layouts.master')
<style>
    .login-btn{
        background-color: #363636;
        border: none;
        color: white;
        padding: 10px 0 10px 0;
        font-weight: bold;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 40px;
        width: 100%;
    }
    .emailError{
        color: red;
        font-size: 12px;
        margin-right: 65px;
    }
</style>
@section('content')
<div class="container">
    <div class="div-center">
        <div class="text-center">
            <br /> <br />
            <h1>Login</h1>
            <p>Dont have an Account? <a href="{{ route('register') }}">Sign Up</a></p>
            <form method="POST" class="loginForm" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <lable>E-mail</lable>
                    <input id="email" type="email" placeholder="Type in your email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback emailError" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <lable>Password</lable>
                    <input id="password" type="password" placeholder="Type in your password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class=" col-sm-12 pull-left text-left terms">
                            @if (Route::has('password.request'))
                                <a style="color: #000000" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
                <br />
                <div class="form-group">
                    <button type="submit" class="login-btn">
                        {{ __('Login') }}
                    </button>
                </div>
                <div class="form-group">
        <span class="line">
           <h2><span>Or</span></h2>
        </span>
                </div>
                <div class="form-group">
                    <input name="" type="button" value="Sign up with gmail" class="gmail" />
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
