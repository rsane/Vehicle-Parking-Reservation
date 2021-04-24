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

        $tot_day = 0;
        $date = date('Y-m-d');

        //writing query for day collection
        $query_day = "select * from collection where date = '".$date."';";
        //executing the query
        $result_day = mysqli_query($db, $query_day);
        //getting sum of cash
        $query_sum_day = mysqli_query($db, ("select sum(amt) from collection where date = '".$date."';"));
        $row_sum = mysqli_fetch_array($query_sum_day);
        $tot_day = $row_sum[0];
        

        $tot_week = 0;
        $day = date('w');
        //first day of week
        $week_start = date('Y-m-d', strtotime('-'.$day.' days'));
        //last date of week
        $week_end = date('Y-m-d', strtotime('+'.(6-$day).' days'));
        //writing query for week collection
        $query_week = "select * from collection where date between '".$week_start."' and '".$week_end."';";
        //executing the query
        $result_week = mysqli_query($db, $query_week);
        //getting sum of cash
        $query_sum_week = mysqli_query($db, ("select sum(amt) from collection where date between '".$week_start."' and '".$week_end."';"));
        $row_sum = mysqli_fetch_array($query_sum_week);
        $tot_week = $row_sum[0];
        

        $tot_month = 0;
        //first day of month
        $month_start = date('Y-m-01', strtotime($date));
        //last day of month
        $month_end = date('Y-m-t', strtotime($date));
        //writing query for day collection
        $query_month = "select * from collection where date between '".$month_start."' and '".$month_end."';";
        //executing the query
        $result_month = mysqli_query($db, $query_month);
        //getting sum of cash
        $query_sum_month = mysqli_query($db, ("select sum(amt) from collection where date between '".$month_start."' and '".$month_end."';"));
        $row_sum = mysqli_fetch_array($query_sum_month);
        $tot_month = $row_sum[0];
    }
    else{
        $msg = "Please Log In First";
        header("Location: login_html.php?error=".$msg);
    }
    
?>