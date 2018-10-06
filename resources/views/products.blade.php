@extends('layouts.layout')
@section('content')
<!-- header area end-->
<!-- search area -->
        <div class="search-area">
		<?php //echo '<pre>';print_r($getBrowseProductsList);die; ?>
            &nbsp;
        </div>
        <!-- search area  end-->
<!-- Main content  -->
<div class="main-content">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-xs-12" >
			<div id="filters_col"> <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Filters </a>
            <div class="collapse show" id="collapseFilters">
				<div class="star_rating">
					<form method="post" action="">
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

                            <h3>By Size</h3>
                            <ul>
                                <?php
                                if ($getBrowseProductsList['Filterdata']['filter_size']) {
                                    $i = 0;
                                    foreach ($getBrowseProductsList['Filterdata']['filter_size'] as $key => $value) {
                                        $checked = '';
                                        if (!empty($size)) {
                                            if (in_array($value->p_size, $size)) {
                                                $checked = 'checked="checked"';
                                            }
                                        }
                                        ?>
                                        <li><div>										
                                            <input <?= $checked ?> id="size-checkbox-<?php echo $i; ?>" class="checkbox1-custom filter_size filterdata" name="filter_size[]" type="checkbox" value="<?php echo $value->p_size; ?>" >
                                            <label for="size-checkbox-<?php echo $i; ?>" class="checkbox1-custom-label"><span>(<?php echo $value->countTotal; ?>)</span><span><?php echo $value->p_size; ?></span> </label>

                                            </div></li> 
                                        <?php
                                        $i++;
                                    }
                                }
                                ?>
                            </ul>    
                        </div>

                        <div class="widget">
                            <h3>Color</h3>
                            <ul>
                                <?php
                                if ($getBrowseProductsList['Filterdata']['filter_color']) {
                                    $i = 0;
                                    foreach ($getBrowseProductsList['Filterdata']['filter_color'] as $key => $value) {
                                        $checked = '';
                                        if (isset($color) && !empty($color)) {
                                            if (in_array($value->color_name, $color)) {
                                                $checked = 'checked="checked"';
                                            }
                                        }
                                        ?>
                                        <li><div>
                                            <input <?= $checked ?> id="color-checkbox-<?php echo $i; ?>" class="checkbox1-custom filter_color filterdata" name="filter_color[]" type="checkbox" value="<?php echo $value->color_name; ?>"  un-checked>
                                            <label for="color-checkbox-<?php echo $i; ?>" class="checkbox1-custom-label"><span>(<?php echo $value->countTotal; ?>)</span><span><?php echo $value->color_name; ?></span> </label>
                                        </div></li>

                                        <?php
                                        $i++;
                                    }
                                }
                                ?>
                            </ul> 
                        </div>
                        <div class="widget">
                            <h3>BY Fabric</h3>
                            <ul>
                                <?php
                                if ($getBrowseProductsList['Filterdata']['filter_fabric']) {
                                    $i = 0;
                                    foreach ($getBrowseProductsList['Filterdata']['filter_fabric'] as $key => $value) {
                                        $checked = '';
                                        if (isset($fabric) && !empty($fabric)) {
                                            if (in_array($value->id, $fabric)) {
                                                $checked = 'checked="checked"';
                                            }
                                        }
                                        ?>
                                        <li><div>
                                            <input <?= $checked ?> id="fabric-checkbox-<?php echo $i; ?>" class="checkbox1-custom filter_fabric filterdata" name="filter_fabric[]" type="checkbox" value="<?php echo $value->id; ?>" un-checked>
                                            <label for="fabric-checkbox-<?php echo $i; ?>" class="checkbox1-custom-label"><span>(<?php echo $value->countTotal; ?>)</span> <span title="<?php echo $value->fabric_name; ?>"><?php echo text_limit($value->fabric_name, 25); ?></span> </label>
                                        </div></li>
                                        <?php
                                        $i++;
                                    }
                                }
                                ?>
                            </ul>    
                        </div>
                        
                        <div class="widget">
                            <h3>By Delivery Days</h3>
                            <ul>
                                <?php
                                if ($getBrowseProductsList['Filterdata']['filter_dispatch']) {
                                    $i = 0;
                                    foreach ($getBrowseProductsList['Filterdata']['filter_dispatch'] as $key => $value) {
                                        $checked = '';
                                        if (isset($dispatch) && !empty($dispatch)) {
                                            if (in_array($value->p_dispatch, $dispatch)) {
                                                $checked = 'checked="checked"';
                                            }
                                        }
                                        ?>
                                        <li><div>										
                                            <input <?= $checked ?> id="dispatch-checkbox-<?php echo $i; ?>" class="checkbox1-custom filter_dispatch filterdata" name="filter_dispatch[]" type="checkbox" value="<?php echo $value->p_dispatch; ?>" un-checked>
                                            <label for="dispatch-checkbox-<?php echo $i; ?>" class="checkbox1-custom-label"><span>(<?php echo $value->countTotal; ?>)</span><span><?php echo $value->p_dispatch; ?></span> </label>
                                        </div></li> 
                                        <?php
                                        $i++;
                                    }
                                }
                                ?>
                            </ul>    
                        </div>
                        

                    </form>
				</div>
               </div>
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
										<span>Found <?= $getBrowseProductsList['Filterdata']['total_records'] ?> items:</span>
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
							<?php 
							if($getBrowseProductsList['data']){
								foreach($getBrowseProductsList['data'] as $key => $val){
									$val = (array) $val; //print_r($val); exit;
				//$p_color = getProductColorDetails($val['p_details']['id']);
				//$p_image = getProductImageDetails($val['p_details']['id']);
				$p_image = (array) $val['p_image'];
				$p_image1 = (isset($p_image[1]) && !empty($p_image[1]) ? $p_image[1] : '');
									$value = $val['p_details'];
									//echo '<pre>';print_r($p_color);echo '</pre>';
									
							?>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="single-product">
										<div class="product-image fix">
											 <a href="<?=url('details/'.str_replace(" ", "_",$value->p_name))?>">
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
													<span class="text-new"><span>new</span></span>
												</div>
											</div>
										</div>
										<h4 class="name"><a href="#"><?=text_limit($value->p_name,35)?></a></h4>
										<span class="amount">

											RS,<?=$value->p_price?>
										</span>
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
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="shop-pagination">
								<div class="show-pagination">
								<?php //echo $getBrowseProductsList->links()?>
									<!--<ul class="pagination pagi-style">
												<li ><a href="#" class="current page-numbers">1</a></li>
												<li><a href="#" class="page-numbers">2</a></li>
												<li><a href="#" class="page-numbers"><i class="fa fa-angle-right"></i></a></li>
										</ul>-->
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<form action="http://localhost/dajwari/products/INDOWESTERN" method="get" id="searchForm">
    
    <input type="hidden" name="size" id="Filtersize" disabled="disabled" class="Filtersize">
    <input type="hidden" name="color" id="Filtercolor" disabled="disabled" class="Filtercolor">
    <input type="hidden" name="fabric" id="Filterfabric" disabled="disabled" class="Filterfabric">
    <input type="hidden" name="dispatch" id="Filterdispatch" disabled="disabled" class="Filterdispatch">

</form>
@endsection