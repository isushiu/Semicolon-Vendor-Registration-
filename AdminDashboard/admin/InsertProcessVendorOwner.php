<?php
session_start();

$connection = mysqli_connect("localhost", "root", "", "project264");

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

if (isset($_POST['save_btn'])) {
    $cust_IC = $_POST['CUST_IC'];
    $cust_Name = $_POST['CUST_NAME'];
    $cust_Username = $_POST['CUST_USERNAME'];
    $cust_Password = $_POST['CUST_PASS'];
    $cust_Email = $_POST['CUST_EMAIL'];
    $cust_Phone = $_POST['CUST_PNUM'];


    $insert_query = "INSERT INTO vendorsowner (CUST_IC, CUST_NAME, CUST_USERNAME, CUST_PASS, CUST_EMAIL, CUST_PNUM) VALUES ('$cust_IC', '$cust_Name', '$cust_Username', '$cust_Password', '$cust_Email', '$cust_Phone')";
    $insert_query_run = mysqli_query($connection, $insert_query);

    if ($insert_query_run) {
        $_SESSION['status'] = "CUSTOMER DATA INSERTED SUCCESSFULLY";
        header('Location: index.php');
    } else {
        $_SESSION['status'] = "FAILED TO INSERT CUSTOMER DATA";
        header('Location: insert.php'); // Adjust this if you have a specific insert page for customers
    }
}

if (isset($_POST['update_btn'])) {
    $cust_IC = $_POST['CUST_IC'];
    $cust_Name = $_POST['CUST_NAME'];
    $cust_Username = $_POST['CUST_USERNAME'];
    $cust_Password = $_POST['CUST_PASS'];
    $cust_Email = $_POST['CUST_EMAIL'];
    $cust_Phone = $_POST['CUST_PNUM'];

   

    $update_query = "UPDATE vendorsowner SET CUST_NAME='$cust_Name', CUST_USERNAME='$cust_Username', CUST_PASS='$cust_Password', CUST_EMAIL='$cust_Email', CUST_PNUM='$cust_Phone' WHERE CUST_IC='$cust_IC'";
    $update_query_run = mysqli_query($connection, $update_query);

    if ($update_query_run) {
        $_SESSION['status'] = "CUSTOMER DATA UPDATED SUCCESSFULLY";
        header('Location: index.php');
    } else {
        $_SESSION['status'] = "FAILED TO UPDATE CUSTOMER DATA";
        header('Location: edit.php?cust_ic=' . $cust_IC); // Adjust this if you have a specific edit page for customers
    }
}

if (isset($_POST['delete_btn'])) {
    $cust_IC = $_POST['CUST_IC'];

    $delete_query = "DELETE FROM vendorsowner WHERE CUST_IC='$cust_IC'";
    $delete_query_run = mysqli_query($connection, $delete_query);

    if ($delete_query_run) {
        $_SESSION['status'] = "CUSTOMER DATA DELETED SUCCESSFULLY";
        header('Location: index.php');
    } else {
        $_SESSION['status'] = "FAILED TO DELETE CUSTOMER DATA";
        header('Location: edit.php?cust_ic=' . $cust_IC); // Adjust this if you have a specific edit page for customers
    }
}

mysqli_close($connection);
?>
