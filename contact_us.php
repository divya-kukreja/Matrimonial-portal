<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Local CSS File -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/contact_us.css">
    <link rel="icon" href="images/favicon.ico" type="image/ico">
    <title>Contact Us</title>
</head>
<body>
    <?php
        require_once "submodules/navbar.php"
    ?>
    <main>
        <div class="title">
            <span>Contact Us</span>
        </div>
        <div class="form">
            <form method="POST">
                <input type="text" placeholder="Full Name" name="full_name">
                <input type="email" placeholder="Email Address" name="email_address">
                <input type="tel" placeholder="Mobile No" name="mobile_no">
                <textarea placeholder="Message" name="message"></textarea>
                <button type="submit">Submit</button>
            </form>
            <div>
                <img src="images/contact_us.png" alt="Contact Us">
            </div>
        </div>
        <div class="title title2">
            <span>Or You can locate us</span>
        </div>
        <center>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d803.2487352000733!2d73.99510792724082!3d17.679925507449425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc239900d1186c7%3A0x6962498dc140edae!2sChintamani%20residency!5e0!3m2!1sen!2sin!4v1604747003832!5m2!1sen!2sin" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </center>
        <div class="contact">
            <div>
                <img src="images/phone-alt-solid.png" alt="phone">
                <span>+911234568790</span>
            </div>
            <div>
                <img src="images/envelope-solid.png" alt="email">
                <span>abc@gmail.com</span>
            </div>
            <div>
                <img src="images/map-marker-alt-solid.png" alt="Map">
                <span>Satara, Maharashtra</span>
            </div>
            <div>
                <img src="images/fax-solid.png" alt="Fax">
                <span>(091)0000 00</span>
            </div>
        </div>
    </main>
    <?php
        require_once "submodules/footer.php";
    ?>
</body>
</html>