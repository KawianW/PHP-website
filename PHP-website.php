<html>
<head>
	<meta charset="UTF-8">
	<title>alle opdrachten</title>
	<style>
		body{
			margin: 0;
			padding: 0;
		}
		header{
			height: 95%;
		}
		footer{
			text-align: center;
			width: 100%;
			height: 5%;
			background-color: lightblue;
		}
		
		nav{
			margin-top: 5%;
		}
		a{
			margin-left: 10px;
			text-decoration: none;
			color: black;
		}
		a:hover{
			text-decoration: underline;
		}
		p{
			line-height: 35px;
			margin: 0;
			padding: 0;
		}
	</style>
</head>
<body>
	<center>
		<header>
			<?php include "header.php" ?>
			<nav>
				<?php include "menu.php" ?>
			</nav>
		</header>

		<footer>
			<p><?php include "footer.php" ?></p>
		</footer>
	</center>
</body>
</html>