@extends('layouts.layout')
@section('content')
<!-- header area end-->
<!-- slider area -->
<div class="slider-area">
    <div class="slider-container theme-default">
        <!-- Slider Image -->
        <div id="mainSlider" class="nivoSlider slider-image">
			<?php 
			if($getHomeBanners){
				foreach($getHomeBanners as $key=>$value){
			?>
            <img src="{{img_src_path()}}home_banners/{{$value->img_name}}" alt="{{$value->img_purpose}}"  title="#htmlcaption{{$key}}"/>
			<?php
				}
			}
			?>
             <!--<img src="{{asset('public/img/slider/slide-2.jpg')}}" alt="main slider"  title="#htmlcaption2"/>
            <img src="{{asset('public/img/slider/slide-3.jpg')}}" alt="main slider"  title="#htmlcaption3"/>-->
        </div>
        <!-- Slider Caption 1 -->
        <div id="htmlcaption1" class="nivo-html-caption slider-caption-1">
            <div class="slider-progress"></div> 
            <div class="slide1-text wow zoomIn " data-wow-duration="0.1s" data-wow-delay="0.3s">
                <div class="middle-text ">
                    <div class="cap-dec " data-wow-duration="0.9s" data-wow-delay="0.5s">
                        <div class="first-f">
                            <h2 class="first">NEW COLLECTION</h2>
                        </div>
                    </div>   
                    <div class="cap-title " data-wow-duration="1.2s" data-wow-delay="0.2s">
                        <div class="first-f">
                            <h1 class="decond">WOMEN'S FASHION</h1>
                        </div>
                    </div>
                    <div class="cap-readmore " data-wow-duration="1.4s" data-wow-delay=".7s">
                        <div class="first-f">
                            <p class="save">SAVE UP T O 40% OFF</p>
                        </div>
                    </div> 
                    <div class="sl-shop-link "  data-wow-duration="1.9s" data-wow-delay="1s">
                        <div class="slide-lixury-btn">
                            <a class="s" href="#">shop now</a>
                        </div>
                    </div>  
                </div>   
            </div>                  
        </div>
        <!-- Slider Caption 2 -->
        <div id="htmlcaption2" class="nivo-html-caption slider-caption-2">
            <div class="slider-progress"></div> 
            <div class="slide2-text wow zoomIn " data-wow-duration="0.1s" data-wow-delay="0.3s">
                <div class="middle-text ">
                    <div class="cap-dec " data-wow-duration="0.1s" data-wow-delay="0.5s">
                        <div class="first-f">
                            <h2 class="first">SPECIAL FOR TODAY </h2>
                        </div>
                    </div>   
                    <div class="cap-title " data-wow-duration="1.2s" data-wow-delay="0.2s">
                        <div class="first-f">
                            <h1 class="decond">WOMEN'S FASHION</h1>
                        </div>
                    </div>
                    <div class="cap-readmore " data-wow-duration="1.4s" data-wow-delay=".7s">
                        <div class="first-f">
                            <p class="save">SAVE UP T O 40% OFF</p>
                        </div>
                    </div>   
                </div>    
            </div> 
        </div>
        <!-- Slider Caption 2 -->
        <div id="htmlcaption3" class="nivo-html-caption slider-caption-3">
            <div class="slider-progress"></div> 
            <div class="slide3-text wow zoomIn " data-wow-duration="0.1s" data-wow-delay="0.3s">
                <div class="middle-text ">
                    <div class="cap-dec " data-wow-duration="0.9s" data-wow-delay="0.5s">
                        <div class="first-f">
                            <h2 class="first">HOT & TRENDY CLOTHES </h2>
                        </div>
                    </div>   
                    <div class="cap-title " data-wow-duration="1.2s" data-wow-delay="0.2s">
                        <div class="first-f">
                            <h1 class="decond">FOR REAL MEN </h1>
                        </div>
                    </div>
                    <div class="cap-readmore " data-wow-duration="1.4s" data-wow-delay=".7s">
                        <div class="first-f">
                            <p class="save">SAVE UP T O 40% OFF</p>
                        </div>
                    </div> 
                    <div class="sl-shop-link "  data-wow-duration="1.9s" data-wow-delay="1s">
                        <div class="slide-lixury-btn">
                            <a class="s" href="#">shop now</a>
                        </div>
                        <div class="slide-lixury-btn">
                            <a class="s" href="#">PROMOTION</a>
                        </div>
                    </div>  
                </div>    
            </div> 
        </div>
    </div>
