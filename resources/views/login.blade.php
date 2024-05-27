@extends('layout.main')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection


@section('content')
    <div class="container">
        <h2 class="login-title">Login</h2>
        <div class="login-container">
            <form action="/login" method="post">
                @csrf
                <label for="username">Username</label>
                <input type="text" name="username" id="username-form">
                <label for="password">Password</label>
                <input type="password" name="password" id="password-form">
                <input type="submit" class="login-submit">
            </form>
        </div>
    </div>
@endsection
