@extends('layouts.master')
<style>
    .button{
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
</style>
@section('content')
    <div class="container"><br /><br />
        <div class=" col-sm-6 pull-right"><button class="btnpurple large"> <i class="fa fa-check"></i> Copied to clipboard!</button></div>
        <div class="createbox-center"><div class="text-center"> <br /> <br />
                <h1>Test created!</h1>
                <p style="font-family:Arial, Helvetica, sans-serif;">Share this test with people you already know. <strong>Preview your test live</strong>.</p>
                <form class="createForm">
                    <div class="form-group">
                        <input name="url" type="text" value="" placeholder="{{URL::to('/').'/'.$id}}"   />
                        <button class="btnpurple">Copy public URL</button>
                    </div>
                </form>
                <br /><br /><br />
            </div>
        </div>
    </div>
@endsection
