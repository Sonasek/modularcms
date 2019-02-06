@extends('layouts.app')

@section('content')
    <div class="columns is-mobile is-centered m-t-100">
        <div class="column is-4">
            <div class="card">
                <div class="card-content">
                    <h1 class="title">{{ __('Login') }}</h1>    
                    <div class="content">
                        <form method="POST" action="{{ route('login') }}" role="form">
                            @csrf
                            <div class="field">
                                <label for="email" class="label">{{ __('E-Mail Address') }}</label>
                                <div class="control has-icons-left">
                                    <input type="text" id="email" class="input {{ $errors->has('email') ? ' is-danger' : '' }}" name="email" value="{{ old('email') }}" placeholder="example@modularcms.dev" autofocus>
                                    <span class="icon is-small is-left"><i class="fa fa-envelope"></i></span>
                                </div>
                                @if ($errors->has('email'))
                                    <p class="help is-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                            <div class="field">
                                <label for="password" class="label">{{ __('Password') }}</label>
                                <div class="control has-icons-left">
                                    <input type="text" id="password" class="input {{ $errors->has('password') ? ' is-danger' : '' }}" name="password" value="{{ old('password') }}">
                                    <span class="icon is-small is-left"><i class="fa fa-key"></i></span>
                                </div>
                                @if ($errors->has('password'))
                                    <p class="help is-danger">{{ $errors->first('password') }}</p>
                                @endif
                            </div>
                            <b-checkbox name="remember" class="m-t-20 m-b-30">Remember Me</b-checkbox>
                            <div class="field">
                                <div class="control">
                                    <button class="button is-link is-outlined is-fullwidth">
                                        Login
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @if (Route::has('password.request'))
                <h5 class="has-text-centered m-t-20"><a href="{{route('password.request')}}" class="is-muted">{{ __('Forgot Your Password?') }}</a></h5>
            @endif
        </div>
    </div>
@endsection