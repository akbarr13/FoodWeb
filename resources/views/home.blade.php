@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection

@section('content')
    <div class="container">
        <aside class="filter-category">
            <h1>Kategori </h1>
            <div class="category-container">
                <a href="/" class="category-name">Semua Produk</a>
                @foreach ($categories as $category)
                    <a href="/p/{{ $category->slug }}" class="category-name">{{ $category->name }}</a>
                @endforeach
            </div>
        </aside>
        <section class="product-container">
            <section class="hero">
                <h1>Produk</h1>
                <hr>
            </section>
            <div class="product-list">
                @include('items.product-card')


            </div>

        </section>
    </div>
@endsection
