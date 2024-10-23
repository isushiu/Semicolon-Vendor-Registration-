<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, shrink-to-fit=no, user-scalable=no">
    <title> Semicolon.com</title>

    <link rel="shortcut icon" href="../assets/images/fav.jpg">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />

<style>

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

body {
  background-color: #ededed;
  margin:0;
}

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 80px;
}

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


</style>
</head>
    <!--####################### MENU FILE ###################-->
    <?php require'menuVendor.php' ?>

     <!--  ************************* BODY PAGE ************************** -->
     <div class="page-nav no-margin row">
            <div class="container">
                <div class="row">
                    <h2>Vendor Registration</h2>
                    <ul>
                        <li> <a href="homeVendor.php"><i class="fas fa-home"></i> Home</a></li>
                        <li><i class="fas fa-angle-double-right"></i>Vendor Registration</li>
                    </ul>
                </div>
            </div>
    </div>

    <div class="row">
        <div class="columnLeft">
          <br><br><br>
          <img src="../assets/images/banner.png" alt="banner" style="width:90%" class="center">
    </div>

<div class="columnRight">
  <?php include 'vendorsRegForm.php' ?>
</div>


</body>
</html> 