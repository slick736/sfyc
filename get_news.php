<?php
	require_once 'constants_local.php';
	class get_news{
		private $mysql;
		private $photo_array = array();
		private  $topic_array = array();
		private $topic_array_content = array(); 
		private $topic_array_username = array();
		private $topic_array_username_photo = array();
		function __construct(){
			mysql_connect(DB_SERVER,DB_USER,DB_PWD);
			@mysql_select_db(DB_NAME) or die( "Unable to select database");
		}	
		public function retrieve_news(){
			$counter = 0;
			$query = "select `topic_id`,`text`,`username` from ".TOPIC_TABLE." WHERE visibility_type='public' ORDER BY ts DESC" ." LIMIT 30";
			$result  = mysql_query($query);
			while ($row = mysql_fetch_row($result)){
				array_push($this->topic_array,$row[0]);
				array_push($this->topic_array_content,$row[1]);
				array_push($this->topic_array_username,$row[2]);
				$user_photo = $this->fetch_photo($row[2]);
				array_push($this->topic_array_username_photo,$user_photo);
			}
			foreach($this->topic_array as &$topic_id){
				$tmp_topic_array=array();
				$tmp_photo_array = array();
				$tmp_photo_array_ratio = array();
				array_push($tmp_topic_array,$this->topic_array_content[$counter]);
				array_push($tmp_topic_array,$this->topic_array_username[$counter]);
				array_push($tmp_topic_array,$this->topic_array_username_photo[$counter]);
				$query = "select location from ".PHOTO_TABLE." WHERE topic_id='".$topic_id."' LIMIT 9";
				$result  = mysql_query($query);
				while ($row = mysql_fetch_row($result)){
					if(file_exists($row[0])){
						array_push($tmp_photo_array_ratio,getimagesize($row[0]));
					}
					else{
						array_push($tmp_photo_array_ratio,0);
					}				
					array_push($tmp_photo_array,$row[0]);
				}
				array_push($tmp_topic_array,$tmp_photo_array_ratio);
				array_push($tmp_topic_array,$tmp_photo_array);
				array_push($this->photo_array,$tmp_topic_array);	
				$counter++;				
			}
			return $this->photo_array;	
		}
		private function fetch_photo($username){
			$query = "select photo_url from ".USER_TABLE." where username='".$username."'";
			if($result  = mysql_query($query)){
				$row = mysql_fetch_row($result);
				return $row[0];
			}
			else {
				return "images/blank.png";
			}
		}		
	}
?>