<?php 
$con = mysql_connect("localhost","root","");

if (!$con)
{
  die();
}

mysql_select_db("lukedb",$con);
?>