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
			<div class="col-md-3 col-xs-12" >
				<div class="star_rating">
					<form>
						<div class="widget">
							<div class="widget shop-filter">
								<h3>Price</h3>
								<div class="info_widget">
									<div class="price_filter">
										<div id="slider-range"></div>
										<div class="price_slider_amount">
											<input type="text" id="amount" name="price"  placeholder="Add Your Price" />
											<input type="submit"  value="Filter"/>  
										</div>
									</div>
								</div>							
							</div>
						</div>
						<div class="widget">
							<h3>DISCOUNT</h3>
							<ul>

								<li><div>
										<input id="checkbox-4" class="checkbox1-custom" name="checkbox-4" type="checkbox" un-checked>
										<label for="checkbox-4" class="checkbox1-custom-label"><span>(647)</span> <span>Below 10 Days</span> </label>
									</div></li>
								<li><div>
										<input id="checkbox-5" class="checkbox1-custom" name="checkbox-5" type="checkbox" un-checked>
										<label for="checkbox-5" class="checkbox1-custom-label"><span>(647)</span> <span>Below 10 Days</span></label>
									</div></li>
								<li><div>
										<input id="checkbox-6" class="checkbox1-custom" name="checkbox-6" type="checkbox" un-checked>
										<label for="checkbox-6" class="checkbox1-custom-label"><span>(647)</span> <span>Below 20 Days</span></label>
									</div></li>

							</ul>    
						</div>
						<div class="widget">
							<h3>By Delivery Days</h3>
							<ul>

								<li><div>
										<input id="checkbox-4" class="checkbox1-custom" name="checkbox-4" type="checkbox" un-checked>
										<label for="checkbox-4" class="checkbox1-custom-label"><span>Below 10 Days</span> <span>(647)</span></label>
									</div></li>
								<li><div>
										<input id="checkbox-5" class="checkbox1-custom" name="checkbox-5" type="checkbox" un-checked>
										<label for="checkbox-5" class="checkbox1-custom-label"><span>Below 10 Days</span> <span>(647)</span></label>
									</div></li>
								<li><div>
										<input id="checkbox-6" class="checkbox1-custom" name="checkbox-6" type="checkbox" un-checked>
										<label for="checkbox-6" class="checkbox1-custom-label"><span>Below 20 Days</span> <span>(647)</span></label>
									</div></li>

							</ul>    
						</div>

						<div class="widget">
							<h3>Color</h3>
							<ul>
								<li><div>
										<input id="checkbox-7" class="checkbox1-custom" name="checkbox-7" type="checkbox" un-checked>
										<label for="checkbox-7" class="checkbox1-custom-label"><span>Black</span> <span>(9)</span></label>
									</div></li>
								<li><div>
										<input id="checkbox-8" class="checkbox1-custom" name="checkbox-8" type="checkbox" un-checked>
										<label for="checkbox-8" class="checkbox1-custom-label"><span>Blue</span> <span>(8)</span></label>
									</div></li>
								<li><div>
										<input id="checkbox-9" class="checkbox1-custom" name="checkbox-9" type="checkbox" un-checked>
										<label for="checkbox-9" class="checkbox1-custom-label"><span>Brown</span> <span>(6)</span></label>
									</div></li>

								<li><div>
										<input id="checkbox-10" class="checkbox1-custom" name="checkbox-10" type="checkbox" un-checked>
										<label for="checkbox-10" class="checkbox1-custom-label"><span>Orange</span> <span>(8)</span></label>
									</div></li>

								<li><div>
										<input id="checkbox-11" class="checkbox1-custom" name="checkbox-11" type="checkbox" un-checked>
										<label for="checkbox-11" class="checkbox1-custom-label"><span>White</span> <span>(6)</span></label>
									</div></li>

								<li><div>
										<input id="checkbox-12" class="checkbox1-custom" name="checkbox-12" type="checkbox" un-checked>
										<label for="checkbox-12" class="checkbox1-custom-label"><span>Yelow</span> <span>(6)</span></label>
									</div></li>

								<li><div>
										<input id="checkbox-13" class="checkbox1-custom" name="checkbox-13" type="checkbox" un-checked>
										<label for="checkbox-13" class="checkbox1-custom-label"><span>Purple</span> <span>(6)</span></label>
									</div></li>
							</ul> 
						</div>
						<div class="widget">
							<h3>Arts Style</h3>
							<ul>
								<li><a href="#">Crystals</a><span>(564)</span></li>
								<li><a href="#">Jacquard </a><span>(564)</span></li>
								<li><a href="#">Embroidered </a><span>(564)</span></li>
								<li><a href="#">Resham  </a><span>(564)</span></li>
								<li><a href="#">Beads </a><span> (564)</span></li>
								<li><a href="#">Printed </a><span> (564)</span></li>
								<li><a href="#">Applique Work </a><span> (564)</span></li>
								<li><a href="#">Stones </a><span> (564)</span></li>

							</ul>    
						</div>
						<div class="widget compare">
							<h3>Compare Products</h3>
							<ul>
								<li>
									<a href="#"> Salwaar Kameez</a> 
									<a class="remove" href="#"> X</a> 
								</li>
								<li>
									<a href="#">Designer Dress</a>
									<a class="remove" href="#"> X</a>
								</li>
							</ul> 
							<a class="lixury-btn" href="#"> shop now </a>
							<a class="lixury-btn right" href="#"> shop now </a>   
						</div>

					</form>
				</div>
			</div>
			<div class="col-md-9 col-sm-12 col-xs-12">
				<div class="row">
					<div class="col-md-12">
						<div class="shop-setting">
							<div class="show-style">
								<h4 class="setting-p" >Festival Salwar Suits: </h4>
								<!-- Nav tabs -->
								<!--<ul role="tablist">
										<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-th"></i></a></li>
										<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-th-list"></i></a></li>
								</ul>-->
							</div>
							<div class="show-pagination">
								<div class="show-product hidden-sm hidden-xs ">
									<form>
										<span>Found 2587 items:</span>
										<select class="orderby number" name="page_size">
											<option value="9" selected="selected">Price Low to High</option>
											<option value="12">Price High to Low</option>
											<option value="24">New Arrivals</option>
											<option value="36">Biggest Saving</option>
											<option value="48">Best Sellers</option>
											<option value="60">Most Viewed</option>
											<option value="90">Now in Wishlists</option>
											<option value="100">100</option>
										</select>
									</form>
								</div>
							</div>
							<!--<div class="show-pagination">
								<ul class="pagination pagi-style">
											<li ><a href="#" class="current page-numbers">1</a></li>
											<li><a href="#" class="page-numbers">2</a></li>
											<li><a href="#" class="page-numbers"><i class="fa fa-angle-right"></i></a></li>
									</ul>
							</div>-->
						</div>
					</div>
				</div>
				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="home">
						<div class="row">
							<div class="product-area">
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="single-product">
										<div class="product-image fix">
											<a href="product-details.html">
												<img  src="{{asset('public/img/product/1.jpg')}}" alt="">
												<img class="primary-2" src="{{asset('public/img/product/2.jpg')}}" alt="">
											</a>
											<div class="product-action">
												<a href="#" data-toggle="modal" data-target="#myModal"  title="Quick view"><i class="fa fa-eye"></i></a>
												<a href="#" data-toggle="tooltip"  title="Wishlist" ><i class="fa fa-heart"></i></a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="Compare" ><i class="fa fa-retweet"></i></a>
											</div>
											<div class="new-area">
												<div class="new">
													<span class="text-new"><span>new</span></span>
												</div>
											</div>
										</div>
										<h4 class="name"><a href="#">Lorem ipsum dolor</a></h4>
										<span class="amount">

											RS,1200
										</span>
										<div class="add-to-cart">
											<a href="#"><i class="fa fa-shopping-cart"></i></a>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="single-product">
										<div class="product-image fix">
											<a href="product-details.html">
												<img  src="{{asset('public/img/product/3.jpg')}}" alt="">
												<img class="primary-2" src="{{asset('public/img/product/2.jpg')}}" alt="">
											</a>
											<div class="product-action">
												<a href="#" data-toggle="modal" data-target="#myModal"  title="Quick view"><i class="fa fa-eye"></i></a>
												<a href="#" data-toggle="tooltip"  title="Wishlist" ><i class="fa fa-heart"></i></a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="Compare" ><i class="fa fa-retweet"></i></a>
											</div>
											<div class="new-area sell-area">
												<div class="new">
													<span class="text-new"><span>sell</span></span>
												</div>
											</div>
											<div class="color">
												<ul class="color-list">
													<li class="bk"><span>bk</span></li>
													<li class="rd"><span>rd</span></li>
													<li class="yl"><span>yl</span></li>
												</ul>
											</div>
										</div>
										<h4 class="name"><a href="#">Lorem ipsum dolor</a></h4>
										<span class="amount">

											RS,1200
										</span>
										<div class="add-to-cart">
											<a href="#"><i class="fa fa-shopping-cart"></i></a>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="single-product">
										<div class="product-image fix">
											<a href="product-details.html">
												<img  src="{{asset('public/img/product/3.jpg')}}" alt="">
												<img class="primary-2" src="{{asset('public/img/product/1.jpg')}}" alt="">
											</a>
											<div class="product-action">
												<a href="#" data-toggle="modal" data-target="#myModal"  title="Quick view"><i class="fa fa-eye"></i></a>
												<a href="#" data-toggle="tooltip"  title="Wishlist" ><i class="fa fa-heart"></i></a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="Compare" ><i class="fa fa-retweet"></i></a>
											</div>
											<div class="new-area sell-area">
												<div class="new">
													<span class="text-new"><span>sell</span></span>
												</div>
											</div>
											<div class="color">
												<ul class="color-list">
													<li class="bk"><span>bk</span></li>
													<li class="rd"><span>rd</span></li>
													<li class="yl"><span>yl</span></li>
												</ul>
											</div>
										</div>
										<h4 class="name"><a href="#">Lorem ipsum dolor</a></h4>
										<span class="amount">

											RS,1200
										</span>
										<div class="add-to-cart">
											<a href="#"><i class="fa fa-shopping-cart"></i></a>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="single-product">
										<div class="product-image fix">
											<a href="product-details.html">
												<img  src="{{asset('public/img/product/5.jpg')}}" alt="">
												<img class="primary-2" src="{{asset('public/img/product/4.jpg')}}" alt="">
											</a>
											<div class="product-action">
												<a href="#" data-toggle="modal" data-target="#myModal"  title="Quick view"><i class="fa fa-eye"></i></a>
												<a href="#" data-toggle="tooltip"  title="Wishlist" ><i class="fa fa-heart"></i></a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="Compare" ><i class="fa fa-retweet"></i></a>
											</div>
											<div class="new-area">
												<div class="new">
													<span class="text-new"><span>new</span></span>
												</div>
											</div>
										</div>
										<h4 class="name"><a href="#">Lorem ipsum dolor</a></h4>
										<span class="amount">

											RS,1200
										</span>
										<div class="add-to-cart">
											<a href="#"><i class="fa fa-shopping-cart"></i></a>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="single-product">
										<div class="product-image fix">
											<a href="product-details.html">
												<img  src="{{asset('public/img/product/5.jpg')}}" alt="">
												<img class="primary-2" src="{{asset('public/img/product/6.jpg')}}" alt="">
											</a>
											<div class="product-action">
												<a href="#" data-toggle="modal" data-target="#myModal"  title="Quick view"><i class="fa fa-eye"></i></a>
												<a href="#" data-toggle="tooltip"  title="Wishlist" ><i class="fa fa-heart"></i></a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="Compare" ><i class="fa fa-retweet"></i></a>
											</div>
											<div class="new-area sell-area">
												<div class="new">
													<span class="text-new"><span>sell</span></span>
												</div>
											</div>
											<div class="color">
												<ul class="color-list">
													<li class="bk"><span>bk</span></li>
													<li class="rd"><span>rd</span></li>
													<li class="yl"><span>yl</span></li>
												</ul>
											</div>
										</div>
										<h4 class="name"><a href="#">Lorem ipsum dolor</a></h4>
										<span class="amount">

											RS,1200
										</span>
										<div class="add-to-cart">
											<a href="#"><i class="fa fa-shopping-cart"></i></a>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="single-product">
										<div class="product-image fix">
											<a href="product-details.html">
												<img  src="{{asset('public/img/product/6.jpg')}}" alt="">
												<img class="primary-2" src="{{asset('public/img/product/7.jpg')}}" alt="">
											</a>
											<div class="product-action">
												<a href="#" data-toggle="modal" data-target="#myModal"  title="Quick view"><i class="fa fa-eye"></i></a>
												<a href="#" data-toggle="tooltip"  title="Wishlist" ><i class="fa fa-heart"></i></a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="Compare" ><i class="fa fa-retweet"></i></a>
											</div>
											<div class="new-area sell-area">
												<div class="new">
													<span class="text-new"><span>sell</span></span>
												</div>
											</div>
											<div class="color">
												<ul class="color-list">
													<li class="bk"><span>bk</span></li>
													<li class="rd"><span>rd</span></li>
													<li class="yl"><span>yl</span></li>
												</ul>
											</div>
										</div>
										<h4 class="name"><a href="#">Lorem ipsum dolor</a></h4>
										<span class="amount">

											RS,1200
										</span>
										<div class="add-to-cart">
											<a href="#"><i class="fa fa-shopping-cart"></i></a>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="single-product">
										<div class="product-image fix">
											<a href="product-details.html">
												<img  src="{{asset('public/img/product/7.jpg')}}" alt="">
												<img class="primary-2" src="{{asset('public/img/product/2.jpg')}}" alt="">
											</a>
											<div class="product-action">
												<a href="#" data-toggle="modal" data-target="#myModal"  title="Quick view"><i class="fa fa-eye"></i></a>
												<a href="#" data-toggle="tooltip"  title="Wishlist" ><i class="fa fa-heart"></i></a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="Compare" ><i class="fa fa-retweet"></i></a>
											</div>
											<div class="new-area">
												<div class="new">
													<span class="text-new"><span>new</span></span>
												</div>
											</div>
										</div>
										<h4 class="name"><a href="#">Lorem ipsum dolor</a></h4>
										<span class="amount">

											RS,1200
										</span>
										<div class="add-to-cart">
											<a href="#"><i class="fa fa-shopping-cart"></i></a>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="single-product">
										<div class="product-image fix">
											<a href="product-details.html">
												<img  src="{{asset('public/img/product/8.jpg')}}" alt="">
												<img class="primary-2" src="{{asset('public/img/product/9.jpg')}}" alt="">
											</a>
											<div class="product-action">
												<a href="#" data-toggle="modal" data-target="#myModal"  title="Quick view"><i class="fa fa-eye"></i></a>
												<a href="#" data-toggle="tooltip"  title="Wishlist" ><i class="fa fa-heart"></i></a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="Compare" ><i class="fa fa-retweet"></i></a>
											</div>
											<div class="new-area sell-area">
												<div class="new">
													<span class="text-new"><span>sell</span></span>
												</div>
											</div>
											<div class="color">
												<ul class="color-list">
													<li class="bk"><span>bk</span></li>
													<li class="rd"><span>rd</span></li>
													<li class="yl"><span>yl</span></li>
												</ul>
											</div>
										</div>
										<h4 class="name"><a href="#">Lorem ipsum dolor</a></h4>
										<span class="amount">

											RS,1200
										</span>
										<div class="add-to-cart">
											<a href="#"><i class="fa fa-shopping-cart"></i></a>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="single-product">
										<div class="product-image fix">
											<a href="product-details.html">
												<img  src="{{asset('public/img/product/9.jpg')}}" alt="">
												<img class="primary-2" src="{{asset('public/img/product/8.jpg')}}" alt="">
											</a>
											<div class="product-action">
												<a href="#" data-toggle="modal" data-target="#myModal"  title="Quick view"><i class="fa fa-eye"></i></a>
												<a href="#" data-toggle="tooltip"  title="Wishlist" ><i class="fa fa-heart"></i></a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="Compare" ><i class="fa fa-retweet"></i></a>
											</div>
											<div class="new-area sell-area">
												<div class="new">
													<span class="text-new"><span>sell</span></span>
												</div>
											</div>
											<div class="color">
												<ul class="color-list">
													<li class="bk"><span>bk</span></li>
													<li class="rd"><span>rd</span></li>
													<li class="yl"><span>yl</span></li>
												</ul>
											</div>
										</div>
										<h4 class="name"><a href="#">Lorem ipsum dolor</a></h4>
										<span class="amount">

											RS,1200
										</span>
										<div class="add-to-cart">
											<a href="#"><i class="fa fa-shopping-cart"></i></a>
										</div>
									</div>
								</div>
							</div> 
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="profile">
						<div class="show-as-list">
							<div class="single-product">
								<div class="product-image fix">
									<a href="product-details.html">
										<img  src="{{asset('public/img/product/8.jpg')}}" alt="">
												<img class="primary-2" src="{{asset('public/img/product/9.jpg')}}" alt="">
									</a>
									<div class="color">
										<ul class="color-list">
											<li class="bk"><span>bk</span></li>
											<li class="rd"><span>rd</span></li>
											<li class="yl"><span>yl</span></li>
										</ul>
									</div>
									<div class="new-area sell-area">
										<div class="new">
											<span class="text-new"><span>sell</span></span>
										</div>
									</div>
								</div>
								<div class="product-details-shop ">
									<h4 class="name"><a href="#">Lorem ipsum dolor</a></h4>
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

										RS,1200
									</span>
									<p>Lorem ipsum dolor sit amete, consectetur news Lorem ipsum dolor new fashion eiusmod tempor incididunt ut labore etel dolore magna aliqua. Ut enim news minimveniam, quis nostrud exercitation new Lorem ipsum dolor news commodo consequat consectetur adipisicing. Fashion double layering. Lorem ipsum dolor sit amete, consectetur Lorem ipsum dolor new eiusmod tempor incididunt ut labore etel dolore magna aliqua.</p>
									<div class="product-action">
										<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart" ><i>Add To Cart</i></a>
										<a href="#" data-toggle="modal" data-target="#myModal"  title="Quick view"><i class="fa fa-eye"></i></a>
										<a href="#" data-toggle="tooltip"  title="Wishlist" ><i class="fa fa-heart"></i></a>
										<a href="#" data-toggle="tooltip" data-placement="top" title="Compare" ><i class="fa fa-retweet"></i></a>
									</div>	
								</div>
							</div>
							<div class="single-product">
								<div class="product-image fix">
									<a href="product-details.html">
										<img  src="{{asset('public/img/product/3.jpg')}}" alt="">
										<img class="primary-2" src="{{asset('public/img/product/2.jpg')}}" alt="">
									</a>
									<div class="color">
										<ul class="color-list">
											<li class="bk"><span>bk</span></li>
											<li class="rd"><span>rd</span></li>
											<li class="yl"><span>yl</span></li>
										</ul>
									</div>
									<div class="new-area sell-area">
										<div class="new">
											<span class="text-new"><span>sell</span></span>
										</div>
									</div>
								</div>
								<div class="product-details-shop ">
									<h4 class="name"><a href="#">Lorem ipsum dolor</a></h4>
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

										RS,1200
									</span>
									<p>Lorem ipsum dolor sit amete, consectetur news Lorem ipsum dolor new fashion eiusmod tempor incididunt ut labore etel dolore magna aliqua. Ut enim news minimveniam, quis nostrud exercitation new Lorem ipsum dolor news commodo consequat consectetur adipisicing. Fashion double layering. Lorem ipsum dolor sit amete, consectetur Lorem ipsum dolor new eiusmod tempor incididunt ut labore etel dolore magna aliqua.</p>
									<div class="product-action">
										<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart" ><i>Add To Cart</i></a>
										<a href="#" data-toggle="modal" data-target="#myModal"  title="Quick view"><i class="fa fa-eye"></i></a>
										<a href="#" data-toggle="tooltip"  title="Wishlist" ><i class="fa fa-heart"></i></a>
										<a href="#" data-toggle="tooltip" data-placement="top" title="Compare" ><i class="fa fa-retweet"></i></a>
									</div>	
								</div>
							</div>
							<div class="single-product">
								<div class="product-image fix">
									<a href="product-details.html">
										<img  src="{{asset('public/img/product/3.jpg')}}" alt="">
										<img class="primary-2" src="{{asset('public/img/product/2.jpg')}}" alt="">
									</a>
									<div class="color">
										<ul class="color-list">
											<li class="bk"><span>bk</span></li>
											<li class="rd"><span>rd</span></li>
											<li class="yl"><span>yl</span></li>
										</ul>
									</div>
									<div class="new-area sell-area">
										<div class="new">
											<span class="text-new"><span>sell</span></span>
										</div>
									</div>
								</div>
								<div class="product-details-shop ">
									<h4 class="name"><a href="#">Lorem ipsum dolor</a></h4>
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

										RS,1200
									</span>
									<p>Lorem ipsum dolor sit amete, consectetur news Lorem ipsum dolor new fashion eiusmod tempor incididunt ut labore etel dolore magna aliqua. Ut enim news minimveniam, quis nostrud exercitation new Lorem ipsum dolor news commodo consequat consectetur adipisicing. Fashion double layering. Lorem ipsum dolor sit amete, consectetur Lorem ipsum dolor new eiusmod tempor incididunt ut labore etel dolore magna aliqua.</p>
									<div class="product-action">
										<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i>Add To Cart</i></a>
										<a href="#" data-toggle="modal" data-target="#myModal"  title="Quick view"><i class="fa fa-eye"></i></a>
										<a href="#" data-toggle="tooltip"  title="Wishlist" ><i class="fa fa-heart"></i></a>
										<a href="#" data-toggle="tooltip" data-placement="top" title="Compare" ><i class="fa fa-retweet"></i></a>
									</div>	
								</div>
							</div>
							<div class="single-product">
								<div class="product-image fix">
									<a href="product-details.html">
										<img  src="{{asset('public/img/product/9.jpg')}}" alt="">
										<img class="primary-2" src="{{asset('public/img/product/8.jpg')}}" alt="">
									</a>
									<div class="color">
										<ul class="color-list">
											<li class="bk"><span>bk</span></li>
											<li class="rd"><span>rd</span></li>
											<li class="yl"><span>yl</span></li>
										</ul>
									</div>
									<div class="new-area sell-area">
										<div class="new">
											<span class="text-new"><span>sell</span></span>
										</div>
									</div>
								</div>
								<div class="product-details-shop ">
									<h4 class="name"><a href="#">Lorem ipsum dolor</a></h4>
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

										RS,1200
									</span>
									<p>Lorem ipsum dolor sit amete, consectetur news Lorem ipsum dolor new fashion eiusmod tempor incididunt ut labore etel dolore magna aliqua. Ut enim news minimveniam, quis nostrud exercitation new Lorem ipsum dolor news commodo consequat consectetur adipisicing. Fashion double layering. Lorem ipsum dolor sit amete, consectetur Lorem ipsum dolor new eiusmod tempor incididunt ut labore etel dolore magna aliqua.</p>
									<div class="product-action">
										<a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart" ><i>Add To Cart</i></a>
										<a href="#" data-toggle="modal" data-target="#myModal"  title="Quick view"><i class="fa fa-eye"></i></a>
										<a href="#" data-toggle="tooltip"  title="Wishlist" ><i class="fa fa-heart"></i></a>
										<a href="#" data-toggle="tooltip" data-placement="top" title="Compare" ><i class="fa fa-retweet"></i></a>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<!--<div class="shop-pagination">
								<div class="show-pagination">
									<ul class="pagination pagi-style">
												<li ><a href="#" class="current page-numbers">1</a></li>
												<li><a href="#" class="page-numbers">2</a></li>
												<li><a href="#" class="page-numbers"><i class="fa fa-angle-right"></i></a></li>
										</ul>
								</div>
						</div>-->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection