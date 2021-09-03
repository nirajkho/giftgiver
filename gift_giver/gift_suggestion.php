<?php

//connection start here
include('connect.php');
//connection ends here


$recipient = $_POST["RName"];
$listID = $_POST["ListID"];
$giftidea = $_POST["GiftIdea"];
$Price = $_POST["Price"];
$Link = $_POST["LinkGift"];
$gifttype = $_POST["typgift"];
$descript = $_POST["Description"];
$userID = $_SESSION["loginuserID"];
$username = $_SESSION['username'];

//and name = '$recipient'
$sql = "SELECT * FROM list WHERE listID = '$listID' ";
$result = mysqli_query($mysqli,$sql);
$count  = mysqli_num_rows($result);



if($count==0) {
        include('reaction2.html');
		 echo "<p align='center'> <font color=white >Recipient name and ListID do not match!!! </font> </p>";
	}

else {

$query = "INSERT INTO ideas(gift_idea,price,link,collab,description,ListID, UserID, USERNAME) VALUES ('$giftidea','$Price','$Link','$gifttype','$descript','$listID','$userID','$username')";

}


if ($mysqli->query($query)=== false)
    echo "Error".mysqli_error($mysqli); //checks if the query is working properly
    include('reaction5.html');
echo "<p align='center'> <font color=white >Data saved </font> </p>";


?>
