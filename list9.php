<?php
// list9.php
// update the care table
/*session_start();
if (!$_SESSION['uniqid']) {
    header('location: user_warning.php');
    exit();
} else {
    if ($_SESSION['account'] == 1) { // only admin a/c can access this online service
        item_update();
    } else {
        echo "You have no permission to access this online service!";
    }
    
}
*/
item_update();
// update a pet record
function item_update() {
    require 'config.php';

    $sql = "SELECT * FROM item
            ";
    $result = mysqli_query($conn, $sql);
    ?>

    <form method="POST" action="update.php">
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
        <input type="submit" name="mode" value="UPDATE">
    </form>
    <?php
}
?>