<?php
require "MySQLConnectionInfo.php";
$connection = mysqli_connect($host, $username, $password);
if (!$connection)
    die("error connecting to database.");
    mysqli_select_db($connection, $database);
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        session_start();
        if (isset($_POST["EmailAddress"])) {
            $_SESSION["EmailAddress"] = $_POST["EmailAddress"];
        }
        
        if (isset($_POST["Password"])) {
            $_SESSION["Password"] = $_POST["Password"];
        }
    }
    
$query = "SELECT * FROM employee WHERE EmailAddress = '".$_SESSION["EmailAddress"]."'AND Password = '".$_SESSION["Password"]."'";
$result = mysqli_query($connection, $query);
echo $query;
if (mysqli_num_rows($result) > 0) {
    $_SESSION["loggedin"] = true;
    header("Location: ViewAllEmployees.php");
    
} else {
    function fooError(){
        echo "Error - Invalid credentials";
    }
}

include_once "header.php";
include_once "menu.php";
include_once "footer.php";
?>
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="StyleSheet.css" />
  </head>
  <body>
    <div id="content">
      <table style="width:100%">
        <tr>
          <td style="width:30%">
            <form method="post" style="width:25%">
              <fieldset>
              	<h2>Login</h2><br>
              	  <p>
                  <label>Email Address</label>
                  <input type="email" name="EmailAddress" />
                </p>
                <br>
                <p>
                  <label>Password </label>
                  <input type="password" name="Password" />
                </p>
                <br><input type="submit" value="Login" /><br>
                  <?php 
                    if (isset($_SESSION))
                    fooError();
                  ?>
              </fieldset>
            </form>
        </tr>
      </table>
    </div>
  </body>
</html>