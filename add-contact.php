<?php 
    // get values from ui
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // connect database
    $connect = mysqli_connect('localhost', 'root', '') or die("Error: Could not connect" . mysqli_error());

    // select database 
    $select_db = mysqli_select_db($connect, 'contact-form') or die(mysqli_error());

    // SQL query to insert data in table
    $sql = "INSERT INTO contactinfo SET name='$name', email='$email', message='$message'";

    // execute query
    $result = mysqli_query($connect, $sql) or die(mysqli_error());
    if ($result == true){
        header('location:contact-form.php');
        echo "success";
    }
    else{
        echo "Failed to insert data in database.";
    }
?>