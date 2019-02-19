<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>lab 3</title>
</head>
<body>
<h1>lab 3a</h1>
	<?php
		$getal1 = rand(1,20);
		$getal2 = rand(1,20);

		echo $getal1." x ".$getal2." = ".($getal1 * $getal2)."<br>";
		echo $getal1." / ".$getal2." = ".($getal1 / $getal2)."<br>";
		echo $getal1." + ".$getal2." = ".($getal1 + $getal2)."<br>";
		echo $getal1." - ".$getal2." = ".($getal1 - $getal2)."<br>";


	?>
	<br>

	<h1>lab 3b</h1>
<?php
	$arr = array("3", "5", "6", "8", "12");
	foreach ($arr as $cijfer) {
		$getal = $cijfer;

		tafel($getal);
	}

	function tafel($getal){
		for($a =1; $a <=10; $a++){
			echo $a." x ".$getal." = ".($getal * $a)."<br>";
		}
	}

?>
</body>
</html>