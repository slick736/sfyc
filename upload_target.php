<?php
	if (session_id() == '') { 
	session_start();
	}
class upload_photo{
	function upload_image($myfile){
		$username = $_SESSION['username'];
		$filename = $username.$myfile['name'];
		if(move_uploaded_file($myfile["tmp_name"],"images/upload/".$filename)){
			return true;
		}
		/*if($this->compress_image($myfile["tmp_name"], "images/upload/".$filename, 20)){
			echo "success";
			return true;
		} //We will just move the image, instead of compress, because we don't have php-gd on server machine, and can't use apt-get to get php-gd, will find a way to figure out*/
		return false;
	}
	private function compress_image($source_url, $destination_url, $quality) {
	try{
		$info = getimagesize($source_url); 
		if ($info['mime'] == 'image/jpeg') $image = imagecreatefromjpeg($source_url); 
		elseif ($info['mime'] == 'image/gif') $image = imagecreatefromgif($source_url); 
		elseif ($info['mime'] == 'image/png') $image = imagecreatefrompng($source_url);
		else{die('Unknown image file format');}  
		return (imagejpeg($image, $destination_url, $quality)); 			
	} catch (Exception $e) {
    	echo 'Caught exception: ',  $e->getMessage(), "\n";
	}
	return false;
	} 	
}	
?>