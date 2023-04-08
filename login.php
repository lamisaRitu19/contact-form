<?php 
    // get values from ui
    $uname = $_POST['uname'];
    $password = $_POST['password'];

    if (empty($uname) || empty($password)) {
        echo '<script>alert("Enter your credentials!")</script>';
    }
    else{
        // connect database
        $connect = mysqli_connect('localhost', 'root', '') or die("Error: Could not connect" . mysqli_error());

        // select database 
        $select_db = mysqli_select_db($connect, 'contact-form') or die(mysqli_error());

        // check data with table
        $sql = "SELECT * FROM users WHERE users.usrname='$uname' and users.password='$password'";

        // execute query
        $result = mysqli_query($connect, $sql) or die(mysqli_error());
        if ($result == true){
            $row = mysqli_fetch_assoc($result);
            header("Location:contact-details.php");
        }
        else{
            header("Location:admin-login.php");
            echo "Failed to login";
        }
    }
?>