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
    <div class="container">
        <div class="createbox-center">
            <div class="text-center">
                <br /> <br />
                <h1>Create a User test</h1>
                {!! Form::open(array('method' => 'post','url' => 'create/test', 'class'=>'createForm')) !!}
                    <div class="form-group">
                        <input name="testname" type="text" value="" placeholder="Name this test"   />
                    </div>
                    <div class="form-group">
                        <input name="prototypeurl" type="text" value="" placeholder="Prototype URL Principal or Invision (url)"   />
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6 text-left textadd pull-left">ADD A TASK FLOW</div>
                            <div class="col-sm-6">
                                <div class="template pull-right">Template</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input name="task[]" type="text" value="" placeholder="1. Type in a task"   />
                    </div>
                    <div class="form-group">
                        <input name="task[]" type="text" value="" placeholder="1. Type in a task"   />
                    </div>
                    <div class="form-group">
                        <input type="button" value="Add A task" placeholder=" "/>
                    </div>
                <br /><br />
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12 text-left textadd pull-left">INCLUDE FOLLOW UP QUESTIONS</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input name="questions[]" type="text" value="" placeholder="1. What frustrated you most about this site?"   />
                    </div>
                    <div class="form-group">
                        <input name="questions[]" type="text" value="" placeholder="2. How would you improve anything?"   />
                    </div>
                    <div class="form-group">
                        <input name="questions[]" type="text" value="" placeholder="3. What did you like about this?"   />
                    </div>
                    <div class="form-group">
                        <input name="questions[]" type="text" value="" placeholder="4.  How likely are you to recommend this to a friend or colleague? (0=Not likely, 10=Very Likely)"   />
                    </div>
                    <div class="form-group">
                        <input name=" " type="text" value="" placeholder=" "   />
                        Add a follow up question
                    </div>

                    <button class="button">Create</button>
                {{ Form::close() }}
                <br /><br /><br />
            </div>
        </div>
    </div>
@endsection
