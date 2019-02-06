@extends('layouts.app')

@section('content')
    <div class="columns is-mobile is-centered m-t-100">
        <div class="column is-4">
            <div class="card">
                <div class="card-content">
                    <h1 class="title">{{ __('Reset Password') }}</h1>    
                    <div class="content">
                        <form method="POST" action="{{ route('password.update') }}" role="form">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="field">
                                <label for="email" class="label">{{ __('E-Mail Address') }}</label>
                                <div class="control has-icons-left">
                                    <input type="text" id="email" class="input {{ $errors->has('email') ? ' is-danger' : '' }}" name="email" placeholder="example@modularcms.dev" value="{{ $email ?? old('email') }}>
                                    <span class="icon is-small is-left"><i class="fa fa-envelope"></i></span>
                                </div>
                                @if ($errors->has('email'))
                                    <p class="help is-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                            <div class="columns">
                                <div class="field column is-6">
                                    <label for="password" class="label">{{ __('Password') }}</label>
                                    <div class="control has-icons-left">
                                        <input type="text" id="password" class="input {{ $errors->has('password') ? ' is-danger' : '' }}" name="password">
                                        <span class="icon is-small is-left"><i class="fa fa-key"></i></span>
                                    </div>
                                    @if ($errors->has('password'))
                                        <p class="help is-danger">{{ $errors->first('password') }}</p>
                                    @endif
                                </div>
                                <div class="field column is-6">
                                    <label for="password_confirmation" class="label">{{ __('Confirm Password') }}</label>
                                    <div class="control has-icons-left">
                                        <input type="text" id="password_confirmation" class="input {{ $errors->has('password_confirmation') ? ' is-danger' : '' }}" name="password_confirmation">
                                        <span class="icon is-small is-left"><i class="fa fa-unlock"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <button class="button is-link is-outlined is-fullwidth">
                                            {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <h5 class="has-text-centered m-t-20"><a href="{{route('login')}}" class="is-muted">Already have an account ?</a></h5>
        </div>
    </div>

@endsection
<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

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
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
-->
