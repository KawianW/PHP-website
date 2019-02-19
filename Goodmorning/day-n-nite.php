<?php
	date_default_timezone_set("Europe/Amsterdam");

	$tijd = date("H:i:s");
	$ochtend = date("06:00");
	$middag = date("12:00");
	$avond = date("18:00");
	$nacht = date("00:00");

	if($tijd >= $ochtend && $tijd <$middag){
		$iets = "ochtend";
	}

	elseif($tijd >= $middag && $tijd <$avond){
		$iets = "middag";
	}

	elseif($tijd >= $avond && $tijd >$nacht){
		$iets = "avond";
	}

	elseif($tijd >= $nacht && $tijd <$ochtend){
		$iets = "nacht";
	}

	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tijd</title>
	<meta http-equiv="refresh" content="1">
	<style>

		body{
			background-size: 100%;
			font-size: 30px;
		}
		.ochtend{
			background-image: url(images/morning.png);
			color: yellow;
		}

		.middag{
			background-image: url(images/afternoon.png);
			color: orange;
		}

		.avond{
			background-image: url(images/evening.png);
			color: lightred;
		}

		.nacht{
			background-image: url(images/night.png);
			color: white;
		}

		div{
			margin-top: 20%;
		}

	</style>
</head>
<body class="<?php echo $iets ?>">
	<center>
		<div>	
			<h1>het is nu <?php echo $tijd ?></h1>
			<h1>Goede <?php echo $iets ?></h1>
		</div>
	</center>

</body>
</html>