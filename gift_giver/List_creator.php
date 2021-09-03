<?php

//connection start here // session
include('connect.php');
//connection ends here

$name = $_POST["namer"];
$eventtype = $_POST["type"];
$dropdown = $_POST["typegift"];
$age = $_POST["age"];
$userID = $_SESSION["loginuserID"];
// echo $userID;
// echo $_SESSION["loginuserID"];
// print_r($_SESSION);

$query = "INSERT INTO list(userI, name,type,gifttype,age) VALUES ('$userID',' $name','$eventtype','$dropdown','$age')"; // columns of the database should not have spaces

if ($mysqli->query($query)=== false)
    echo "error".mysqli_error($mysqli); //checks if the query is working properly
    include('response2.php');
    $select="Select listID from list";
    $answer = $mysqli->query($select);
    $count = 0;
     while($row = $answer->fetch_assoc()){
       $count = $count+1;
    }

        echo $count;
    //echo $userID;
   // echo $_SESSION["loginuserID"];
?>
