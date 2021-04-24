<?php include("home.php"); ?>
<html>

<head>
    <title>Homepage - Admin</title>
    <link rel="stylesheet" href="homeadmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>

<body>
    <nav class="navbar">
        <div class="logo">PARKar</div>
        <ul>
            <li><a href="homeadmin.php">Home</a></li>
            <li><a href="">Contact Us</a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
        <div class="welcome">
            Hi, <?php echo $name;?>!
        </div>
    </nav>
    <div class="greet">
        <div class="greetings">
            <span>
                <?php echo $greet; ?>
            </span><br>
            <span>
                <?php echo $curr_day.", ".$curr_date; ?>
            </span>
        </div>
    </div>
    <div class="content-left">
        <div class="left_head">
            Check Out The Database From Here:
        </div>
        <form>
            <div class="veh_type">
                <i class="fas fa-database fa-3x"></i> <br>
                <input type="button" value="Check Out" onclick="window.location.href='dbase_html.php'">
            </div>
    </div>
    <div class="content-right">
        <div class="right_head">
            Check Cash Collection From Here:
        </div>
        <div class="rdiobtn">
            <i class="fas fa-rupee-sign fa-4x"></i><br><br><br>
            <input type="button" value="Check Out" onclick="window.location.href='cash_html.php'">
        </div>
        </form>
    </div>
</body>

</html>