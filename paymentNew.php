<?php 

session_start();

require "./admin_dashboard/db/db.php";;

$classNo = $multiplier = "";

$class = $_SESSION['class'];
$price = $_SESSION['price'];

$qur1 = "SELECT * FROM class WHERE ClassType = '$class';";

$result = $conn -> query($qur1);

while($row = $result->fetch_assoc()){
    $classNo = $row['ClassNo'];
    $multiplier = $row['Multiplier'];
}

$totalPrice = $price * $multiplier;

$_SESSION['totalPrice'] = $totalPrice;
$_SESSION['classNo'] = $classNo;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Style Sheet -->
    <link rel="stylesheet" href="styles/payment.css">

    <!-- Font Awesome  -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script src="https://kit.fontawesome.com/38f42574c5.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet" />

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>

<body>
    <nav>
        <div class="top-logo">
          <img
            src="images/logo_with_txt.png"
            height="66px"
            style="margin-top: 20px; margin-left: 10px"
          />
        </div>
        <div class="topnav">
          <a href="./index.php">Home</a>
          <a href="./book.php">Book</a>
          <a href="./manage.php">Manage</a>
          <a href="./wherewefly.php">Where we fly</a>
          <a href="./destinations.php">Best Destinations</a>
          <a href="./contact.php">Contact Us</a>
          <a href="./newlogin.php" style="margin-left: 75px; margin-right: 150px"
            >Login | Sign up</a
          >
        </div>
      </nav>
    <div class="main-container">
        <h1>Payments</h1>
        <div class="container" id="container">
            <div class="form-container sign-in-container">
                <h4>Tokyo, Japan</h4>
                <form action="#">
                    <h3>To pay</h3>
                    <h1>LKR <?php echo $totalPrice ?></h1>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-right">

                        <form action="payconfirm.php" method="post">
                          <label for="ccn"> Card Number</label>
                          <input id="ccn" name="card_number" type="tel" inputmode="numeric" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx">

                            <label for="method">Enter card type :</label>
                            <select name="method" id="method">
                                <option value="Visa">Visa Card</option>
                                <option value="Master">Master Card</option>
                            </select>
                            <label for="Expiration"> Expiration </label>
                            <input type="Date" name="expiry_date"  placeholder="Month" />

                            <label for="cvv">CVV:</label>
                            <input type="text" id="cvv" name="cvv" required><br>
                            <input style="cursor: pointer; color: #fff; background-color: #5f3dc4; width: 148px" type="submit" name="submit" value="Submit Payment">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-distributed">

      <div class="footer-left">
  
        <h3>Nova Airways</h3>
  
        <p class="footer-links">
            <a href="./index.php">Home</a>
            <a href="./book.php">Book</a>
            <a href="./manage.php">Manage</a>
            <a href="./wherewefly.php">Where we fly</a>
            <a href="./destinations.php">Best Destinations</a>
            <a href="./contact.php">Contact Us</a>
        </p>
  
        <p class="footer-company-name">Nova Airways © 2023</p>
      </div>
  
      <div class="footer-center">
  
        <div>
          <i class="fa fa-map-marker"></i>
          <p>Katunayake, Sri Lanka</p>
        </div>
  
        <div>
          <i class="fa fa-phone"></i>
          <p>+94 11 223 3118</p>
        </div>
        
  
        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:novaairways@company.com">novaairways@company.com</a></p>
        </div>
      </div>
  
      <div class="footer-right">
        <p class="footer-company-about">
          <span>About the company</span>
          Soaring to new heights, we offer exceptional service, unmatched comfort, and seamless travel experiences. Fly with us today!
        </p>
        <div>
          <i class="social-icon fab fa-facebook-f"></i>
          <i class="social-icon fab fa-twitter"></i>
          <i class="social-icon fab fa-instagram"></i>
          <i class="social-icon fas fa-envelope"></i>
        </div>
      </div>
    </footer>
</body>

</html>