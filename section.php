
<?php

// page1.php

session_start();

if ($_POST['name'] && $_POST['password']) {

    // register the session variables
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['time'] = time(); // see page2.php

    echo 'Welcome to page . <br/> ' ;
     ?>
    <a href="list.php">Items List</a> | 
    <a href="account.php">My account</a> | 
    <a href="cart.php?id">My Cart</a> | 
    <a href="user_logout.php">Log Out</a><br/><br/>
    <?php


} else {
    echo 'Invalid username or password!';
    exit();
}
?>