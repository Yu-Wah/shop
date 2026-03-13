<?php
require 'config.php';

 $sql = " INSERT INTO item (item_name,description,price,category, stock_quantity, image_url) " .
       " VALUES ('" . $_POST['item_name'] . "'," .
       " '" . $_POST['description'] . "'," .
       " '" . $_POST['price'] . "'," .
       " '" . $_POST['category'] . "'," .
       " '" . $_POST['stock_quantity'] . "'," .
       " '" . $_POST['image_url']."')";
      // " 0 )";

mysqli_query($conn, $sql);

echo "Your " . $_POST['item_name'] . " is successfully added " ;
    
?>