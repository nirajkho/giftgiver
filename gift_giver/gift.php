<?php

//connection start here
include('connect.php');
//connection ends here

$recipient = $_POST["RName"] ?? '';
$listID = $_POST["ListID"] ?? '';

$sql = "SELECT * FROM list WHERE listID= '$listID'  ";
$result = mysqli_query($mysqli,$sql);
$count  = mysqli_num_rows($result);

// if ($mysqli->query($query)=== false){
//     echo "error".mysqli_error($mysqli); //checks if the query is working properly
//     include('reaction3.html');
//     echo "<p align='center'> <font color=white >error in dsiplaying data! </font> </p>";
// }


?>


<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Gift Giving Express</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet" />
    <link href="fontawesome/css/all.min.css" rel="stylesheet" />
    <link href="css/a_login.css" rel="stylesheet" />

</head>

<body>
    <div class="tm-container">
        <div class="tm-text-white tm-page-header-container">
            <i class=""></i>
            <h1 class="tm-page-header">Gift Giving Express</h1>
        </div>
        <div class="tm-main-content">
            <div id="tm-intro-img"></div>

            <!-- Nav Bar  -->
            <div class="topnav">
              <a href="a_home.php">Home</a>
                <a href="List.html">List</a>
                <a href="gift_suggestion.html">Gift Suggestion</a>
                <a class="active" href="gift.php">Gift List</a>
                <a href="index.html">Logout</a>
            </div>
            <!-- Main section  -->
            <form class="form1" action='gift.php' method='POST'>

                <div class="row">
                    <div class="col-25">
                        <label for="RName"> Recipients Name</label><br>
                    </div>
                    <div class="col-75">
                        <input type="text" id="RName" name="RName" value=""><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="ListID"> ListID</label><br>
                    </div>
                    <div class="col-75">
                        <input type="text" id="ListID" name="ListID" value=""><br>
                    </div>
                </div>

                <input class="submit" type="submit" align="center" value="Submit">
                <table style="width:100%">
                    <tr>
                        <td>GiftID</td>
                        <td>Gift Idea</td>
                        <td>Price</td>
                        <td>Link</td>
                        <td>Type of Gift</td>
                        <td>Description</td>
                        <td>Buyers</td>

                    </tr>

                        <?php
                            if($count==0) {

                                echo "<p align='center'> <font color=black >Enter Valid ID and Name! </font> </p>";
                            }

                            else {
                                $query = "SELECT ID, gift_idea, price, link, collab, description, username FROM  ideas WHERE ListID=$listID";
                                $answer = $mysqli->query($query);

                                if ($answer->num_rows > 0) {
                                    while($row = $answer->fetch_assoc()){
                                        echo '<tr><td>'. $row["ID"].'</td> <td>'.
                                        $row["gift_idea"].'</td> <td>'.
                                        $row["price"].'</td> <td>'.
                                        $row["link"].'</td> <td>'.
                                        $row["collab"].'</td> <td>'.
                                        $row["description"].'</td> <td>'.
                                        $row["username"].  '</td>  </tr>';

                                    }
                                }
                                else{
                                    echo "No Results";
                                }
                            }

                            // while($row = $answer->fetch_assoc()){
                            // // echo $row["ID"] $row["gift_idea"] $row["price"] $row["link"] $row["collab"] $row["description"];
                            // }
                        ?>

                </table>
            </form>
            <form action="gift.php" method="POST">
                <label for="GiftNum"><font color='red'>Enter the GiftID</font> </label><br>
                <input type="text" id="GiftNum" name="GiftNum" value=""><br>
                <button type="Submit" class="Submit" name="change" value="1">Join the Gift</button>
                <button type="Submit" class="Submit" name="change" value="2" >Delete the Gift</button>
            </form>

<?php

$input=$_POST['GiftNum'];
$username = $_SESSION['username'];
$name = "SELECT USERNAME FROM ideas WHERE ID=$input";
$ans = $mysqli->query($name);
$row1 = $ans->fetch_assoc();
$final = $row1['USERNAME'];
$final1 = $final.', '.$username;
switch ($_POST['change']) {

      case 1:
      echo $final1;
      $sql1 = "UPDATE ideas SET USERNAME='$final1' WHERE ID=$input";
      if ($mysqli->query($sql1) == TRUE){
      }
      else{
      }
            break;
case 2:
$sql = "DELETE FROM ideas WHERE ID=$input";
if ($mysqli->query($sql) == TRUE){
}
else{
}
break;
}

 ?>


            <!-- contact  -->
            <section class="tm-section tm-section-small">
                <h2 class="tm-section-header">Talk to us</h2>
                <p align="center" class="tm-mb-0">
                    Reach us via
                    <a href="mailto:info@example.com" class="tm-contact-link">Email</a>
                    or follow us using the social icons below. Thank you.
                </p>
                <div class="tm-social-icons">
                    <div class="tm-social-link-container">
                        <a href="https://fb.com/" class="tm-social-link">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </div>
                    <div class="tm-social-link-container">
                        <a href="https://twitter.com" class="tm-social-link">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                    <div class="tm-social-link-container">
                        <a href="https://instagram.com" class="tm-social-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                    <div class="tm-social-link-container">
                        <a href="https://pinterest.com" class="tm-social-link">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </div>
                </div>
            </section>
        </div>
        <footer>
            <p class="tm-text-white tm-footer-text">
                Niraj Khosla - 1803357

            </p>
        </footer>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script>
        $(function () {
            // Adjust intro image height based on width.
            $(window).resize(function () {
                var img = $("#tm-intro-img");
                var imgWidth = img.width();

                // 640x425 ratio
                var imgHeight = (imgWidth * 425) / 640;

                if (imgHeight < 300) {
                    imgHeight = 300;
                }

                img.css("min-height", imgHeight + "px");
            });
        });
    </script>
</body>

</html>
