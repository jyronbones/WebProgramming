<?php

session_start();

if(isset($_POST["fname"]))
{
    $_SESSION["fname"] = $_POST["fname"];
    $_SESSION["lname"] = $_POST["lname"];
    $_SESSION["pnumber"] = $_POST["pnumber"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["bday"] = $_POST["bday"];
    $_SESSION["profession"] = $_POST["profession"];
    $_SESSION["sport"] = $_POST["sport"];
    header("Location: Session2.php");
}

include_once "header.php";
include_once "menu.php";
include_once "footer.php";
?>
<html>
  <head>
    <title>Session1</title>
    <link rel="stylesheet" type="text/css" href="StyleSheet.css" />
  </head>
  <body>
    <div id="content">
      <table style="width:100%">
        <tr>
          <td style="width:30%">
            <form method="post" style="width:100%">
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
        </tr>
      </table>
    </div>
  </body>
</html>