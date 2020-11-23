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
    <title>Home page</title>
</head>
<body>
    <?php

        require_once "submodules/navbar.php";
    ?>
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