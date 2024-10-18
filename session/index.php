<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Session</title>
</head>
<body>
  <form action="index.php" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username"><br><br>
    <label for="password">Password</label>
    <input type="password" name="password"><br><br>
    <input type="submit" value="Login" name="login"><br><br>
  </form>
</body>
</html>
<?php
if(isset($_POST["login"])){
  if(!empty($_POST["username"]) && !empty($_POST["password"])){
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];

    header("Location:home.php");
  }
  else{
    echo "Missing Username/Password"."<br>";
  }
}
?>