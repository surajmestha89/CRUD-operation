<html>
<head> <title> employee form</title>
<style>
div{
	
		border: 2px solid black;
		padding: 15px;
		margin: 20px 500px;
		text-align:center;
	}
  body {
    background: linear-gradient(
      53deg,
      #ccfffc,
      #ffcccf
    );
	
	
</style>
</head>
<body>
<h1 style="text-align:center"> form submition</h1>
<div align="center">
<form method="post" action="<?php echo htmlspecialchars("insert.php")?>">
NAME:<input type="text" name="name" required>
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

			
<button type="reset"> reset</button><br>
 <input type="submit" value="submit">

</form>
</div>
</body>
</html>
