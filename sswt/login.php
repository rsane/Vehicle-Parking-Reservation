<?php 
//starting a session
session_start();

// initializing variables
    $errors = array(); 

    // connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'sswt');

    //handle unauthorised access
    if(isset($_GET['error'])){
        array_push($errors, $_GET['error']);
    }

    // REGISTER USER
    if (isset($_POST['log_user'])) {

        // receive all input values from the form
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        //storing admin details in assoc arr
        $admin = array("user"=>'admin123', "pass"=>"Admin@123");

        if($username == $admin["user"] && $password == $admin["pass"]){
            $_SESSION['name'] = "Admin";
            header("Location: homeadmin.php");
        }

        //writing the queries
        $sql = "select * from customers where username='".$username."' and password='".$password."';";

        //executing the queries
        $result = mysqli_query($db, $sql);
        //fetching a row from the result

        $row=mysqli_fetch_array($result);
        //checking if a record exists
        if(!$row) { 
            array_push($errors, "Incorrect Username or Password");
        } 
        else {  
            $_SESSION['name'] = $row['name'];
            $_SESSION['user'] = $row['username'];
            header("Location: homepage.php");
        }

        //closing mysql connection
        mysqli_close($db);  
    }

    //print the errors
    echo "<center><div style='text-align:center; z-align:1; width:25%; heigth:25%; border-radius:15px; background-color:rgba(255, 255, 255, 0.7);'>";
        foreach ($errors as $error)
            echo "<div style='color:rgba(219, 21, 21, 0.822); text-shadow:1px 1px rgba(255, 255, 0, 1); width:45% background-color:white;'>".$error."</div>";
    echo "</div></center>";

?>