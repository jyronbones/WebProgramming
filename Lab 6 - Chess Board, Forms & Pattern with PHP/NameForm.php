<html>
	<head>
		<title>Name Form</title>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
	</head>
	<body>
		<?php
		include_once "header.php";
		include_once "menu.php";
		include_once "footer.php";
		?>
		<div id="content">
		<form method="get" action="NameForm.php" style="width:30%">
		<fieldset>
		<p><b style="font-size:2em">Name Form</b></p>
		<br><p>
		<label>First Name: </label> &nbsp;&ensp;
		<input type="text" name="fname" />
		</p>
		<br><p>
		<label>Middle Name: </label>
		<input type="text" name="mname" />
		</p>
		<br><p>
		<label>Last Name: </label> &nbsp;&ensp;&nbsp;
		<input type="text" name="lname" />
		</p>
		<br><input type="submit" /> &emsp; <input type="reset" value="Reset Form"><br>
		<?php 
		if (isset($_GET["fname"])) {
		    $firstName = $_GET["fname"];
		}
		if (isset($_GET["mname"])) {
		    $middleName = $_GET["mname"];
		}
		if (isset($_GET["lname"])) {
		    $lastName = $_GET["lname"];
		}
		
		$time = time();
		$tod = ($time >= 12) ? "Good day" : "Good morning";
		
		if ((isset($_GET["fname"]) || isset($_GET["mname"]) || isset($_GET["lname"]))) {    
		  if ($firstName == null && $middleName == null && $lastName == null) { 
		      echo "You did not supply any names.";
		  } else if ($firstName != null && $middleName == null && $lastName == null) {
		    echo $tod." ".$firstName."!"." You did not provide middle and last name.";
		  } else if ($firstName != null && $middleName == null && $lastName != null) {
		    echo $tod." ".$firstName." ".$lastName."!"." You did not provide middle name.";
		  } else if ($firstName != null && $middleName != null && $lastName != null) {
		    echo $tod." ".$firstName." ".$middleName." ".$lastName."!"." Your middle name is very unique.";
		  } else {
		      echo $tod.", Welcome to the World of PHP";
		  }
		}
		
		?>
		</fieldset>
		</form>
		</div>
	</body>
</html>