<html>
	<head>
		<title>Array of Objects</title>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
	</head>
	<?php 
	include_once "header.php";
	?>
	<body>
		<?php
		include_once "menu.php";
		include_once "Employee.php";
		include_once "Supervisor.php";
		
		echo "<div id=\"content\">";
		$employee1 = new Employee(1, "Chris", "Rogers");
		$employee2 = new Employee(2, "Matt", "Prior");
		$employee3 = new Employee(3, "Cindy", "Burnskill");
		$employee4 = new Employee(4, "Elizabeth", "Ford");
		$employee5 = new Employee(5, "Doug", "May");
		$employee6 = new Employee(6, "John", "Hopkins");
		
		$employees1 = array($employee1, $employee2, $employee3);
		$employees2 = array($employee4, $employee5, $employee6);
		
		$supervisor1 = new supervisor(7, "Adam", "Philip", $employees1);
		$supervisor2 = new supervisor(8, "Nicolas", "Jones", $employees2);
		
		foreach ($supervisor1->getEmployees() as $employee) {
		    echo "Employee Id: " . $employee->getEmployeeId() . ", Name: " . $employee->getFirstName() . " " . $employee->getLastName(). ", Supervisor: " . $supervisor1->getFirstName() . " " . $supervisor1->getLastName() . "<br>";
		}
		
		foreach ($supervisor2->getEmployees() as $employee) {
		    echo "Employee Id: " . $employee->getEmployeeId() . ", Name: " . $employee->getFirstName() . " " . $employee->getLastName(). ", Supervisor: " . $supervisor2->getFirstName() . " " . $supervisor2->getLastName() . "<br>";
		}
		echo "</div>";
		?>
	</body>
	<?php 
	include_once "footer.php";
	?>
</html>