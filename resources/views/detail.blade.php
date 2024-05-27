@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection


@section('content')
    <div class="container">

        <img src="/product-images/{{ asset($product->image) }}" class="product-images" alt="">
        <div class="second-row">
            <h1>{{ $product->name }}</h1>
            <h5>Rp. {{ number_format($product->price, 0, ',', '.') }}</h5>
            <h6 style="margin-top: 50px">Deskripsi</h6>
            <p>
                {{ $product->description }}
            </p>

            @auth
                <a href="/cart/add/{{ $product->id }}"><input type="submit" class="add-button" value="Add to cart"></a>
            @endauth
            @guest
                <a href="/login"><input type="submit" class="add-button" value="Add to cart"></a>
            @endguest



        </div>


    </div>
@endsection
