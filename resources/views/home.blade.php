@extends('layouts.master')

@section('content')

    <div class="container"><br /><br />
        <h1 class="text-center">Let's create your first test</h1>
        <div class="testbox">
            <div class="col-sm-6">
                <div class="boxproto"><img src="{{asset('vendor/images/prototype.jpg')}}" />
                    <h2>Prototype</h2>
                    <p>Invision URL or Principle</p>
                    <button>Create test</button></div>
            </div>
            <div class="col-sm-6">
                <div class="boxproto">
                    <img src="{{asset('vendor/images/website.jpg')}}" />
                    <h2>Website</h2>
                        <p>A live website you want to test</p>
                        <button onclick="window.location.href='{{url('create/user/test')}}'">Create test</button>
                </div>
            </div>
        </div>
    </div>
@endsection
