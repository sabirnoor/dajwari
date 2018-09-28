@extends('layouts.layout')
@section('content')
<!-- header area end-->
<!-- search area -->
<div class="search-area">
    &nbsp;
</div>
<!-- search area  end-->
<!-- Main content  -->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="entry-header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="entry-header">
                                <h1 class="entry-title">My Cart ({{ Cart::instance('default')->count(false) }})</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cart-main-area">
                <div class="container">
                    <div class="row">
                        @if (session()->has('success_message'))
                            <div class="alert alert-success">
                                {{ session()->get('success_message') }}
                            </div>
                        @endif

                        @if (session()->has('error_message'))
                            <div class="alert alert-danger">
                                {{ session()->get('error_message') }}
                            </div>
                        @endif
                        @if (sizeof(Cart::content()) > 0)
                        <div class="col-md-12 col-sm-12 col-xs-12">				
                                <div class="table-content table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-thumbnail">Image</th>
                                                <th class="product-name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-quantity">Quantity</th>
                                                <th class="product-remove">Remove</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (Cart::content() as $item)
                                            <tr>
                                                <td class="product-thumbnail"><a href="#"><img src="{{$item->options->Image}}" alt=""></a></td>
                                                <td class="product-name"><a href="#">{{ $item->name }} <?php print_r($item->options->size); ?></a></td>
                                                <td class="product-price"><span class="amount">INR {{ $item->subtotal }}</span></td>
                                                <td class="product-quantity">
                                                    <input type="number" data-id="{{ $item->rowId }}" class="quantity" value="{{$item->qty}}"></td>
                                                <td class="product-remove"><form action="{{ url('cart', [$item->rowId]) }}" method="POST" class="side-by-side">
                                                    {!! csrf_field() !!}
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="submit" class="btn btn-danger btn-sm" value="X">
                                                </form></td>
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-7 col-xs-12">
                                        <div class="buttons-cart">
                                            <input type="submit" value="Update Cart">
                                            <a href="{{url('')}}">Continue Shopping</a>
                                        </div>
                                        <div class="coupon">
                                            <h3>Coupon</h3>
                                            <p>Enter your coupon code if you have one.</p>
                                            <input type="text" placeholder="Coupon code">
                                            <input type="submit" value="Apply Coupon">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-5 col-xs-12">
                                        <div class="cart_totals">
                                            <h2>Cart Totals</h2>
                                            <table>
                                                <tbody>
                                                    <tr class="cart-subtotal">
                                                        <th>Subtotal</th>
                                                        <td><span class="amount">INR {{ Cart::instance('default')->subtotal() }}</span></td>
                                                    </tr>
                                                    <tr class="shipping">
                                                        <th>Shipping</th>
                                                        <td>
                                                            <ul id="shipping_method">
                                                                <li>
                                                                    <label>
                                                                        Flat Rate: <span class="amount">Free</span>
                                                                    </label>
                                                                </li>
                                                                
                                                                <li></li>
                                                            </ul>
                                                            
                                                        </td>
                                                    </tr>
                                                    <tr class="order-total">
                                                        <th>Total</th>
                                                        <td>
                                                            <strong><span class="amount">INR {{ Cart::instance('default')->subtotal() }}</span></strong>
                                                        </td>
                                                    </tr>											
                                                </tbody>
                                            </table>
                                            <div class="wc-proceed-to-checkout">
                                                <a href="{{url('checkout')}}">Proceed to Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>	
                        </div>
                        @else
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h3>You have no items in your shopping cart</h3>
                            <div class="buttons-cart">
                                <a href="{{url('')}}">Continue Shopping</a>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
