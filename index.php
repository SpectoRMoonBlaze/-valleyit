<?php
require "libs/db.php";
$data = $_POST;
if( isset($data['button']))
{
	$errors = array();
	$user = R::findOne('users', 'login = ?', array($data['login']));
	if( $user )
	{

		if( password_verify($data['password'], $user->password) ){
			
			header("Location: menu/index.php");
die();
		  $_session['logged_user'] = $user;

		}else
	{
		$errors[] = 'not correct password';
	}

	}else
	{
		$errors[] = 'not correct login';
	}
		if( ! empty($errors))
	{
		
		echo '<div style="color:red;">'.array_shift($errors).'</div>';
	}
}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
	<link rel="stylesheet" href="css/styl1e.css">
</head>
<body>
	<form method="post" action="/1.php">	
	<div class="form">
		<h1>Вход</h1>
		<div class="input-form">
			<input type="text" placeholder="Логин" name="login" value="<?php echo @$data['login'] ?>">
		</div>
		<div class="input-form">
			<input type="password" placeholder="Пароль" name="password">
		</div>
		<div class="input-form">
			<input type="submit" value="Войти" name="button">
		</div>
		<a href="1.php" class="forget">register</a>
	</div>
</form>
</body>
</html>