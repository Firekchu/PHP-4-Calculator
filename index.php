<!doctype html>
<html>
<head>
	<title>calculator</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<div class="frame">
		<h1>Calculator</h1>
		<form action="calculate.php" method="post">
			<label>First Number:</label>
			<input value="0" name="getal1"><br>
			
			<label>Second Number:</label>
			<input value="0" name="getal2"><br>
			
			<label>Operator (+ - * / %):</label>
			<input maxlength="1" name="operator"><br>
			<label></label>
			<input type="submit" value="Calculate">
		</form>
	</div>
	</div>
</body>
</html>