
<?php 

include'connection.php';
$name="";
$gender="";
$salary="";
$occ="";
$exp="";
if($_SERVER['REQUEST_METHOD']=='POST'){
$name=  $_POST['name'];
$gender=  $_POST['geder'];
$salary=  $_POST['sal'];
$occ=  $_POST['occup'];
$exp= $_POST['exp'];
}
//echo $name ." ".$salary;


$sql="insert into form values('$name','$gender','$salary','$occ','$exp')";
if($con->query($sql)==true)
{
	echo "<center><div><h2>register  successfully ";

	
}
echo "<a href='http://localhost/phpproject/New folder/display.php' >display</a></h2></div></center>";
?>