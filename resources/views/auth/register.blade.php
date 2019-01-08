@extends('layouts.master')

@section('content')
    <style>
        .register{
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
        .passError{
            color: red;
            font-size: 12px;
            margin-right: 69px;
        }
        .emailError{
            color: red;
            font-size: 12px;
            margin-right: 134px;
        }
    </style>
<div class="container">
    <div class="div-center">
        <div class="text-center">
            <br /> <br />
            <h1>Sign Up</h1>
            <p>Already have an Account? <a href="{{url('/login')}}">Log in</a></p>
            <form method="POST" class="loginForm" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <lable>Name</lable>
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <lable>E-mail</lable>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback emailError" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <lable>Password</lable>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback passError" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <lable>Confirm Password</lable>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div  class=" col-sm-1 pull-left text-left"><input name="" type="checkbox" value="" class="checkbox" /></div>
                        <div class=" col-sm-11 pull-left text-left terms"> I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></div>
                    </div>
                </div>
                <br />

                <div class="form-group">
                    <button type="submit" class="register btn btn-primary">
                        {{ __('Register') }}
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

{{--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>--}}
@endsection
