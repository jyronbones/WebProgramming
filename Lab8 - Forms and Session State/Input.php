<html>
	<head>
		<title>Input Form</title>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
	</head>
	<body>
		<?php
		include_once "header.php";
		include_once "menu.php";
		include_once "footer.php";
		?>
		<div id="content">
            <table style="width:100%">
            <tr>
              <td style="width:30%">
                <form method="get" action="Input.php" style="width:100%">
                  <fieldset>
                    <br>
                    <p>
                      <label>First Name: </label>
                      <input type="text" name="fname" />
                    </p>
                    <br>
                    <p>
                      <label>Last Name: </label>
                      <input type="text" name="lname" />
                    </p>
                    <br>
                    <p>
                      <label>Telephone Number: </label>
                      <input type="number" name="pnumber" />
                    </p>
                    <br>
                    <p>
                      <label>Email: </label>
                      <input type="email" name="email" />
                    </p>
                    <br>
                    <p>
                      <label>Birth Day: </label>
                      <input type="date" name="bday" />
                    </p>
                    <br>
                    <p>
                      <label>Select your profession:</label><br>
                      <label>Student</label>
                      <input type="radio" name="profession" value="student"/>
                      <label>Doctor</label>
                      <input type="radio" name="profession" value="doctor"/>
                      <label>Engineer</label>
                      <input type="radio" name="profession" value="engineer"/>
                      <label>Farmer</label>
                      <input type="radio" name="profession" value="farmer"/><br>
                    </p>
                    <p>
                      <br>
                      <label>Choose your favourite sport: </label>
                      <select name="sport">
                        <option>Hockey</option>
                        <option>Football</option>
                        <option>Curling</option>
                        <option>Tennis</option>
                      </select>
                    </p>
                    <br><input type="submit" value="Submit Information" /> &emsp; <input type="reset" value="Reset Form">
                  </fieldset>
                </form>
              </td>
              <td>
		<?php 
		if (isset($_GET["fname"])) {
		    $firstName = $_GET["fname"];
		}
		if (isset($_GET["lname"])) {
		    $lastName = $_GET["lname"];
		}
		if (isset($_GET["pnumber"])) {
		    $phoneNumber = $_GET["pnumber"];
		}
		if (isset($_GET["email"])) {
		    $email = $_GET["email"];
		}
		if (isset($_GET["bday"])) {
		    $bDay = $_GET["bday"];
		}
		if (isset($_GET["profession"])) {
		    $profession = $_GET["profession"];
		}
		if (isset($_GET["sport"])) {
		    $sport = $_GET["sport"];
		}
		
		if ((isset($_GET["fname"]) || isset($_GET["lname"]) || isset($_GET["pnumber"])  || isset($_GET["bday"]) || isset($_GET["profession"]) || isset($_GET["sport"]))) {    
		    if ($firstName == null || $lastName == null || $phoneNumber == null || $email == null || $bDay == null || $profession == null || $sport == null) { 
		      echo "You did not supply all information.";
		  } else {
		          
		          echo "First Name: ";
		          echo $firstName."<br>";
		          echo "Last Name: ";
		          echo $lastName."<br>";
		          echo "Telephone Number: ";
		          echo $phoneNumber."<br>";
		          echo "Email: ";
		          echo $email."<br>";
		          echo "Birth Day: ";
		          echo $bDay."<br>";
		          echo "Profession: ";
		          echo $profession."<br>";
		          echo "Favourite Sport: ";
		          echo $sport."<br>";
		  }
		}
		?>

					</td>
				</tr>
			</table>
		</div>
	</body>
</html>