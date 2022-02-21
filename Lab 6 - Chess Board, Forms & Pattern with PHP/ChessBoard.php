<html>
	<head>
		<title>Chess Board</title>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
	</head>
	<body>
		<?php
		include_once "header.php";
		include_once "menu.php";
		include_once "footer.php";
		
		echo "<div id=\"content\">";
		echo "<table>";
		for($i = 1; $i <= 8; $i++)
		{
		    echo "<tr>";
		    for($j = 1; $j <= 8; $j++)
		    {
		        $total = $i  +$j;
		        if($total % 2 == 0)
		        {
		            echo "<td class=\"col1\"</td>";
		        }
		        else
		        {
		            echo "<td class=\"col2\"></td>";
		        }
		    }
		    echo "</tr>";
		}
		echo "</table>";
		echo "</div>";
		?>
	</body>
</html>