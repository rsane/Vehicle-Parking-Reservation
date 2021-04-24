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

        $occupancy = array("check", "check", "check", "check", "check", "check", "check", "check", "check", "check", "check", "check");
        
        if(isset($_POST['chk'])){

            //curr_date to search
            $search_date = date('Y-m-d');
            //setting date as session
            $_SESSION['src_date'] = $search_date;

            //writing the query
            $search_query = "select * from occupancy where date='".$search_date."';";

            //executing the query
            $exec = mysqli_query($db, $search_query);

            //retrieving row from result
            $row = mysqli_fetch_array($exec, MYSQLI_ASSOC);

            //inputting the result row into array
            $occupancy = array($row['date'], $row['s1'], $row['s2'], $row['s3'], $row['s4'], $row['s5'], $row['s6'], $row['s7'], $row['s8'], $row['s9'], $row['s10'], $row['s11']);

            if(!in_array("empty", $occupancy)){
                //echo message if all slots are full for today
                echo "<h1 style='color:black; z-index:1; position:absolute; margin-left:30%; margin-top:5%; text-align:center; background-color:#43bbd9; width:40%; height:15%; border: 3px solid black; border-radius:20px;'>
                    All Parking Lots Are Booked For The Day <br> Sorry For The Inconvenience :(</h1>";
                                  
                header("refresh:3; url=homepage.php");
            }
                    
        }
    }
    else{
        $msg = "Please Log In First";
        header("Location: login_html.php?error=".$msg);
    }
?>