</div>
<!-- slider area end -->
<!-- search area -->
<div class="search-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12  col-sm-12 col-xs-12">
                <div class="search-catagory">
                    <form action="{{url('search')}}" method="get">
                        <div class="select-style">
                            <select name="cat" class="select-optn ">
                                <option value="1" class="first-option">all catagory </option>
                                <option value="1"> catagory 1</option>
                                <option value="1"> catagory 2</option>
                                <option value="1"> catagory 3</option>
                                <option value="1"> catagory 4 ff</option>
                            </select>
                        </div>
                        <input class="input-text-box" name="q" spellcheck="false" value="" placeholder="Search product...">
                        <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- search area  end-->
<!-- banner area -->
<div class="banner-area pad-70">
    <div class="container">
        <div class="banner-wraper">
          <?php 
			if($getHomeAdvts){ //print_r($getHomeAdvts);
			
			//exit;
				//foreach($getHomeAdvts as $key=>$value){
				}
			?>  
			<div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12">   
                    <div class="single-banner">
                        <div class="banner-content">
			<h3 class="title">{{$getHomeAdvts[1]->title1}}</h3>
                            <p class="pragrap">{{$getHomeAdvts[1]->desc1}}</p>
                            <a class="lixury-btn" href="{{$getHomeAdvts[1]->category1}}"> shop now </a>	
                        </div>
                        <div class="bannar-img">
                            <a href="#" class="ban-img">
                                <img src="{{img_src_path()}}{{$getHomeAdvts[1]->home_image1}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-4 col-xs-12"> 
                    <div class="single-banner">
                        <div class="bannar-img">
                            <a class="ban-img" href="#">
                                <img src="{{img_src_path()}}{{$getHomeAdvts[1]->home_image2}}" alt=""><!-- http://localhost/dajwariadminonly/uploads/products/home_image/2_805270249f96c06ba7cd1bab4d8583f1.jpg -->
                            </a>
                        </div>
                        <div class="banner-content">
                            <h3 class="title">{{$getHomeAdvts[1]->title2}}</h3>
                            <p class="pragrap">
                                {{$getHomeAdvts[1]->desc2}}</p>
                            <a class="lixury-btn" href="{{$getHomeAdvts[1]->category2}}"> shop now </a>
                        </div>
                    </div>  
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">   
                    <div class="single-banner">
                        <div class="banner-content">
                            <h3 class="title">{{$getHomeAdvts[1]->title3}}</h3>
                            <p class="pragrap">
                                {{$getHomeAdvts[1]->desc3}}</p>
                            <a class="lixury-btn" href="{{$getHomeAdvts[1]->category3}}"> shop now </a>
                        </div>
                        <div class="bannar-img">
                            <a href="#" class="ban-img">
                                <img src="{{img_src_path()}}{{$getHomeAdvts[1]->home_image3}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
			
        </div>	
    </div>  
</div>
<!-- banner area end-->
<!-- feture area -->
<div class="feture-product-area pad-70 ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="heading-title">
                    <h4>Customer Favourite</h4>
                </div> 
            </div>
        </div>
        <div class="row">
            <div class="product-area">
				<?php 
				if($p_customer_fav){
					foreach($p_customer_fav as $key=>$val){
						$p_image = (array) $val['p_image'];
						$p_image1 =  (isset($p_image[1]) && !empty($p_image[1])?$p_image[1]:'');
						$val = (array) $val['p_details'];
						$img = img_src_path()."products/small/".isset($p_image1)?$p_image1:'';
						if(file_exists($img)){
							$ddddd = 'yes';
						}else{
							$ddddd = 'no';
						}
				?>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="single-product">
                        <div class="product-image fix">
                            <a href="product-list.html">
                                <img  src="{{img_src_path()}}products/small/{{$p_image[0]}}" alt="">
                                <img class="primary-2" src="{{img_src_path()}}products/small/{{$p_image1}}" alt="">
                            </a>
                            <div class="product-action">
                                <a href="#" data-toggle="modal" data-target="#myModal"  title="Quick view"><i class="fa fa-eye"></i></a>
                                <a href="#" data-toggle="tooltip"  title="Wishlist" ><i class="fa fa-heart"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare" ><i class="fa fa-retweet"></i></a>
                            </div>
                            <div class="new-area">
                                <div class="new">
                                    <span class="text-new"><span>new <?=$val['id']?></span></span>
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
                        <h4 class="name"><a href="#" title="<?=$val['p_name']?>"><?=text_limit($val['p_name'],35)?></a></h4>
                        <span class="amount">RS, 1200</span>
                        <div class="add-to-cart">
                            <a href="#"><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
				<?php 
					}
				}
				?>
            </div>    
        </div>
        <div class="row">
            <div class="more-option">
                <span class="border-icon">
                    <span class="border-icon-bg">
                        <span class="plus-icon">+</span>
                    </span>
                </span>
            </div> 
        </div>
    </div> 
