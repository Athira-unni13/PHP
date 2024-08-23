<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multiplication table</title>
</head>
<body>
  <form action="multi.php" method="post">
    <label for="multiplication">Enter the value:</label><br>
    <input type="text" name="multiplication">
    <input type="submit" value="multiply">
  </form>
</body>
</html>
<?php

  $count = $_POST["multiplication"];
  $value = null;
  echo "Multiplication table of {$count} is <br>";
  for($i = 1;$i <= 10; $i++){
    
    $value = $i * $count;
    echo "{$i} x {$count} = {$value} <br>";
  }

?>