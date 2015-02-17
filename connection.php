<?php
	$db_host_1	= "localhost";
	$db_user_1	= "root";
	$db_pass_1	= "";
	$db_name_1  = "dsgroup_db";

	/*$db_host_2	= "johnny.heliohost.org";
	$db_user_2	= "liquid_amp";
	$db_pass_2	= "9godisgreat9";
	$db_name_2  = "liquid_copy"; */

	$conn_1	= mysql_connect($db_host_1, $db_user_1, $db_pass_1);
//	$conn_2	= mysql_connect($db_host_2, $db_user_2, $db_pass_2,true);
	
function protect($string)
{
  $string = mysql_real_escape_string($string);
  return $string;
}
?>