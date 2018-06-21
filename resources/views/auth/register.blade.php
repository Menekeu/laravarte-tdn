@extends('layouts.default',['title'=>'Register'])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading" style="text-transform: uppercase;font-size: 15px;">
                    {{ __('Register') }}
                </div>

                <div class="panel-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group {{$errors->has('name')? 'has-error':''}}">
                            <label for="name" class="form-label">{{ __('Name') }}</label>

                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                {!! $errors->first('name','<span class="help-block">:message</span>') !!}
                            @endif
                        </div>

                        {{--<div class="form-group row">--}}
                            {{--<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>--}}

                                {{--@if ($errors->has('name'))--}}
                                    {{--<span class="invalid-feedback">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <div class="form-group {{$errors->has('email')? 'has-error':''}}">
                            <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>

                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                {!! $errors->first('email','<span class="help-block">:message</span>') !!}
                            @endif
                        </div>

                        <div class="form-group {{$errors->has('password')? 'has-error':''}}">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                {!! $errors->first('password','<span class="help-block">:message</span>') !!}
                            @endif
                        </div>

                        <div class="form-group {{$errors->has('password-confirm')? 'has-error':''}}">
                            <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            {!! $errors->first('password-confirm','<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group">
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">
                                    <span class="glyphicon glyphicon-new-window"></span>
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
