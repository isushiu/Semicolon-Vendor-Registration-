<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "project264");

if(isset($_POST['save_btn']))
{
    echo "Data have been submitted.";

    $id= $_POST['Vendor_ID'];
    $name= $_POST['Vendor_Name'];
    $email= $_POST['Vendor_Email'];
    $profit = $_POST['Vendor_Profit'];
    
    $insert_query = "INSERT INTO vendors(Vendor_ID,Vendor_Name,Vendor_Email,Vendor_Profit) VALUES ('$id','$name','$email','$profit')";
    $insert_query_run = mysqli_query($connection, $insert_query);

    if($insert_query_run)
    {
        $_SESSION['status'] = "DATA INSERTED SUCCESSFULLY";
        header('location: index.php');
    }
    else
    {
        $_SESSION['status'] = "DATA NOT INSERTED SUCCESSFULLY";
        header('location: vendorReport.php');
    }
}

?>