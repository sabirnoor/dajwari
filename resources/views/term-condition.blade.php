@extends('layouts.layout')
@section('content')
<?php
//echo '<pre>';print_r($pageDetails);die;	
//$pageDetails = $pageDetails;
//$p_image = $ProductDetails['p_image'];
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
                    <div class="col-md-12">
                        <div class="product-info">
                            <!-- Nav tabs -->
                            <ul class="info-tab" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><?php echo $pageDetails['page_title'] ?></a></li>
                                
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <h2><?php echo $pageDetails['page_title'] ?></h2>
                                    <?php echo $pageDetails['page_content'] ?>
                                                                       
                                </div>
                               
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
</div>
@endsection