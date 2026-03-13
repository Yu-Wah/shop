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
if ($_POST['mode'] == 'UPDATE') {
        update($_POST['item_id'], $_POST['item_name'], $_POST['description'],$_POST['price'],$_POST['category'],$_POST['stock_quantity'],$_POST['image_url']);
    } else {
        echo "Don't! Happy Hacking.";
    }
function update($item_id, $item_name, $description, $price, $category, $stock_quantity,$image_url) {
    require_once 'config.php';

    foreach ($item_id as $value) {
        $sql = " UPDATE item " .
                " SET item_name = '" . $item_name . "', " .
                " description = '" . $description . "'," .
                 " price = '" . $price . "'," .
                  " category = '" . $category . "'," .
                   " stock_quantity = '" . $stock_quantity. "'," .
                    " image_url = '" . $image_url . "'" .
                " WHERE item_id = " . $value;
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo 'The record is successfully updated!';
           // header('location: item_update.php');
            exit();
        } else {
            echo 'Sorry! ';
        }
    }
}

?>
