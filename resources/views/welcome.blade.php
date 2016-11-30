@extends('layouts.layout')

@section('title')
@endsection

@section('content')

@include('layouts.message-block')


    <div class="row">
        <div class="col-md-6">
            <h3>Sign Up</h3>
            <form action="{{ url('signup') }}" method="post">
                <div class="form-group {{ $errors->has('email') ? 'has-error': '' }}">
                    <label for="email">Your E-Mail</label>
                    <input class="form-control" value="{{ Request::old('email') }}" type="text" name="email" id="email"/>
                </div>
                <div class="form-group {{ $errors->has('first_name') ? 'has-error': '' }}">
                    <label for="first_name">Your First Name</label>
                    <input class="form-control" value="{{ Request::old('first_name')}}" type="text" name="first_name" id="first_name"/>
                </div>
                
                <div class="form-group {{ $errors->has('password') ? 'has-error': '' }}">
                    <label for="Password">Your Password</label>
                    <input class="form-control" value="{{ Request::old('password')}}" type="password" name="password" id="password"/>
                </div>                
                
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token()}}"/>
            </form>
        </div>
        
        <div class="col-md-6">
            <h3>Sign in</h3>
            <form action="{{ url('signin') }}" method="post">
                <div class="form-group {{ $errors->has('email') ? 'has-error': '' }}">
                    <label for="email">Your E-Mail</label>
                    <input class="form-control" type="text" name="email" id="email"/>
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error': '' }}">
                    <label for="password">Your Password</label>
                    <input class="form-control" type="password" name="password" id="password"/>
                </div>                
                
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token()}}"/>
            </form>
        </div>        
        
        
  
        
    </div>
    
    
    
@endsection