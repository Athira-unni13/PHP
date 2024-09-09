<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CheckBox</title>
</head>
<body>
  <form action="check.php" method="post">
  <input type="checkbox" name="pizza" value="Pizza">
  Pizza <br>
  <input type="checkbox" name="humburger" value="Humburger">
  Humburger <br>
  <input type="checkbox" name="condog" value="Condog">
  Condog<br>
  <input type="checkbox" name="taco" value="Taco">
  Taco <br>
  <input type="submit" name="submit" >
  </form>
</body>
</html>
<?php
if(isset($_POST["submit"])){

  if(isset($_POST["pizza"])){
    echo"You selected Pizza <br>";
  }
  if(isset($_POST["humburger"])){
    echo"You selected humburger <br>";
  }
  if(isset($_POST["hotdog"])){
    echo"You selected hotdog <br>";
  }
  if(isset($_POST["taco"])){
    echo"You selected taco <br>";
  }
  if(empty($_POST["pizza"]) && empty($_POST["humburger"]) && empty($_POST["hotdog"]) && empty($_POST["taco"]) ){
    echo"Select atleast one options";
  }
}
?>
