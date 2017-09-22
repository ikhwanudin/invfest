@extends('layouts.master')

@section('init')
<div class="container" style="margin-top:5em;">
    <div class="columns">
        <div class="column is-4 is-offset-4">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        Register
                    </p>
                </header>
                <div class="card-content">
                    <div class="content">
                        <form method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <b-field label="Kategori Lomba">
                                <b-select name="kategori" placeholder="Pilih Kategori" required expanded>
                                    <option value="ctf">Capture The Flag</option>
                                    <option value="prog">Programming Contest Competition</option>
                                    <option value="web">Web Design Competition</option>
                                    <option value="andro">Android Aplication Competition</option>
                                    <option value="design">Design Product Competition</option>
                                </b-select>
                            </b-field>
                            <b-field label="Nama"
                                type="{{ $errors->has('ketua_tim') ? ' is-danger' : '' }}"
                                @if ($errors->has('ketua_tim'))
                                    message="{{ $errors->first('ketua_tim') }}"
                                @endif 
                            >
                                <b-input type="text" name="ketua_tim" required></b-input>
                            </b-field>

                            <b-field label="Email"
                                type="{{ $errors->has('email') ? ' is-danger' : '' }}"
                                @if ($errors->has('email'))
                                    message="{{ $errors->first('email') }}"
                                @endif 
                            >
                                <b-input type="email" name="email" required></b-input>
                            </b-field>
                            <b-field label="Password"
                                type="{{ $errors->has('password') ? ' is-danger' : '' }}"
                                @if ($errors->has('password'))
                                    message="{{ $errors->first('password') }}"
                                @endif 
                            >
                                <b-input type="password" name="password" password-reveal required></b-input>
                            </b-field>
                            <b-field label="Konfirmasi Password">
                                <b-input type="password" name="password_confirmation" password-reveal required></b-input>
                            </b-field>
                                
                            <div class="field is-grouped">
                                <button type="submit" class="button is-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- 
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
