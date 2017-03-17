<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>



<body>

<h2>User login</h2>
<!--block of login forms & remember me-->
<form method="post">

<p>
<label for="username">Username:</label>
<div>
<input type="text" name="username" required min="2" max="25"> 
</div>
</p>

<p>
<label for="password">Password:</label>
<div>
<input type="password" name="password" required min="3" max="25">
</div>
</p>

<p>
<div>
<input type="checkbox" name="remember_me">
<label for="checkbox">Remember me:</label>
</div>
</p>

<p>
<input type="button" name="login" value="Login">
<input type="button" name="register" value="Register">
</p>


<p>
forgot <a href="google.com">password</a>
</p>
<?php
if(isset($_POST['login']))
{
	header('Location: index.php');
	exit();
}
if(isset($_POST['register']))
{
header('Location: inscription.php');
	exit();
}
?>

</form>
</body>
</html>
