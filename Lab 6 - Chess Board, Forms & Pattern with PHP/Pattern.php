<html>
	<head>
		<title>Pattern</title>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
	</head>
	<body>
		<?php
		include_once "header.php";
		include_once "menu.php";
		include_once "footer.php";
		
		echo "<div id=\"content\">";
		for ($i = 10; $i > 0; $i--) {
		    for ($j = $i; $j > 0; $j--) {
		        if ($i % 2 == 0) {
		            echo "*";
		        } else {
		            echo "$";
		        }
		    }
		    echo "<br>";
		}
		echo "</div>";
		?>
	</body>
</html>