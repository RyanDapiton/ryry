<?
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome-free-6.1.2-web/css/all.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <nav>
                <a href="#" class="logo">
                    <img src="logooo.png" alt="mylogo">
                  </a>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="dance.php">Dance</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
            <div class="contains">

                <div class="section-1">
                    <h1>Hi, I'am Ryan</h1>
                    <h3>Dancer</h3>
                    <p>Hey, Fellow Dance Enthusiasts! I'm Ryan Dapiton, A Student By Day, And A Dance Enthusiast 24/7. Welcome To My Corner Of The Web, Where The Rhythm Meets The Books, And The Dance Floor Is My Second Home.
                        Dance On.
                        <br><br>♡Ryan Dapiton♡</p>
                    <a class="btn" href="https://forms.gle/atAzXF5cuzgkdn1G9" target="_blank">Dance Together?</a>
                </div>
                <div class="section-2">
                    <img src="weew1.png" alt="">
                </div>

                <div class="section-3">
                    <a href="https://www.facebook.com/RDaps00" target="_blank">
                        <i class="fab fa-facebook-square"></i>
                      </a>
                    <a href="https://twitter.com/Astarina00" target="_blank">
                        <i class="fa-brands fa-twitter"></i></a>
                    <a href="https://www.instagram.com/m1ss_astarina/" target="_blank">
                        <i class="fa-brands fa-instagram"></i></a>
                </div>

            </div>
        </div>
    </div>
</body>