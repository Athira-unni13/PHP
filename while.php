<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <input type="button" value="stop" name="stop"><br>
</body>
</html>
<?php
  $sec = null;
  $round = true;
  while($round){
    if(isset($_POST["stop"])){
      $round = false;
    }
    else{
      $sec = $sec + 1;
      echo $sec."<br>";
    }
    
  }
?>