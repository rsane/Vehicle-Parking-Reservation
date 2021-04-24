<?php
    session_start();

    // connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'sswt');

    //get session name to display welcome
    $name = $_SESSION['name'];
    $username = $_SESSION['user'];
    if(isset($name)){

        //setting the timezone
        date_default_timezone_set("Asia/Kolkata");
        $curr_date = date("d M Y");
        $curr_day = date('l', strtotime($curr_date));

        $start_date = date('Y-m-d');

        //writing query
        $query_truncate_details = "truncate table details;";
        mysqli_query($db, $query_truncate_details);


        $query_input_details = "insert into `details`(`username`, `date`, `slot`) 
            (select s1, date, 's1' from occupancy where s1 != 'empty') 
            union (select s2, date, 's2' from occupancy where s2 != 'empty') 
            union (select s3, date, 's3' from occupancy where s3 != 'empty') 
            union (select s4, date, 's4' from occupancy where s4 != 'empty')
            union (select s5, date, 's5' from occupancy where s5 != 'empty')
            union (select s6, date, 's6' from occupancy where s6 != 'empty')
            union (select s7, date, 's7' from occupancy where s7 != 'empty')
            union (select s8, date, 's8' from occupancy where s8 != 'empty')
            union (select s9, date, 's9' from occupancy where s9 != 'empty')
            union (select s10, date, 's10' from occupancy where s10 != 'empty')
            union (select s11, date, 's11' from occupancy where s11 != 'empty')
            ;";
        mysqli_query($db, $query_input_details);


        $query_get = "select date, slot from details where username = '".$username."' and date >= '".$start_date."' order by date;";
        //executing the query
        $result = mysqli_query($db, $query_get);


        //code to delete
        if(isset($_GET['date']) && isset($_GET['slot'])){
            $query_delete = "update occupancy set ".$_GET['slot']." = 'empty' where date = '".$_GET['date']."';";
            mysqli_query($db, $query_delete);

            header("location: cancel_html.php?msg");
        }

        //code to change
        if(isset($_GET['chgdate']) && isset($_GET['chgslot'])){
            $query_del = "update occupancy set ".$_GET['chgslot']." = 'empty' where date = '".$_GET['chgdate']."';";
            mysqli_query($db, $query_del);

            header("location: reserve_html.php?cng");
        }
        
    }
    else{
        $msg = "Please Log In First";
        header("Location: login_html.php?error=".$msg);
    }
?>