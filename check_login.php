<?php
	ob_start();
	require_once("constants_local.php");
	if (session_id() == '') { 
	session_start();
	}
	class LOGIN{
		private $mysql;
		function __construct(){
			$this->mysql = mysqli_connect(DB_SERVER,DB_USER,DB_PWD,DB_NAME);
		}
		public function check_login($username,$password){
			$password = md5("sfyc".$password);
			$query = "select * from ".USER_TABLE." where username='".$username."' and password='".$password."' ";
			if($result = $this->mysql->query($query)){
				if($row = $result->fetch_assoc()){
					$_SESSION['username'] = $username;
					$_SESSION['LOGIN'] = TRUE;
					header("Location: myspace.php");
					exit();			
				}
				else{
					echo "Incorrect Password";
				}
			}
		}
		public function register_new_account($username,$password,$email,$photo){
			$query = "select * from ".USER_TABLE." where username='".$username."'";
			$password= md5("sfyc".$password);
			if($result = $this->mysql->query($query)){
				if(!($row = $result->fetch_assoc())){
					$this->check_upload_photo($photo,$username);
					if($photo=="null")
						$photo_name="null";
					else
						$photo_name = "images/users/".$username."photo";
					$query = "insert into users values(DEFAULT,'".$username."','".$password."','".$email."','".$photo_name."')"; 
					if($this->mysql->query($query)==1)
						$_SESSION['username'] = $username;
						$_SESSION['LOGIN'] = TRUE;
						header("Location: myspace.php");
						exit();	
				}
				else{
					echo "Account Exists!";
				}
			}
		}
		private function check_upload_photo($photo,$username){
			move_uploaded_file($photo["tmp_name"],"images/users/" . $username."photo");
	
		}
		public function fetch_photo($username){
			$query = "select photo_url from ".USER_TABLE." where username='".$username."'";
			if($result = $this->mysql->query($query)){
				$row =  $result->fetch_row();
				return $row[0];
			}
			else {
				return "null";
			}
		}
		public function count_follow($username){
			$query = "SELECT COUNT(*) from ".RELATION_TABLE." where follow='".$username."'";
			if($result = $this->mysql->query($query)){
				$row =  $result->fetch_row();
				return $row[0];
			}
			else {
				return "null";
			}
		}
		public function count_pet($username){
			$query = "SELECT COUNT(*) from ".PET_TABLE." where master='".$username."'";
			if($result = $this->mysql->query($query)){
				$row =  $result->fetch_row();
				return $row[0];
			}
			else {
				return "null";
			}
		}
		public function count_followed($username){
			$query = "SELECT COUNT(*) from ".RELATION_TABLE." where followed='".$username."'";
			if($result = $this->mysql->query($query)){
				$row =  $result->fetch_row();
				return $row[0];
			}
			else {
				return "null";
			}
		}
	}
?>