<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title> SEMICOLON Sdn Bhd </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- LIBRARY FOR ICON -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!---Boxicons-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
    }

    body{
        height: 100vh;
        background: linear-gradient(rgba(0,0,0,0.60), rgba(0,0,0,0.60)), url(makanan.jpg);
        background-position: center;
        background-size: cover;
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
        font-size: 2.1rem;
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
        display: flex;
        align-items: center;
        padding: 0 20px;
    }

    .semicolon-section .content{
        max-width: 1200px;
        margin: 0 auto;
        width: 100%;
        color: #fff;
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

    #menu-btn{
        color: #fff;
        cursor: pointer;
        display: none;
        font-size: 24px;
    }

    #close-menu-btn{
        color: #fff;
        right: 20px;
        position: absolute;
        top: 30px;
        cursor: pointer;
        font-size: 24px;
        display: none;
    }

    @media screen and (max-width: 900px){
        header{
            padding: 10px 20px;
        }
        header.show-mobile-menu::before{
            content: "";
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            backdrop-filter: blur(3.5px);
        }

        #close-menu-btn, #menu-btn{
            display: block;
        }

        .navbar .menu-links {
            position: fixed;
            left: -260px;
            top: 0;
            flex-direction: column;
            width: 260px;
            height: 100vh;
            background: #234F1E;
            padding: 70px 40px 0;
            transition: left 0.15s ease;
        }

        header.show-mobile-menu .navbar .menu-links{
            left: 0;
        }

        .navbar a{
            color: #555;
        }

        .semicolon-section .content{
            text-align: center;
        }

        .semicolon-section .content:is(h2, p){
            max-width: 100%;
        }

        .semicolon-section .content h2{
            font-size: 2.3rem;
            line-height: 60px;
        }

        .semicolon-section .content button-link{
            padding: 9px 18px;
        }
    }
    </style>
</head>

<body> 
    <header>
        <nav class="navbar">
            <a class="logo" href="index.php"><img src="logo.png" alt="Logo" class="png" style="width: 150px;"></a>
            <ul class="menu-links">
            <span id="close-menu-btn"><i class='bx bx-x' ></i></span>
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Festival</a></li>
                <li><a href="login.php">Contact Us</a></li>
                <li><a href="login.php">Log in</a></li>
            </ul>
            <span id="menu-btn"><i class='bx bx-menu'></i></span>
        </nav>
    </header>

    <section class="semicolon-section">
        <div class="content">
            <h2>Semicolon Tech™</h2>
            <p>Your Ultimate Food Festival Partner<br><br>Semicolon Tech™ offers a seamless online platform where vendors can easily rent spaces for food festivals.<br>
                Join us and elevate your festival presence with Semicolon Tech™!
            </p>
            <a href="join us.php" class="button-link">Join Us!</a>
        </div>
    </section>

    <script>
        const header = document.querySelector("header");
        const menuBtn = document.querySelector("#menu-btn");
        const closeMenuBtn = document.querySelector("#close-menu-btn");

        //toggle mobile menu on menu button click
        menuBtn.addEventListener("click", () => {
            header.classList.toggle("show-mobile-menu");
        });

        //close mobile menu on menu button click
        closeMenuBtn.addEventListener("click", () => {
            menuBtn.click();
        });
    </script>
</body>
</html>