<?php 
session_start();
?>
<html>
	<head>
		<title>Session2</title>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
	</head>
		<?php 
	include_once "header.php";
	include_once "menu.php";
	include_once "footer.php";
	?>
	<body>
	<div id="content">
		<?php

		if ($_SESSION["fname"] == null || $_SESSION["lname"] == null || $_SESSION["pnumber"] == null || $_SESSION["email"] == null|| $_SESSION["bday"] == null|| $_SESSION["profession"] == null) {
		    echo "You did not supply all information.";
		} else {
		    if(isset($_SESSION["fname"])) {
                echo "First Name: ".$_SESSION["fname"]."<br>";
                echo "Last Name: ".$_SESSION["lname"]."<br>";
                echo "Phone Number: ".$_SESSION["pnumber"]."<br>";
                echo "Email: ".$_SESSION["email"]."<br>";
                echo "Birth Day: ".$_SESSION["bday"]."<br>";
                echo "Profession: ".$_SESSION["profession"]."<br>";
                echo "Favourite Sport: ".$_SESSION["sport"]."<br>";
		    }
		}
		
		   

		?>
	</div>
	</body>
		<?php 
	include_once "footer.php";
	?>
</html>