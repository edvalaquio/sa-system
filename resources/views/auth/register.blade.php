@extends('layouts.app')

@push('styles')
    <style type="text/css">
        h2{
            font-size: 2em;
            display: flex;
            align-items: center;
        }

        .radio-buttons{
            display: flex;
            margin: 5px 0 20px 0;
        }

        .radio-buttons label{
            margin-right: 1em;
            border: 1px solid #DDD;
            border-radius: 4px;
            padding: 0 0.5em 0 0.25em;
        }
    </style>
@endpush

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m6 offset-m3 l4 offset-l4">
                <h2><i class="material-icons">add</i> Add account</h2>

                <form method="POST" action="{{ route('register') }}">
                    @csrf


                    <div class="input-field">
                        <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>
                        <label for="username">Username</label>
                    </div>

                    <div class="input-field">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>
                        <label for="name">Name</label>
                    </div>

                    @if ($errors->has('name'))
                        <span class="helper-text error">{{ $errors->first('name') }}</span>
                    @endif

                    <label class="amber-text">Gender</label>
                    <div class="radio-buttons">
                        <label>
                            <input type="radio" value="female" name="gender" checked>
                            <span>Female</span>
                        </label>
                        <label>
                            <input type="radio" value="male" name="gender">
                            <span>Male</span>
                        </label>
                    </div>

                    <div class="input-field">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                        <label for="email">E-mail Address</label>
                    </div>

                    @if ($errors->has('email'))
                        <span class="helper-text error">{{ $errors->first('email') }}</span>
                    @endif

                    <div class="input-field">
                        <input id="group" type="text" class="form-control{{ $errors->has('group') ? ' is-invalid' : '' }}" name="group" value="{{ old('group') }}" required>
                        <label for="group">Group</label>
                    </div>

                    <div class="input-field">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        <label for="password">Password</label>
                    </div>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

                    <div class="input-field">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        <label for="password-confirm">Confirm Password</label>
                    </div>

                    <button type="submit" class="btn btn-block amber accent-4"> Register </button>
                </form>
        </div>
    </div>
</div>
@endsection
