@extends('layouts.layout')
@section('content')
<?php
$p_details = $ProductDetails['p_details'];
$p_size = $ProductDetails['p_size'];
$p_color = $ProductDetails['p_color'];
$p_image = $ProductDetails['p_image'];
?>
<!-- header area end-->
<!-- search area -->
<div class="search-area">
    <?php //echo '<pre>';print_r($getBrowseProductsList);die; ?>
    &nbsp;
</div>
<!-- search area  end-->
<!-- Main content  -->

<div class="prodect-details-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-5 col-sm-6 col-xs-12 ">

                        <div class="ubislider-image-container" data-ubislider="#slider4" id="imageSlider4"></div>
                        <div id="slider4" class="ubislider">
                            <a class="arrow prev"></a>
                            <a class="arrow next"></a>
                            <ul id="gal1" class="ubislider-inner">
                                @if (count($p_image) > 0)
                                @foreach ($p_image as $img)
                                <li> 
                                    <a> 
                                        <img class="product-v-img" src="{{img_src_path()}}products/{{$img}}"> 
                                    </a> 
                                </li>
                                @endforeach
                                @else
                                <li> 
                                    <a> 
                                        <img class="product-v-img" src="{{asset('public/img/product/2.jpg')}}"> 
                                    </a> 
                                </li>
                                @endif

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-6 col-xs-12">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="single-pro-details">
                                <div class="product-details-shop ">
                                    <h4 class="name" style="font-weight: 600; ">{{$p_details->p_name}}</h4>
                                    <div class="reating">
                                        <span class="star-reating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <a href="#">0 Review(s) / Add Your Review </a>
                                        </span>
                                    </div>
                                    <span class="amount">
                                        <i class="fa fa-rupee"></i>{{$p_details->p_price}}
                                    </span>
                                    <h4>Select your size</h4>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="stitching_sizes" checked="checked" type="radio" value="1">  Dressmaterial only &nbsp;&nbsp;&nbsp; <strong>No Extra Cost</strong>
                                        </div><div class="col-md-12">
                                            <input name="stitching_sizes" type="radio" value="2">  Standard stitching size &nbsp;&nbsp;&nbsp; <a href="#" > <strong>Size Guid</strong> </a>  <span style="color: red;"><i class="fa fa-rupee"></i> {{$p_details->stiching_cost}} </span>
                                            <!--                                            <div class="size-chart"></div>-->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-7 dajwari_product_Kameezsizes" style="padding-right: 5px; display:none;">
                                            <div class="country-select">
                                                <select name="Kameezsize" id="Kameezsize">
                                                    <option value="" selected="selected">--Kameez Size--</option>
                                                    <option value="36 inch Kameez size">36" Kameez size</option>
                                                    <option value="34 inch Kameez size">34" Kameez size</option>
                                                    <option value="32 inch Kameez size">32" Kameez size</option>
                                                    <option value="30 inch Kameez size">30 Kameez size</option>
                                                </select> 										
                                            </div>
                                        </div>

                                        <div class="col-md-5 dajwari_your_Height" style="padding-left: 5px; display:none;">
                                            <div class="country-select">

                                                <select name="Height" id="Height">
                                                    <option value="">--Height--</option>
                                                    <option value="4feet4inches">4 feet 4 inch</option>
                                                    <option value="4feet5inches">4 feet 5 inch</option>
                                                    <option value="4feet6inches">4 feet 6 inch</option>
                                                    <option value="4feet7inches">4 feet 7 inch</option>
                                                    <option value="4feet8inches">4 feet 8 inch</option>
                                                    <option value="4feet9inches">4 feet 9 inch</option>
                                                    <option value="4feet10inches">4 feet 10 inch</option>
                                                    <option value="4feet11inches">4 feet 11 inch</option>
                                                    <option value="5feet">5 feet</option>
                                                    <option value="5feet1inches">5 feet 1 inch</option>
                                                    <option value="5feet2inches">5 feet 2 inch</option>
                                                    <option value="5feet3inches">5 feet 3 inch</option>
                                                    <option value="5feet4inches">5 feet 4 inch</option>
                                                    <option value="5feet5inches">5 feet 5 inch</option>
                                                    <option value="5feet6inches">5 feet 6 inch</option>
                                                    <option value="5feet7inches">5 feet 7 inch</option>
                                                    <option value="5feet8inches">5 feet 8 inch</option>
                                                    <option value="5feet9inches">5 feet 9 inch</option>
                                                    <option value="5feet10inches">5 feet 10 inch</option>
                                                    <option value="5feet11inches">5 feet 11 inch</option>
                                                    <option value="6feet">6 feet</option>
                                                </select> 										
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="col-md-3" style="padding-right: 5px; margin-top: 10px;"><label>Color <span class="required">*</span></label></div>
                                        <div class="col-md-9">
                                            <div class="country-select" style="margin-top: 10px;">
                                                <select name="color" id="color">
                                                    <option value="9" selected="selected">--Select Color--</option>
                                                    @if (count($p_color) > 0)
                                                        @foreach ($p_color as $color)
                                                    <option value="{{$color}}">{{$color}}</option>
                                                        @endforeach
                                                    @endif
                                                </select> 										
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="col-md-3" style="padding-right: 5px;"><label>Size <span class="required">*</span></label></div>
                                        <div class="col-md-9">
                                            <div class="country-select">
                                                <select name="size" id="size">
                                                    <option value="" selected="selected">--Bust Size--</option>
                                                    @if (count($p_size) > 0)
                                                        @foreach ($p_size as $size)
                                                    <option value="{{$size}}">Bust {{$size}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-3"><h4>Fabric:</h4></div>
                                        <div class="col-md-9"><p>{{$p_details->fabric_name}}</p></div>

                                        <div class="col-md-3"><h4>Weight:</h4></div>
                                        <div class="col-md-9"><p>{{$p_details->p_weight}}</p></div>
                                    </div>







                                    <div class="product-action">
                                        <a class="add-tocart" href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add To Cart"><i class="fa fa-shopping-cart"></i> Add To Cart</a>
                                        <!--<a class="Checkout" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Checkout">Checkout</a>-->
                                        <!--<a href="#" data-toggle="tooltip" title="" data-original-title="Mail To"><i class="fa fa-envelope"></i></a>-->
                                        <a href="#" data-toggle="tooltip" title="" data-original-title="Wishlist"><i class="fa fa-heart"></i></a>
                                        <!--<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-retweet"></i></a>-->
                                    </div>	
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="single-pro-details">
                                <div class="product-details-shop " style="border:1px solid #ccc; padding: 5px;">
                                    <h4 class="name">Short Discriptios</h4>
                                    <p>{{$p_details->p_short_desc}} </p>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="single-pro-details">
                                <div class="product-details-shop" style="border:1px solid #ccc;padding: 5px; margin-top: 5px;">
                                    <h4 class="name">Delivery</h4>
                                    <p style="font-weight: 600; margin: 0 0 5px;">Shipping <span style="color:green">Free</span> </p>
                                    <p style="font-weight: 600; margin: 0 0 5px;">Delivery in {{$p_details->p_dispatch}} </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="single-pro-details">
                                <div class="product-details-shop" style="border:1px solid #ccc;padding: 5px; margin-top: 5px;">
                                <p style="font-size: 13px;">* Note: All prices are inclusive of cartage, service charges, packaging and all other costs involved with the process of ordering and delivering. All the taxes and customs if applied are not included in the invoice value.</p>
                                    <div class="pad-50"></div>
                                </div>
                            </div>
                        </div>



                        <div class="product-meta">
                            <div class="posted-in">
                                Category:
                                <a href="#"> Jumpers &amp; Cardigans.</a>
                            </div>
                            <div class="tagged-as">
                                Tags: 
                                <a href="#">Collection Women</a>,
                                <a href="#"> Fashion</a>,
                                <a href="#"> New</a>,
                                <a href="#"> Theme</a>,
                                <a href="#"> Top</a>.
                                <a href="#"> Wordpress</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-info">
                            <!-- Nav tabs -->
                            <ul class="info-tab" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Additional Information</a></li>
                                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Reviews (0)</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <h2>Product Description</h2>
                                    <p>Lorem ipsum dolor sit amete, consectetur news adipisicing sed do new fashion eiusmod tempor incididunt ut new labore etel dolore magna aliqua. Ut enim newsminimveniam, fashions quis nostrud exercitation new ullamco laboris nisi news commodo consequat consectetur
                                        adipisicing. Fashion double layering. Lorem ipsum dolor sit amete, consectetur news adipisicing sed do new fashion eiusmod tempor</p>
                                    <p>incididunt ut new labore etel dolore magna aliqua. Ut enim newsminimveniam, fashions quis nostrud exercitation new ullamco laboris nisi news commodo consequat consectetur adipisicing. Fashion double layering.</p>

                                    <p>Lorem ipsum dolor sit amete, consectetur news adipisicing sed do new fashion eiusmod tempor incididunt ut new labore etel dolore magna aliqua. Ut enim newsminimveniam, fashions quis nostrud exercitation new ullamco laboris nisi news commodo consequat consectetur
                                        adipisicing. Fashion double layering. Lorem ipsum dolor sit amete, consectetur news adipisicing sed do new fashion eiusmod tempor incididunt ut new labore etel dolore magna aliqua. Ut enim newsminimveniam, fashions quis nostrud exercitation new ullamco laboris nisi.</p>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <h2>Additional Information</h2>
                                    <table>
                                        <tbody><tr>
                                                <th>Brands</th>
                                                <td>Sam Sung</td>
                                            </tr>
                                            <tr> 	
                                                <th>Color</th>
                                                <td>Blue, Brown, Orange</td>
                                            </tr>
                                        </tbody></table>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="messages">
                                    <div class="reviews">
                                        <h3>Reviews</h3>
                                        <p>There are no reviews yet.</p>
                                        <h2>Be the first to review "Adipisicing sed do" </h2>
                                        <p>Your email address will not be published. Required fields are marked *</p>
                                        <h4>Your Rating</h4>
                                        <span>
                                            <a class="star-1" href="#">
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </a>
                                            <a class="star-2" href="#">
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </a>
                                            <a class="star-3" href="#">
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </a>
                                            <a class="star-4" href="#">
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </a>
                                            <a class="star-5" href="#">
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </a>
                                        </span>
                                        <h3>Your Review *</h3>
                                        <form>
                                            <textarea cols="45" rows="3"></textarea>
                                            Name *	
                                            <input class="full1" type="text" name="name"><br>
                                            Email * 
                                            <input class="full1" type="email" name="email"><br>
                                            <input type="submit" name="submit" value="Submit">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="related-product">
                                <h1>Related Products</h1>
                                <div class="pr-crosel related-style owl-carousel owl-theme owl-responsive-1000 owl-loaded">




                                    <div class="owl-stage-outer" ><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1170.67px;"><div class="owl-item active" style="width: 292.667px; margin-right: 0px;"><div class="col-md-4">
                                                    <div class="single-product">
                                                        <div class="product-image fix">
                                                            <a href="#">
                                                                <img src="{{asset('public/img/porduct-details/1.jpg')}}" alt="">
                                                                <img class="primary-2" src="{{asset('public/img/porduct-details/2.jpg')}}" alt="">
                                                            </a>
                                                            <div class="product-action">
                                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Quick view"><i class="fa fa-eye"></i></a>
                                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Wishlist"><i class="fa fa-heart"></i></a>
                                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                                            </div>
                                                            <div class="new-area">
                                                                <div class="new">
                                                                    <span class="text-new"><span>new</span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h4 class="name"><a href="#">Ullamco laboris nisi</a></h4>
                                                        <span class="amount">
                                                            <del><span class="amount-del">$170.00</span></del>
                                                            $185.00
                                                        </span>
                                                        <div class="add-to-cart">
                                                            <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div></div><div class="owl-item active" style="width: 292.667px; margin-right: 0px;"><div class="col-md-4">
                                                    <div class="single-product">
                                                        <div class="product-image fix">
                                                            <a href="#">
                                                                <img src="{{asset('public/img/porduct-details/1.jpg')}}" alt="">
                                                                <img class="primary-2" src="{{asset('public/img/porduct-details/2.jpg')}}" alt="">
                                                            </a>
                                                            <div class="product-action">
                                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Quick view"><i class="fa fa-eye"></i></a>
                                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Wishlist"><i class="fa fa-heart"></i></a>
                                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                                            </div>
                                                            <div class="new-area">
                                                                <div class="new">
                                                                    <span class="text-new"><span>new</span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h4 class="name"><a href="#">Ullamco laboris nisi</a></h4>
                                                        <span class="amount">
                                                            <del><span class="amount-del">$170.00</span></del>
                                                            $185.00
                                                        </span>
                                                        <div class="add-to-cart">
                                                            <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div></div><div class="owl-item active" style="width: 292.667px; margin-right: 0px;"><div class="col-md-4">
                                                    <div class="single-product">
                                                        <div class="product-image fix">
                                                            <a href="#">
                                                                <img src="{{asset('public/img/porduct-details/1.jpg')}}" alt="">
                                                                <img class="primary-2" src="{{asset('public/img/porduct-details/2.jpg')}}" alt="">
                                                            </a>
                                                            <div class="product-action">
                                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Quick view"><i class="fa fa-eye"></i></a>
                                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Wishlist"><i class="fa fa-heart"></i></a>
                                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                                            </div>
                                                            <div class="new-area">
                                                                <div class="new">
                                                                    <span class="text-new"><span>new</span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h4 class="name"><a href="#">Ullamco laboris nisi</a></h4>
                                                        <span class="amount">
                                                            <del><span class="amount-del">$170.00</span></del>
                                                            $185.00
                                                        </span>
                                                        <div class="add-to-cart">
                                                            <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div></div><div class="owl-item" style="width: 292.667px; margin-right: 0px;"><div class="col-md-4">
                                                    <div class="single-product">
                                                        <div class="product-image fix">
                                                            <a href="#">
                                                                <img src="{{asset('public/img/porduct-details/1.jpg')}}" alt="">
                                                                <img class="primary-2" src="{{asset('public/img/porduct-details/2.jpg')}}" alt="">
                                                            </a>
                                                            <div class="product-action">
                                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Quick view"><i class="fa fa-eye"></i></a>
                                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Wishlist"><i class="fa fa-heart"></i></a>
                                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
                                                            </div>
                                                            <div class="new-area">
                                                                <div class="new">
                                                                    <span class="text-new"><span>new</span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h4 class="name"><a href="#">Ullamco laboris nisi</a></h4>
                                                        <span class="amount">
                                                            <del><span class="amount-del">$170.00</span></del>
                                                            $185.00
                                                        </span>
                                                        <div class="add-to-cart">
                                                            <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style=""><i class="fa fa-angle-left"></i></div><div class="owl-next" style=""><i class="fa fa-angle-right"></i></div></div><div class="owl-dots" style="display: none;"></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<form action="{{ url('/cart') }}" method="POST" class="AddToCart">
    {!! csrf_field() !!}
    <input type="hidden" name="id" value="{{ $p_details->id }}">
    <input type="hidden" name="name" value="{{ $p_details->p_name }}">
    <input type="hidden" name="price" value="{{ $p_details->p_price }}">
    <input type="hidden" name="p_size" id="p_size" value="">
    <input type="hidden" name="Kameezsize" id="p_Kameezsize" value="">
    <input type="hidden" name="Height" id="p_Height" value="">
    <input type="hidden" name="color" id="p_color" value="">
    <input type="hidden" name="stitching_sizes" id="p_stitching_sizes" value="">
    <input type="hidden" name="image" id="image" value="{{img_src_path()}}products/thumb/{{$img}}">
</form>
@endsection