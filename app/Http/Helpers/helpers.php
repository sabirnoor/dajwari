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

function arrayUnique($array, $preserveKeys = false)  
{  
    // Unique Array for return  
    $arrayRewrite = array();  
    // Array with the md5 hashes  
    $arrayHashes = array();  
    foreach($array as $key => $item) {  
        // Serialize the current element and create a md5 hash  
        $hash = md5(serialize($item));  
        // If the md5 didn't come up yet, add the element to  
        // to arrayRewrite, otherwise drop it  
        if (!isset($arrayHashes[$hash])) {  
            // Save the current element hash  
            $arrayHashes[$hash] = $hash;  
            // Add element to the unique Array  
            if ($preserveKeys) {  
                $arrayRewrite[$key] = $item;  
            } else {  
                $arrayRewrite[] = $item;  
            }  
        }  
    }  
    return $arrayRewrite;  
}

function sortArrayval($array){
	for($j = 0; $j < count($array); $j ++) {
		for($i = 0; $i < count($array)-1; $i ++){
			if($array[$i] > $array[$i+1]) {
				$temp = $array[$i+1];
				$array[$i+1]=$array[$i];
				$array[$i]=$temp;
			}       
		}
	}
	return $array;
}

function guidv4()
{
    $data = openssl_random_pseudo_bytes( 16 );
    $data[6] = chr( ord( $data[6] ) & 0x0f | 0x40 ); // set version to 0100
    $data[8] = chr( ord( $data[8] ) & 0x3f | 0x80 ); // set bits 6-7 to 10

    return vsprintf( '%s%s%s%s%s%s%s%s', str_split( bin2hex( $data ), 4 ) );
}
