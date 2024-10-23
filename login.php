<?php
session_start();
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $type = $_POST['type'];

    if (!empty($username) && !empty($password) && !empty($type)) {
        if ($type == "administrator") {
            // Check in the admin table
            $query = "SELECT * FROM admin WHERE Admin_Username = '$username' LIMIT 1";
            $result = mysqli_query($conn, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['Admin_Password'] == $password) {
                    header("Location: AdminDashboard/admin/index.php"); // Redirect to admin page
                    die;
                } else {
                    echo "<script type='text/javascript'> alert('Incorrect password for admin.');</script>";
                }
            } else {
                echo "<script type='text/javascript'> alert('Admin username not found.');</script>";
            }
        } else {
            // Check in the registration table
            $query = "SELECT * FROM vendorsowner WHERE CUST_USERNAME = '$username' LIMIT 1";
            $result = mysqli_query($conn, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['CUST_PASS'] == $password) {
                    header("Location: vendors/homeVendor.php"); // Redirect to customer page
                    die;
                } else {
                    echo "<script type='text/javascript'> alert('Incorrect password for customer.');</script>";
                }
            } else {
                echo "<script type='text/javascript'> alert('Customer username not found.');</script>";
            }
        }
    } else {
        echo "<script type='text/javascript'> alert('Please fill in all fields.');</script>";
    }
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Join Us</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-image: linear-gradient(rgba(0,0,0,0.60), rgba(0,0,0,0.60)), url(makanan.jpg);
            background-position: center;
            background-size: cover;
        }

        .radio {
            font-size: 20px;
            font-weight: 500;
            text-transform: capitalize;
            display: inline-block;
            vertical-align: middle;
            position: relative;
            padding-left: 30px;
            cursor: pointer;
            gap: 20px;
            justify-content: center;
        }

        .radio + .radio {
            margin-left: 20px;
        }

        .radio input[type="radio"] {
            display: none;
        }

        .radio span {
            height: 15px;
            width: 15px;
            border-radius: 50%;
            border: 3px solid #4CAF50;
            display: block;
            position: absolute;
            left: 0;
            top: 0;
        }

        .radio span:after {
            content: "";
            height: 8px;
            width: 8px;
            background: #4CAF50;
            display: block;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%) scale(0);
            border-radius: 50%;
            transition: 300ms, ease-in-out, 0s;
        }

        .radio input[type="radio"]:checked ~ span:after {
            transform: translate(-50%, -50%) scale(1);
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 320px;
            padding: 20px;
            background: white;
            border: 2px solid white;
            border-radius: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            margin: 0 auto;
        }

        .wrapper h3 {
            font-size: 36px;
            text-align: center;
        }

        .wrapper .input-box {
            position: relative;
            width: 100%;
            height: 50px;
            margin: 30px 0;
        }

        .input-box input {
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            border: 2px solid rgba(52, 50, 50, 0.2);
            border-radius: 40px;
            font-size: 16px;
            color: #2e2b2b;
            padding: 20px 45px 20px 20px;
        }

        .input-box input::placeholder {
            color: rgb(162, 158, 158);
        }

        .input-box i {
            position: absolute;
            right: 20px;
            top: 15px;
            transform: translate(-50%);
            font-size: 20px;
        }

        .wrapper .btn {
            width: 100%;
            height: 45px;
            background: #4CAF50;
            border: none;
            outline: none;
            border-radius: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
            cursor: pointer;
            font-size: 16px;
            color: white;
            font-weight: 600;
            margin-top: 10px;
        }

        .wrapper .register-link {
            font-size: 14.5px;
            text-align: center;
            margin: 20px 0 15px;
        }

        .register-link p a {
            color: black;
            text-decoration: none;
            font-weight: bold;
        }

        .register-link p a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    
    <header>
        <div class="wrapper">
            <form method="POST">
                <h3>Login</h3>
                <label class="radio">
                    <input type="radio" value="administrator" name="type">
                    Admin
                    <span></span>
                </label>
                <label class="radio">
                    <input type="radio" value="customer" name="type">
                    Customer
                    <span></span>
                </label>

                <div class="input-box">
                    <input type="text" placeholder="Username" name="username" required>
                    <i class='bx bxs-user'></i>
                </div>

                <div class="input-box">
                    <input type="password" placeholder="Password" name="password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>

                <button type="submit" class="btn">Login</button>
                <div class="register-link">
                    <p>Don't have an account? <a href="join us.php"> Register</a></p>
                </div>
            </form>
        </div>
    </header>
</body>
</html>
