<html>
	<head>
		<title>PHP Webpage</title>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
	</head>
	<body>
		<?php
			include_once "header.php";
			include_once "menu.php";
			include_once "footer.php";
			
			echo "<div id=\"content\">";
			$firstName = "Byron";
			$middleName = "Wai-Lik";
			$lastName = "Jones";
			define("STUDENT_NUMBER", "040585687");
			echo "Name: ".$firstName." ".$middleName." ".$lastName;
			echo "<br><br>Student Number: ".STUDENT_NUMBER;
			echo "<br><br>Hello World!!"." This is the first time I am using PHP!!";
			echo "</div>";
		?>
	</body>
</html>