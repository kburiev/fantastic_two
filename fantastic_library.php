<?php
session_start()

#fonction de connnexion à la DB
const ERROR_LOG_FILE="error.log";
function connect_db($host, $username, $passwd, $port, $db)
 {
 	$dsn = "mysql:host=".$host.";dbname=".$db.";port=".$port;
	$user_name = $username;
	$password = $passwd;
 	
	try
    {
	   $dbh = new PDO($dsn, $user_name, $password);
    }
    catch (PDOException $e)
    {	
	   echo "PDO ERROR: ".$e->getMessage()." storage in ".ERROR_LOG_FILE."\n";
	   file_put_contents (ERROR_LOG_FILE, $e->getMessage());
	   return false;
    }

 	return $dbh;

 }



#to check if name field is ok
function check_name($name)
{
	
	if(empty($name))
	{	
		return 1;
	}
	else if(strlen($name) < 2 || strlen($name) > 20)
	{
		return 1;
	}
	else
	{
		return 0;
	}

}


function check_email($mail)
{
	if (empty($mail) || !preg_match("#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i", $mail))
	{
		return 1;
	}
	else
	{
		return 0;
	}

}


function check_pass($pass, $pass_conf)
{
	if((strlen($pass) < 3 || strlen($pass) > 20) || ($pass != $pass_conf))
	{	
		return 1;
	}
	else
	{
		return 0;
	}

}


function send_db($name, $mail, $pass)
{

	$hash = password_hash($pass, PASSWORD_BCRYPT);	
	$bdd = connect_db("localhost", "root", "root", "3306", "pool_php_rush");
	$query = $bdd->exec("INSERT INTO users  VALUES ('', '$name', '$hash','$mail', FALSE )");
}

function check_login($email, $pass)
{
	$bdd = connect_db("localhost", "root", "root", "3306", "pool_php_rush");
	$query=$bdd->query("SELECT password, name, email, is_admin FROM users WHERE email = '$email'");
	$hash = $query->fetch(PDO::FETCH_ASSOC); 
	
	if(password_verify($pass, $hash['password']))
	{

		return 0;
	}
	else 
	{
		return 1;
	}

}

	
	





?>