</div>
<!-- feture area end -->
<!-- testnimonial area  -->
<div class="testnimonial-area ptb-70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-title">
                    <h4>What clients say?</h4>
                </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tst-crosol">
				<?php 
			if($getTestimonials){
				foreach($getTestimonials as $key=>$value){ //print_r($value); exit;
				//
			?>
            
			
                    <div class="testimonial">
                        <div class="tstmnil-content">
                            <p>{{$value->comments}}</p>
                        </div>
                        <div class="info">
                            <div class="neme">
                                <p>{{$value->name}}</p>
                            </div>
                            <div class="status">
                                <p>{{$value->profession}}</p>
                            </div>
                        </div>	
                    </div> 
                <?php
				}
			}
			?>    
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- testnimonial area end -->
<!-- product filter area -->
<div class="trendy-area ptb-70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-title">
                    <h4>The trendy clothing</h4>
                </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="filter-mnu">
                    <div class="filter" data-filter="all">all</div>
					<?php 
					if($getTrendingMenu){
						foreach($getTrendingMenu as $v){
							$v = (array) $v;
							$cat_name = str_replace(" ", "_",$v['cat_name']);
							$cat_name2 = str_replace("'", "_",$cat_name);
							
					?>
                    <div class="filter" data-filter=".<?=$cat_name2?>"><?=trim($v['cat_name'])?> </div>
					<?php 
						}
					}
					?>
                    
                </div>
            </div>
            <div id="Container">
			<?php 
			if($p_trending){
				foreach($p_trending as $val){
					$p_image = (array) $val['p_image'];
					$p_image1 =  (isset($p_image[1]) && !empty($p_image[1])?$p_image[1]:'');
					$val = (array) $val['p_details'];
					$cat_name = str_replace(" ", "_",$val['cat_name']);
					$cat_name2 = str_replace("'", "_",$cat_name);
			?>
                <div class="mix  <?=$cat_name2?>">
                    <div class="col-md-3">
                        <div class="single-product">
                            <div class="product-image fix">
                                <a href="product-list.html">
                                    <img  src="{{img_src_path()}}products/small/{{$p_image[0]}}" alt="">
									<img class="primary-2" src="{{img_src_path()}}products/small/{{$p_image1}}" alt="">
                                </a>
                                <div class="product-action">
                                    <a href="#" data-toggle="tooltip"   title="Quick view"><i class="fa fa-eye"></i></a>
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
                            <h4 class="name"><a href="#" title="<?=$val['p_name']?>"><?=text_limit($val['p_name'],35)?></a></h4>
                            <span class="amount">
                                RS, 11000
                            </span>
                            <div class="add-to-cart">
                                <a href="#"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
				<?php 
					}
				}
				?>
                
            </div>
        </div>
    </div>
</div>
<!-- product filter area -->
<!-- Blog area start -->
<div class="blog-area ptb-70 ht3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="heading-title">
                    <h4>Latest From Blogs</h4>
                </div> 
            </div> 
        </div>
        <div class="row">
            <div class="carousel ind-style ">
            <?php 
			if($getBlogs){
				foreach($getBlogs as $key=>$value){   
			?>
            	
				<div class="col-sm-12">
                    <div class="single-blog-post slide-post">	
                        <div class="post-thumb">
                            <img src="{{img_src_path()}}blogs/{{$value->blog_image}}" alt="">
                        </div>	
                        <div class="post-area">
                            <div class="post-meta">
                                <span>
                                    <a href="#"><i class="fa fa-calendar"></i> Oct,25</a>
                                </span>
                                <span>
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    By 
                                    <a href="#">admin</a>
                                </span>
                                <span>
                                    <i class="fa fa-comment"></i>
                                    <a href="#">2 comments</a>
                                </span>
                            </div>
                            <div class="post-content">
                                
								<h3><a href="#">{{$value->title}} </a></h3>
								
                                <p>{{$value->description}}</p>
                            </div>
			<a class="lixury-btn" href="{{$value->category}}"> shop now </a>
                        </div>
                    </div>
                </div>
				<?php
				}
			}
			?>
                
                
            </div>
        </div>	
    </div>
</div>  
<!-- Blog area end -->
@endsection