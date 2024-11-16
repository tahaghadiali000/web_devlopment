<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- swiper css link -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <!-- header section starts here -->
    <section class="header">
    <a href="home.php" class="logo">travelO</a>

    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="package.php">Package</a>
        <a href="login.php">Login</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    <!-- header section ends here -->

    <!-- home section starts here -->

    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(imageslide1.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel around the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(imageslide2.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>discover the new places</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(imageslide3.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>make your tour worthwhile</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

    <!-- home section ends here -->

    <!-- services section starts here -->

    <section class="services">
        <h1 class="heading-title"> our services </h1>

        <div class="box-container">
            <div class="box">
                <img src="adventure.png" alt="adventure icon">
                <h3>adventure</h3>
            </div>

            <div class="box">
                <img src="location.png" alt="map icon" >
                <h3>tour guide</h3>
            </div>

            <div class="box">
                <img src="backpack.png" alt="bag icon" >
                <h3>trekking</h3>
            </div>

            <div class="box">
                <img src="fire.png" alt="camp fire icon">
                <h3>camp fire</h3>
            </div>

            <div class="box">
                <img src="adventures.png" alt="directive icon">
                <h3>off road</h3>
            </div>

            <div class="box">
                <img src="tent.png" alt="camp icon">
                <h3>camping</h3>
            </div>
        </div>
    </section>

    <!-- services section ends here -->
 
    <!-- home about section starts here -->
     <section class="home-about">
        <div class="image">
            <img src="nomad-family-traveling-living-van.jpg" alt="">
        </div>
        <div class="content">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate?</p>
            <a href="about.php" class="btn">read more</a>
        </div>
     </section>
    <!-- home about section ends here -->

    <!-- home packages section starts here -->
        <section class="home-packages">
            <h1 class="heading-title">our packages</h1>
            <div class="box-container">
                <div class="box">
                    <div class="image">
                        <img src="architecture-ancient-monument-world-heritage-day-celebration (1).jpg" alt="">
                    </div>

                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                        <a href="#" class="btn">book Now</a>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img src="architecture-ancient-monument-world-heritage-day-celebration.jpg" alt="">
                    </div>

                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                        <a href="#" class="btn">book Now</a>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img src="view-world-monument-celebrate-world-heritage-day.jpg" alt="">
                    </div>

                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                        <a href="#" class="btn">book Now</a>
                    </div>
                </div>
            </div>
            <div class="load-more">
                <a href="package.php" class="btn">load more</a>
            </div>
        </section>
    <!-- home packages section ends here -->

    <!-- home offer section  starts here  -->
        <section class="home-offer">
            <div class="content">
                <h3>upto 50% off</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a href="book.php" class="btn">Book now</a>
            </div>
        </section>

    <!-- home offer section  ends here  -->











    <!-- footer section starts here  -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
                <a href="login.php"><i class="fas fa-angle-right"></i>Login</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>Ask Questions</a>
                <a href="#"><i class="fas fa-angle-right"></i>About Us</a>
                <a href="#"><i class="fas fa-angle-right"></i>Privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i>Terms of use</a>
            </div>

            <div class="box">
                <h3>contract info</h3>
                <a href="#"><i class="fas fa-phone"></i> +91-8974653452</a>
                <a href="#"><i class="fas fa-phone"></i> +91-6755346753</a>
                <a href="#"><i class="fas fa-envelope"></i> 12202040601063@adit.ac.in</a>
                <a href="#"><i class="fas fa-map"></i> bharuch,india-392001</a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
            </div>  
        </div>
        <div class="credit">created by<span> Taha Ghadiali </span> | All rights reserved !</div>
    </section>


    <!-- footer section ends here  -->


    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="script.js"></script>
</body>
</html>