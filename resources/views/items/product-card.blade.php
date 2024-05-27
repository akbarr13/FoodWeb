@foreach ($products as $product)
    <div class="product-card">
        <a href="/detail/{{ $product->id }}">
            <img src="{{ asset('product-images/' . $product->image) }}" class="product-img" width="100px" alt="product-1">
            <a href="/detail/{{ $product->id }}">{{ $product->name }}</a>
            <p>Rp {{ number_format($product->price, 0, ',', '.') }}</p>

            <a href="/cart/add/{{$product->id}}"><button class="btn-add-cart">Tambahkan ke Keranjang</button></a>
        </a>
    </div>
@endforeach
