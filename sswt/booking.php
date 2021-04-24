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

        $src_date = $_SESSION['src_date'];
        $user = $_SESSION['user'];
        //writing the query
        $search_query = "select * from occupancy where date='".$src_date."'";

        //executing the query
        $exec = mysqli_query($db, $search_query);
        //retrieving row from result
        $row = mysqli_fetch_array($exec, MYSQLI_ASSOC);
        $slot_no = "s".$_COOKIE['slotno'];
        $chk_val = $row[$slot_no];

        if($chk_val != "empty"){
            //show error message if non-empty selected
            echo "<h1 style='color:black; z-index:1; position:absolute; margin-left:30%; margin-top:5%; text-align:center; background-color:#43bbd9; width:40%; height:15%; border: 3px solid black; border-radius:20px;'>
            This Slot Is Already Booked :(<br> Please Select Another Slot!</h1>";
            if(isset($_GET['page'])){
                header("refresh:3; url=spot_html.php");
            }
            else{
                header("refresh:3; url=reserve_html.php");
            }
        }
        else{ 
            //getting values
            $type = $_SESSION['type'];
            //calc tot
            $tot = 0;
            if($type == "suv"){
                $tot += 50;
            }
            else if($type == "car"){
                $tot += 45;
            }
            else if($type == "bike"){
                $tot += 20;
            }
            else if($type == "cycle"){
                $tot += 10;
            }
            //calc grandtot and other stuff
            $gst = ceil(($tot*18)/100);
            $tax = ceil(($tot*5)/100);
            $grandtot = $tot + $gst + $tax;

            //when button clicked
            if(isset($_POST['reserve'])){
                //writing query
                $input_query = "update occupancy set ".$slot_no." = '".$user."' where date = '".$src_date."';";
                //executing the query
                $execute = mysqli_query($db, $input_query);
                
                //input cash collection in database
                $cash_query = "update collection set amt = amt + ".$grandtot." where date = '".$src_date."';";
                //executing the query
                $cash_execute = mysqli_query($db, $cash_query);

                //if query is successfull, display message
                if($execute){
                    echo "<h1 style='color:black; z-index:2; position:absolute; margin-left:30%; margin-top:5%; text-align:center; background-color:#84b397; width:40%; height:15%; border: 3px solid black; border-radius:20px;'>
                        YOUR SLOT HAS BEEN BOOKED! <br> Have A Nice Day :)</h1>";
                    header("refresh:3; url=logout.php");
                }
            }
            if(isset($_GET['cng'])){
                //writing query
                $input_query = "update occupancy set ".$slot_no." = '".$user."' where date = '".$src_date."';";
                //executing the query
                $execute = mysqli_query($db, $input_query);

                echo "<h1 style='color:black; z-index:2; position:absolute; margin-left:30%; margin-top:5%; text-align:center; background-color:#84b397; width:40%; height:15%; border: 3px solid black; border-radius:20px;'>
                        YOUR SLOT HAS BEEN CHANGED! <br> Have A Nice Day :)</h1>";
                 header("refresh:3; url=cancel_html.php");
            }
        }
    }
    else{
        $msg = "Please Log In First";
        header("Location: login_html.php?error=".$msg);
    }
    
?>
