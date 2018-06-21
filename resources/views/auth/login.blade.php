@extends('layouts.default',['title'=>'Login'])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading" style="text-transform: uppercase;font-size: 15px;">
                    {{ __('Login') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group {{$errors->has('name')? 'has-error':''}}">
                            <label for="name" class="control-label">{{ __('E-Mail Address') }}</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    {{ $errors->first('name') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group {{$errors->has('password')? 'has-error':''}}">
                            <label for="name" class="control-label">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        {{ $errors->first('password') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">
                                    <span class="glyphicon glyphicon-log-in"></span>
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
