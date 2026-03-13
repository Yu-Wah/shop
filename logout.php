<?php

session_start();

// destroy the session.
session_destroy();

echo "You have logged out successfully!";

// header("Location: index.php");
// exit();
?>