<?php
include_once("class_user.php");
class admin extends user
{

function __construct()
{
	$this->name = "admin";
	$this->email = "admin@admin";
	$this->is_admin = 1;
}
//-*-*-*-*-*-*-*ADMIN MEtHODS-*-*-*-*--*-*//

}





?>