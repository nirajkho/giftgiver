<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Gift Giving Express</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet" />
  <link href="fontawesome/css/all.min.css" rel="stylesheet" />
  <link href="css/gift.css" rel="stylesheet" />
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
        <a class="active" href="a_home.php">Home</a>
        <a href="List.html">List</a>
        <a href="gift_suggestion.html">Gift Suggestion</a>
        <a href="gift.php">Gift List</a>
        <a href="logout.php">Logout</a>
      </div>

      <!-- Main section  -->

      <section class="tm-section tm-section-small">
        <h2 class="tm-section-header">
          Welcome!
          <?php
            include('connect.php');
            // $login_Email = "SELECT firstname FROM login WHERE email= '$_SESSION['loginuser']'";
            // echo $login_Email;
            echo '<br>';
            echo $_SESSION['username'];
            ?>
        </h2>

        <center>
          <h1>
            <font color="red"> Login was Succesful </font>
          </h1>
        </center>
      </section>
      <hr />

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
      <p class="tm-text-white tm-footer-text">Niraj Khosla - 1803357</p>
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
