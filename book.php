<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icons8-tourism-24.png">
    <title>Book</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <!-- Header -->
    <section class="header">
        <a href="home.php" class="logo">LebTrails</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
        </nav>
        
        <div id="menu-btn" class="fas fa-bars"></div>


    </section>
    <!-- Header End -->
    
    <div class="heading" style="background:url(images/heading-3.jpg) no-repeat">
        <h1>Book Now</h1>
    </div>
    
    <!-- Booking sec -->
    <section class="booking">
        <h1 class="heading-title">book your trip!</h1>

        <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>name :</span>
                    <input type="text" placeholder="Enter your name" name="name">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="Enter your email" name="email">
                </div>
                <div class="inputBox">
                    <span>phone :</span>
                    <input type="number" placeholder="Enter your number" name="phone">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="Enter your address" name="address">
                </div>
                <div class="inputBox">
                    <span>where to :</span>
                    <input type="text" placeholder="Place to visit" name="location">
                </div>
                <div class="inputBox">
                    <span>how many :</span>
                    <input type="number" placeholder="how many guests" name="guests">
                </div>
                <div class="inputBox">
                    <span>arrivals :</span>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputBox">
                    <span>leaving :</span>
                    <input type="date" name="leaving">
                </div>
            </div>
            
            <input type="submit" value="submit" class="btn" name="send">

        </form>
    </section>
    <!-- Booking sec End-->
    
    <!-- Footer -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> Book</a>
            </div>

            <div class="box">
                <h3>Extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i> Ask questions</a>
                <a href="#"><i class="fas fa-angle-right"></i> About us</a>
                <a href="#"><i class="fas fa-angle-right"></i> Privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> Terms of use</a>
            </div>
        
            <div class="box">
                <h3>Extra links</h3>
                <a href="#"><i class="fas fa-phone"></i> 961-76058787</a>
                <a href="#"><i class="fas fa-envelope"></i> moeakar123456@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i> Beirut - Lebanon</a>
            </div>

            <div class="box">
                <h3>Follow us</h3>
                <a href="https://www.facebook.com/mouhammad.akar.3/"><i class="fab fa-facebook-f"></i> Facebook</a>
                <a href="https://www.instagram.com/akarmouhammad/"><i class="fab fa-instagram"></i> Instagram</a>
                <a href="https://www.linkedin.com/in/mohammad-akar-a05248304/"><i class="fab fa-linkedin"></i> Linkedin</a>
            </div>
        </div>

        <div class="credit">Created by <span>Mohamad Akar</span> | all rights reserved!</div>
    </section>


    <!-- Footer End -->


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>