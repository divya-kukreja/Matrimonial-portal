<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
   
    <link rel="stylesheet" href="css/login.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
  </head>
  <?php
    require_once "mysql_connection.php";

    if(isset($_POST['auth_login'])){
        $username = $_POST['uname'];
        $pass = $_POST['password'];

        $true_username = "SELECT * FROM `admin` WHERE `name` ='$username'";
        $sql = mysqli_query($conn,$true_username);

        $username_count = mysqli_num_rows($sql);

        if($username_count >0){

        while($row = mysqli_fetch_array($sql)){
                if($pass == $row['password']){
                    ?>
                <script>
                    swal({
                        title: "Login Successful",
                        text: "Welcome to our matrimonial website",
                        icon: "success",
                    });
                    <?php session_start(); $_SESSION["admin_id"] = $row['admin_id'] ?>
                    location.replace("index.php");
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
            
        }


    }
?>

  <body>
    <div class="wrapper">
      <div class="title">Admin Login</div>
            <form method ="POST">
                    <div class="field">
                        <input type="text" name="uname" required>
                        <label>Username</label>
                    </div>
                    <div class="field">
                        <input type="password" name="password" required>
                        <label>Password</label>
                    </div>
            <br><br>
                    <div class="field">
                        <input type="submit" name="auth_login" value="Login">
                    </div>
            </form>
        </div>
    </div>
</body>
</html>
