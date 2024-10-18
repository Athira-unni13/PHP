<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  This is Home Page
  <form action="home.php" method="post">
    <input type="submit" value="LogOut" name="logout"><br><br>

  </form>
</body>
</html>

<?php

if (isset($_POST["logout"])) {
  session_destroy();
  header("Location:index.php");
}
?>