<?php

// update.php
// update the care table
session_start();
/*if (!$_SESSION['uniqid']) {
    header('location: pet_warning.php');
    exit();
} else {
// updae the care record
    if ($_POST['mode'] == 'UPDATE') {
        update($_POST['pid'], $_POST['treatment'], $_POST['charge']);
    } else {
        echo "Don't! Happy Hacking.";
    }
}
*/
if ($_POST['mode'] == 'UPDATE' || 'DEL') {
        update($_POST['order_item_id'], $_POST['item_name'], $_POST['quantity'],$_POST['unit_price'],$_POST['total_price']);
    } else {
        echo "Don't! Happy Hacking.";
    }
function update($order_item_id, $item_name, $quantity, $unit_price, $total_price) {
    require_once 'config.php';

    foreach ($order_item_id as $value) {
        $sql = " UPDATE order_item " .
                " SET quantity = '" . $quantity . "', " .
                " SET total_price = '".$total_price."'".
                
                " WHERE order_item_id = " . $value;
        $result = mysqli_query($conn, $sql);


        $sql1 ="DELETE  FROM order_item";
                " WHERE order_item_id = " . $value;
        $result1 = mysqli_query($conn, $sql1);

        if ($result1) {
            echo 'The shopping cart is successfully deleted!';
           // header('location: item_update.php');
            exit();
        } else {
            echo 'Sorry! ';
        }
    }
}

?>
