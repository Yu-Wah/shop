<?php
// list5.php
// remove a user record form

session_start();
/*if (!$_SESSION['uniqid']) {
    header('location: user_warning.php');
    exit;
} else {
    if ($_SESSION['account'] == 1) { // admin a/c only
        delete_form();
    } else {
        echo "You have no permission to access this online service!";
    }
}
*/
delete_form();
function delete_form() {
    require 'config.php';

    $sql = "SELECT i.item_id,i.item_name, i.description, i.price, i.category, i.stock_quantity, i.image_url FROM item AS i "; // only non-admin pets/accounts
    $result = mysqli_query($conn, $sql);
    ?>

    <form method="POST" action="delete.php">
        <?php
        while ($row = mysqli_fetch_array($result)) {
                 ?>
            <input type="checkbox" name="item_id[]" value="<?php echo $row['item_id']; ?>">
            <?php echo $row['item_id']; ?>
            <input type="text" name="item_name" value="<?php echo $row['item_name']; ?>">
            <input type="text" name="price" value="<?php echo $row['price']; ?>">
            <input type="text" name="description" value="<?php echo $row['description']; ?>">
            <input type="text" name="category" value="<?php echo $row['category']; ?>">
            <input type="text" name="stock_quantity" value="<?php echo $row['stock_quantity']; ?>">
            <input type="text" name="image_url" value="<?php echo $row['image_url']; ?>">
            
            <br/>
            <?php
        }
        ?>
        <input type="submit" name="mode" value="DEL">
    </form>
    <?php
}
?>