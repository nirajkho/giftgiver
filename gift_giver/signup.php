<?php

//connection start here
include('connect.php');
//connection ends here


    $fname = $_POST["firstname"]; //recieve the first name from the user
    $email = $_POST['email']; //recieve the email from the user
    $lname = $_POST["lastname"]; //recieve the last name from user
    $pwd = $_POST["password"]; //recieve the password from user
    $query = "INSERT INTO login(firstname,lastname,email,password) VALUES ('$fname','$lname','$email','$pwd')"; // columns of the database should not have spaces



if ($mysqli->query($query)=== false)
    echo "error".mysqli_error($mysqli); //checks if the query is working properly
    include('response.html');
    echo "<p align='center'> <font color=white >Thank you for registering: $fname $lname, your email is $email</font> </p>";
?>
b
