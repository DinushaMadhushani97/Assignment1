<!DOCTYPE html>
<html>
<body>

<?php
$person = array (
  "line_Items" => array('John Doe','Thomas Doe'),
  
);
$items = array (
   "John Doe" => array('John Doe','Hello world product',800.00,123,2),
   "Thomas Doe" => array("Thomas Doe",'Hello world product',800.00,123,2),
  
);
  
echo $items[0][0].": name: ".$items[0][1].", price: ".$items[0][2].",ID: ".$items[0][3].", Quantity: ".$items[0][4].".<br>";
echo $items[0][0].": name: ".$items[0][1].", price: ".$items[0][2].",ID: ".$items[0][3].", Quantity: ".$items[0][4].".<br>";
echo $items[0][0].": name: ".$items[0][1].", price: ".$items[0][2].",ID: ".$items[0][3].", Quantity: ".$items[0][4].".<br>";
echo $items[0][0].": name: ".$items[0][1].", price: ".$items[0][2].",ID: ".$items[0][3].", Quantity: ".$items[0][4].".<br>";
?>

</body>
</html>
