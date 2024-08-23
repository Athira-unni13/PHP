<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="radio.php" method="post">
  <input type="radio" name="credit_card" value="Visa">Visa <br>
  <input type="radio" name="credit_card" value="American Express">American Express <br>
  <input type="radio" name="credit_card" value="Mastercard">Mastercard <br>
  <input type="submit" name="confirm" value="Submit">
  </form>
</body>
</html>
<?php
$credit_card = null;
/*if(isset($_POST["confirm"])){
  if(isset($_POST["credit_card"])){
  $credit_card = $_POST["credit_card"];
  if($credit_card == "Visa"){
    echo "You have selected Visa";
  }
  elseif($credit_card == "American Express"){
    echo "You have selected American Express";
  }
  elseif($credit_card == "Mastercard"){
    echo "You have selected Mastercard";
  }
}
else{
  echo "Please choose any option";
}
}*/
if(isset($_POST["confirm"])){
  if(isset($_POST["credit_card"])){
    $credit_card = $_POST["credit_card"];
  }
    switch($credit_card){
      case "Visa": echo "You have selected Visa";
      break;
      case "American Express": echo "You have selected American Express";
      break;
      case "Mastercard":echo "You have selected Mastercard";
      break;
      default:echo "Please choose any option";
    }
  }


?>