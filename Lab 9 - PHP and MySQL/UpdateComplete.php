<?php


require "MySQLConnectionInfo.php";
$connection = mysqli_connect($host, $username, $password);
if (!$connection)
    die("error connecting to database.");
    mysqli_select_db($connection, $database);
    
    
    include_once "header.php";
    include_once "menu.php";
    include_once "footer.php";
    ?>
<html>
  <head>
    <title>Update Complete</title>
    <link rel="stylesheet" type="text/css" href="StyleSheet.css" />
  </head>
  <body>
    <div id="content">
      <?php 
      echo "Employee Information is Successfully Updated";
      ?>
    </div>
  </body>
</html>