<?php

// view.php

if ($_GET['mode'] == 'VIEW') {

    cart_view();
} else {
    echo "Don't! Happy Hacking.";
}

function cart_view() {
    require 'config.php';

    $sql = "SELECT oi.order_item_id, i.item_name, oi.unit_price, oi.quantity, oi.total_price  FROM item AS i , order_item AS oi WHERE oi.order_item_id = i.item_id";
    $result = mysqli_query($conn, $sql);
    ?>

     <form method="POST" action="update_cartview.php">
        <?php
         while ($row = mysqli_fetch_array($result)) {
            ?>
            <input type="checkbox" name="order_item_id[]" value="<?php echo $row['order_item_id']; ?>">
            
            <input type="text" name="item_name" value="<?php echo $row['item_name']; ?>">
            <input type="text" name="unit_price" value="<?php echo $row['unit_price']; ?>">
            <input type="text" name="quantity" value="<?php echo $row['quantity']; ?>">
            <input type="text" name="total_price" value="<?php echo $row['total_price']; ?>">
            
            <br/>
            <?php
        }
        ?>
        <input type="submit" name="mode" value="UPDATE">
        <input type="submit" name="mode" value="DEL">
    </form>
    <?php
}
    
        

?>
