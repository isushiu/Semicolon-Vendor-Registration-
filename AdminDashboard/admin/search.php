<?php
session_start();
// Establish database connection
$connection = mysqli_connect("localhost", "root", "", "project264");

// Check connection
if(mysqli_connect_errno()) {
    die("Database connection failed: " .
        mysqli_connect_error() .
        " (" . mysqli_connect_errno() . ")"
    );
}

// Check if search parameter is set
if(isset($_GET['search'])) {
    $search_query = $_GET['search'];

    // Prepare and execute SQL query
    $search_query = mysqli_real_escape_string($connection, $search_query);
    $query = "SELECT Admin_Name FROM admin WHERE Admin_Name LIKE '%$search_query%'";

    $result = mysqli_query($connection, $query);

    // Check if query executed successfully
    if($result) {
        if(mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $admin_name = urlencode($row['Admin_Name']);
            header("Location: edit.php?name=$admin_name");
            exit();
        } else {
            $_SESSION['status'] = "No record found";
            header("Location: index.php");
            exit();
        }
    } else {
        die("Query execution failed: " . mysqli_error($connection));
    }
} else {
    $_SESSION['status'] = "Invalid search";
    header("Location: index.php");
    exit();
}

// Close database connection
mysqli_close($connection);
?>
