<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="dance.css">
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
                    <h1>This Is The Dance Competition I Participated In</h1>
                    <p>When I was young, I loved to dance, and my friends and I used to participate in events to dance. When I was in high school and college, I also participated in dance competitions like hip-hop and cheerdance at our school. When I was in high school, we won the first runner-up in the hip-hop dance competition and became third runner-up in the cheerdance dance competition (as far as I know).
                        When I was in my first year of college, I was also one of the choreographers for our cheerdance competition, and we won 2nd runner-up.
                        </p>
                    
                    <a class="btn" href="https://forms.gle/atAzXF5cuzgkdn1G9" target="_blank">Dance Together?</a>
                </div>

                <div class="slideshow-container">
                    <img src="cdance.jpg" alt="" class="mySlides">
                    <img src="cheerdance.jpg" alt="" class="mySlides">
                    <img src="hiphop.jpg" alt="" class="mySlides">
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
    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            const slides = document.getElementsByClassName("mySlides");

            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            slideIndex++;

            if (slideIndex > slides.length) {
                slideIndex = 1;
            }

            slides[slideIndex - 1].style.display = "block";

            setTimeout(showSlides, 2000); // Change slide every 2 seconds
        }
    </script>
</body>
</html>
</body>
</html>