<?php 
	include 'connection.php';
	$na=$_GET['num'];
	
$sql=" DELETE from form where name='$na'";
if($con->query($sql))
	echo "<b>deleted succfull user:<b> ".$na;
else die("error".$con->error);
echo "<a href='http://localhost/phpproject/New folder/display.php' >display</a>";

 
?>