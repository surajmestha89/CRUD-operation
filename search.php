<html>
<head> <title> display form</title>
<style>
h1{ color:blue;
	margin:50px;
}
input{ margin:10px;}
</style>
</head>
<body><center>
<h1> search bar</h1><hr>
<form action="" method="post"><div class="m">
<label>NAME</label>
<input type="text" name="name">
<input type="submit" value="search"><div>
</form> 
<?php    
  include'connection.php';
 // 	 if(empty($_POST['submit']==false)
  
  $ni=$_POST['name'];
  $sql="SELECT * from form where name='$ni'";
  $res=$con->query($sql);
  
  if($res->num_rows>0) {
       if($r=$res->fetch_array())
		   echo "name:<input type='text' value=".$r['name']."> <br>".
	   "gender:<input type='text' value=".$r['gender']."><br>".
	   "salary:<input type='text' value=".$r['salary']."><br>".
	   "occupation:<input type='text' value=".$r['occupation']."><br>". 
	   "experiance:<input type='text' value=".$r['exp'].">";
  }
  else echo"user is not exist";
?>
</center>
</body>
</html>