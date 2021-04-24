<?php include('dbase.php'); ?>
<html>
    <head>
        <title>Database</title>
        <link rel="stylesheet" href="dbase.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    </head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <body>
        <nav class="navbar">
            <div class="logo">PARKar</div>
            <ul>
                <li><a href="homeadmin.php">Home</a></li>
                <li><a href="cash_html.php">Check Collection</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
            <div class="welcome">
                <?php echo $curr_date; ?>
            </div>
        </nav>
        <div class="select">
            <form action="dbase_html.php" method="POST">
                <input type="date" name="start" min="2021-04-11" max="2021-04-29"> &nbsp;&nbsp; to &nbsp;&nbsp; 
                <input type="date" name="end" min="2021-04-12" max="2021-04-30"> <br><br> <input type="submit" name="getrec" id="records" value="Search">
            </form>
        </div>
        <div class="container">
            <?php if(isset($_POST['getrec'])){ ?>
                <div class="table" id="table">
                    <table>
                        <tr style="height: 10px;">
                            <th style="background-color: #afafaf;">Date</th><th>S1</th><th>S2</th><th>S3</th><th>S4</th><th>S5</th>
                            <th>S6</th><th>S7</th><th>S8</th><th>S9</th><th>S10</th><th>S11</th>
                        </tr>
                        <?php 
                        if(mysqli_num_rows($result) > 0){
                            while($data = mysqli_fetch_array($result)){                                
                            echo "<tr>
                                    <td style='background-color: rgb(196, 248, 255);'>".$data[0]."</td><td>".$data[1]."</td><td>".$data[2]."</td><td>".$data[3]."</td>
                                    <td>".$data[4]."</td><td>".$data[5]."</td><td>".$data[6]."</td><td>".$data[7]."</td>
                                    <td>".$data[8]."</td><td>".$data[9]."</td><td>".$data[10]."</td><td>".$data[11]."</td>
                                <tr>";
                            }
                        }                 
                        ?>
                    </table>
                </div>
            <?php } ?>
        </div>
    </body>
    
</html>