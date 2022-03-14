<html>
	<head>
		<title>Arrays</title>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
	</head>
		<?php 
	include_once "header.php";
	?>
	<body>
		<?php
		include_once "menu.php";
		include_once "footer.php";
		
		echo "<div id=\"content\">";
		$noKeyArray = array(10, 20, 30, 40);
		echo "<p class=\"arrayText\"><b>No Key Array - Output using var_dump</b><br><br></p>";
		var_dump($noKeyArray);
		
		echo "<p class=\"arrayText\"><br><b>No Key Array - Output using foreach</b><br><br></p>";
		foreach($noKeyArray as $key => $value) {
		    echo "key: ".$key." value: ".$value.", key data type: ".gettype($key)."<br>";
		}
		
		$stringKeyArray = array("key1" => "item1","key2" => "item2");
		echo "<p class=\"arrayText\"><br><b>String Key Array - Output using var_dump</b><br><br></p>";
		var_dump($stringKeyArray);
		
		echo "<p class=\"arrayText\"><br><b>String Key Array - Output using foreach</b><br><br></p>";
		foreach ($stringKeyArray as $key => $value) {
		    echo "key: ".$key." value: ".$value.", key data type: ".gettype($key)."<br>";
		}
		
		$intKeyArray = array(0 => "item1", 1 => "item2", 3 => "Item3");
		echo "<p class=\"arrayText\"><br><b>Integer Key Array - Output using var_dump</b><br><br></p>";
		var_dump($intKeyArray);
		
		echo "<p class=\"arrayText\"><br><b>Integer Key Array - Output using foreach</b><br><br></p>";
		foreach ($intKeyArray as $key => $value) {
		    echo "key: ".$key." value: ".$value.", key data type: ".gettype($key)."<br>";
		}
		
		$mixedKeyArray = array("key1" => "item1", "key2" => "item2", 2 => "Item8", 4 => "item4", 5 => "item5", 3 => "item 6", 1 => "item7");
		echo "<p class=\"arrayText\"><br><b>Mixed Key Array - Output using var_dump</b><br><br></p>";
		var_dump($mixedKeyArray);
		
		echo "<p class=\"arrayText\"><br><b>Mixed Key Array - Output using foreach</b><br><br></p>";
		foreach ($mixedKeyArray as $key => $value) {
		    echo "key: ".$key." value: ".$value.", key data type: ".gettype($key)."<br>";
		}
		
		$array1 = array(0 => 10, 1 => 20);
		$array2 = array(0 =>30, 1 => 40);
		$multiDimensionArray = array($array1, $array2);
		echo "<p class=\"arrayText\"><br><b>Multi-dimensional Array - Output using var_dump</b><br><br></p>";
		var_dump($multiDimensionArray);
		
		echo "<p class=\"arrayText\"><br><b>Multi-dimensional Array - Output using foreach</b><br><br></p>";
		foreach($multiDimensionArray as $key1 => $element1) {
		    echo 'Level 1 key: '.$key1;
		    echo '<br>';
		    foreach($element1 as $key2 => $element2) {
		        echo 'Level 2 key: ' .$key2 .  ', value: '.$element2.', key data type: '.gettype($key2);
		        echo '<br>';
		    }
		}
		echo "</div>";
		?>
	</body>
		<?php 
	include_once "footer.php";
	?>
</html>