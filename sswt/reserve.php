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

        //getting current date to set it min for input date
        $min_date = date('Y-m-d');

        $occupancy = array("check", "check", "check", "check", "check", "check", "check", "check", "check", "check", "check", "check");
        
        if(isset($_POST['chk'])){
            //getting date to search slots
            $search_date = date('Y-m-d', strtotime($_POST['search']));
            $_SESSION['src_date'] = $search_date;

            //writing the query
            $search_query = "select * from occupancy where date='".$search_date."'";

            //executing the query
            $exec = mysqli_query($db, $search_query);

            //retrieving row from result
            $row = mysqli_fetch_array($exec, MYSQLI_ASSOC);
            
            //inputting the result row into array
            $occupancy = array($row['date'], $row['s1'], $row['s2'], $row['s3'], $row['s4'], $row['s5'], $row['s6'], $row['s7'], $row['s8'], $row['s9'], $row['s10'], $row['s11']);
            
        }
    }
    else{
        $msg = "Please Log In First";
        header("Location: login_html.php?error=".$msg);
    }
?>