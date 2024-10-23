<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, shrink-to-fit=no, user-scalable=no">
    <title> Semicolon.com</title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<!-- Include Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<style>
     /* Create two equal columns that floats next to each other */
.columnLeft {
  float: left;
  width: 25%;
  padding: 10px;
  height: 100%;
}

.columnRight {
  float: left;
  width: 70%;
  padding: 10px;
  height: 100%;
}

.contact-container {
            padding: 50px 0;
            text-align: center;
            background-size: cover;
        }
        .contact-container h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            color: #4a2e2e;
        }
        .contact-container p {
            margin-bottom: 30px;
            color: #4a2e2e;
        }
        .contact-info {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .contact-info div {
            background-color: #D8D2C8;
            padding: 20px;
            border-radius: 8px;
            color: #4a2e2e;
            text-align: center;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .contact-info div:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .contact-info div i {
            font-size: 24px;
            margin-bottom: 10px;
            color: #a04332;
        }
        .social-icons {
            margin-top: 20px;
        }
        .social-icons p {
            font-size: 1.2em;
            margin-bottom: 10px;
            color: #4a2e2e;
        }
        .social-icons a {
            color: #4a2e2e;
            font-size: 24px;
            margin: 0 10px;
            transition: color 0.3s, transform 0.3s;
        }
        .social-icons a:hover {
            color: #ffd700;
            transform: scale(1.1);
        }
</style>

<body>

    <!--####################### MENU FILE ###################-->
    <?php include 'menuGuest.php'?>

     <!--  ************************* BODY PAGE ************************** -->
     <div class="page-nav no-margin row">
            <div class="container">
                <div class="row">
                    <h2>Contact Us</h2>
                    <ul>
                        <li> <a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                        <li><i class="fas fa-angle-double-right"></i>Contact Us</li>
                    </ul>
                </div>
            </div>
    </div>

    <div class="row">
        <div class="columnLeft">
          <br><br>
          <img src="assets/images/banner.png" alt="banner" style="width:90%" class="center">
    </div>
            
            
    <div class="columnRight">
      <div class="contact-container">
      <h1>Contact Us</h1>
      <p>These are some ways to reach us.</p>
      
      <div class="contact-info">
        <div>
            <i class="fa fa-location-arrow" aria-hidden="true"></i>
            <p>43, Jalan Uda 16, Taman Baru Uda<br>Johor 89070</p>
        </div>
        <div>
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <p>semicolonTech@hotmail.com</p>
        </div>
        <div>
            <i class="fa fa-mobile" aria-hidden="true"></i>
            <p>+607-564 3206</p>
        </div>
    </div>
    <div class="social-icons">
        <p>Follow Us on Social Media<br>@SemicolonTech_</p>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-tiktok"></i></a>
        <a href="#"><i class="fab fa-facebook"></i></a>
    </div>

      </div>
    </div>
</body>
<!--####################### FOOTER FILE ###################-->

</html>