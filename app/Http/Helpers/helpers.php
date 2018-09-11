<?php
Use App\Image\Resize\SimpleImage;
use App\Products;

function pr($string){
	 echo "<pre>";
	 print_r($string);
	 echo "</pre>";
}

function clean($string) {
   $string = str_replace('', '-', $string); // Replaces all spaces with hyphens.
   return preg_replace('/[^A-Za-z0-9\-]/', '-', strtolower($string)); // Removes special chars.
}
function getProductColorDetails($id){
	return Products::getProductColorDetails($id);
}
function getProductSizeDetails($id){
	return Products::getProductSizeDetails($id);
}
function getProductImageDetails($id){
	return Products::getProductImageDetails($id);
}


function imageResize($old_image,$new_image_name, $target_dir, $new_img_width, $new_img_height){
    $target_file = $target_dir . basename($new_image_name);
    $image = new SimpleImage();
    $image->load($old_image);
    $image->resize($new_img_width, $new_img_height);
    $image->save($target_file);
    return $target_file; //return name of saved file
}
function is_localhost() {
    $whitelist = array( '127.0.0.1', '::1' );
    if( in_array( $_SERVER['REMOTE_ADDR'], $whitelist) )
        return true;
}

function upload_path()
{
	if(is_localhost())
		$path = '/home/developerkaif/public_html/farahbeauty.in/dajwari/uploads/';
		//$path = public_path().'/upload/';
	else 
		$path = '/home/developerkaif/public_html/farahbeauty.in/dajwari/uploads/';
	return $path;
}

function src_path()
{
	if(is_localhost())
		$path = "http://local.tekoffice.com/public/upload/";
	else 
		$path = "http://local.tekoffice.com/public/upload/";
	return $path;
}
function img_src_path()
{
	if(is_localhost())
		$path = "http://farahbeauty.in/dajwari/uploads/";
	else 
		$path = "http://farahbeauty.in/dajwari/uploads/";
	return $path;
}


function isValidApiKey($api_key) {	
	return "1679091c5a880faf6fb5e6087eb1b2dc"==$api_key;
}



function Dateformate($date) {
	if(!empty($date)){
		$ex = explode('-',$date);
		return $ex[2].'-'.$ex[1].'-'.$ex[0];
	}
}

function array_empty($mixed) {
    if (is_array($mixed)) {
        foreach ($mixed as $value) {
            if (!array_empty($value)) {
                return false;
            }
        }
    }
    elseif (!empty($mixed)) {
        return false;
    }
    return true;
}

function text_limit($x, $length){
	
  if(strlen($x)<=$length)
  {
    echo $x;
  }
  else
  {
    $y=substr($x,0,$length) . '...';
    echo $y;
  }
}