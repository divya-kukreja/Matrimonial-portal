<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
</head>
<body>
    <?php
        require_once "_dbconnect.php";

        if(isset($_POST['login'])){
            $username = $_POST['loginUsername'];
            $pass = $_POST['loginPassword'];

            $true_username = "SELECT * FROM `signup` WHERE username ='$username'";
            $sql = mysqli_query($conn,$true_username);

            $username_count = mysqli_num_rows($sql);

            if($username_count >0){

            while($row = mysqli_fetch_array($sql)){
                    if(password_verify($pass ,$row['Cpassword'])){
                        ?>
                    <script>
                        swal({
                            title: "Login Successful",
                            text: "Welcome to our matrimonial website",
                            icon: "success",
                        });
                        location.replace("users/profile.php?signup_id=<?php echo $row['userid'];?>");
                    </script>
                    <?php
                    }
                    else{
                        ?>
                    <script>
                        swal({
                            title: "Incorrect Password",
                            text: "Try again with correct password",
                            icon: "warning",
                        });
                    </script>
                    <?php
                    }
                }
            }
            else {
                ?>
                <script>
                        swal({
                            title: "Incorrect Username",
                            text: "Try Again to login with correct Username",
                            icon: "warning",
                        });
                </script>
                <?php
                $_SESSION['username'] = $username;
            }


        }
    ?>

    <div id="login" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="loginModalTitle">
                <div>
                    <img src="images/logo.png" alt="Logo" style="height: 80px;">
                </div>
                <div>
                    <h4 class="modalTitle">Welcome back! Please login</h4>
                </div>
            </div>
            <section class="loginModalForm">
                <form method="post">
                    <section class="subBodyForm">
                        <div class="inputText">
                            <input type="text" placeholder="Enter Username" name="loginUsername">
                        </div>
                        <div>
                            <img src="images/account_circle-24px.png" alt="user">
                        </div>
                    </section>
                    <section class="subBodyForm">
                        <div class="inputText">
                            <input type="password" placeholder="Password" name="loginPassword">
                        </div>
                        <div>
                            <img src="images/Path%209.png" alt="pass">
                        </div>
                    </section>
                    <section class="submitForm">
                        <div style="width: 30%">
                            <button class="modalBtn" name="login" type="submit">Login</button>
                        </div>
                        <div>
                            <a href="#">Forgot Password ?</a>
                        </div>
                    </section>
                </form>
            </section>
            <a href="#" id="goToRegister" style="text-align: center">New to madeinheaven.com? Signup for free></a>
        </div>
    </div>
</body>
</html>