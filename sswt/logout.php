<?php 
    //starting a session
    session_start();

    //unsetting all the cookie and session variables
    unset($_SESSION['user']);
    unset($_SESSION['name']);
    unset($_SESSION['src_date']);
    unset($_SESSION['type']);
    unset($_COOKIE['slotno']);

    //showing message
    echo "<script type='text/javascript'>alert('You have been logged out!');</script>";

    //going back to login page
    header("Location: login_html.php");
?>