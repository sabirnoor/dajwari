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
                                    <span style="float: right;"><a href="{{url('changeUser')}}">CHANGE</a></span>
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
                                                        <input type="password" disabled="disabled" autocomplete="off" placeholder="Enter Password" class="pass">
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
                                <h3><span id="showcoupon" role="button" data-toggle="collapse" href="#DeliveryAddress" aria-expanded="false" aria-controls="DeliveryAddress">2. Delivery Address</span>
                                <span style="float: right;"><a href="javascript:void(0);" style="display: none;" class="CHANGEDELIVERY">CHANGE</a></span>                                
                                </h3>
                                <div class="collapse" id="DeliveryAddress" style="display: none;">
                                    <div class="well">
                                        <div id="checkout_coupon" class="coupon-checkout-content">
                                            <div class="coupon-info">
                                                <form id="shipingaddress">
                                                    <div class="form-row">
                                                      <div class="form-group col-md-6">
                                                        <label for="name">Name</label>
                                                        <input type="text" class="form-control" id="name" name="name" placeholder="Email" value="{{@$Delivery->name}}">
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label for="mobile">Mobile</label>
                                                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="10-digit mobile number" value="{{@$Delivery->mobile}}">
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label for="pincode">Pin Code</label>
                                                        <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Pin Code" value="{{@$Delivery->zipcode}}">
                                                      </div>
                                                       <div class="form-group col-md-6">
                                                        <label for="Locality">Locality</label>
                                                        <input type="text" class="form-control" id="Locality" name="Locality" placeholder="Locality" value="{{@$Delivery->locality}}">
                                                      </div>
                                                      <div class="form-group col-md-12">
                                                        <label for="Address">Address</label>
                                                        <textarea class="form-control" name="Address" id="Address">{{@$Delivery->address}}</textarea>
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label for="cityTown">City/District/Town</label>
                                                        <input type="text" class="form-control" id="cityTown" name="cityTown" placeholder="City/District/Town" value="{{@$Delivery->city}}">
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label for="state">State</label>
                                                        <input type="text" class="form-control" id="state" name="state" placeholder="State" value="{{@$Delivery->state}}">
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label for="Landmark">Landmark (Optional)</label>
                                                        <input type="text" class="form-control" id="Landmark" name="Landmark" placeholder="Landmark (Optional)" value="{{@$Delivery->landmark}}">
                                                      </div>
                                                       <div class="form-group col-md-6">
                                                        <label for="Alternateno">Alternate Phone (Optional)</label>
                                                        <input type="text" class="form-control" id="Alternateno" name="Alternateno" placeholder="Alternate Phone (Optional)" value="{{@$Delivery->AlternatePhone}}">
                                                      </div>
                                                      
                                                    </div>
                                                    
                                                    <p class="form-row">					
                                                        <input type="submit" value="Continue">
                                                        <label>
                                                            <input type="radio" value="Home" <?=(@$Delivery->addresstype=='Home')?'checked':''?> name="addresstype">
                                                            Home (All day delivery)
                                                        </label>
                                                        <label>
                                                            <input type="radio" value="Work" <?=(@$Delivery->addresstype=='Work')?'checked':''?> name="addresstype">
                                                            Work (Delivery between 10 AM - 5 PM)
                                                        </label>
                                                    </p>
                                                    <div class="form-group">
                                                      
                                                    </div>
                                                    <input type="hidden" name="address_id" id="address_id" value="{{@$Delivery->id}}">
                                                  </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ACCORDION END -->
                                
                                <!-- ACCORDION START -->
                                <h3><span id="showOrderSummary" role="button" data-toggle="collapse" href="#OrderSummary" aria-expanded="false" aria-controls="OrderSummary">3. Order Summary</span>
                                <span style="float: right;"><a href="javascript:void(0);" style="display: none;" class="CHANGEORDER">CHANGE</a></span>
                                </h3>
                                <div class="collapse" id="OrderSummary" style="display: none;">
                                    <div class="well">
                                        <div id="checkout_coupon" class="coupon-checkout-content">
                                            <div class="coupon-info">
                                                <form action="#">
                                                    <p class="checkout-coupon">
                                                        <input type="text" placeholder="Coupon code">
                                                        <input type="button" class="ContinueOrder" value="Continue">
                                                    </p>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ACCORDION END -->
                                
                                <!-- ACCORDION START -->
                                <h3><span id="showPaymentOption" role="button" data-toggle="collapse" href="#PaymentOption" aria-expanded="false" aria-controls="PaymentOption">4. Payment Option</span>
                                    <span style="float: right;"><a href="javascript:void(0);" style="display: none;" class="CHANGEPAYMENT">CHANGE</a></span>
                                </h3>
                                <div class="collapse" id="PaymentOption" style="display: none;">
                                    <div class="well">
                                        <div id="checkout_coupon" class="coupon-checkout-content">
                                            <div class="coupon-info">
                                                <form action="{{url('orderPlace')}}" method="post">
                                                    {{ csrf_field() }}
                                                    <p class="form-row">	
                                                        <label>
                                                            <input type="radio" value="Online" name="paymenttype">
                                                            Online
                                                        </label>
                                                        <label>
                                                            <input type="radio" value="COD" name="paymenttype">
                                                            Cash On Delivery
                                                        </label>
                                                        <input type="submit" value="Continue">
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

<input type="hidden" value="{{@Session::get('user')->id}}" class="SessionData">
<input type="hidden" value="{{url('checkuser')}}" class="checkuser">
<input type="hidden" value="{{url('saveaddress')}}" class="saveaddress">
@endsection
