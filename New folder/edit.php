<html>
<head> <title> edit form</title>
<style>
</style>
</head>
<body>
<center> <?php $n2= $_GET['num'];?>
<form action="" method="post">
NAME:<input type="text" value="<?php echo $_GET['num']; ?>" name="name">
<br>
GENDER:
<br>
		<input type="radio" name="geder" value="femel"> female <br>
		<input type="radio" name="geder" value="male">male <br>
		<input type="radio" name="geder" value="other">other
		<br>
SALARY:<input type="number" name="sal"><br>
OCCUPATION:<select name="occup"> 
					<option value="bsc" >BSC</option>
					<option value="be" >BE</option>
					<option value="ba" >BA</option>
					<option value="bcom" >BCOM</option>
			</select> 
			<br>
experiance:
<select name="exp">
<option value="fresher">0</option>
<option value="experiance">1-5</option>
</select>
<br>
<input type="submit" name="sub" value="update">
</center>
</form>
<?php 
//<?php echo $_SERVER['PHP_SELF'];

include 'connection.php';

if(isset($_POST["sub"])){
	$na=$n2;
	$sal=$_POST['sal'];
	$gen=$_POST['geder'];
	$oc=$_POST['occup'];
	$ex=$_POST['exp'];
$sql=" UPDATE form set  salary='$sal',gender='$gen',occupation='$oc',exp='$ex' where name='$na'";
if($con->query($sql))
	echo "updated";
else die("error".$con->error);
} 
?>
</body>
</html>