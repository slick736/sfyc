<html>
	<body>
		<div class="login-box">
			<form method="POST" action="login.php">
			<input name="username">Username</input>
			</br>
			<input type="password" name="password">Password</input>
			</br>
			<input type="submit">
			</form>
		</div>
	</body>
</html>
<?php
	ob_start();
	require_once('check_login.php');
	if(isset($_POST['username']) && isset($_POST['password']))
	{
		$login = new LOGIN();
		$login->check_login($_POST['username'],$_POST['password']);
	}
?>