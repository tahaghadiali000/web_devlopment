<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>

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
    <div class="heading" style="background:url(beautiful-landscape-mother-nature.jpg) no-repeat">
        <h1>book now</h1>
    </div>
    <!-- booking section starts  here -->
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
                        <input type="text" placeholder="enter your email" name="email">
                    </div>

                    <div class="inputBox">
                        <span>phone :</span>
                        <input type="text" placeholder="enter your number " name="phone">
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
                        <span>how many :</span>
                        <input type="number" placeholder="how many :" name="guests">
                    </div>
                    <div class="inputBox">
                        <span>arrivals :</span>
                        <input type="date"  name="arrivals">
                    </div>
                    <div class="inputBox">
                        <span>leaving :</span>
                        <input type="date"  name="leaving">
                    </div>
                </div>

                <input type="submit" value="submit" class="btn" name="send">
                <button><a href="delete.php">DELETE MY TRIP</a></button>
                <button><a href="update.php">update MY TRIP</a></button>
            </form>
        </section>

    <!-- booking section ends  here -->












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