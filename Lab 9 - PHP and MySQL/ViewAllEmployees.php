<?php
session_start();
if(!isset($_SESSION) || $_SESSION["loggedin"] != true) {
    header("Location: Login.php");
    exit;
}
?>
<html>
	<head>
		<title>View All Employees</title>
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
		if (isset($_SESSION) && $_SESSION["loggedin"] == true) {
		
		$sqlQuery = "SELECT * FROM employee";
		$result = mysqli_query($connection, $sqlQuery);
		
		echo "<h1>Database Data</h1><br><br><br>
                       <table>
                       <tr>
                       <th>First Name</th>
                       <th>&emsp;&emsp;Last Name</th>
                       <th>&emsp;&emsp;Email Address</th>
                       <th>&emsp;&emsp;Phone Number</th>
                       <th>&emsp;&emsp;SIN</th>
                       <th>&emsp;&emsp;Designation</th>
                       </tr>";
		while ($row = mysqli_fetch_array($result)) {
		    echo "<tr>";
		    echo "<td>".$row["FirstName"]."</td>";
		    echo "<td>&emsp;&emsp;".$row["LastName"]."</td>";
		    echo "<td>&emsp;&emsp;".$row["EmailAddress"]."</td>";
		    echo "<td>&emsp;&emsp;".$row["TelephoneNumber"]."</td>";
		    echo "<td>&emsp;&emsp;".$row["SocialInsuranceNumber"]."</td>";
		    echo "<td>&emsp;&emsp;".$row["Designation"]."</td>";
		}
		echo "</table>";
		} else {
		    header("Location: Login.php");
		}
		
		mysqli_close($connection);
		   

		?>
	</div>
	</body>
		<?php 
	include_once "footer.php";
	?>
</html>