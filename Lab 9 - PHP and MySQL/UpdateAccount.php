<?php
session_start();

require "MySQLConnectionInfo.php";
$connection = mysqli_connect($host, $username, $password);
if (!$connection)
    die("error connecting to database.");
    mysqli_select_db($connection, $database);
    $url = $_SERVER['REQUEST_URI'];
    $_SESSION['empID'] = (int)(parse_url($url, PHP_URL_QUERY));
    if ($_SESSION["al"] == true) {
    if(isset($_POST["FirstName"]))
    {
        $_SESSION["FirstName"] = $_POST["FirstName"];
        $_SESSION["LastName"] = $_POST["LastName"];
        $_SESSION["EmailAddress"] = $_POST["EmailAddress"];
        $_SESSION["TelephoneNumber"] = $_POST["TelephoneNumber"];
        $_SESSION["SocialInsuranceNumber"] = $_POST["SocialInsuranceNumber"];
        $_SESSION["Password"] = $_POST["Password"];
        $_SESSION["Designation"] = $_POST["Designation"];
        $_SESSION["AdminCode"] = $_POST["AdminCode"];
        $query = "UPDATE employee SET FirstName='{$_SESSION["FirstName"]}',LastName='{$_SESSION["LastName"]}',
        EmailAddress='{$_SESSION["EmailAddress"]}',TelephoneNumber='{$_SESSION["TelephoneNumber"]}',
        Designation='{$_SESSION["Designation"]}',AdminCode={$_SESSION["AdminCode"]} WHERE EmployeeId={$_SESSION['empID']}";
        
        mysqli_query($connection, $query);
        mysqli_commit($connection);
        $_SESSION["al"] = false;
        header("Location: UpdateComplete.php");
    }
    } else
    {
        echo "incorrect credentials";
        header("Location: Admin.php");
    }
    
    include_once "header.php";
    include_once "menu.php";
    include_once "footer.php";
    ?>
<html>
  <head>
    <title>Update Account</title>
    <link rel="stylesheet" type="text/css" href="StyleSheet.css" />
  </head>
  <body>
    <div id="content">
      <table style="width:100%">
        <tr>
          <td style="width:30%">
            <form method="post" style="width:25%">
              <fieldset>
              	<h3>Update the following fields</h3>
                <br>
                <p>
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
                  <label>Designation </label>
                  <input type="text" name="Designation" required/>
                </p>
                <br>
                <p>
                  <label>Admin Code </label>
                  <input type="number" name="AdminCode" required/>
                </p>
                <br><input type="submit" value="Update Record" />
              </fieldset>
            </form>
        </tr>
      </table>
    </div>
  </body>
</html>