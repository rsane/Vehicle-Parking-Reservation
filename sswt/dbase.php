<?php
    session_start();

    // connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'sswt');

    //get session name to display welcome
    $name = $_SESSION['name'];
    if(isset($name)){

        //setting the timezone
        date_default_timezone_set("Asia/Kolkata");
        $curr_date = date("d M Y");
        $curr_day = date('l', strtotime($curr_date));


        if(isset($_POST['getrec'])){
            //get start and end date
            $start_date = date('Y-m-d', strtotime($_POST['start']));
            $end_date = date('Y-m-d', strtotime($_POST['end']));

            //writing query
            $query = "select * from occupancy where date between '".$start_date."' and '".$end_date."';";

            //executing the query
            $result = mysqli_query($db, $query);
        }
    }
    else{
        $msg = "Please Log In First";
        header("Location: login_html.php?error=".$msg);
    }
?>