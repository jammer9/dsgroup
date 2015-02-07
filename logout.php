<?php
session_start();
include "db_connect.php";
 
if($_SESSION['id1'])
{
	session_destroy();
	echo "<script language=\"Javascript\" type=\"text/javascript\">alert(\"You are logged out\");</script>";
	echo "<script type=\"text/javascript\">window.location=\"index.php\"</script>";
}

?>