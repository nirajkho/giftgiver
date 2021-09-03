<?php


    //connection start here
    include('connect.php');

    $email = $_POST['email'];
    $pwd = $_POST["password"];
	$sql = "SELECT * FROM login WHERE email= '$email' and password = '$pwd' ";
    $result = mysqli_query($mysqli,$sql);



	$count  = mysqli_num_rows($result);


	if($count==0) {
        include('reaction.html');
        echo "<p align='center'> <font color=white >Invalid Email or Password!</font> </p>";
	}
    else {
        $row = $result->fetch_assoc();
        session_start();
        //session_register("loginuser");
        $_SESSION['loginuser']=$email;
        $_SESSION['loginuserID']=$row['ID'];
        $_SESSION['username']=$row['firstname'];
       echo $row['ID'];
       echo $_SESSION['loginuserID'];
       header('location: a_home.php');

	}

?>
