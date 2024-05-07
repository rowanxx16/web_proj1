<?php
session_start();
$mysqli = require __DIR__."/config.php";
if (isset($_SESSION["user_id"])){
    //$mysqli = require __DIR__."/config.php";
    $sql = "SELECT * FROM signup 
            WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alshrqiah Events </title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <!-- slick style for slider -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"/>
    <!-- normalize style -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- main style -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navbar -->
    <nav id="navbar">
        <div class="container">
            <i class="fa-solid fa-bars"></i>
            <a class="logo" src=""></a> 
            <ul class="ul">
                <li><a class="nav-link active" href="#home">Home</a></li>
                <li><a class="nav-link" href="#about">About</a></li>
                <li><a class="nav-link" href="#Events">Events</a></li>
                <?php if(isset($_SESSION["user_id"])) 
                        echo  '<li><a class="nav-link" href="logout.php">Logout ('.$_SESSION['username'].')</a></li>';
                    else
                        echo  '<li><a href="signup.php">Create account/Login</a></li>';   
                ?>
            </ul>
        </div>
    </nav>

    <!-- Hero -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-info">
                <h1>Welcome in <br><span>Al sharqiah season </span></br>where music, food, games and fun in one place!!</h1>
                <p>In Khobar,Dammam, and Dharan.</p>
                <a class="main-btn" href="#Events"><span>Buy ticket</span></a>
            </div>
        </div>
    </section>

    <!-- back to top -->
    <div class="main-btn top">
        <span> <i class="fa-solid fa-chevron-up"></i> </span>
    </div>

    <!-- about -->
    <section class="section services" id="about">
        <h2 class="main-title">About us</h2>
        <div class="container">
            <div class="feature">
                <div class="feature-box">
                    <i class="fa-solid fa-code"></i>
                    <h3>Rowan Mahmoud</h3>
                    <p> Networks and Communication 
                        Department <br>
                        Imam abdulrahman Bin Faisal University
                        Dhahran, Saudi Arabia
                        2210009126@iau.edu.sa</p>
                </div>
            </div>
            <div class="feature">
                <div class="feature-box">
                    <i class="fa-solid fa-code"></i>
                    <h3>Fatimah Saeed Aqaqah</h3>
                    <p> Networks and Communication Department<br>
                        Imam abdulrahman Bin Faisal University
                        Dammam, Saudi Arabia
                        2210003507@iau.edu.sa
                        </p>
                </div>
            </div>
            <div class="feature">
                <div class="feature-box">
                    <i class="fa-solid fa-code"></i>
                    <h3>Sara Khaled Alnatah</h3>
                    <p>Networks and Communication 
                        Department<br>
                        Imam abdulrahman Bin Faisal University
                        Dammam, Saudi Arabia
                        2210002870@iau.edu.sa
                        </p>
                </div>
            </div>
            <div class="feature">
                <div class="feature-box">
                    <i class="fa-solid fa-code"></i>
                    <h3>Fatimah Nizar Alfilfil</h3>
                    <p> Networks and Communication Department<br>
                        Imam abdulrahman Bin Faisal University
                        Dammam, Saudi Arabia
                        2210003088@iau.edu.sa</p>
                </div>
            </div>
            <div class="feature">
                <div class="feature-box">
                    <i class="fa-solid fa-code"></i>
                    <h3>Jana Almutairy</h3>
                    <p> Networks and Communication Department<br>
                        Imam abdulrahman Bin Faisal University
                        Dhahran, Saudi Arabia
                        21@iau.edu.sa
                        </p>
                </div>
            </div>
            <div class="feature">
                <div class="feature-box">
                    <i class="fa-solid fa-code"></i>
                    <h3>Ms.Sammar</h3>
                    <p>supervisor</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Events -->
    <section class="section portfolio" id="Events">
        <h2 class="main-title">EVENTS</h2>
        <div class="container">
            <div class="work">
                <div class="work-box">
                    <img src="images/w1.jpg" alt="">
                    <h3>Khobar corniche activities</h3>
                    <form action="confirmation.php" id="confirm1" method="POST">
                    <input type='hidden' name='event' value="Khobar corniche activities" />
                    <input type='hidden' name='eventid' value="1" />
                    <a href="#" onclick="document.getElementById('confirm1').submit();"><i class="fa-solid fa-link"></i></a>
                    </form>
                </div>
            </div>
            <div class="work">
                <div class="work-box">
                    <img src="images/w2.jpg" alt="">
                    <h3>Concerts ticket</h3>
                    <form action="confirmation.php" id="confirm2" method="POST">
                    <input type='hidden' name='event' value="Concerts ticket" />
                    <input type='hidden' name='eventid' value="2" />
                    <a href="#" onclick="document.getElementById('confirm2').submit();"><i class="fa-solid fa-link"></i></a>
                    </form>
                </div>
            </div>
            <div class="work">
                <div class="work-box">
                    <img src="images/w3.jpg" alt="">
                    <h3>Cruise trip ticket</h3>
                    <form action="confirmation.php" id="confirm3" method="POST">
                    <input type='hidden' name='event' value="Cruise trip ticket" />
                    <input type='hidden' name='eventid' value="3" />
                    <a href="#" onclick="document.getElementById('confirm3').submit();"><i class="fa-solid fa-link"></i></a>
                    </form>
                </div>
            </div>
            <div class="work">
                <div class="work-box">
                    <img src="images/w4.jpg" alt="">
                    <h3>Fireworks park ticket</h3>
                    <form action="confirmation.php" id="confirm4" method="POST">
                    <input type='hidden' name='event' value="Fireworks park ticket" />
                    <input type='hidden' name='eventid' value="4" />
                    <a href="#" onclick="document.getElementById('confirm4').submit();"><i class="fa-solid fa-link"></i></a>
                    </form>
                </div>
            </div>
            <div class="work">
                <div class="work-box">
                    <img src="images/w5.png" alt="">
                    <h3>Resorts ticket</h3>
                    <form action="confirmation.php" id="confirm5" method="POST">
                    <input type='hidden' name='event' value="Resorts ticket" />
                    <input type='hidden' name='eventid' value="5" />
                    <a href="#" onclick="document.getElementById('confirm5').submit();"><i class="fa-solid fa-link"></i></a>
                    </form>
                </div>
            </div>
            <div class="work">
                <div class="work-box">
                    <img src="images/w6.jpg" alt="">
                    <h3>Amusement park ticket</h3>
                    <form action="confirmation.php" id="confirm6" method="POST">
                    <input type='hidden' name='event' value="Amusement park ticket" />
                    <input type='hidden' name='eventid' value="6" />
                    <a href="#" onclick="document.getElementById('confirm6').submit();"><i class="fa-solid fa-link"></i></a>
                    </form>
                </div>
            </div>
        </div>
    </section> 


    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>		
    <script src="js/main.js"></script>
</body>
</html>
