<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vendor List</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Vendor List</h2>

<table>
    <thead>
        <tr>
            <th>Vendor Name</th>
            <th>Vendor Type</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Include your database connection file
        include("../db.php");

        // Check if type parameter is set and not empty
        if(isset($_GET['type']) && !empty($_GET['type'])) {
            // Sanitize the input to prevent SQL injection
            $vendorType = mysqli_real_escape_string($conn, $_GET['type']);

            // Query to retrieve vendors based on vendor type
            $query = "SELECT vo.CUST_NAME, v.VEND_TYPE
                      FROM vendors v
                      JOIN vendorsowner vo ON v.CUST_IC = vo.CUST_IC
                      WHERE v.VEND_TYPE = ?";

            // Prepare the statement
            $stmt = mysqli_prepare($conn, $query);

            // Bind parameter
            mysqli_stmt_bind_param($stmt, "s", $vendorType);

            // Execute the statement
            mysqli_stmt_execute($stmt);

            // Bind result variables
            mysqli_stmt_bind_result($stmt, $custName, $vendType);

            // Check if there are results
            if(mysqli_stmt_fetch($stmt)) {
                // Loop through each row and display vendor name and type in table rows
                do {
                    echo "<tr>";
                    echo "<td>" . $custName . "</td>";
                    echo "<td>" . $vendType . "</td>";
                    echo "</tr>";
                } while(mysqli_stmt_fetch($stmt));
            } else {
                echo "<tr><td colspan='2'>No vendors found for selected type.</td></tr>";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        } else {
            echo "<tr><td colspan='2'>Please select a vendor type.</td></tr>";
        }

        // Close database connection
        mysqli_close($conn);
        ?>
    </tbody>
</table>

</body>
</html>
