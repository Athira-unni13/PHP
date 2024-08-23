<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="helloworld.php" method="get">
    <label >Quantity:</label>
    <input type="text" name="quantity"><br>
    <input type="button" value="Total">
  </form>
  
</body>
</html>
<?php
$item = "pizza";
$price = 5.67;
$quantity = $_GET["quantity"];
$total = null;

$total = $quantity * $price;
echo "you have order {$quantity} X {$item} <br>";
echo "Your total is \${$total}";

?>