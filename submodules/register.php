
<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
</head>
<body>

<?php
require_once "_dbconnect.php";

if(isset($_POST['signup'])){
    $email = mysqli_real_escape_string($conn,$_POST['registerEmail']);
    $uname = mysqli_real_escape_string($conn,$_POST['registerUsername']);
    $pass = mysqli_real_escape_string($conn,$_POST['registerPassword']);
    $cpass = mysqli_real_escape_string($conn,$_POST['registerCPassword']);

    $pass_hash = password_hash($pass,PASSWORD_BCRYPT);
    $cpass_hash = password_hash($cpass,PASSWORD_BCRYPT);

    $namequery = "select * from signup where username = '$uname'";
    $query = mysqli_query($conn,$namequery);
    $namecount = mysqli_num_rows($query);

    if($namecount > 0){
        ?>
        <script>
                swal({
                    title: "Username already exists",
                    text: "Try another unique username",
                    icon: "warning",
                });

        </script>
    <?php
        
    }else{
        if($pass == $cpass){
            $insert = "INSERT INTO `signup`( `email`, `username`, `password`, `Cpassword`) VALUES ('$email','$uname' , '$pass_hash','$cpass_hash')";
            $finalquery = mysqli_query($conn,$insert);

            if($finalquery){
                ?>
                <script>
                    swal({
                    title: "Your Registration has been successfully Done",
                    text: "Now you can login to our services..",
                    icon: "success",
                });
                </script>
                <?php
                }else{
                ?>
                <script>
                    swal({
                    title: "Registration Unsuccessful",
                    text: "please Try again",
                    icon: "error",
                });
                </script>
                <?php

                }  
            }
            else{
                ?>
                 <script>
                    swal({
                    title: "passwords are not matching",
                    text: "please Type correctly",
                    icon: "error",
                });
                </script>
                <?php
            }
        }
    }
?>


<div id="register" class="modal">
    <div class="modal-content">
        <span class="close" id="registerClose">&times;</span>
        <div class="loginModalTitle">
            <div>
                <img src="images/logo.png" alt="Logo" style="height: 80px;">
            </div>
            <div>
                <h4 class="modalTitle">Welcome to Made In Heaven!</h4>
            </div>
        </div>
        <section class="loginModalForm">
            <form method="post">
                <section class="subBodyForm">
                    <div class="inputText">
                        <input type="text" placeholder="Email ID" name="registerEmail" required>
                    </div>
                    <div>
                        <img src="images/account_circle-24px.png" alt="user">
                    </div>
                </section>
                <section class="subBodyForm">
                    <div class="inputText">
                        <input type="text" placeholder="Username" name="registerUsername" required>
                    </div>
                    <div>
                        <img src="images/mail-24px.png" alt="user">
                    </div>
                </section>
                <section class="subBodyForm">
                    <div class="inputText">
                        <input type="password" placeholder="Password" name="registerPassword" required>
                    </div>
                    <div>
                        <img src="images/Path%209.png" alt="pass">
                    </div>
                </section>
                <section class="subBodyForm">
                    <div class="inputText">
                        <input type="password" placeholder="Confirm Password" name="registerCPassword" required>
                    </div>
                    <div>
                        <img src="images/Path%209.png" alt="pass">
                    </div>
                </section>
                <section class="submitForm">
                    <div style="width: 30%">
                        <button class="modalBtn" type="submit" name="signup">Signup</button>
                    </div>
                    <div>
                        <a href="#">&nbsp;</a>
                    </div>
                </section>
            </form>
        </section>
        <a href="#" id="goToLogin" style="text-align: center;">Already have an account? Login now></a>
    </div>
</div>
</body>
</html>