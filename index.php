<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
  <label for="x">X:</label>
  <input type="text" name="x"><br>
  <label for="x">Y:</label>
  <input type="text" name="y"><br>
  <label for="x">Z:</label>
  <input type="text" name="z"><br>
  <input type="submit" name="total" value="Total">
  </form>
</body>
</html>
<?php
  $x = $_POST["x"];
  $y = $_POST["y"];
  $z = $_POST["z"];
  $total = null;

  //$total = rand(1000000000, 9999999999);
  //$total = min($x, $y, $z);
  $total = max($x, $y, $z);
  echo $total;

?>