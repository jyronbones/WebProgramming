<?php

require "MySQLConnectionInfo.php";
$connection = mysqli_connect($host, $username, $password);
if (!$connection)
    die("error connecting to database.");
    mysqli_select_db($connection, $database);
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        session_start();
        $_SESSION["FirstName"] = $_POST["FirstName"];
        $_SESSION["LastName"] = $_POST["LastName"];
        $_SESSION["EmailAddress"] = $_POST["EmailAddress"];
        $_SESSION["TelephoneNumber"] = $_POST["TelephoneNumber"];
        $_SESSION["SocialInsuranceNumber"] = $_POST["SocialInsuranceNumber"];
        $_SESSION["Password"] = $_POST["Password"];
        $_SESSION["Designation"] = $_POST["Designation"];
        $_SESSION["AdminCode"] = $_POST["AdminCode"];
        $query = "INSERT INTO employee(FirstName, LastName, EmailAddress, TelephoneNumber, SocialInsuranceNumber, Password, Designation, AdminCode) 
                  VALUES ('{$_SESSION["FirstName"]}', '{$_SESSION["LastName"]}', '{$_SESSION["EmailAddress"]}', '{$_SESSION["TelephoneNumber"]}', 
                '{$_SESSION["SocialInsuranceNumber"]}', '{$_SESSION["Password"]}', '{$_SESSION["Designation"]}', {$_SESSION["AdminCode"]})";
        mysqli_query($connection, $query);
        mysqli_commit($connection);
        header("Location: Login.php");
    }

    
    include_once "header.php";
    include_once "menu.php";
    include_once "footer.php";
    ?>
<html>
  <head>
    <title>Create Account</title>
    <link rel="stylesheet" type="text/css" href="StyleSheet.css" />
  </head>
  <body>
    <div id="content">
      <table style="width:100%">
        <tr>
          <td style="width:30%">
            <form method="post" style="width:25%">
              <fieldset>
              	<h3>Create your new account</h3>
                <br>
                <p>
               		<label>Please fill in all information.</label><br>
                  <label>First Name </label>
                  <input type="text" name="FirstName" required/>
                </p>
                <br>
                <p>
                  <label>Last Name </label>
                  <input type="text" name="LastName" required/>
                </p>
                <br>
                <p>
                  <label>Email </label>
                  <input type="email" name="EmailAddress" required/>
                </p>
                <br>
                <p>
                  <label>Telephone Number </label>
                  <input type="number" name="TelephoneNumber" required/>
                </p>
                <br>
                <p>
                  <label>SIN </label>
                  <input type="number" name="SocialInsuranceNumber" required/>
                </p>
                <br>
                <p>
                  <label>Password </label>
                  <input type="password" name="Password" required/>
                </p>
                <br>
                <p>
                  <label>Designation </label>
                  <input type="text" name="Designation" required/>
                </p>
                <br>
                <p>
                  <label>Admin Code </label>
                  <input type="number" name="AdminCode" required/>
                </p>
                <br><input type="submit" value="Submit Information" />
              </fieldset>
            </form>
        </tr>
      </table>
    </div>
  </body>
</html>