
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">
  <a href="/index.php">Home</a>
  <a href="/mysqlstatus.php">MySQL Status</a>
  <a href="/phpinfo.php">PHP Info</a>
  <a href="/phpmyadmin">phpMyAdmin</a>
</div>

<div class="main">
  <h1>MySQL Status:</h1>
      <p>
      <?php
        $con=mysqli_connect("localhost","sam","wensko","phpmyadmin");

        if (mysqli_connect_errno()) {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          exit;
        }

        echo mysqli_stat($con);

        mysqli_close($con);
      ?>
      </p>
</div>

</body>
</html>
