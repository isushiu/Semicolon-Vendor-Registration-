<?php
    session_start();

    include("../db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $vendorName = $_POST['VendorName'];
        $venType = $_POST['type'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $zip = $_POST['zip'];
        $contactName = $_POST['contactFirstName'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $businessLice = $_POST['businessLice'];
        $healthCertif = $_POST['healthCertif'];
    }

    if (!empty($vendorName) && !empty($venType) && !empty($address) && !empty($city) && !empty($zip)  && !empty($contactName)  && !empty($mobile)  && !empty($email)  && !empty($businessLice)  && !empty($healthCertif)) {
        // Prepare the SQL statement
        $stmt = $conn->prepare("INSERT INTO vendors (VEND_NAME, VEND_TYPE, VEND_ADDRESS, VEND_CITY, VEND_ZIP, VEND_CONTACTNAME, VEND_MOBILE, VEND_EMAIL, VEND_BUSINESSLICE, VEND_HEALTHCERTIF) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssss", $vendorName, $venType, $address, $city, $zip, $contactName, $mobile, $email, $businessLice, $healthCertif);

        // Execute the query
        if ($stmt->execute()) {
            echo "<script type='text/javascript'> alert('Successfully Registered');</script>";
        } else {
            echo "<script type='text/javascript'> alert('Error: " . $stmt->error . "');</script>";
        }

        // Close the statement
        $stmt->close();
    }

    $conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    body {
        font-family: Arial, sans-serif;
        background: #f4f4f4;
        margin:0;
        
    }
    .form-container {
        background: white;
        width: 100%;
        padding: 20px;
        margin: auto;
        border: 1px solid #ccc;
    }
    h2 {
        text-align: left;
        border-bottom: 2px solid #000;
        padding-bottom: 10px;
    }
    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }
    input[type="text"], input[type="email"], select {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .input-group {
        margin-bottom: 10px;
    }
    .button-group button {
        padding: 10px 20px;
        margin-right: 10px;
        border: none;
        color: white;
        cursor: pointer;
    }
    .button-group .print {
        background-color: #5a5a5a; /* Grey */
    }
    .button-group .send {
        background-color: #4CAF50; /* Green */
    }
</style>
</head>
<body>
<div class="form-container">
    <h2>Vendor Registration</h2>
    <p>Join us in the food festival as one of the vendor.</p>
    <form action="" method="POST">
        <label for="VendorName">Vendor's Name*</label>
        <input type="text" id="VendorName" name="VendorName" required>

        <label for="Ventype">Vendor's Type</label>
        <select id="type" name="type">
                                <option value="">Select vendor type</option>
                                <option value="Food Vendor">Food Vendor</option>
                                <option value="Merchandise Vendor">Merchandise Vendor</option>
                                <option value="Beverage vendor">Beverage vendor</option>
                                <option value="Other">Other</option>
        </select>


        <label for="address">Address*</label>
        <input type="text" id="address" name="address" placeholder="Address line" required>
        
        <label for="city">City</label>
        <input type="text" id="city" name="city">

        <label for="zip">Postal / Zip Code</label>
        <input type="text" id="zip" name="zip">

        <label for="contactName">Contact Name*</label>
        <input type="text" id="contactName" name="contactFirstName" placeholder="First" required>

        <label for="mobile">Mobile Phone*</label>
        <input type="text" id="mobile" name="mobile" required>

        <label for="email">Business Email Address</label>
        <input type="email" id="email" name="email" required>


        <label for="businessLice">Business license *</label>
        <input type="text" id="businessLice" name="businessLice" required>

        <label for="healthCertif">Health Department Certification *</label>
        <input type="text" id="healthCertif" name="healthCertif" required>

        <div class="button-group">
            <button type="submit" class="send">Send Application</button>
        </div>
    </form>
</div>

</body>
</html>