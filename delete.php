<?php

// delete.php
session_start();
/*if (!$_SESSION['uniqid']) {
    header('location: user_warning.php');
    exit();
} else {
    if ($_POST['mode'] == 'DEL') {
        user_delete($_POST['item_id']);
    } else {
        echo "Don't! Happy Hacking.";
    }
}
*/
// delete a user record

 if ($_POST['mode'] == 'DEL') {
        user_delete($_POST['item_id']);
    } else {
        echo "Don't! Happy Hacking.";
    }
function user_delete($item_id) {
    require 'config.php';

    foreach ($item_id as $value) {
        $sql = "DELETE FROM item WHERE item_id = " . $value;
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo 'The record is successfully removed!';
           // header('location: item_delete.php');
        } else {
            echo 'Sorry!' . mysql_error();
        }
    }
}
?>
