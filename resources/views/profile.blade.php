@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection

@section('content')
    <form action="/logout" method="post" class="form-logout">
        @csrf
        <input type="submit" class="logout-button" value="logout">
    </form>
@endsection
