<!doctype html>
<html>
	<head>
		<title>calculator</title>
		<link rel="stylesheet" href="style.css" type="text/css">
	</head>
	<body>
		<div class="frame">
			<h1>Calculator</h1>

			<?php

				$getal1 = $_POST['getal1'];
				$getal2 = $_POST['getal2'];
				$operator = $_POST['operator'];

				if (is_numeric($getal1) == true) {
					echo $getal1,' ';
				} else {
					echo '<p>First Number Invalid: ',$getal1,'</p>';
					echo '<body class="wrinput">';
				}

				if ($operator == '+' or $operator == '-' or $operator == '*' or $operator == '/' or $operator == '%') {
					echo $operator;
				} else {
					echo '<p>Operator Invalid: ',$operator,'</p>';
					echo '<body class="wrinput">';
				}
				

				if (is_numeric($getal2) == true) {
					echo ' ',$getal2;
				} else {
					echo '<p>Second Number Invalid: ',$getal2,'</p>';
					echo '<body class="wrinput">';
				}

				

				if (is_numeric($getal1) == true and is_numeric($getal2) == true) {
					if ($operator == '+') {
						$result = $getal1 + $getal2;
					} elseif ($operator == '-') {
						$result = $getal1 - $getal2;
					} elseif ($operator == '*') {
						$result = $getal1 * $getal2;
					} elseif ($operator == '/') {
						if ($getal2 == '0') {
							$result = 'Infinity';
						} else {
							$result = $getal1 / $getal2;
						}
					} elseif ($operator == '%') {
						$result = $getal1 % $getal2;
					} else {
						$result = "Invalid Operator!";
					}
					echo ' = ',$result;
				}
				
			?>

			<br><br><a href="index.php"><button>Next Calculation</button></a>
		</div>
	</body>
</html>