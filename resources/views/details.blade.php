@extends('layouts.layout')
@section('content')
<?php
$p_details = $ProductDetails['p_details'];
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
                        <div class="show" href="{{img_src_path()}}products/{{$p_image[0]}}">
                            <img src="{{img_src_path()}}products/{{$p_image[0]}}" id="show-img">
                        </div>
                        <div class="small-img">
                            <img src="{{asset('public/img/online_icon_right@2x.png')}}" class="icon-left" alt="" id="prev-img">
                            <div class="small-container">
                                <div id="small-img-roll">
                                    @if (count($p_image) > 0)
                                        @foreach ($p_image as $img)
                                    <img src="{{img_src_path()}}products/{{$img}}" class="show-small-img"  alt="">
                                        @endforeach
                                    @else
                                    <img src="{{asset('public/img/product/2.jpg')}}" class="show-small-img" alt="">
                                    @endif
                                    
                                </div>
                            </div>
                            <img src="{{asset('public/img/online_icon_right@2x.png')}}" class="icon-right" alt="" id="next-img">
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-6 col-xs-12">
                        <div class="single-pro-details">
                            <div class="product-details-shop ">
                                <h4 class="name">{{$p_details->p_name}}</h4>
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
                                    INR {{$p_details->p_price}} 
                                </span>
                                <p>Lorem ipsum dolor sit amete, consectetur news adipisicing sed do new fashion eiusmod tempor incididunt ut labore etel dolore magna aliqua. Ut enim news minimveniam, quis nostrud exercitation new ullamco laboris nisi news commodo consequat consectetur adipisicing. Fashion double layering. Lorem ipsum dolor sit amete, consectetur adipisicing sed do new eiusmod tempor incididunt ut labore etel dolore magna aliqua.</p>
                                <div class="col-md-5">
                                    <div class="country-select">
                                        <label>Size <span class="required">*</span></label>
                                        <select name="size" id="size">
                                            <option value="9" selected="selected">Choose Size...</option>
                                            <option value="12">32 (Ships in 25 days)</option>
                                            <option value="24">34 (Ships in 25 days)</option>
                                            <option value="36">36 (Ships in 1 day)</option>
                                            <option value="48">38 (Ships in 25 days)</option>
                                            <option value="60">40 (Ships in 1 day)</option>
                                            <option value="90">42 (Ships in 1 day)</option>
                                        </select> 										
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <a href="#" class="size-chart"> Size Chart </a> 
                                    <a href="#" class="size-chart"> How To Measure </a>
                                </div>


                                <div class="pad-50"></div>

                                <div class="product-action">
                                    <a class="add-tocart" href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add To Cart">Add To Cart</a>
                                    <a href="#" data-toggle="tooltip" title="" data-original-title="Mail To"><i class="fa fa-envelope"></i></a>
                                    <a href="#" data-toggle="tooltip" title="" data-original-title="Wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"><i class="fa fa-retweet"></i></a>
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
                                                                <img src="img/porduct-details/1.jpg" alt="">
                                                                <img class="primary-2" src="img/porduct-details/2.jpg" alt="">
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
                                                                <img src="img/porduct-details/1.jpg" alt="">
                                                                <img class="primary-2" src="img/porduct-details/2.jpg" alt="">
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
                                                                <img src="img/porduct-details/1.jpg" alt="">
                                                                <img class="primary-2" src="img/porduct-details/2.jpg" alt="">
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
                                                                <img src="img/porduct-details/1.jpg" alt="">
                                                                <img class="primary-2" src="img/porduct-details/2.jpg" alt="">
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
    <input type="hidden" name="image" id="image" value="{{img_src_path()}}products/thumb/{{$img}}">
</form>
@endsection