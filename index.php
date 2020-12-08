<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Local CSS File -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="images/favicon.ico" type="image/ico">
    <link rel="stylesheet" href="css/nav.css">
    <!-- Javascript -->
    <script src="js/navbar.js" defer></script>
    <title>Home page</title>
</head>
<body>
    <nav id="largeNav">
        <div class="navbar-top">
            <img src="images/logo.png" alt="brand-logo" class="brand-logo">
            <ul>
                <li>
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li>
                    <a class="nav-link <?php echo stripos($url, "about") !== false ? 'active' : '';?>" href="about_us.php">About Us</a>
                </li>
                <li>
                    <a class="nav-link <?php echo stripos($url, "contact") !== false ? 'active' : '';?>" href="contact_us.php">Contact Us</a>
                </li>
                <li>
                    <a class="nav-link" href="#" id="loginBtn1">Login</a>
                </li>
            </ul>
        </div>
        <div class="tagline">
            <span class="brand-tagline">You know you're in love when you can't fall asleep because reality is finally better than your dreams.</span>
        </div>
    </nav>
    <nav id="smallNav">
        <section class="displayContent">
            <section id="image">
                <img src="images/logo.png" alt="brand-logo" style="height: 40px;width: 40px;">
            </section>
            <section id="toggler-btn">
                <img src="images/bars-solid.png" alt="toggle" style="height: 25px;width: 25px;" id="toggler-btn">
            </section>
        </section>
        <section id="navContent">
            <ul>
                <li>
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li>
                    <a class="nav-link <?php echo stripos($url, "about") !== false ? 'active' : '';?>" href="about_us.php">About Us</a>
                </li>
                <li>
                    <a class="nav-link <?php echo stripos($url, "contact") !== false ? 'active' : '';?>" href="contact_us.php">Contact Us</a>
                </li>
                <li>
                    <a class="nav-link" href="#" id="loginBtn1">Login</a>
                </li>
            </ul>
        </section>
    </nav>

    <main>
        <div class="title">
            <span>Find your Special Someone</span>
        </div>
        <div class="someone-three">
            <div>
                <img src="images/user-plus-solid.png" alt="User add">
                <span class="msg">Sign Up</span>
                <span>Register for free &amp; put up your Profile</span>
            </div>
            <div class="hr"></div>
            <div>
                <img src="images/user-friends-solid.png" alt="User Friends">
                <span class="msg">Connect</span>
                <span> Select &amp; Connect with Matches you like</span>
            </div>
            <div class="hr"></div>
            <div>
                <img src="images/comments-solid.png" alt="Messaging">
                <span class="msg">Message</span>
                <span>Select &amp; Connect with Matches you like</span>
            </div>
        </div>
        <div class="title title2">
            <span>Millions of Happy Stories</span>
        </div>
        <div class="someone-three someone-four">
            <div>
                <img src="images/virat-anushka.png" alt="Wedding Pic 1">
                <span>We would like to thank Made In Heaven team<br> for bringing us together.</span>
            </div>
            <div>
                <img src="images/ranveer-deepika.png" alt="Wedding Pic 2">
                <span>We would like to thank Made In Heaven team<br> for bringing us together.</span>
            </div>
            <div>
                <img src="images/nick-priyanka.png" alt="Wedding Pic 3">
                <span>We would like to thank Made In Heaven team<br> for bringing us together.</span>
            </div>
        </div>
        <div class="title title2">
            <span>Now it is your turn to be happily married</span><br>
            <button class="register">Register here</button>
        </div>
        <div class="title title2">
            <span>Our Services</span>
        </div>
        <div class="someone-three someone-five">
            <div>
                <img src="images/check-circle-solid.png" alt="Genuine User">
                <span>Contact genuine profiles with 100% <br>verified mobile numbers</span>
            </div>
            <div class="hr"></div>
            <div>
                <img src="images/users-solid.png" alt="Various People">
                <span>Search by location, community, <br> profession &amp; more from lakhs of active profiles.</span>
            </div>
            <div class="hr"></div>
            <div>
                <img src="images/user-shield-solid.png" alt="Authentic">
                <span>Each user is verified by our authority <br>team</span>
            </div>
        </div>
    </main>
    <?php
        require("submodules/footer.php");
    ?>
</body>
</html>