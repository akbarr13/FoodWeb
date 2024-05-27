@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
@endsection


@section('content')
    <div class="container">
        <h1 class="section-title">Cart</h1>
        @if (count($items) < 1)
            <h3>No items in cart</h3>
        @else
            <table class="cart-table">
                <tr>
                    <th class="th-remove"></th>
                    <th class="th-image"></th>
                    <th class="th-name">Produk</th>
                    <th class="th-price">Harga</th>
                    <th class="th-qty">Jumlah</th>
                    <th>Subtotal</th>
                </tr>


                @foreach ($items as $item)
                    <tr>
                        <td><a class="remove-btn" href="/cart/remove/{{ $item->id }}"><img
                                    src="{{ asset('error.png') }}" width="25px" alt=""></a></td>
                        <td><img src="{{ asset('product-images/' . $item->product->image) }}" width="75px" alt="">
                        </td>
                        <td>
                            <h6 style="text-align: left !important">{{ $item->product->name }}</h6>
                        </td>
                        <td>
                            <h6>Rp. {{ number_format($item->product->price, 0, ',', '.') }}</h6>
                        </td>
                        <td class="qty-column">
                            <form method="POST" action="/cart/update/{{ $item->product->id }}" style="display:inline;">
                                @csrf
                                <input type="hidden" name="action" value="decrement">
                                <input type="hidden" name="qty" value="1">
                                <button type="submit">-</button>
                            </form>
                            <h6>{{ $item->qty }}</h6>
                            <form method="POST" action="/cart/update/{{ $item->product->id }}" style="display:inline;">
                                @csrf
                                <input type="hidden" name="action" value="increment">
                                <input type="hidden" name="qty" value="1">
                                <button type="submit">+</button>
                            </form>
                        </td>
                        <td>
                            <h6>Rp. {{ number_format($item->qty * $item->product->price, 0, ',', '.') }}</h6>
                        </td>
                    </tr>
                @endforeach
        @endif


        </table>
        <div class="pagination">
            {{ $items->links() }}
        </div>
        <div class="bottom">
            <div class="left-bottom">
                <h3 class="total-title">Total pembayaran</h3>
                <h6 class="total-price">Rp. {{ number_format($total_pembayaran, 0, ',', '.') }}</h6>
            </div>
            <div class="right-bottom">
                <a href="/checkout"><input type="submit" class="checkout-button" value="            Bayar sekarang"></a>
            </div>
        </div>
    </div>
@endsection
