<?
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="logins.css">
</head>
<body>
    <body class="d-flex align-items-center min-vh-100">
    <div class="container mx-auto">
        <?php
            if(isset ($_POST["login"])){
                $Email = $_POST["Email"];
                $password = $_POST["Password"];
                require_once "database.php";
                $sql = "SELECT * FROM user WHERE email = '$Email'";
                $result = mysqli_query($conn, $sql);
                $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                if ($user) {
                    if(password_verify($password, $user["Password"])) {
                        $_SESSION["user"] = "yes";
                        header("Location: index.php");
                        die();
                    } else {
                        echo "<div class= 'alert alert-danger'> Password does not match </div>";
                    }
                
                }else{
                    echo "<div class= 'alert alert-danger'> Email does not match </div>";
                    
                }

            }

        ?>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="Email">Email:</label>
                <input type="Email" name="Email" class= "form-control" placeholder="Enter your email" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="Password" class= "form-control" placeholder="Enter your password" required>
            </div>

            <div class="button">
                <input type="submit" value="Login" name="login" class="btn btn-primary">
            </div>

</form>
          <br>  <div><p>Not Registered yet? <a href="register.php"> Register Here</a></div>
</div>  
</body>
</html>