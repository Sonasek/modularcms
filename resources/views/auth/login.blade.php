@extends('layouts.app')

@section('content')
    <div class="columns is-mobile is-centered m-t-100">
        <div class="column is-4">
            <div class="card">
                <div class="card-header">
                    <p class="card-header-title">{{ __('Login') }}</p>    
                </div>
                <div class="card-content">
                    <div class="content">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="field">
                                <label for="email" class="label">{{ __('E-Mail Address') }}</label>
                                <div class="control has-icons-left">
                                    <input type="text" id="email" class="input {{ $errors->has('email') ? ' is-danger' : '' }}" name="email" value="{{ old('email') }}" placeholder="example@modularcms.dev" required autofocus>
                                    <span class="icon is-small is-left"><i class="fa fa-envelope"></i></span>
                                </div>
                                @if ($errors->has('email'))
                                    <p class="help is-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                            <div class="field">
                                <label for="password" class="label">{{ __('Password') }}</label>
                                <div class="control has-icons-left">
                                    <input type="text" id="password" class="input {{ $errors->has('password') ? ' is-danger' : '' }}" name="password" value="{{ old('password') }}" required>
                                    <span class="icon is-small is-left"><i class="fa fa-key"></i></span>
                                </div>
                                @if ($errors->has('password'))
                                    <p class="help is-danger">{{ $errors->first('password') }}</p>
                                @endif
                            </div>
                            <b-checkbox name="remember" class="m-t-20 m-b-20">Remember Me</b-checkbox>
                            <div class="field">
                                <div class="control">
                                    <button class="button is-link is-outlined">
                                        Login
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

<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

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
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

