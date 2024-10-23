<?php
// Include your database connection file
include("../db.php");

// Initialize variables to store search results
$results = array();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["type"])) {
    // Sanitize and store the selected vendor type
    $vendorType = mysqli_real_escape_string($conn, $_GET["type"]);

    // Query to fetch vendor details based on selected type
    $query = "SELECT VEND_NAME, VEND_TYPE
              FROM vendors 
              WHERE VEND_TYPE = ?";

    // Prepare the statement
    $stmt = mysqli_prepare($conn, $query);

    // Bind parameter
    mysqli_stmt_bind_param($stmt, "s", $vendorType);

    // Execute the statement
    mysqli_stmt_execute($stmt);

    // Bind result variables
    mysqli_stmt_bind_result($stmt, $vendName, $vendType);

    // Fetch results
    while (mysqli_stmt_fetch($stmt)) {
        // Store each row in the results array
        $results[] = array(
            'VEND_NAME' => $vendName,
            'VEND_TYPE' => $vendType
        );
    }

    // Close statement
    mysqli_stmt_close($stmt);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, shrink-to-fit=no, user-scalable=no">
    <title>Semicolon.com</title>

    <link rel="shortcut icon" href="../assets/images/fav.jpg">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
</head>
<body>

    <!--####################### Header ###################-->
    <?php include 'menuVendor.php'; ?>

    <!--####################### Services ###################-->
    <div class="service-container container-fluid">
        <div class="container">
            <div class="row inner-title">
                <h2>Vendor Accessibility</h2>
                <p>Thank you for participating in our food festival project... Check out more:</p>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="serv-cover">
                        <div class="icon">
                            <i style="background-color: #4CAF50;" class="fas fa-laptop"></i>
                        </div>
                        <div class="detail">
                            <h6>Vendor Registration</h6>
                            <p>Do you want to be part of our food festival? Click here:</p>
                            <br>
                            <a href="vendorRegistration.php" class="btn btn-primary hidden-xs">REGISTER</a>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="serv-cover">
                        <div class="icon">
                            <i style="background-color: #4CAF50;" class="fas fa-desktop"></i>
                        </div>
                        <div class="detail">
                            <h6>Profit Calculator</h6>
                            <p>Want to know your profit? Use our handy profit calculator to crunch the numbers effortlessly!</p>
                            <br>
                            <a href="profitCalculator.php" class="btn btn-primary hidden-xs">PROFIT CALCULATOR</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="serv-cover">
                        <div class="icon">
                            <i style="background-color: #4CAF50;" class="fas fa-database"></i>
                        </div>
                        <div class="detail">
                            <h6>Search System</h6>
                            <p>Want a list of vendors that will be your allies during the festival? Choose the vendor type here.</p>
                            <br>
                            <form id="searchForm" action="homeVendor.php" method="GET">
                                <select id="type" name="type" required>
                                    <option value="">Select vendor type</option>
                                    <option value="Beverage vendor">Beverage vendor</option>
                                    <option value="Food vendor">Food vendor</option>
                                    <option value="Merchandise vendor">Merchandise vendor</option>
                                    <option value="Other">Other</option>
                                </select>

                                <button type="submit" class="btn btn-primary hidden-xs">Search</button>
                            </form>
                            <br><br>
                            <?php if (!empty($results)): ?>
                                <div id="searchResult">
                                    <h5>Search Results:</h5>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Vendor Name</th>
                                                <th>Vendor Type</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($results as $result): ?>
                                                <tr>
                                                    <td><?php echo $result['VEND_NAME']; ?></td>
                                                    <td><?php echo $result['VEND_TYPE']; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include JavaScript -->
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="../assets/plugins/slider/js/owl.carousel.min.js"></script>
    <script src="../assets/js/script.js"></script>

</body>
</html>
