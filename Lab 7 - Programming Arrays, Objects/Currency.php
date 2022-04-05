<html>
	<head>
		<title>Currency</title>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
	</head>
	<body>
		<?php
		include_once "header.php";
		include_once "menu.php";
		include_once "footer.php";
		$currencies = array( "CAD" => "Canadian Dollar",
		    "NZD" => "New Zealand Dollar",
		    "USD" => "US Dollar");
		$rates = array( "CAD" => 0.97645,
		    "NZD" => 1.20642,
		    "USD" => 1.0 );
		$default = $basecurr = $destcurr = "Select nation";
		?>
		<div id="content">
		<form method="get" action="Currency.php" style="width:80%">
		<fieldset>
		<br><p>
		<label>Convert</label>
		<input type="text" name="amount" />
		<select id="basecurr" name="basecurr">
		<?php 
		echo "<option disabled selected value>$default</option>";
		foreach($currencies as $option) {
		    echo "<option>$option</option>";
		}
		?>
		</select>
		<label>to</label>
		<select id="destcurr" name="destcurr">
		<?php 
		echo "<option disabled selected value>$default</option>";
		foreach($currencies as $option) {
		    echo "<option>$option</option>";
		}
		?>
		</select>
		<input type="submit" value="Convert"/> &nbsp; <input type="reset"><br>
		<?php

		if (isset($_GET["amount"])) {
		    $amount = $_GET["amount"];
		}
		if (isset($_GET["basecurr"])) {
		    $basecurr = $_GET["basecurr"];
		}
		if (isset($_GET["destcurr"])) {
		    $destcurr = $_GET["destcurr"];
		}
		
		if ((isset($_GET["amount"]))) {    
		  if ($amount == null) { 
		      echo "You did not supply an amount.";
		  } else if (is_numeric($amount) == FALSE) {
		      echo "Invalid amount entered. Amount must be numerical.";
		  } else if ($amount != null && $basecurr == $default && $destcurr == $default) {
		    echo "You did not provide base and destination currencies.";
		  } else if ($amount != null && $basecurr == $default && $destcurr != null) {
		    echo "You did not provide a base currency.";
		  } else if ($amount != null && $basecurr != null && $destcurr == $default) {
		      echo "You did not provide a destination currency.";
		  } else if ($amount != null && $basecurr != null && $destcurr != null) {
		echo "<p><br><b style='font-size:2em'>Conversion Results</b><br><br></p>";
		      $baseKey = array_search($basecurr, $currencies);
		      $destKey = array_search($destcurr, $currencies);
		      $converted_output = ($amount/$rates[$baseKey]) * $rates[$destKey];
		      echo number_format($amount, 2)." ".$basecurr." converts to ".number_format($converted_output, 2)." ".$destcurr;
		  } else {
		      echo "Invalid entry, try again.";
		  }
		}
		?>
		</fieldset>
		</form>
		</div>
	</body>
</html>