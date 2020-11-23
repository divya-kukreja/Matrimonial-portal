<?php
    $url = $_SERVER["REQUEST_URI"];

    if ($url == '/IP_Miniproject/') {
        $url = "index";
    }
?>
<nav>
    <div class="navbar-top">
        <img src="images/logo.png" alt="brand-logo" class="brand-logo">
        <ul>
            <li>
                <a class="nav-link <?php echo stripos($url, "index") !== false ? 'active' : '';?>" href="index.php">Home</a>
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
