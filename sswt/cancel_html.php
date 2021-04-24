<?php include("cancel.php"); ?>
<html>
    <head>
        <title>Cancel Reservation</title>
        <link rel="stylesheet" href="cancel.css?ver=<?php echo rand(111,999)?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    </head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <body>
        <nav class="navbar">
            <div class="logo">PARKar</div>
            <ul>
                <li><a href="homepage.php">Home</a></li>
                <li><a href="">Contact Us</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
            <div class="welcome">
                <?php echo $curr_day.", ".$curr_date; ?>
            </div>
        </nav>
        <div class="head">
            Sure You Want To Cancel? <br>
            <span style="font-size: 25px; font-weight: 100;">We would love to have you! </span>
        </div><br>
        <!-- printing cancellation msg -->
            <?php if(isset($_GET['msg'])){
                echo "<div style='text-align: center; color: red;font-size: 28px;'>";
                echo "Your Slot Reservation Has Been Cancelled!";
                echo "</div>";
            } ?>
        <div class="select">
            Here Is A List Of Your Upcoming Reservations: 
        </div>
        <div class="upcoming" id="upcoming">
            <table>
                <tr>
                    <th> Date </th>
                    <th> Slot Number </th>
                    <th> Action </th>
                </tr>
                <?php 
                    if(mysqli_num_rows($result) > 0){
                        while($data = mysqli_fetch_array($result)){                                
                        echo "<tr>
                                <td>".$data[0]."</td><td>".$data[1]."</td><td>
                                <a style='font-weight: 600; text-transform: uppercase; text-decoration: none; padding: 5px 10px; background-color: rgba(61, 57, 52, 0.7); color: white; border-radius: 20px;' 
                                    href='cancel.php?chgdate=".$data[0]."&chgslot=".$data[1]."'>CHANGE DATE</a> / 
                                <a style='font-weight: 600; text-transform: uppercase; text-decoration: none; padding: 5px 10px; background-color: rgba(61, 57, 52, 0.7); color: white; border-radius: 20px;' 
                                    href='cancel.php?date=".$data[0]."&slot=".$data[1]."'>CANCEL</a></td>
                            <tr>";
                        }
                    }                 
                    ?>
            </table>
        </div>
    </body>
</html>