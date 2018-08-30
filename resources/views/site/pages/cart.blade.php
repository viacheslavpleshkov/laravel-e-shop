@extends('site.layouts.main')

@section('title', 'Shopping Cart')

@section('content')

    <div class="cart-items">
        <div class="container">
            <div class="dreamcrub">
                <ul class="breadcrumbs">
                    <li class="home">
                        <a href="index.html" title="Go to Home Page">Home</a>&nbsp;
                        <span>&gt;</span>
                    </li>
                    <li class="women">
                        Cart
                    </li>
                </ul>
                <ul class="previous">
                    <li><a href="index.html">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <h2>MY SHOPPING BAG ({{ Cart::count() }})</h2>
            @if (session('success'))
                <h3 class="text-center btn-success">{{ session('success') }}</h3>
            @endif
            <div class="cart-gd">
                @foreach(Cart::content() as $item)
                    <div class="cart-header">
                        <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="close1"></button>
                        </form>

                        <div class="cart-sec simpleCart_shelfItem">
                            <div class="cart-item cyc">
                                <img src="{{ asset('storage/'.$item->options->images) }}" class="img-responsive"
                                     alt="{{ $item->name }}">
                            </div>
                            <div class="cart-item-info">
                                <h3><a href="{{ route('site.products',$item->options->url) }}">{{ $item->name }}</a>
                                </h3>
                                <ul class="qty">
                                    <li><p>Min. order value:</p></li>
                                    <li><p>FREE delivery</p></li>
                                </ul>
                                <div class="delivery">
                                    <p>Service Charges : $ {{ $item->price }}</p>
                                    <span>Delivered in 1-1:30 hours</span>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
