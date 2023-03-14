<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

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
 
<!-- home section starts -->
<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">

            <div class="swiper-slide" style="background:url(../images/location_pic-5.jpg)" no-repeat>
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>Start traveling in country of joy, India</h3>
                    <a href="package.php" class="btn"> Discover More </a>
                </div>
            </div>

            <div class="swiper-slide" style="background:url(../images/location_pic-4.jpg)" no-repeat>
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>Take your Adventure to next level </h3>
                    <a href="package.php" class="btn"> Discover More </a>
                </div>
            </div>

            <div class="swiper-slide" style="background:url(../images/location_pic-3.jpg)" no-repeat>
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>Discover new places</h3>
                    <a href="package.php" class="btn"> Discover More </a>
                </div>
            </div>

            <div class="swiper-slide" style="background:url(../images/location_pic-6.jpg)" no-repeat>
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>Make your tour worthwhile</h3>
                    <a href="package.php" class="btn"> Discover More </a>
                </div>
            </div>

            <div class="swiper-slide" style="background:url(../images/location_pic-7.jpg)" no-repeat>
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>Experience love and joy like never before</h3>
                    <a href="package.php" class="btn"> Discover More </a>
                </div>
            </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>
</section>
<!-- home section ends -->

<!--service section starts -->

<section class="services">
    <h1 class="heading-title"> Our services </h1>
    <div class="box-container">

        <div class="box">
            <img src="../images/sign.png" alt="" height="150px">
            <h3>adventure</h3>
        </div>
        
        <div class="box">
            <img src="../images/tour-guide.png" alt="" height="150px">
            <h3>tour guide</h3>
        </div>

        <div class="box">
            <img src="../images/hiking.png" alt="" height="150px">
            <h3>trekking</h3>
        </div>

        <div class="box">
            <img src="../images/camp fire.png" alt="" height="150px">
            <h3>camp fire</h3>
        </div>

        <div class="box">
            <img src="../images/off road.png" alt="" height="150px">
            <h3>off road </h3>
        </div>

        <div class="box">
            <img src="../images/camping.png" alt="" height="150px">
            <h3>camping</h3>
        </div>
    </div>
</section>

<!--service section ends -->


<!-- home about section starts -->
<section class="home-about">
    <div class="image">
       <img src="../images/me_pic.jpg" alt=""> 
    </div>

    <div class="content">  
        <h3>About us</h3>
        <p> TravelBliss has been focused on bringing our customers the best in esteem and quality travel game plans. A solid and “believed” travel brand of India, our qualities incorporate a vast and faithful client base, a multi-channel stage for relaxation and business explorers, and a powerful portable eco-framework for a range of voyagers and providers.</p>
        <a href="about.php" class="btn">Read more</a>
    </div>
    
</section>
<!-- home about section ends -->

<!-- home packages section starts -->
<section class="home-packages">
    <h1 class="heading-title">Our Special packages</h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="../images/badrinathimg.jpg" alt="">
            </div>
            <div class="content">
                <h3>Badrinath Temple</h3>
                <p>Badrinath Or Badrinarayana Temple Is A Hindu Temple Dedicated To Vishnu. It Is Situated In The Town Of Badrinath In Uttarakhand, India.It Is One Of The Char Dham Pilgrimage Sites.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
        
        <div class="box">
            <div class="image">
                <img src="../images/dwarkadheeshimg.jpg" alt="">
            </div>
            <div class="content">
                <h3>Dwarkadheesh Temple</h3>
                <p>The Dwarkadhish Temple Or Jagat Mandir And Occasionally Spelled Dwarakadheesh, Is A Hindu Temple Dedicated To Krishna He Temple Is Located At Dwarka City Of Gujarat, India</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
        
        <div class="box">
            <div class="image">
                <img src="../images/ramanathaswamy.jpg" alt="">
            </div>
            <div class="content">
                <h3>Rameshwaram Temple</h3>
                <p>Ramanathaswamy Temple Is A Hindu Temple Dedicated To The God Shiva Located On Rameswaram Island In The State Of Tamil Nadu, India. It Is Also One Of The Twelve Jyotirlinga Temples</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="../images/jagannath img22.jpg" alt="">
            </div>
            <div class="content">
                <h3>Jagannath Temple</h3>
                <p>The Jagannath Temple Is An Important Hindu Temple Dedicated To Jagannath, A Form Of Vishnu. It Is Situated In The Puri In Orissa, India.It Is One Of The Char Dham Pilgrimage Sites.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="load-more"> <a href="package.php" class="btn"> load more </a></div>

    </div>
</section>
<!-- home packages section ends -->

<!-- home offer section starts -->
<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>We are offering you the chance to travel to all of your favorite destination. Get upto 50% discount on any of the above special destination booking. </p>
        <a href="book.php" class="btn">book now</a>
    </div>
</section>
<!-- home offer section ends -->















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