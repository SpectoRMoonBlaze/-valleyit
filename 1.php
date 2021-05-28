<?php
require "libs/db.php";
$data = $_POST;
if( isset($data['button']))
{
	$errors = array();
	if(trim($data['login']) =='' )
	{
		$errors[] = 'write you login';
	}
	if(trim($data['password']) =='' )
	{
		$errors[] = 'write you password';
	}
	if( R::count('users', "login = ?", array($data['login']))> 0 )
	{
		$errors[] = 'login now exist';
	}

	if( empty($errors))
	{
		$user = R::dispense('users');
		$user->login = $data['login'];
		$user->password = password_hash($data['password'],PASSWORD_DEFAULT);
		R::store($user);
		echo '<div style="color:green;">welcome</div>';
	}else{
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
	<form method="post" action="/index.php">	
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
		<a href="index.php" class="forget">login in</a>
	</div>
</form>
</body>
</html>