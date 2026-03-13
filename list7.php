<?php
// list7.php


// view pet record(s)
function cart_view() {
    require 'config.php';

    $sql = "SELECT i.item_id, i.item_name, oi.unit_price, oi.quantity, oi.total_price  FROM item AS i , order_item AS oi WHERE oi.item_id = i.item_id";
    $result = mysqli_query($conn, $sql);
    ?>

    <form method="POST" action="cart_view2.php">
        <?php
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <input type="checkbox" name="item_id[]" value="<?php echo $row['item_id']; ?>">
            <?php
            echo $row['item_id'] . " | " . $row['item_name'] . " | " . $row['description'] . "<br />";
        }
        ?>
        <input type="submit" name="mode" value="UPDATE">
         <input type="submit" name="mode" value="DEL">

    </form>
    <?php
}
?>