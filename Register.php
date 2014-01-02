<html>
	<body>
		<div class="login-box">
			<form method="POST" action="Register.php" enctype="multipart/form-data">
			<input name="username">Username</input>
			</br>
			<input type="password" name="password">Password</input>
			</br>
			<input type="email" name="email">Email</input>
			</br>
			<input type="file" name="file" id="file">Photo</input>
			</br>
			<input type="submit">
			</form>
		</div>
	</body>
</html>

<?php
	require_once('check_login.php');
	if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']))
	{
		$login = new LOGIN();
		if ($_FILES["file"]["error"] > 0){
			#$login->register_new_account($_POST['username'],$_POST['password'],$_POST['email'],"null");
		}
		else{
			$login->register_new_account($_POST['username'],$_POST['password'],$_POST['email'],$_FILES["file"]);
		}
	}
?>