<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="keywords" lang="en" content=""/>
        <meta name="copyright" content="&copy; 2010"/>
        <link rel="stylesheet" type="text/css" href="mystyle.css" />
    </head>

    <body id="wrapper">

            <!-- Begin Header -->

            <div id="header">

                <h1 align="center">header goes here</h1>

            </div>
            <!-- End Header -->

            <!-- Begin Nav -->
            <div id="nav">
                <img src="" alt="logo" /><br/><br/>

                <a href="index.php">HOME</a><br/><br/>
                <a href="pet_delete.php">Delete</a><br/><br/>
                <a href="list.php">List</a><br/><br/>
                <a href="pet_new.php">New</a><br/><br/>
                <a href="search_form.php">Search</a><br/><br/>
                <a href="pet_update.php">Update</a><br/><br/>
                <a href="pet_view.php">View</a><br/><br/><br>

                <?php
                session_start();
                if (!$_SESSION['name']) {
                ?>
                    <a href="user_login.php">Log In</a><br/><br/>
                <?php
                } else {
                ?>
                    <a href="user_logout.php">Log Out</a><br/><br/>
                <?php
                    echo "Welcome " . $_SESSION['name'];
                }
                ?>


            </div>
            <!-- End Left Column -->

            <!-- Begin Section -->
            <div id="section">

             <p><?php include 'login_form.php'; ?></p>

            </div>
            <!-- End Section -->

            <!-- Begin Article -->
            <div id="article">

                <p>Article goes here</p>

            </div>
            <!-- End Article -->

            <!-- Begin Footer -->
            <div id="footer">

                <p style="padding-top: 0pt">&copy; 2011 ICS213 Your student number,
                    Your name. All rights reserved.</p>

            </div>
            <!-- End Footer -->

    </body>
</html>