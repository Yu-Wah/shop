<!DOCTYPE html>
<html>
    <body>
<?php

require 'config.php';

$sql = "SELECT * FROM item";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['item_name'] . " is a " . $row['price'] ."<img src= ".$row['image_url']."><br/>";
   
   ?>
   <div id="demo">
    <button type="button" onclick="load()">View Details</button>  
    <a href="item_view.php">Add To Cart</Details></a> <br/>
    </div>

    <script>
function load() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("demo").innerHTML =
    this.responseText;
  }
  xhttp.open("GET", "backpack.php");
  xhttp.send();
}
</script>
    <?php

}


?>

</body>
</html>