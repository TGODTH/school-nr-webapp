<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DSN nursing room</title>
</head>

<body>
  <?php require_once '/components/nav.php'; ?>

  <?php
  $host = 'db';
  $user = 'root';
  $pass = 'root';
  $db = 'SCHOOL_NR_DB';

  $conn = new mysqli($host, $user, $pass, $db);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } else {
    echo "Connected to MySQL server successfully!";
  }
  ?>
</body>

</html>