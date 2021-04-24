<?php include("booking.php"); ?>
<html>
    <head>
        <title>Booking</title>
        <link rel="stylesheet" href="bookings.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    </head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
    <body>
        <nav class="navbar">
            <div class="logo">PARKar</div>
            <ul>
                <li><a href="homepage.php">Home</a></li>
                <li><a href="cancel_html.php">Cancel Reservation</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
            <div class="welcome">
                <?php echo $curr_day.", ".$curr_date; ?>
            </div>
        </nav>
        <div class="content_container"><br><br><br><br>
            <div class="bill"><br><br>
                <div class="logo2">
                    PARKar
                </div>
                <div class="header">
                    BILL
                </div><br>
                <div class="address">
                    PARKar Ltd. <br> xyz Nagar, Wakad - 057 <br> Pune, Maharastra
                </div>
                <div class="contents">
                    <ul>
                        <li>Name: <span>Admin</span>
                        <li>Selected Slot: <span id="slot"></span>
                        <li>Selected Date: <span id="date"></span>
                        <li>Selected Type Of Vehicle: <span id="type"></span>
                        <li>Total: <span id="tot"></span>
                        <li class="tax">18% GST<span id="gst"></span>
                        <li class="tax">5% Other Tax<span id="tax"></span><br><br>
                        <li class="tot">Grand Total: <span id="grandtot"></span>
                    </ul>
                </div><br><br>
                <div class="btn">
                    <form method="post" action="booking_html.php">
                        <input type="submit" value="Reserve!" name="reserve"></form> <input type="submit" value="Print Bill" name="print" onclick="window.print();">
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript">
        //input values from php
        var slot = "<?php echo $slot_no ?>";
        var src = "<?php echo $src_date ?>";
        var type = "<?php echo $type ?>";
        var tot = "<?php echo $tot ?>";
        var gst = "<?php echo $gst ?>";
        var tax = "<?php echo $tax ?>";
        var grandtot = "<?php echo $grandtot ?>";

        //display them in span tags
        document.getElementById('slot').innerHTML = slot;
        document.getElementById('date').innerHTML = src;
        document.getElementById('type').innerHTML = type;
        document.getElementById('tot').innerHTML = tot;
        document.getElementById('gst').innerHTML = gst;
        document.getElementById('tax').innerHTML = tax;
        document.getElementById('grandtot').innerHTML = grandtot;

    </script>
</html>