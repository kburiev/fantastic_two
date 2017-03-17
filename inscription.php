<!DOCTYPE html>
<html>
<head>
<title>Inscription of Fantastic Two</title>
</head>



<body>

<h2>Registration form</h2>

<form method="post">
<!--block of forms: name, email, password and confirmation. As well as remember me-->
<p>
<div>
<label for="name">Name:</label>
</div>
<input type="text" name="name" required min="2" max="25"> 
</p>

<p>
<div>
<label for="email">Email:</label>
</div>
<input type="email" name="email" required> 
</p>

<p>
<div>
<label for="password">Password:</label>
</div>
<input type="password" name="password" required min="3" max="25">
<div>
<label for="confirm_password">Confirm password:</label>
</div>
<input type="password" name="confirm_password" required min="3" max="25">
</p>

<p>
<input type="submit" name="send" value="Send">	
<input type="button" name="reset" value="Reset">
</p>

<p>	
<input id="remember_me" type="checkbox" name="remember_me" value="Remember me">
<label for="remember_me">Remember me</label>
</p>
 

</form>







</body>
</html>
