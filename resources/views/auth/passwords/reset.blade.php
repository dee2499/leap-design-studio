@extends('layouts.master')

<style>
    .reset-pass{
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
        margin-right: 118px;
    }
</style>
@section('content')
<div class="container">
    <div class="div-center"><div class="text-center"> <br /> <br />
            <h1>Reset your password</h1>
            <p style="font-size:14px;">Create a new password</p>
            <form class="loginForm" method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group"><lable>Email</lable>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback emailError" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group"><lable>Create a  new password</lable>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group"><lable>Create a  new password</lable>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="reset-pass">
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
