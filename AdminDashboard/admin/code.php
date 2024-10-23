<?php
session_start();

$connection = mysqli_connect("localhost", "root", "", "project264");

if (isset($_POST['save_btn'])) {
    echo "Data have been submitted.";

    $admin_Name = $_POST['admin_Name'];
    $admin_Email = $_POST['admin_Email'];
    $admin_Phone = $_POST['admin_Phone'];
    $admin_Username = $_POST['admin_Username'];
    $admin_Password = $_POST['admin_Password'];

  

    $insert_query = "INSERT INTO admin (Admin_Name, Admin_Email, Admin_Phone, Admin_Username, Admin_Password) VALUES ('$admin_Name', '$admin_Email', '$admin_Phone', '$admin_Username', '$admin_Password')";
    $insert_query_run = mysqli_query($connection, $insert_query);

    if ($insert_query_run) {
        $_SESSION['status'] = "DATA INSERTED SUCCESSFULLY";
        header('Location: index.php');
    } else {
        $_SESSION['status'] = "DATA NOT INSERTED SUCCESSFULLY";
        header('Location: insert.php');
    }
}

if (isset($_POST['update_btn'])) {
    $admin_Name = $_POST['admin_Name'];
    $admin_Email = $_POST['admin_Email'];
    $admin_Phone = $_POST['admin_Phone'];
    $admin_Username = $_POST['admin_Username'];
    $admin_Password = $_POST['admin_Password'];

 

    $update_query = "UPDATE admin SET Admin_Email='$admin_Email', Admin_Phone='$admin_Phone', Admin_Username='$admin_Username', Admin_Password='$admin_Password' WHERE Admin_Name='$admin_Name'";
    $update_query_run = mysqli_query($connection, $update_query);

    if ($update_query_run) {
        $_SESSION['status'] = "DATA UPDATED SUCCESSFULLY";
        header('Location: index.php');
    } else {
        $_SESSION['status'] = "DATA NOT UPDATED SUCCESSFULLY";
        header('Location: edit.php?name=' . $admin_Name);
    }
}

if (isset($_POST['delete_btn'])) {
    $admin_Name = $_POST['admin_Name'];

    $delete_query = "DELETE FROM admin WHERE Admin_Name='$admin_Name'";
    $delete_query_run = mysqli_query($connection, $delete_query);

    if ($delete_query_run) {
        $_SESSION['status'] = "DATA DELETED SUCCESSFULLY";
        header('Location: index.php');
    } else {
        $_SESSION['status'] = "DATA NOT DELETED SUCCESSFULLY";
        header('Location: edit.php?name=' . $admin_Name);
    }
}
?>

