<?php
$action = Request::segment(1);
?>
<!DOCTYPE html>
<html class="no-js" lang="{{app()->getLocale()}}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Dajwari</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon
============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/img/favicon.png') }}">
        <!-- all css here -->
        <!-- bootstrap css -->
        <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css') }}">
        <!-- nivo-slider css -->
        <link rel="stylesheet" href="{{asset('public/css/default.css') }}">
        <link rel="stylesheet" href="{{asset('public/css/ubislider.min.css') }}">
        <link rel="stylesheet" href="{{asset('public/css/nivo-slider.css') }}">
        <!-- Important Owl stylesheet -->
        <link rel="stylesheet" href="{{asset('public/css/owl.carousel.css') }}">
        <!-- font-awesome css -->
        <link rel="stylesheet" href="{{asset('public/css/font-awesome.min.css') }}">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="{{asset('public/css/meanmenu.css') }}">
        <!-- Magnific Popup core CSS file -->
        <link rel="stylesheet" href="{{asset('public/css/jquery.fancybox.css') }}">
        <!-- animated css -->
        <link rel="stylesheet" href="{{asset('public/css/animate.css') }}">
        <!-- jquery-ui.min css -->
        <link rel="stylesheet" href="{{asset('public/css/jquery-ui.min.css') }}">
        <!-- style css -->
        <link rel="stylesheet" href="{{asset('public/style.css') }}">
        <link rel="stylesheet" href="{{asset('public/css/responsive.css') }}">
        <link rel="stylesheet" href="{{asset('public/css/main.css') }}">
        <!-- modernizr js -->
        <script src="{{asset('public/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    </head>
    <body>
        @include('layouts.header')
        
            @yield('content')
        
        @include('layouts.footer')
        
        <!-- basic scripts -->

        <script src="{{asset('public/js/vendor/jquery-1.12.0.min.js') }}"></script>
        <?php if($action == 'search'){ ?>
        <script src="{{asset('public/js/common_scripts.js') }}"></script>
        <?php } ?>
        
        
        <!-- bootstrap js -->
        <script src="{{asset('public/js/jquery.min.js') }}"></script>
        <script src="{{asset('public/js/bootstrap.min.js') }}"></script>
        <!-- nivo slider -->
        <script src="{{asset('public/js/jquery.nivo.slider.pack.js') }}"></script>
        
        <!-- owl carousel js --> 
        <script src="{{asset('public/js/owl.carousel.min.js') }}"></script>
        <!-- mixitup js -->
        <script src="{{asset('public/js/jquery.mixitup.js') }}"></script>
        <!-- wow js -->
        <script src="{{asset('public/js/wow.min.js') }}"></script>
        <!-- jquery.counterup js -->
        <script src="{{asset('public/js/jquery.counterup.min.js') }}"></script>
        <script src="{{asset('public/js/waypoints-min.js') }}"></script>
        <!-- meanmenu js -->
        <script src="{{asset('public/js/jquery.meanmenu.js') }}"></script>
        <!-- meanmenu js -->
        <script src="{{asset('public/js/ajax-mail.js') }}"></script>
        <!-- jquery-ui js -->
        <script src="{{asset('public/js/jquery-ui.min.js') }}"></script>
        <!-- jquery.countdown js -->
        <script src="{{asset('public/js/jquery.countdown.min.js') }}"></script>
        <!-- elevateZoom js -->
        <script src="{{asset('public/js/jquery.elevateZoom-3.0.8.min.js') }}"></script>      
        <!-- Magnific Popup core JS file -->
        <script src="{{asset('public/js/jquery.fancybox.pack.js') }}"></script>
        <!-- scrollUp js -->
        <script src="{{asset('public/js/jquery.scrollUp.js') }}"></script>
        <!-- plugins js -->
        <script src="{{asset('public/js/plugins.js') }}"></script>
		
        <script type="text/javascript" src="{{asset('public/lazy-master/jquery.lazy.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('public/lazy-master/jquery.lazy.plugins.min.js') }}"></script>
        <!-- main js -->
        <script src="{{asset('public/js/main.js') }}"></script>
        <?php if($action == 'details'){ ?>
        <script src="{{asset('public/js/ubislider.min.js') }}"></script>
        <script src="{{asset('public/js/scripts.js') }}"></script>
        <script src="{{asset('public/js/jqueryElevateZoom.js') }}"></script>
        <?php } ?>
        <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        </script>
        <?php if($action == 'details'){ ?>
        <script type="text/javascript">
            $('.add-tocart').on('click', function () {
                var size = $('#size').val();
                var Kameezsize = $('#Kameezsize').val();
                var Height = $('#Height').val();
                var color = $('#color').val();
                var stitching_sizes = $("input[name='stitching_sizes']:checked").val();
                if(stitching_sizes == 2 && Kameezsize == ''){
                    alert('Please select kameez size');
                    $('#Kameezsize').focus();return false;
                }
                if(stitching_sizes == 2 && Height == ''){
                    alert('Please select your height');
                    $('#Height').focus();return false;
                }
                if(color == ''){
                    alert('Please select product color');
                    $('#color').focus();return false;
                }
                if(size == ''){
                    alert('Please select product size');
                    $('#size').focus();return false;
                }
                $('#p_size').val(size);
                $('#p_Kameezsize').val(Kameezsize);
                $('#p_Height').val(Height);
                $('#p_color').val(color);
                $('#p_stitching_sizes').val(stitching_sizes);
                $('.AddToCart').submit();
            });
        </script>
        <script type="text/javascript">
            $('#slider4').ubislider({
                arrowsToggle: true,
                type: 'ecommerce',
                hideArrows: true,
                autoSlideOnLastClick: true,
                modalOnClick: true,
                onTopImageChange: function(){
                        $('#imageSlider4 img').elevateZoom();
                }
            }); 
        </script>
        <?php } ?>
        <?php if($action == 'cart'){ ?>
        <script>
             $(document).ready(function() {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $('.quantity').on('change', function() {
                    var id = $(this).attr('data-id')
                    $.ajax({
                      type: "PATCH",
                      url: '{{ url("/cart") }}' + '/' + id,
                      data: {
                        'quantity': this.value,
                      },
                      success: function(data) {
                        window.location.href = '{{ url('/cart') }}';
                      }
                    });

                });

            });

        </script>
        <?php } ?>
	<?php if($action == 'search'){ ?>
        <script type="text/javascript">
            <!--filter Expand collapse js-->	
            $(".morefilter").click(function(){
                $(".morefilter").hide();
                $(".includesnear").addClass("showcss");
                $(".lessfilter").addClass("showcss1");
                $(".hCategory").addClass("showcss");
                $(".morefilter").removeClass("showcss1");
            });

            $(".lessfilter").click(function(){
                $(".morefilter").addClass("showcss1");
                $(".includesnear").removeClass("showcss");
                $(".lessfilter").removeClass("showcss1");
                $(".hCategory").removeClass("showcss");
            });

            $(".shortlistBox label").click(function(){
                    $(this).toggleClass("activeLabel");
            });

            $(".compareBox label").click(function(){
                $(this).toggleClass("activeLabel1");
            });

            $("h5").click(function(){
                $(".priceTabMain-active").removeClass("priceTabMain-active");
                $(this).parent().parent().addClass("priceTabMain-active");

                $(".priceTabDetails").hide();
                $(this).parent().children().show();	

                $(".activePrice").removeClass("activePrice");
                $(this).parent().children("h5").addClass("activePrice");
            });


            <!--shortlist, compare, Recently Viewed Expand collapse js-->
            $("#slistId").click(function(){
                $("#shortlistShow").toggle();
                $("#cpareShow").hide();
                $("#rcentlyShow").hide();
            });

            $("#cpareId").click(function(){
                $("#rcentlyShow").toggle();
                $("#shortlistShow").hide();
                $("#cpareShow").hide();
            });
            $(".crossIcon").click(function(){
                $("#shortlistShow").hide();
                $("#cpareShow").hide();
                $("#rcentlyShow").hide();
            });


            <!--Season slider js-->
            $(window).load(function(){
            var slideShow = {
                i: 0,
                next: function() {
                    this.i++;
                    if(this.i === this.max()) {
                        this.i = 0;
                    };
                    this.reset();
                    this.goTo(this.i);
                },
                prev: function() {
                    if(this.i === 0) {
                        this.i = this.max();
                    };
                    this.i--;
                    this.reset();
                    this.goTo(this.i);
                },
                goTo: function(i) {
                    $('.listItem').eq(i).addClass('active');
                },
                init: function() {
                        slideShow.next();
                },
                reset: function() {
                    $('.listItem').removeClass('active');
                },
                max: function() {
                    return $('.listItem').length;
                }

            };

            slideShow.init();

            $('#nextArrow').click(function(){
                slideShow.next();
            });

            $('#prevArrow').click(function(){
                slideShow.prev();
            });
            });

            <!--Featured Domestic slider js-->
            $(document).ready(function() {	 

                      var owl = $("#owl-demo2");

                  owl.owlCarousel({

                  items : 5, //10 items above 1000px browser width
                  itemsDesktop : [1000,5], //5 items between 1000px and 901px
                  itemsDesktopSmall : [900,4], // 3 items betweem 900px and 601px
                  itemsTablet: [600,2], //2 items between 600 and 0;
                  itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option

                  });

                      // Custom Navigation Events
                  $(".right").click(function(){
                    owl.trigger('owl.next');
                  })
                  $(".left").click(function(){
                    owl.trigger('owl.prev');
                  })     	  




            /*custom checkbox js*/
             function customCheckbox(checkboxName){
                    var checkBox = $('input[name="'+ checkboxName +'"]');
                    $(checkBox).each(function(){
                        $(this).wrap( "<span class='custom-checkbox'></span>" );
                        if($(this).is(':checked')){
                            $(this).parent().addClass("selected");
                        }
                    });
                    $(checkBox).click(function(){
                        $(this).parent().toggleClass("selected");
                                    $(this).parent().parent().toggleClass("labelcolor");
                    });
                }
                $(document).ready(function (){
                    customCheckbox("trip[]");
                            customCheckbox("pref[]");
                })

            });
            </script>
        
        <script type="text/javascript">
            $('.filterdata').on('click', function () {
                if($(".filter_size").is(':checked')){
                    var val_filter_size = "";
                    $('.filter_size:checked').each(function(i){
                        if (val_filter_size !== "") val_filter_size += ":";
                        val_filter_size += $(this).val();
                    });
                }
                if($(".filter_color").is(':checked')){
                    var val_filter_color = "";
                    $('.filter_color:checked').each(function(i){
                        if (val_filter_color !== "") val_filter_color += ":";
                        val_filter_color += $(this).val();
                    });
                }
                if($(".filter_dispatch").is(':checked')){
                    var val_filter_dispatch = "";
                    $('.filter_dispatch:checked').each(function(i){
                        if (val_filter_dispatch !== "") val_filter_dispatch += ":";
                        val_filter_dispatch += $(this).val();
                    });
                }
                if($(".filter_fabric").is(':checked')){
                    var val_filter_fabric = "";
                    $('.filter_fabric:checked').each(function(i){
                        if (val_filter_fabric !== "") val_filter_fabric += ":";
                        val_filter_fabric += $(this).val();
                    });
                }
                if(val_filter_size === undefined ){val_filter_size = '';}else
                {
                    $('.Filtersize').removeAttr("disabled"); $('#Filtersize').val(val_filter_size);
                }
                if(val_filter_color === undefined ){val_filter_color = '';}else
                {
                    $('.Filtercolor').removeAttr("disabled"); $('#Filtercolor').val(val_filter_color);
                }
                if(val_filter_dispatch === undefined ){val_filter_dispatch = '';}else
                {
                    $('.Filterdispatch').removeAttr("disabled"); $('#Filterdispatch').val(val_filter_dispatch);
                }
                if(val_filter_fabric === undefined ){val_filter_fabric = '';}else
                {
                    $('.Filterfabric').removeAttr("disabled"); $('#Filterfabric').val(val_filter_fabric);
                }


                $('#searchForm').submit();
                var url = "<?php echo url()->full()?>";
                //window.location.href = url+'&size='+val_filter_size; 

            });

        </script>
        
        <?php } ?>
        
    </body>

</html>