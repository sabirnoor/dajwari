<?php
Use App\Image\Resize\SimpleImage;

function pr($string){
	 echo "<pre>";
	 print_r($string);
	 echo "</pre>";
}

function clean($string) {
   $string = str_replace('', '-', $string); // Replaces all spaces with hyphens.
   return preg_replace('/[^A-Za-z0-9\-]/', '-', strtolower($string)); // Removes special chars.
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
		$path = public_path().'/upload/';
	else 
		$path = public_path().'/upload/';
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