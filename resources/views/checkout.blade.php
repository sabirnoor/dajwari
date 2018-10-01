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
<!--            <div class="entry-header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="entry-header">
                                <h1 class="entry-title">Checkout</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->

            <div class="coupon-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="coupon-accordion">
                                <!-- ACCORDION START -->
                                <h3>
                                    <span id="showlogin" role="button" data-toggle="collapse" href="#loginsignup" aria-expanded="false" aria-controls="loginsignup">1. Login OR Sign Up</span>
                                </h3>
                                <div class="collapse in" id="loginsignup">
                                    <div class="well">
                                        <div id="checkout-login" class="coupon-content">
                                            <div class="coupon-info">
                                                <p class="coupon-text">Easily Track Orders, Hassle free Returns | Get Relevant Alerts and Recommendation</p>
                                                <form>
                                                    <p class="form-row-first">
                                                        <label>Email/Mobile Number <span class="required">*</span></label>
                                                        <input type="text" autocomplete="off" autofocus placeholder="Enter Email/Mobile Number" class="user">
                                                    </p>
                                                    <p class="form-row-last setpass">
                                                        <label>Enter Password  <span class="required">*</span></label>
                                                        <input type="password" autocomplete="off" placeholder="Enter Password" class="pass">
                                                    </p>
                                                    <p class="form-row">					
                                                        <input type="submit" value="Continue" class="checkaccount">
                                                        <label>
                                                            <input type="checkbox">
                                                            Remember me 
                                                        </label>
                                                    </p>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ACCORDION END -->	
                                <!-- ACCORDION START -->
                                <h3><span id="showcoupon" role="button" data-toggle="collapse" href="#DeliveryAddress" aria-expanded="false" aria-controls="DeliveryAddress">2. Delivery Address</span></h3>
                                <div class="collapse" id="DeliveryAddress">
                                    <div class="well">
                                        <div id="checkout_coupon" class="coupon-checkout-content">
                                            <div class="coupon-info">
                                                <form action="checkout.html">
                                                    <p class="checkout-coupon">
                                                        <input type="text" placeholder="Coupon code">
                                                        <input type="submit" value="Apply Coupon">
                                                    </p>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ACCORDION END -->
                                
                                <!-- ACCORDION START -->
                                <h3><span id="showOrderSummary" role="button" data-toggle="collapse" href="#OrderSummary" aria-expanded="false" aria-controls="OrderSummary">3. Order Summary</span></h3>
                                <div class="collapse" id="OrderSummary">
                                    <div class="well">
                                        <div id="checkout_coupon" class="coupon-checkout-content">
                                            <div class="coupon-info">
                                                <form action="checkout.html">
                                                    <p class="checkout-coupon">
                                                        <input type="text" placeholder="Coupon code">
                                                        <input type="submit" value="Apply Coupon">
                                                    </p>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ACCORDION END -->
                                
                                <!-- ACCORDION START -->
                                <h3><span id="showPaymentOption" role="button" data-toggle="collapse" href="#PaymentOption" aria-expanded="false" aria-controls="PaymentOption">4. Payment Option</span></h3>
                                <div class="collapse" id="PaymentOption">
                                    <div class="well">
                                        <div id="checkout_coupon" class="coupon-checkout-content">
                                            <div class="coupon-info">
                                                <form action="checkout.html">
                                                    <p class="checkout-coupon">
                                                        <input type="text" placeholder="Coupon code">
                                                        <input type="submit" value="Apply Coupon">
                                                    </p>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ACCORDION END -->
                                
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- Main content end -->
        
        </div>
    </div>
</div>

<input type="hidden" value="{{url('checkuser')}}" class="checkuser">
@endsection
