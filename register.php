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
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="registers.css">
</head>

<body>
    <div class="container">
    <?php
            $host = 'localhost'; // Change this if your MySQL server is hosted elsewhere
            $username = 'root';
            $password = '';
            $database = 'login_registers';
            
            // Establish a connection to the database
            $conn = new mysqli($host, $username, $password, $database);

                // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $errors = array();
            if(isset($_POST["submit"])){

            $FirstName = $_POST["FirstName"];
            $LastName = $_POST["LastName"];
            $LotBlk = $_POST["LotBlock"];
            $Street= $_POST["Street"];
            $Barangay= $_POST["Barangay"];
            $CityMunicipality= $_POST["CityMunicipality"];
            $Province= $_POST["Province"];
            $Country= $_POST["Country"];
            $Contact= $_POST["ContactNumber"];
            $Email = $_POST["Email"];
            $password = $_POST["Password"];
            $RepeatPassword = $_POST["RepeatPassword"];
            $errors = array();
            $passwordHash = password_hash($password, PASSWORD_DEFAULT); // Hash the password

            // validate if all fields are empty
            if (empty($LastName) || empty($FirstName) || empty($LotBlk) || empty($Street) || empty($Barangay) || empty($CityMunicipality) || empty($Province) || empty($Contact) || empty($Email) || empty($password) || empty($RepeatPassword)) {
                array_push($errors,"All fields are required");
            }
            // validate if the email is not validated
            if (!filter_var($Email,FILTER_VALIDATE_EMAIL)){
                array_push($errors,"Email is not valid");
            }
            // password should not be less than 8
            if (strlen($password) < 8) {
                array_push($errors,"Password must be at least 8 characters long");
            }
            // check if password is the same
            if ($password != $RepeatPassword){
                array_push($errors,"Password does not match");

            if (!empty($errors)) {
            echo '<script>alert("' . implode('\n', $errors) . '");</script>';
        }

            }

            if (count($errors) > 0){
                foreach($errors as $error) {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            } else {
                $sql = "INSERT INTO user (First_Name, Last_Name, Lot_Blk, Street, Barangay, City_Municipality, Province, Country, Contact_number, Email, Password, Repeat_Password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                $preparestmt = mysqli_stmt_prepare($stmt, $sql);
                if ($preparestmt) {
                    mysqli_stmt_bind_param($stmt, "ssssssssssss", $LastName, $FirstName, $LotBlk, $Street, $Barangay, $CityMunicipality, $Province, $Country, $Contact, $Email, $passwordHash, $RepeatPassword);
                    mysqli_stmt_execute($stmt);
                    // Display success message as alert box using JavaScript
                    echo '<script>alert("You are registered successfully!");</script>';
                } else {
                    // Display error message as alert box using JavaScript
                    echo '<script>alert("Something went wrong!");</script>';
                }
            }
            

            // Close connection
            mysqli_close($conn);
        }
        ?>
        <form action="register.php" method="post">
            <div class="form-group">
                <label for="FirstName">First Name:</label>
                <input type="text" class="form-control" name="FirstName" id="FirstName" placeholder="Enter your first name" required>
            </div>
            <div class="form-group">
                <label for="LastName">Last Name:</label>
                <input type="text" class="form-control" name="LastName" id="LastName" placeholder="Enter your last name" required>
            </div>
            <div class="input-group md-6">
            <div class="form-group">
                <label for="LotBlock">Lot/Blk:</label>
                <input type="text" class="form-control" name="LotBlock" id="LotBlock" placeholder="Enter your lot/block">
            </div>
            <div class="form-group">
                <label for="Street">Street:</label>
                <input type="text" class="form-control" name="Street" id="Street" placeholder="Enter your street">
            </div>
            <div class="form-group">
                <label for="Barangay">Barangay:</label>
                <input type="text" class="form-control" name="Barangay" id="Barangay" placeholder="Enter your barangay">
            </div>
            <div class="form-group">
                <label for="CityMunicipality">City/Municipality:</label>
                <input type="text" class="form-control" name="CityMunicipality" id="CityMunicipality" placeholder="Enter your city/municipality">
            </div>
            <div class="form-group">
                <label for="Province">Province:</label>
                <input type="text" class="form-control" name="Province" id="Province" placeholder="Enter your province">
            </div>
            <div class="form-group">
                <label for="Country">Country:</label>
                <select tye="" class="form-control" name="Country" id="Country" placeholder="your country">
                <option value="Country">Your Country</option><hr>
<option value="argentina">Argentina</option><hr>
<option value="australia">Australia</option><hr>
<option value="austria">Austria</option><hr>
<option value="bangladesh">Bangladesh</option><hr>
<option value="belgium">Belgium</option><hr>
<option value="brazil">Brazil</option><hr>
<option value="canada">Canada</option><hr>
<option value="china">China</option><hr>
<option value="denmark">Denmark</option><hr>
<option value="egypt">Egypt</option><hr>
<option value="finland">Finland</option><hr>
<option value="france">France</option><hr>
<option value="germany">Germany</option><hr>
<option value="greece">Greece</option><hr>
<option value="iceland">Iceland</option><hr>
<option value="india">India</option><hr>
<option value="indonesia">Indonesia</option><hr>
<option value="iran">Iran</option><hr>
<option value="iraq">Iraq</option><hr>
<option value="italy">Italy</option><hr>
<option value="japan">Japan</option><hr>
<option value="kazakhstan">Kazakhstan</option><hr>
<option value="kenya">Kenya</option><hr>
<option value="malaysia">Malaysia</option><hr>
<option value="mexico">Mexico</option><hr>
<option value="mongolia">Mongolia</option><hr>
<option value="netherlands">Netherlands</option><hr>
<option value="nigeria">Nigeria</option><hr>
<option value="norway">Norway</option><hr>
<option value="pakistan">Pakistan</option><hr>
<option value="philippines">Philippines</option><hr>
<option value="poland">Poland</option><hr>
<option value="portugal">Portugal</option><hr>
<option value="russia">Russia</option><hr>
<option value="saudi-arabia">Saudi Arabia</option><hr>
<option value="singapore">Singapore</option><hr>
<option value="south-africa">South Africa</option><hr>
<option value="south-korea">South Korea</option><hr>
<option value="spain">Spain</option><hr>
<option value="sweden">Sweden</option><hr>
<option value="switzerland">Switzerland</option><hr>
<option value="thailand">Thailand</option><hr>
<option value="turkey">Turkey</option><hr>
<option value="ukraine">Ukraine</option><hr>
<option value="uae">United Arab Emirates</option><hr>
<option value="uk">United Kingdom</option><hr>
<option value="usa">United States</option>
</select>
                    <!-- Add more countries as needed -->
                </select>
            </div>
            <div class="form-group">
                <label for="ContactNumber">Contact Number:</label>
                <div class="input-group">
                <div class="input-group">
    </div>
                    
                    <input type="text" class="form-control" name="ContactNumber" id="ContactNumber" placeholder="Enter your contact number">
                </div>
            </div>
            <div class="form-group">
                <label for="Email">Email:</label>
                <input type="email" class="form-control" name="Email" id="Email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="Password">Password:</label>
                <input type="password" class="form-control" name="Password" id="Password" placeholder="Enter your password" required>
            </div>
            <div class="form-group">
                <label for="RepeatPassword">Repeat Password:</label>
                <input type="password" class="form-control" name="RepeatPassword" id="RepeatPassword" placeholder="Repeat your password" required>
            </div>
    </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit" value="Register">
            </div>
        </form>
        <div>
            <p>Already registered? <a href="login.php"> Login Here</a></p>
        </div>
    </div>
</body>

</html>
