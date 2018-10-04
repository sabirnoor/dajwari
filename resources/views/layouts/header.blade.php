<?php
//print_r($getMenuItems);
?>
<header class="header-2">
    <div class="header-area menu2">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7 col-xs-7">
                    <div class=" top-link">
                        <strong>Hi Guest!</strong> <a class="icon-heaher" href="#">Sign In </a> or <a class="icon-heaher" href="#"> Register </a>
                    </div>
                </div>

                <div class="col-md-5 col-sm-5 col-xs-5 text-right ">
                    <div class=" top-link">
                        <a class="icon-heaher" href="#"><i class="fa fa-comment"></i> CHAT</a>
                        <a class="icon-heaher" href="#"><i class="fa fa-envelope"></i> EMAIL</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <div class="logo">
                        <a href="{{url('')}}"><img src="{{asset('public/img/logo/logo.png')}}" alt=""></a>
                    </div>   
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12" align="center">
                    <div class="pad-50"></div>
                    <a href="index.html"><img src="{{asset('public/img/banner/add-banner.jpg')}}" alt=""></a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="header-wocom">
                        <div class="header-userinfo">
                            <a class="icon-heaher check-cont" href="{{url('cart')}}"><i class="fa fa-shopping-cart"></i><span>{{ Cart::instance('default')->count(false) }}</span> ITEMS</a>
                            
                        </div>
                        <div class="header-language">
                            <a class="icon-heaher wish-cont" href="#"><i class="fa fa-cog"></i> 0 WISHLIST</a>
                            <ul>
                                <li><h3>Languages</h3></li>
                                <li><a href="#"><img src="{{asset('public/img/language/english.png')}}" alt="">english </a></li>
                                <li><a href="#"><img src="{{asset('public/img/language/english.png')}}" alt="">english </a></li>
                                <li>
                                    <h3>Currencies</h3>
                                    <span class="currencies">
                                        <a href="#"><span>$</span> - USD</a>
                                        <a href="#"><span>$</span> - USD</a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="header-cart">
                            <a class="icon-heaher guest-cont" href="#"> <i class="fa fa-user"></i> GUEST ACCOUNT</a>
                            <ul>
                                <li><a href="#"><i class="fa fa-heart"></i>My Wishlist</a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i>My Cart</a></li>
                                <li><a href="#"><i class="fa fa-hand-o-right"></i>Check Out</a></li>
                                <li><a href="#"><i class="fa fa-unlock-alt"></i>Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="main-nav">

            <div class="container">

                <div class="row">
                    <div class="col-md-12 col-sm-5 col-xs-12">
                        <div class="main-menu visible-md visible-lg ">
                            <nav>
                                <ul class="main">
                                    <li class="active "><a class="main-a" href="index.html">Home</a></li>
                                    <?php if (count($getMenuItems)) {
                                        foreach ($getMenuItems as $k1 => $v1) { $cat_name1 = str_replace(" ", "_", $v1['cat_name']);?>
                                            <li class="static"><a class="main-a" href="{{url('products/'.$cat_name1)}}"><span><?= ($v1['cat_name']) ?></span></a>
                                                <div class="mega-menu">
                                                    <div class="mega-menu-def">
        <?php if (isset($v1['childs']) && is_array($v1['childs']) && count($v1['childs'])) {
            foreach ($v1['childs'] as $k2 => $v2) {
                $cat_name2 = str_replace(" ", "_", $v2['cat_name']); ?>	
                                                                <div class="col-md-3 col-sm-3">
                                                                    <span class="Column-one">
                                                                        <a class="title-dropsown" href="{{url('products/'.$cat_name2)}}"><?= ($v2['cat_name']) ?></a>
                <?php if (isset($v2['childs']) && is_array($v2['childs']) && count($v2['childs'])) {
                    foreach ($v2['childs'] as $k3 => $v3) {
                        $cat_name3 = str_replace(" ", "_", $v3['cat_name']); ?>
                                                                                <a href="{{url('products/'.$cat_name3)}}"><?= ucwords($v3['cat_name']) ?></a>
                    <?php }
                } ?>   
                                                                    </span>
                                                                </div>
            <?php }
        } ?>
                                                        <!--<div class="col-md-2 col-sm-2">
            <span class="Column-one">
                <a class="title-dropsown" href="#">Product Page</a>
                <a href="#">Standard Product</a>
                <a href="#">Variable Product</a>
                <a href="#">External Product</a>
                <a href="#">Group Product</a>   
            </span>
        </div>
                                                        
                                                        <div class="col-md-2 col-sm-2">
            <span class="Column-one">
                <a class="title-dropsown" href="#">Product Page</a>
                <a href="#">Standard Product</a>
                <a href="#">Variable Product</a>
                <a href="#">External Product</a>
                <a href="#">Group Product</a>   
            </span>
        </div>-->



                                                        <div class="col-md-3 col-sm-3">
                                                            <div class="img-widget">
        <?php if (isset($v2['cat_image']) && $v2['cat_image'] <> '') { ?>
                                                                    <a href="#"><img src="{{img_src_path()}}{{$v2['cat_image']}}" alt=""></a>
        <?php } else { ?>
                                                                    <a href="#"><img src="{{asset('public/img/largmenu/Party_Wear.png')}}" alt=""></a>
                                            <?php } ?>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </li>
        <?php
    }
}
?>
                                    <!--<li><a class="main-a" href="#">Kutris</a></li>
                                    <li><a class="main-a" href="#">Indowstern</a></li>
                                    <li><a class="main-a" href="#">Bridal</a></li>
                                    <li><a class="main-a" href="#">Aceeessories</a></li>
                                    <li><a class="main-a" href="#">Deals</a></li>-->
                                    <li><a class="main-a" href="#">Blogs</a></li>										
                                    <li><a class="main-a" href="#">Contact</a></li>
                                    <li><a class="main-a" href="#">About Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>


        </div>



    </div>
