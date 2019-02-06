@extends('layouts.app')

@section('content')
    <div class="columns is-mobile is-centered m-t-100">
        <div class="column is-4">
            <div class="card">
                <div class="card-content">
                    <h1 class="title">{{ __('Register') }}</h1>    
                    <div class="content">
                        <form method="POST" action="{{ route('register') }}" role="form">
                            @csrf
                            <div class="field">
                                <label for="name" class="label">{{ __('Name') }}</label>
                                <div class="control has-icons-left">
                                    <input type="text" id="name" class="input {{ $errors->has('name') ? ' is-danger' : '' }}" name="name" placeholder="John Doe" autofocus>
                                    <span class="icon is-small is-left"><i class="fa fa-envelope"></i></span>
                                </div>
                                @if ($errors->has('name'))
                                    <p class="help is-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                            <div class="field">
                                <label for="email" class="label">{{ __('E-Mail Address') }}</label>
                                <div class="control has-icons-left">
                                    <input type="text" id="email" class="input {{ $errors->has('email') ? ' is-danger' : '' }}" name="email" placeholder="example@modularcms.dev" >
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