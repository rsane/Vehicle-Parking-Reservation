<?php 
    session_start();

    //get session name to display welcome
    $name = $_SESSION['name'];
    if(isset($name)){

        //setting the timezone
        date_default_timezone_set("Asia/Kolkata");
        $curr_date = date("d M Y");
        $curr_day = date('l', strtotime($curr_date));

        //to display greetings
        $hour = date('H', time());
        $greet = "";
        if($hour < "12"){ $greet = "GOOD MORNING!"; }
        else if($hour >= "12" && $hour < "16"){ $greet = "GOOD AFTERNOON!"; }
        else if($hour >= "16" && $hour < "20"){ $greet = "GOOD EVENING!"; }
        else if($hour >= "20"){ $greet = "GOOD NIGHT!"; }


        if(isset($_POST['next'])){
            //get input from datalist
            $select = $_POST['veh_type'];
            $_SESSION['type'] = $select;

            //get chked radiobtn
            $radioval = $_POST['r1'];
            if($radioval == "reserve"){

                //head to reserve_html.php
                header("Location: reserve_html.php");
            }
            if($radioval == "otg"){

                //head to OnTheSpot.php
                header("Location: spot_html.php");
            }
        }
    }
    else{
        $msg = "Please Log In First";
        header("Location: login_html.php?error=".$msg);
    }
?>