</header>

<!-- mobile menu  -->
<div class="header-mobile-menu visible-xs visible-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="menu-spacing">
                    <div class="mobile-menu-area visible-xs visible-sm">
                        <div class="mobile-menu">
                            <nav id="mobile-menu-active">
                                <ul class="main">
                                    <li class="active "><a class="main-a" href="index.html"><span>Home</span></a> </li>
                                    <li class=""><a class="main-a" href="#">What's New</a></li>



                                    <li class="static"><a class="main-a" href="#"><span>Salwar Kameez</span></a>
                                        <ul>                                                                                                   

                                            <li> <a class="title-dropsown" href="#">Product Page</a></li>
                                            <li><a href="#">Standard Product</a></li>
                                            <li><a href="#">Variable Product</a></li>
                                            <li><a href="#">External Product</a></li>
                                            <li><a href="#">Group Product</a>  </li>

                                            <li><a href="#">Product 1</a></li>
                                            <li><a href="#">Products 2</a></li>
                                            <li><a href="#">Product 3</a></li>
                                            <li><a href="#">Products 4</a></li>
                                            <li><a href="#">Products 5</a>  </li>


                                            <li><a href="#">Designer Elements</a></li>
                                            <li><a href="#">Fashion On Sale <span class="on-sale">sale</span></a></li>
                                            <li><a href="#">Featured Design</a></li>
                                            <li><a href="#">Dress Deal<span class="on-sale2">Deals</span></a>  </li>
                                            <li><a href="#">Sale Recent<span class="on-sale3">New</span></a></li>                                                            
                                            <li> <a href="#">Sale 2018</a></li>
                                            <li><a href="#">Salwar Kameez</a></li>
                                            <li><a href="#">Kurtis</a></li>
                                            <li><a href="#">Lehngaas</a></li>
                                            <li><a href="#">Sarees</a> </li>  
                                            <li><a href="#">Modren Design</a></li>



                                        </ul>
                                    </li>


                                    <li><a class="main-a" href="#">Kutris</a></li>
                                    <li><a class="main-a" href="#">Indowstern</a></li>
                                    <li><a class="main-a" href="#">Bridal</a></li>
                                    <li><a class="main-a" href="#">Aceeessories</a></li>
                                    <li><a class="main-a" href="#">Deals</a></li>
                                    <li><a class="main-a" href="#">Blogs</a></li>										
                                    <li><a class="main-a" href="#">Contact</a></li>
                                    <li><a class="main-a" href="#">About Us</a></li>
                                </ul>
                            </nav>
                        </div>	
                    </div>
                </div>
            </div>
        </div>	
    </div>
</div>
<!-- Mobile menu end  -->