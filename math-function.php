<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <form action="math-function.php" method="post">
      <label for="x">X:</label>
      <input type="text" name="x">
      <input type="submit" name="total" value="Total">
    </form>
  </body>
</html>
<?php
  $x = $_POST["x"];
  $total = null;
  echo $x;
?>