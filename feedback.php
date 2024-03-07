<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>My Website</title>
    <link rel="stylesheet" href="feedback.css">
    <link rel="stylesheet" href="fontawesome-free-6.1.2-web/css/all.css">
</head>
<body>
    <div class="contact-container">
        <form action="https://api.web3forms.com/submit" method="POST" class="contact-left">
            <div class="contact-left-title">
                <h2>Your Feedback</h2>
                <hr>
            </div>
            <input type="hidden" name="access_key" value="295c738f-b69d-4815-af11-3d556e89a6c3">
            <input type="text" name="name" placeholder="Your Name" class="contact-inputs" required>
            <input type="email" name="email" placeholder="Your Email" class="contact-inputs" required>
            <textarea name="message" placeholder="Your Message" class="contact-inputs" required></textarea>
            <button type="submit">Submit<img src="arrow_icon.png" alt=""></button>
            <a href="index.php" class="back-button"> Back <img src="arrow_icon.png" alt="" class="back"></a>
        </form>
    <div class="contact-right">
            <img src="ca11.png" alt="">
    </div>
</div>

</body>
</html>