<?php
    session_start();
    include("../db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $vendorID = $_POST['venID'];
        $costPrice = $_POST['costPrice'];
        $sellingPrice = $_POST['sellingPrice'];
        $unitsSold = $_POST['unitSold'];

        // Calculate profit
        $profit = $sellingPrice - $costPrice;
        $totalProfit = $profit * $unitsSold;

        // Update the database with the calculated profit
        $stmt = $conn->prepare("UPDATE vendors SET VEND_PROFIT = ? WHERE VEND_ID = ?");
        $stmt->bind_param("di", $totalProfit, $vendorID);

        // Execute the update
        if ($stmt->execute()) {
            echo "<script>alert('Profit calculation updated successfully');</script>";
        } else {
            echo "<script>alert('Error updating profit calculation: " . $stmt->error . "');</script>";
        }

        // Close the statement
        $stmt->close();
    }

    $conn->close();
?>


<!doctype html>
<html lang="en">

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
</head>
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

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.submitBtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  border-radius: 10px;
}

.submitBtn:hover {
  opacity: 2;
}

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 80px;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color : white;
  border-radius: 10px;
}

.card {
  margin-top: 40px;
  display: block;
  margin-left: auto;
  margin-right: auto;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 80%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>
<body>

    <!--####################### MENU FILE ###################-->
    <?php require'menuVendor.php' ?>

     <!--  ************************* BODY PAGE ************************** -->
     <div class="page-nav no-margin row">
            <div class="container">
                <div class="row">
                    <h2>Profit Calculation</h2>
                    <ul>
                        <li> <a href="homeVendor.php"><i class="fas fa-home"></i> Home</a></li>
                        <li><i class="fas fa-angle-double-right"></i>Profit Calculation</li>
                    </ul>
                </div>
            </div>
    </div>

    <div class="row">
        <div class="columnLeft">
          <br><br>
          <img src="../assets/images/banner.png" alt="banner" style="width:90%" class="center">
    </div>
            
            
    <div class="columnRight">
        <br><br>
        <form id="profitForm" name="profitForm" onsubmit="return profitCalc()" method="post">
            <div class="container">
              
            <b><h1>VENDOR PROFIT CALCULATION</h1></b> 
            <br>
              
            <label for="venID"><b>Vendor's Lot</b></label>
            <div class="w3-rest">
                  <input type="text" placeholder="Enter Vendor's ID" name="venID" id="venID" required>
            </div>
              
            <label for="costPrice"><b>Cost Price (Per Unit)</b></label>
            <input type="text" placeholder="Enter Cost Price (Per Unit) " name="costPrice" id="costPrice" required>
              
            <label for="sellingPrice"><b>Selling Price (Per Unit) </b></label>
            <input type="text" placeholder="Enter Selling Price (Per Unit) " name="sellingPrice" id="sellingPrice" required>
              
            <label for="unitSold"><b>Number of units sold </b></label>
            <input type="text" placeholder="Enter Number of units sold " name="unitSold" id="unitSold" required>
            <hr>
          
              <button type="clear" class="submitBtn" onclick="clearForm()" style="background-color: red;">Clear</button>
              <button type="submit" class="submitBtn" onclick="profitCalc()">Submit</button>
          
          
              <script>
                  function profitCalc() 
                  {
                      let cost = document.forms["profitForm"]["costPrice"].value;
                      let sellingPrice = document.forms["profitForm"]["sellingPrice"].value;
                      let unit = document.forms["profitForm"]["unitSold"].value;
                      
                     
                      // Calculate total price
                        let profit = sellingPrice-cost;
                      let totalProfit = profit * unit;
          
                      // Display
                      window.alert("         THANK YOU FOR WAITING" + 
                            "\n======================="+
                            "\nYour profit has been submitted \nThe total profit is RM" +totalProfit+"\n======================="+ "\n                 THANK YOU!");
                  }
                </script>
                
                <script>
                    function clearForm()
                        {
                            document.getElementById("profitForm").reset();
                        }
                </script>
              <br><br>
            </div>
        </form>
    </div>
</body>

</html>