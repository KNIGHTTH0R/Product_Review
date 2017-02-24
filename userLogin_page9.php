<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Login Page</title>
</head>
<body>
	<?php include('header5.html') ?>
	<form action="login_check10.php" method="post">
		<fieldset>
			<p>
				<label for='user'> Enter User Name </label>
				<input type='text' name='username' id='user'>
			</p>

			<p>
				<label for='pass'> Enter Password </label>
				<input type='password' name='password' id='pass'>
			</p>

			<p>
				<label > login </label>
				<input type='submit' name='login' >
			</p>
		
		</fieldset>
	</form>
</body>
</html>