<?php

	ob_start();
	require_once 'constants_local.php';
	class topic_submit{
		private $mysql;
		private $topic_id;
		private $username;
		private $photo_array = array();
		private $visibility_type;
		function __construct(){
			$this->mysql = mysqli_connect(DB_SERVER,DB_USER,DB_PWD,DB_NAME);
			$this->topic_id = uniqid(UNIQUE_TOPIC_ID_PREFIX);
			$this->username = $_SESSION['username'];
		}	
		public function submit_topic_form($post){
			$this->visibility_type = $post["visibility_type"];
			var_dump($post);
			$this->username = $post["hiddenusername"];
			for($i=1;$i<=UPLOAD_PHOTO_MAX;$i++){
				$element_id = UPLOAD_PHOTO_ID_PREFIX.strval($i);
				if($post["$element_id"]!=""){
					array_push($this->photo_array,$post["$element_id"]);
				}
			}
			foreach($this->photo_array as &$photo){
				echo "insert photo";
				if($this->insert_photo($photo)){
					echo "photo inserted";
				}		
			}
			echo "insert topic";
			$this->insert_topic($post["announcertext_inner"]);
							
		}//end of submit_topic_form
		private function insert_photo($photo){	
			$photo_id = uniqid(UPLOAD_PHOTO_ID_PREFIX);
			$query = "insert into ".PHOTO_TABLE." values('".$photo."','".$this->topic_id."','".$photo_id."','".$this->username ."','".$this->visibility_type."',CURRENT_TIMESTAMP)";
			echo $query; 
			if($this->mysql->query($query)){
				return true;
			}
		}
		private function insert_topic($topic){
			$query = "insert into ".TOPIC_TABLE." values('".$this->topic_id."','".$this->username."','".$topic."','".$this->visibility_type."',CURRENT_TIMESTAMP)";
			echo $query; 
			if($this->mysql->query($query)){
				return true;
			}
		}
}
?>