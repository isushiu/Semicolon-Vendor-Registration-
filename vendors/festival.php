<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, shrink-to-fit=no, user-scalable=no">
    <title> Semicolon.com</title>

    <link rel="shortcut icon" href="../assets/images/fav.jpg">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
</head>

<!-- Include Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<style>
     /* Create two equal columns that floats next to each other */
.columnLeft {
  float: left;
  width: 25%;
  padding: 10px;
  height: 100%;
}

.columnRight {
  float: left;
  width: 70%;
  padding: 10px;
  height: 100%;
}

/**/
.containerFest {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            text-align: center;
            background: #fff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .slider {
            width: 100%;
            height: 500px;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 10px 15px rgba(0,0,0,0.2);
            position: relative;
            margin-bottom: 40px;
        }

        .slides {
            width: 500%;
            height: 100%;
            display: flex;
        }

        .slides input {
            display: none;
        }

        .slide {
            width: 20%;
            transition: 0.6s ease;
            opacity: 0.8;
        }

        .slide img {
            width: 100%;
            height: 100%;
            border-radius: 15px;
            filter: brightness(0.9);
            transition: transform 0.5s ease;
        }

        .slide:hover img {
            transform: scale(1.05);
        }

        .navigation-manual {
            position: absolute;
            width: 100%;
            margin-top: -45px;
            display: flex;
            justify-content: center;
        }

        .manual-btn {
            border: 2px solid #fff;
            padding: 5px;
            border-radius: 50%;
            cursor: pointer;
            transition: 1s;
        }

        .manual-btn:not(:last-child) {
            margin-right: 20px;
        }

        .manual-btn:hover {
            background: #fff;
        }

        #radio1:checked ~ .first {
            margin-left: 0;
        }

        #radio2:checked ~ .first {
            margin-left: -20%;
        }

        #radio3:checked ~ .first {
            margin-left: -40%;
        }

        #radio4:checked ~ .first {
            margin-left: -60%;
        }

        .navigation-auto {
            position: absolute;
            display: flex;
            width: 100%;
            justify-content: center;
            margin-top: 460px;
        }

        .navigation-auto div {
            border: 2px solid #fff;
            padding: 5px;
            border-radius: 50%;
            transition: 1s;
        }

        .navigation-auto div:not(:last-child) {
            margin-right: 20px;
        }

        #radio1:checked ~ .navigation-auto .auto-btn1 {
            background: #fff;
        }

        #radio2:checked ~ .navigation-auto .auto-btn2 {
            background: #fff;
        }

        #radio3:checked ~ .navigation-auto .auto-btn3 {
            background: #fff;
        }

        #radio4:checked ~ .navigation-auto .auto-btn4 {
            background: #fff;
        }

        @keyframes fade {
            0% { opacity: 0.4 }
            100% { opacity: 1 }
        }

        .slide {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        .description {
            margin: 40px 0;
            text-align: left;
            animation: fadeIn 2s ease-in-out;
        }

        .description h2 {
            font-size: 2em;
            margin-bottom: 10px;
            color: #f5576c;
        }

        .description p {
            font-size: 1.1em;
            line-height: 1.6;
            color: #666;
        }

        .footer {
            width: 100%;
            padding: 20px;
            text-align: center;
            background: #222;
            color: #fff;
            border-top: 2px solid #f5576c;
            margin-top: 40px;
        }

        .footer p {
            font-size: 1em;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
</style>

<body>

    <!--####################### MENU FILE ###################-->
    <?php include 'menuVendor.php'?>

     <!--  ************************* BODY PAGE ************************** -->
     <div class="page-nav no-margin row">
            <div class="container">
                <div class="row">
                    <h2>Festival</h2>
                    <ul>
                        <li> <a href="homeVendor.php"><i class="fas fa-home"></i> Home</a></li>
                        <li><i class="fas fa-angle-double-right"></i>Festival</li>
                    </ul>
                </div>
            </div>
    </div>

    <div class="row">
        <div class="columnLeft">
          <br><br>
          <img src="../assets/images/banner.png" alt="banner" style="width:90%" class="center">
    </div>
            
            
    <div class="columnRight">
    <div class="containerFest">
        <div class="header">
            <h1>Food Festival Gallery</h1>
            <p>Relive the amazing moments from our past food festival events</p>
        </div>
        <div class="slider">
            <div class="slides">
                <!-- Radio buttons for navigation -->
                <input type="radio" name="radio-btn" id="radio1" checked>
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <!-- Slide images -->
                <div class="slide first">
                    <img src="../assets/images/image1.png" alt="Food Festival Image 1">
                </div>
                <div class="slide">
                    <img src="../assets/images/image2.png" alt="Food Festival Image 2">
                </div>
                <div class="slide">
                    <img src="../assets/images/image3.png" alt="Food Festival Image 3">
                </div>
                <div class="slide">
                    <img src="../assets/images/image4.png" alt="Food Festival Image 4">
                </div>
                <!-- Automatic navigation -->
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>
                <!-- Manual navigation -->
                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                </div>
            </div>
        </div>
        <div class="description">
            <h2>About the Event</h2>
            <p>
                Our company SemicolonTech Food Festival brings together food enthusiasts from all over the world to celebrate the rich diversity of culinary traditions. The event features an array of food stalls, cooking demonstrations, and tasting sessions that showcase the talents of local and international chefs. Attendees have the opportunity to sample a variety of dishes, ranging from traditional recipes to innovative culinary creations.
            </p>
            <p>
                The SemicolonTech Food Festival was a resounding success, with over 50,000 visitors enjoying the vibrant atmosphere, delicious food, and live entertainment. Highlights included the street food section, where vendors served up mouth-watering snacks, and the cooking competition, where chefs battled it out to win the coveted title of Festival Champion. The event also featured workshops and seminars on sustainable cooking practices and the latest food trends.
            </p>
            <p>
                We look forward to welcoming you to our next Food Festival, where you can immerse yourself in a world of flavors and culinary experiences. Stay tuned for more updates and details about upcoming events.
            </p>
        </div>
    </div>
    <script>
        let counter = 1;
        setInterval(function(){
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if(counter > 4){
                counter = 1;
            }
        }, 5000);
    </script>
    </div>

      </div>
    </div>

</body>
<!--####################### FOOTER FILE ###################-->

</html>