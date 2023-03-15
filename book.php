<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>

    <!-- custom swiper file link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- header starts -->
<section class="header">
    <a href="home.php" class="logo">TravelBliss</a>

    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="package.php">package</a>
        <a href="book.php">Book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>
<!-- header ends -->

<div class="heading" style="background:url(.//images/book_image.jpg)">
   <h1 class="ss">book now</h1>
</div>

<!-- booking section starts -->
<section class="booking">
    <h1 class="heading-title">book your trip!</h1>

    <form action="book_form.php" method="post" class="book-form"> 

    <div class="flex">
        <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
        </div>

        <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
        </div>

        <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your phone number" name="phone">
        </div>

        <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
        </div>

        <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="place you want to visit" name="location">
        </div>

        <div class="inputBox">
            <span>number of travellers :</span>
            <input type="number" placeholder="number of guests" name="guests">
        </div>

        <div class="inputBox">
            <span>arrival :</span>
            <input type="date" name="arrival">
        </div>

        <div class="inputBox">
            <span>departure :</span>
            <input type="date" name="departure">
        </div>
    </div>
    <input type="submit" value="submit" class="btn" name="send">
    <input type="reset" value="reset" class="btn" name="reset">
    </form>
</section>
<!-- booking section ends -->














<!-- footer section -->
<section class="footer">
    <div class="box-container">
        <div class="box">
        <h3> Quick Links </h3>
        <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
        <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
        <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
        <a href="book.php"> <i class="fas fa-angle-right"></i> Book</a>
        </div>

        <div class="box">
        <h3> Extra Links </h3>
        <a href="#"> <i class="fas fa-angle-right"></i>Ask Questions</a>
        <a href="#"> <i class="fas fa-angle-right"></i>About Us</a>
        <a href="#"> <i class="fas fa-angle-right"></i>Privacy Policy</a>
        <a href="#"> <i class="fas fa-angle-right"></i>Terms Of Conditions</a>
        </div>

        <div class="box">
        <h3> Contact Details </h3>
        <a href="#"> <i class="fas fa-phone"></i> +987-456-3210 </a>
        <a href="#"> <i class="fas fa-phone"></i> +951-230-7846 </a>
        <a href="mailto: ankursingh759@gmail.com"> <i class="fas fa-envelope"></i> ankursingh759@gmail.com </a>
        <a href="#"> <i class="fas fa-map"></i> Greater Noida, UP, India, 201308 </a>
        </div>
        <div class="box">
            <h3>Follow Us</h3>
            <a href="https://www.linkedin.com/in/ankur-singh-541b99255/" target="_blank" > <i class="fab fa-linkedin"></i> LinkedIn </a>
            <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
            <a href="#"> <i class="fab fa-facebook"></i> Facebook </a>
            <a href="https://github.com/Indominous1" target="_blank" > <i class="fab fa-github"></i> Github </a>
        </div>
    </div>

    <div class="credit">Created by <span>Ankur Singh</span> <div class="far fa-copyright"></div> all rights reserved!
    </div>
</section>
<!-- footer ends -->

<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="script.js"></script>
</body>
</html>