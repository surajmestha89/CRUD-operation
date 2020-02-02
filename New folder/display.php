<html>
<head><style>
table{
	margin:auto;
border: 2px solid green;
border-collapse:collapse;
}
td{ padding: 10px;}


tr:nth-child(even){background-color: #f2f2f2;}
 tr:hover {background-color: #ddd;}

th{
	background:lightblue;
color:white;
padding:12px 10px;
}
;</style>
</head>

<body>
<table>
 <tr>
 <th>name</th>
 <th>gender</th>
 <th>salary</th>
 <th>occupation </th>
 <th>experieance</th>
 <th colspan="2">operation</th>
 </tr>
  
<?php


include 'connection.php';
$sql= "select * from form";
$result= $con->query($sql);
   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
     ?><tr><?php   echo "  <td>".$row["name"].
	 " </td> <td>".$row["gender"].
	 " </td><td> ".$row["salary"].
	 " </td> <td>".$row["occupation"].
	 "</td><td>".$row["exp"].
	 "</td><td>".
	 "<a href='http://localhost/phpproject/New folder/edit.php?num=$row[name]'> edit</a>"."
	 </td><td><a href='http://localhost/phpproject/New folder/delete.php?num=$row[name]'> delete</a></td> ";?> </tr>
	<?php
		
    }
}

 else {
    echo "0 results";
}
echo "</table> <br>";
 echo "<a href='http://localhost/phpproject/New folder/register.php' >back to register page</a>";
;
//con->close()

?>
</table>
</body>
</html>