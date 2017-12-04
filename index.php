<!DOCTYPE html>
<html>
  <head>

    <?php
      $servername = '127.0.0.1';
      $username = 'root';
      $password = "";
      $database = "c9";
      $dbport = 3306;

    // Create connection
      $DBcon = new mysqli($servername, $username, $password, $database, $dbport);

    // Check connection
      if ($DBcon->connect_error) {
        die("Connection failed: " . $DBcon->connect_error);
      } 
    ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

  </head>

  <body>

          <form method="post">
            <div>
              <label for="username">User Name:</label>
              <input type="text" name="username" id="username">
            </div>
            <div>
              <label for="doctor_cert">Please Upload your certifucation:</label>
              <input type="file" name="Filename" id="doctor_cert">
            </div>
            <button type="submit" name="signUp">Submit</button>
          </form>

          <?php

            if (isset($_POST['signUp'])){

              $username  = strip_tags($_POST['username']);
              $target = "data/";
              $target = $target . basename( $_FILES['Filename']['name']);
              $Filename=basename( $_FILES['Filename']['name']);

            }
          ?>

  </body>
</html>

  
