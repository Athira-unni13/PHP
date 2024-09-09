<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sanitize and Validate</title>
</head>
<body>
  <form action="validate.php" method="post">
    User name:<br>
    <input type="text" name="username"> <br>
      
    Age: <br>
    <input type="text" name="age"><br>
    Email: <br>
    <input type="email" name="email"><br>
      
    <input type="submit" name="submit">

  </form>
</body>
</html>
<?php
  if(isset($_POST["submit"])){
    $username = filter_input(INPUT_POST, "username",        FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
  }
?>