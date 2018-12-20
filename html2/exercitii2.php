<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
<nav class="container">
<?php
for($j=1; $j<=9; $j++)	{
	echo "<div>";
	for($i=1; $i<=9; $i++) {
	echo "$j x $i=" . $j * $i. '<br/>';
	}
	echo "</div>";
		}
	?>
</nav>
</body>
</html>
