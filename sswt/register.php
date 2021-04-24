<?php

    // initializing variables
    $errors = array(); 

    // connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'sswt');

    // REGISTER USER
    if (isset($_POST['reg_user'])) {

        // receive all input values from the form
        $username = $_POST['username'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // form validation: ensure that the form is correctly filled ...
        //array_push() to add errors into the array of errors
        
        //check for existing username
        $chk_query = "select * from customers where username='".$username."';";
        $chk_user = mysqli_query($db, $chk_query);
        if(mysqli_num_rows($chk_user)>0){
            array_push($errors, "Username is already taken");
        }
        //check if username is invalid
        if(!preg_match('/^[a-z\d_]{5,15}$/i', $username)){
            array_push($errors, "Invalid Username");
        }
        //check if username is invalid
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Invalid Email");
        }
        //check if password is invalid
        if(!preg_match("/^(?=.*\d)(?=.*[@#\-_$%^&+=!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=!\?]{8,20}$/" ,$password)){
            array_push($errors, "Invalid Password");
        }

        if(count($errors)<=0){
            //writing mysql query to insert records
            $query = "insert into customers values('".$username."','".$name."','".$email."','".$password."');";
            mysqli_query($db, $query);
            header("Location: login_html.php");
        }

        //print the errors
        echo "<center><div style='text-align:center; width:25%; heigth:25%; border-radius:15px; background-color:rgba(255, 255, 255, 0.7);'>";
            foreach ($errors as $error)
                echo "<div style='color:rgba(219, 21, 21, 0.822); text-shadow:1px 1px rgba(255, 255, 0, 1); width:45% background-color:white;'>".$error."</div>";
        echo "</div></center>";

        //closing mysql connection
        mysqli_close($db);  
    }

?>