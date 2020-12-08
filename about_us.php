<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Local CSS File -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/about_us.css">
    <link rel="icon" href="images/favicon.ico" type="image/ico"><link rel="stylesheet" href="css/nav.css">
    <!-- Javascript -->
    <script src="js/navbar.js" defer></script>
    <title>About Us</title>
</head>
<body>
    <?php
        require_once "submodules/navbar.php"
    ?>
    <main>
        <div class="title">
            <span>From the founders</span>
        </div>
        <div class="container">
            <div>
                <span>"Love recognizes no barriers. It jumps hurdles , leaf fences, penetrates walls to arrive at it's destination full of hope." -Ritu Kalyani" </span>
                <img src="images/ritu.png" alt="Ritu">
            </div>
            <div>
                <img src="images/divya.png" alt="Divya">
                <span>"Being deeply in love with someone gives you strength, while someone loving someone deeply gives you courage." -Divya Kukreja</span>
            </div>
            <div>
                <span>"Once in a while, right in the middle of an ordinary life, love gives you a fairy tale" -Parth Kalbag</span>
                <img src="images/parth.png" alt="Parth">
            </div>
        </div>
    </main>
    <?php
        require_once "submodules/footer.php";
    ?>
</body>
</html>