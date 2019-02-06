@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="notification is-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="columns is-mobile is-centered m-t-100">
        <div class="column is-4">
            <div class="card">
                <div class="card-content">    
                    <h1 class="title">{{ __('Reset Password') }}</h1>    
                    <div class="content">
                        <form method="POST" action="{{ route('password.email') }}" role="form">
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
                                <div class="control">
                                    <button class="button is-link is-outlined is-fullwidth">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <h5 class="has-text-centered m-t-20"><a href="{{route('login')}}" class="is-muted">Back to Login</a></h5>
        </div>
    </div>
@endsection