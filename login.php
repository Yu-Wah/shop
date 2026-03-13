<?php

session_start();
if (($_POST['name'])=== 'admin' && ($_POST['password'] === 'admin')){
        header('location:admin.php');
        exit();
    }

    elseif ($_POST['name'] && $_POST['password']) {

    // validate your pet name and password from the database
    require_once 'config.php';

    $sql =  " SELECT user_id, user_name  FROM user " .
            " WHERE user_name = '" . $_POST['name'] . "'" .
            " AND PASSWORD = '" . $_POST['password'] . "'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    echo "Welcome, " . $row['name'];

    // register the session variables
    $_SESSION['uniqid'] = md5(uniqid(rand(), 1));
    $_SESSION['id'] = $row['id'];
    $_SESSION['name'] = $_POST['name'];
    //$_SESSION['account'] = $row['account'];
    
    // redirect to the pet list page
    header('location: index.php');
    exit();
// admin
    // admin.php
    
  }
  else {
    header('location: user_warning.php');
    exit();
}