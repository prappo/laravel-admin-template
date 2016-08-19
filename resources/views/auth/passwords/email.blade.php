@extends('layouts.auth')
@section('form')
    @section('hint','Reset Password')
<!-- Main Content -->

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}

                        <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">



                                <input id="email" placeholder="Enter your Email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="row">


                                <button type="submit" class="btn btn-primary btn-block btn-flat">Reset Password</button>

                            <!-- /.col -->
                        </div>
                    </form>
                </div>

@endsection
