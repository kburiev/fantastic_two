<?php
session_start();
include_once('class_user.php');
include_once('class_admin.php');
include_once('fantastic_library.php');

 if(empty($_SESSION['username']))
 {
 	header('Location: login.php');
 	exit();
 }
 if($_SESSION['admin'] == 0)
 {
 	$user1= new user();
 	$_SESSION['user'] = $user1;
 	
 	?><h3><?php echo"Hello ".$user1->getName()." ready to spend money"?></h3><?php
 }
 else if($_SESSION['admin'] == 1)
 {
 	$admin1= new admin();
 	?><h3><?php echo"Hello ".$admin1->getName()." ready to manage this website?"?></h3><?php
 }

?>

<!DOCTYPE html>
<html>
<head>
<title>Inscription of Fantastic Two</title>
</head>



<body>

<form method="post">
<input type="submit" name="logout" value="Logout">
<input type="submit" name="settings" value="Settings">
<?php
if(isset($_POST['logout']))
{
	logout();

}
if(isset($_POST['settings']))
{
	header("Location: user_settings.php");
	exit();
}

?>


</form>
</body>
</html>

