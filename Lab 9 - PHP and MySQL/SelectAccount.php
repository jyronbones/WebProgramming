<?php
session_start();
if(!isset($_SESSION) || $_SESSION["al"] != true) {
    header("Location: Admin.php");
    exit;
}
?>
<html>
	<head>
		<title>Select Account</title>
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
	   require "MySQLConnectionInfo.php";
		$connection = mysqli_connect($host, $username, $password);
		if (!$connection)
		    die("Error connecting to database");
		mysqli_select_db($connection, $database);   
		if (isset($_SESSION) && $_SESSION["al"] == true) {
    		
    		$sqlQuery = "SELECT EmployeeId, FirstName, LastName FROM employee";
    		$result = mysqli_query($connection, $sqlQuery);
    		    echo "<table>";
    		while ($row = mysqli_fetch_array($result)) {
    		    echo "<tr>";
    		    echo "<td><a href='UpdateAccount.php?{$row[0]}'><input type='submit' value ='Edit Employee'/></a></td>";
    		    echo "<td>"."First Name: ".$row["FirstName"].'<br>'."Last Name: ".$row["LastName"]."</td>";
    		    echo "<td><br><br><br><br></td>";
    		}
		} else {
		    header("Location: Admin.php");
		}
        echo "</table>";
		
		mysqli_close($connection);

		?>
	</div>
	</body>
		<?php 
	include_once "footer.php";
	?>
</html>