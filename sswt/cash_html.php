<?php include("cash.php"); ?>
<html>

<head>
    <title>Database</title>
    <link rel="stylesheet" href="cashhh.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<body>
    <nav class="navbar">
        <div class="logo">PARKar</div>
        <ul>
            <li><a href="homeadmin.php">Home</a></li>
            <li><a href="dbase_html.php">Check DB</a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
        <div class="welcome">
            <?php echo $curr_date; ?>
        </div>
    </nav>
    <div class="cash_card">
        <div class="card day" onclick="day()">
            Daily Collection <div class="show"><i class="fas fa-arrow-right fa-2x"></i></div><div class="coll"><?php echo "Rs. ".$tot_day; ?></div>
        </div>
        <div class="card week" onclick="week()">
            Weekly Collection <div class="show"><i class="fas fa-arrow-right fa-2x"></i></div><div class="coll"><?php echo "Rs. ".$tot_week; ?></div>
        </div>
        <div class="card month" onclick="month()">
            Montly Collection <div class="show"><i class="fas fa-arrow-right fa-2x"></i></div><div class="coll"><?php echo "Rs. ".$tot_month; ?></div>
        </div>
    </div>
    <div class="table">
        <table class="cash_day" id="day_table">
            <tr>
                <th>Date</th> <th>Amount (in Rs.)</th>
            </tr>
            <?php 
                 if(mysqli_num_rows($result_day) > 0){
                    while($data_day = mysqli_fetch_array($result_day)){
                        $tot_day += $data_day[1];
                        echo "<tr>
                            <td>".$data_day[0]."</td>
                            <td>".$data_day[1]."</td>
                        <tr>";
                    }
                }                                   
            ?>
        </table>
        <table class="cash_week" id="week_table">
            <tr>
                <th>Date</th> <th>Amount (in Rs.)</th>
            </tr>
            <?php 
                if(mysqli_num_rows($result_week) > 0){
                    while($data_week = mysqli_fetch_array($result_week)){
                    $tot_week += $data_week[1];
                    echo "<tr>
                            <td>".$data_week[0]."</td>
                            <td>".$data_week[1]."</td>
                        <tr>";
                    }
                }                 
            ?>
        </table>
        <table class="cash_month" id="month_table">
            <tr>
                <th>Date</th> <th>Amount (in Rs.)</th>
            </tr>
            <?php 
                if(mysqli_num_rows($result_month) > 0){
                    while($data_month = mysqli_fetch_array($result_month)){
                    $tot_month += $data_month[1];
                    echo "<tr>
                            <td>".$data_month[0]."</td>
                            <td>".$data_month[1]."</td>
                        <tr>";
                    }
                }                 
            ?>
        </table>
    </div>
</body>
<script>
    function day(){
        document.getElementById("day_table").style.display = "block";
        document.getElementById("week_table").style.display = "none";
        document.getElementById("month_table").style.display = "none";
    }
    function week(){
        document.getElementById("week_table").style.display = "block";
        document.getElementById("day_table").style.display = "none";
        document.getElementById("month_table").style.display = "none";
    }
    function month(){
        document.getElementById("month_table").style.display = "block";
        document.getElementById("day_table").style.display = "none";
        document.getElementById("week_table").style.display = "none";
    }
</script>
</html>