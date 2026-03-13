<?php

session_start();

if (!isset($_SESSION['uniqid'])) {
//    header('location: pet_warning.php');
//    exit();
//    echo "error 1 goes here!";
        search_form();
} else {
//    $_POST['mode'] = NULL;
    search_form();
}

function search_form() {
    ?>
    <!-- simple pet search form -->
    <form action="search.php" method="POST">
        Item Search: <input type="text" name="keyword" />
        by 
        <select name="by">
            <option>item_name</option>
            <option>Category</option>
        </select> 
        <input type="hidden" name="mode" value="SEARCH" />
        <input type="submit" name="submit" value="OK" />
        <input type="reset" value="Cancel" />
    </form>
    <?php
}
?>
