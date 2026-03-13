<?php

require 'config.php';

$sql = "SELECT * FROM item WHERE item_name='Air Purifier'";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo"<img src= ".$row['image_url']."><br/>"
     ."Item Name : " .$row['item_name'] ."<br/>"
     . "Price : " .$row['price'] ."<br/>"
    ."Product Description : " .$row['description']."<br/>"
    ."Category : ".$row['category']."<br/>"
    ."stock_quantity : " . $row['stock_quantity']."<br/>";

    
}
include_once "button.php" ;

?>
