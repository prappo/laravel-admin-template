@extends('layouts.auth')
@section('title','FBSupport | Register')
@section('hint','Register a new membership')
@section('form')
    <form method="POST" action="{{ url('/register') }}">
        {{ csrf_field() }}

        <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
            <input placeholder="Your Full name" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>

            @if ($errors->has('name'))<span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
            @endif
        </div>

        <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
            <input placeholder="Email" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

            @if ($errors->has('email'))<span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
            @endif

        </div>

        <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
            <input id="password" placeholder="Password" type="password" class="form-control" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            @if ($errors->has('password'))
                <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
            @endif
        </div>

        <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation">
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>

            @if ($errors->has('password_confirmation'))<span
                    class="help-block"><strong>{{ $errors->first('password_confirmation') }}</strong></span>
            @endif
        </div>

        <div class="row">
            <div class="col-xs-8">

            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
            </div>
            <!-- /.col -->
        </div>
    </form>

@endsection
