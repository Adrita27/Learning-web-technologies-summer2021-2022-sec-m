<?php 
	session_start();
	
	require_once "../model/userModel.php";
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username == null || $password == null){
		echo "Your input cannot be null.";
?>		
<html>
<body>
	<tr>
		<td>
			<br></br>
			<a href="LogIn.html"> Back </a>
		</td>
	</tr>
<?php
	}
	else
	{
		$status = login($username, $password);
		if($status)
		{
			$_SESSION['status'] = true;
			$_SESSION['user'] = $username;
			setcookie('status', 'true', time()+3600, '/');
			header('location: ../view/Manager.php');
		}
		else {
			echo "Incorrect username/password";
		}
?>
		<tr>
		<td>
			<br></br>
			<a href="LogIn.html"> Back </a>
		</td>
		</tr>
</body>
</html>
<?php
	}
?>