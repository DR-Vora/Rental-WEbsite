<?php
// Start the session
session_start();

// Check if the session variable exists
if (isset($_SESSION['username'])) {
    // Retrieve the username from the session variable
    $username = $_SESSION['username'];
} 

else{    header("Location: login.html");
        exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rentail website</title>
    <link rel="stylesheet" href="project.css">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
</head>
<body>
    <!--Navigation bar-->
    <header>
        <div class="nav container">
            <i class='bx bx-menu ' id="menu"></i>
            <a href="#" class="logo">Rental<span>website</span></a>
            <!-- Navigation list-->
            <ul class="navbar">
                <li><a href="#home">Home</a></li>
                <li><a href="#furniture">furniture</a></li>
                <li><a href="#about">about</a></li>
                <li><a href="#blog">blogs</a></li>
                <li><a href="#contact">contact</a></li>
            </ul>
            <i class='bx bx-search' id="search"></i>
            <div class="search-box">
                <input type="search" name="" id="" placeholder="Search here...">
            </div>
            <div class="user-cart">
            <a href="login.html" id="user"><i class='bx bxs-user'></i></a>
            <a href="" id="cart"> <i class='bx bx-cart' ></i></a>
            <a href="logout.php"><i class='bx bx-log-out'></i></a> &nbsp
            <?php echo '   ' .$username; ?> Thanks for logging!!!
            </div>
        </div>
    </header>
    <section class="home" id="home">
        <div class="home-text">
            <h1><i>Rental<span>website</span></i></h1><h3>Upgrade To Your Dream Lifestyle <br>At An Unbelievably Low Price!</h3> 
            <p>RentoMojo is your ticket to a better lifestyle in India.<br> We provide designer furniture, the newest gadgets,<br>and bestselling appliances on rent in major Indian cities. <br>You can use the best products available in the market<br> at just a fraction of their retail value.You pay us a small monthly fee, <br>which becomes lesser the longer you rent from us.</p>
            <a href="#" class="btn">DISCOVER NOW</a>
        </div>
    </section>

    <section class="furniture" id="furniture">
        <div class="heading">
            <h2>You'll love to take these home</h2>
            <p><h3>Elegant, High-Utility Furniture on Rent in Ahmedabad For Every Room In Your Home</h3>
                Need furniture for your bedroom, living room, home office, study, dining room, or nursery? You’ll find it all in our extensive, handpicked inventory. We make sure to carry tasteful furniture that you can use daily.</p>
        </div>
   
    <div class="furniture-container container">
        <div class="box">
           <a href="sofa.html"> <img src="f1.png"></a>
            <h2>ROYAL BROWN SOFA</h2>
        </div>

        <div class="box">
           <a href="bads.html"> <img src="f2.png"> </a>
            <h2>COUPLE/single BADS</h2>
        </div>

        <div class="box">
           <a href="studychairs.html"> <img src="f3.png"> </a>
            <h2>STUDY-BUDDY MATERIALS</h2>
        </div>

        <div class="box">
            <a href="table.html"> <img src="f4.png"></a>
            <h2>ARTISTICS TABLES</h2>
        </div>

        <div class="box">
           <a href="chairs.html"><img src="f5.png"></a>
            <h2>COMFY/STYLISH CHAIRS</h2>
        </div>

        <div class="box">
            <a href="vintage-furniture.html"><img src="f6.png"></a>      
            <h2>VINTAGE FURNITURES</h2>
        </div>
    </div>
    </section>

    <section class="about container" id="about">
        <div class="about-img">
            <img src="about-img.png">
        </div>
        <div class="about-text">
            <span>ABOUT US</span>
            <h2>Hi! We’re Rental<span>website</span>, an online <br>rental solution for your furnishing needs</h2>
            <p>Why renting, you ask? Well, because we understand that <br>
                unnecessary furniture and appliance costs aren’t the <br>
                best investment options. So we decided to come up with<br>
                 an easier solution instead. We provide more than online <br>
                 rental services, we help you explore a world of possibilities<br>
                 .With our assured quality and prompt services,you can say <br>
                 goodbye to all the hassles that come with buying and say hello to convenience.</p>
            <a href="#" class="btn">Learn mora</a>
        </div>
    </section>

    <section class="blog" id="blog">
        <div class="heading">
            <span>Our Blogs</span>
            <h2>WELCOME!!!<BR>TO OUR <span>BLOG</span> SECTION</h2>
            <p>Frustrated with the hassles of relocating from one place to the other, and tired of finding that perfect cluster of home essentials that suits our lifestyle, we created Rentalwebsite, a furniture rental website helping you set up your home at easy and affordable rentals.</p>
        </div>

        <div class="blog-container container">
            <div class="box">
                <img src="f1.png">
                <span>Feb 11 2023</span>
                <h3>How to buy PVR like furniture?</h3>
                <p>Blame the year 2020, but the trend of going to theatres to watch movies is…</p>
                <a href="#" class="blog-btn">READ MORE <i class='bx bx-right-arrow-alt'></i></a>
            </div>

            <div class="box">
                <img src="f2.png">
                <span>Feb 11 2023</span>
                <h3>How to buy comfy bed?</h3>
                <p>Blame the year 2020, but the trend of going to theatres to watch movies is…</p>
                <a href="#" class="blog-btn">READ MORE <i class='bx bx-right-arrow-alt'></i></a>
            </div>

            <div class="box">
                <img src="f3.png">
                <span>Feb 11 2023</span>
                <h3>Buy Study/Comfy chairs like a PRO?</h3>
                <p> The theatres to watch movies is…</p>
                <a href="#" class="blog-btn">READ MORE <i class='bx bx-right-arrow-alt'></i></a>
            </div>
        </div>
    </section>

    <section class="footer" id="contact">
        <div class="footer-container container">
            <div class="footer-box">
                <a href="#" class="logo">Rental<span>website</span></a>
                <div class="social">
                    <a href="https://www.youtube.com/"><i class='bx bxl-youtube' ></i></a>
                    <a href=""><i class='bx bxl-linkedin-square'></i></a>
                    <a href=""><i class='bx bx-envelope' ></i></a>
                    <a href=""><i class='bx bxl-blogger'></i></a>
                </div>
            </div>

            <div class="footer-box">
                <h3>Pages</h3>
                <a href="#">Home</a>
                <a href="#">Furniture</a>
                <a href="#">About</a>
                <a href="#">Blogs</a>
                <a href="#">Contact</a>
            </div>

            <div class="footer-box">
                <h3>Policy</h3>
                <a href="#">Privacy Policy</a>
                <a href="#">Refund Policy</a>
                <a href="#">Cancellation & Return</a>
                <a href="#">Shipping Policy</a>
                <a href="#">Rental Terms & Conditions</a>
            </div>

            <div class="footer-box">
                <h3>Information</h3>
                <a href="#">FAQs</a>
                <a href="#">Documents Required</a>
                <a href="#">Annual Returns</a>
                <a href="#">Investors</a>
                <a href="#">Our Benefits</a>
            </div>
        </div>
    </section>

    <div class="copyright">
        <p><i class='bx bx-copyright' > Rentalwebsite All Right Reserved</i></p>
    </div>

    <script src="project.js"></script>
    <!--<script src="menu.js"></script>-->
</body>
</html>