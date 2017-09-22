@extends('layouts.master')

@section('init')
<div class="container" style="margin-top:5em;">
    <div class="columns">
        <div class="column is-3 is-offset-4">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        Log In
                    </p>
                </header>
                <div class="card-content">
                    <div class="content">
                        <form method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <b-field label="Email"
                                type="{{ $errors->has('email') ? ' is-danger' : '' }}"
                                @if ($errors->has('email'))
                                    message="{{ $errors->first('email') }}"
                                @endif 
                            >
                                <b-input type="email" name="email"></b-input>
                            </b-field>
                            <b-field label="Password"
                                type="{{ $errors->has('password') ? ' is-danger' : '' }}"
                                @if ($errors->has('password'))
                                    message="{{ $errors->first('password') }}"
                                @endif 
                            >
                                <b-input type="password" name="password"></b-input>
                            </b-field>
                            <b-checkbox style='margin-bottom: 1em;' name="remember" {{ old('remember') ? 'checked' : '' }} >
                                Remember Me
                            </b-checkbox>
                                
                            <div class="field is-grouped">
                                <button type="submit" class="button is-primary">Login</button>
                                <a class="button is-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
