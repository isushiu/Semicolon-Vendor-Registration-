<?php
session_start();

include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $icnum = $_POST['icnum'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneNum = $_POST['phoneNum'];
}

if (!empty($icnum) && !empty($username) && !empty($password) && !empty($name) && !empty($email) && !empty($phoneNum)) {
    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO vendorsowner (CUST_IC, CUST_NAME, CUST_USERNAME, CUST_PASS, CUST_EMAIL, CUST_PNUM) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $icnum, $name, $username, $password, $email, $phoneNum);

    // Execute the query
    if ($stmt->execute()) {
        echo "<script type='text/javascript'> alert('Successfully Registered');</script>";
    } else {
        echo "<script type='text/javascript'> alert('Error: " . $stmt->error . "');</script>";
    }

    // Close the statement
    $stmt->close();
} 
?>

<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<title> Join Us </title>
    
<style>
body{
    background-image: linear-gradient(rgba(0,0,0,0.60), rgba(0,0,0,0.60)), url(makanan.jpg);
    background-position: center;
    background-size: cover;
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container{
    width: 600px;
    padding: 20px;
    background: white;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

h1{
    text-align: center;
    margin-bottom: 20px;
}

form{
    width: 100%;
}

form label{
    display: block;
    margin-top: 10px;
    font-size: 18px;
}

form input{
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid gray;
    border-radius: 6px;
    outline: none;
}

input[type="submit"], input[type="reset"]{
    width: 100%;
    padding: 10px;
    margin-top: 20px;
    border: none;
    background-color: #4CAF50;
    color: white;
    font-size: 18px;
    cursor: pointer;
    border-radius: 6px;
}

input[type="submit"], input[type="reset"]:hover{
    background-color: #45a049;
}

p{
    text-align: center;
    padding-top: 20px;
    font-size: 15px;
}

/* MENU */
header{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 20px;
}

header .navbar{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin: 0 auto;
    max-width: 1200px;
}

.navbar a{
    color: #fff;
    text-decoration: none;
}

.navbar .logo{
    color: #fff;
    font-weight: 600;
    text-decoration: none;
}

.navbar .menu-links{
    display: flex;
    list-style: none;
    gap: 40px;
}

.navbar .menu-links a{
    color:#fff;
    text-decoration: none;
    transition: 0.2s ease;
    padding: 10px 20px;
    border-radius: 30px;
}

.navbar .menu-links a:hover{
    color: #333;
    background : white;
}

.semicolon-section{
    height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,0.60), rgba(0,0,0,0.60)), url(makanan.jpg);
    background-position: center;
    background-size: cover;
    display: flex;
    align-items: center;
    padding: 0 20px;
}

.semicolon-section .content{
    max-width: 1200px;
    margin: 0 auto;
    width: 100%;
    color:#fff;
}
.semicolon-section .content h2{
    font-size: 3rem;
    max-width: 600px;
    line-height: 70px;
}

semicolon-section .content p{
    font-weight: 300;
    max-width: 600px;
    margin-top: 15px;
}

.button-link {
    display: inline-block;
    padding: 10px 20px;
    background-color: #ffffff; 
    text-decoration: none;
    border-radius: 5px;
    font-size: 16px;
    transition: background-color 0.3s ease;
    margin-top: 15px;
}

.button-link:hover {
    background-color: #4CAF50;
}
</style>  
<script>
    function redirectToIndex() {
        window.location.href = "index.php";
    }
</script>
</head>
<body>

<!--- body part start ---> 
<header>
    <nav class="navbar">
        <ul class="menu-links">
            <li><a href="index.php">Home</a></li>
        </ul>
    </nav>
</header>   
<div class="container">    
    <h1>Sign Up</h1>
    <form method="POST">
        <label for="icnum">IC Number</label> <i>(without "-")</i>
        <input type="text" name="icnum" id="icnum" autocomplete="off" required>
    
        <label for="username">Username</label>
        <input type="text" name="username" id="username" autocomplete="off" required>
    
        <label for="password">Password</label>
        <input type="password" name="password" id="password" autocomplete="off" required>
    
        <label for="name">Name</label>
        <input type="text" name="name" id="name" autocomplete="off" required>

        <label for="email">Email</label>
        <input type="text" name="email" id="email" autocomplete="off" required>

        <label for="phoneNum">Phone Number</label><i>(format : xxx-xxxxxxx)</i>
        <input type="text" name="phoneNum" id="phoneNum" autocomplete="off" required>

        <input type="reset" class="btn" name="clear" value="Reset">
        <input type="submit" class="btn" name="submit" value="Register" onclick="redirectToIndex()">
     
        <p>Already have an account? <a href="login.php">Login Here</a></p> 
  
    </form>
    
</div>
<!--- body part end--->   
</body>
</html>
