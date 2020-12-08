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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
    <title>Contact Us</title>
</head>

<body>
    <?php

    require "submodules/_dbconnect.php";
    ?>

    <?php
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    //echo $method;       // method check krne ke liye get hai ki post

    if ($method == "POST") {
        // Insert into profile table
        $full_name = $_POST['full_name'];
        $email_address = $_POST['email_address'];
        $mobile_no = $_POST['mobile_no'];
        $message     = $_POST['message'];


        //$timestamp = $_POST['timestamp'];
        $sql  = "INSERT INTO `contact`(`full_name`, `email_address`, `mobile_no`, `message`,`timestamp`) VALUES ('$full_name','$email_address','$mobile_no','$message',current_timestamp())";

        $result = mysqli_query($conn, $sql);
        $showAlert = true;

        if ($showAlert) {?>

            <!-- echo '<div class="alert alert-success alert-dismissible fade show " role="alert">
                    <strong>ThankYou!</strong> We have recieved your query . we will surely connect back you soon.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>'; -->
                  <script>
                      swal({
                            title: "Thankyou! We have recieved your query ",
                            text: "we will surely connect back you soon",
                            icon: "success",
                        });
                   </script>
                   <?php

        }
    }

    ?>
    <?php
    require_once "submodules/navbar.php";
    ?>

    <main>
        <div class="title">
            <span>Contact Us</span>
        </div>
        <div class="form">
            <form method="POST" action=" <?php $_SERVER['REQUEST_URI']; ?>">
                <input type="text" placeholder="Full Name" name="full_name" required>
                <input type="email" placeholder="Email Address" name="email_address" required>
                <input type="tel" placeholder="Mobile No" name="mobile_no" required>
                <textarea placeholder="Message" name="message" required></textarea>
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
