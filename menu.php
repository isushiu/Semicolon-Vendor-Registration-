<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title> SEMICOLON Sdn Bhd </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- LIBRARY FOR ICON -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
    
}

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
</head>

<body> 
    <header>
        <nav class="navbar">
            <a class="logo" href="#"><img src="logo.png" alt="Logo" class="png" style="width: 150px;"></a>
            <ul class="menu-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Festival</a></li>
                <li><a href="login.php">Contact Us</a></li>
                <li><a href="login.php">Log in</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>