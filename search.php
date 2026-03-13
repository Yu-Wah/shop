<?php



require 'config.php';

 $sql = " SELECT * FROM item " .
       " WHERE " . $_POST['by'] . " LIKE '%" . $_POST['keyword'] . "%'";
$result = mysqli_query($conn, $sql);

if (!$result){
      die("Query failed:".mysqli_error($conn));
}
while ($row = mysqli_fetch_array($result)) {
    echo $row['item_name'] ." <br/>"
          .$row['description']." <br/>"
          .$row['price'] ." <br/>"
           ." <img src=" .$row['image_url'] . "><br/>";
}
?>