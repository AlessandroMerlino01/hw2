@extends('layouts.signup-in')

@section('title', 'hw2-login')

@section('section')
<h1>Benvenuto!</h1>
            <form name='login' method='post' action="{{ route('login') }}">
                @csrf
                <div class="username">
                    <div><label for='username'>Nome utente</label></div>
                    <div><input type='text' name='username'></div>
                </div>
                <div class="password">
                    <div><label for='password'>Password</label></div>
                    <div><input type='password' name='password'></div>
                </div>
                <div>
                    <input type='submit' value="Accedi">
                </div>
                <div>
                @isset ($error)
                    <span class='error'>{{$error}}</span>
                @endisset
                </div>
            </form>
            <div class="signup">Non hai un account? <a href="{{ route('register') }}">Iscriviti</a>
@endsection