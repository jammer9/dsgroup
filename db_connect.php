<?php

$con = mysql_connect('localhost',"root","") or die(mysql_error());
$db = mysql_select_db("dsgroup_db",$con);

function protect($string)
{
  $string = mysql_real_escape_string($string);
  return $string;
}

?>