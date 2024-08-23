<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="radius.php" method="post">
    <label for="radius">Enter the radius of the circle:</label>
    <input type="text" name="radius"><br>
    <input type="submit" name="area" value="area">
    <input type="submit" name="volume" value="volume">
  </form>
</body>
</html>
<?php
 $radius = $_POST["radius"];

 $areac = null;

  $volume = null;
  if(isset($_POST["area"])){
    $areac = pi() * pow($radius, 2);
    echo "Area of the circle is {$areac}<br>";
  }
  if(isset($_POST["volume"])){
    $volume = 2 * pi() * $radius;
    echo "Circumference of the circle is {$volume}<br>";
  }
?>