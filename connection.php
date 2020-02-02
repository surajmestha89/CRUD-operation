<?php
 $s="127.0.0.1";
$u="root";
$p="";
$db="test";
$con=new mysqli($s,$u,$p);
$con->select_db($db);
   
if($con->connect_error)
{
	die ("connection error");
}

echo "<br>";
?>