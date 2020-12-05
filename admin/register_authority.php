
<!-- Sweetalert CDN -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
    require_once "mysql_connection.php";

    $username = $_POST["authorityUsername"] ?? false;
    $password = $_POST["authorityPassword"] ?? false;
    $cpassword = $_POST["authorityConfirmPassword"] ?? false;

    if (isset($_POST["signup"])) {
        if ($password === $cpassword) {
            $sql = "INSERT INTO authority(name, password) VALUES('" . $username . "', '" . $password . "')";

            if (isset($username) && isset($password)) {
                try {

                    $checkIfExists = "SELECT * FROM authority WHERE name='" . $username . "'";

                    $checkExec = $conn->query($checkIfExists);

                    if ($checkExec->num_rows <= 0) {
                        if ($username !== '' && $username !== ' ') {
                            $conn->begin_transaction();
                            $conn->query($sql);
                            $conn->commit();
                            echo "<script>
                        swal('Success', 'The authority team has been registered successfully', 'success');
            
                    </script>";
                        }
                    } else {
                        echo "<script>
                        swal('Error', 'The user already exists', 'warning');
            
                    </script>";
                    }
                } catch (Throwable $e) {
                    $conn->rollback();
                }
            }
        } else {
            echo "Passwords do not match";
        }
    }
?>

<div id="register_authority" class="modal">
    <div class="modal-content">
        <span class="close" id="registerClose">&times;</span>
        <div class="loginModalTitle">
            <div>
                <img src="../images/logo.png" alt="Logo" style="height: 80px;">
            </div>
            <div>
                <h4 class="modalTitle">Register Authority</h4>
            </div>
        </div>
        <section class="loginModalForm">
            <form method="post">
                <section class="subBodyForm">
                    <div class="inputText">
                        <input type="text" placeholder="Username" name="authorityUsername" required>
                    </div>
                    <div>
                        <img src="../images/mail-24px.png" alt="user">
                    </div>
                </section>
                <section class="subBodyForm">
                    <div class="inputText">
                        <input type="password" placeholder="Password" name="authorityPassword" required>
                    </div>
                    <div>
                        <img src="../images/Path%209.png" alt="pass">
                    </div>
                </section>
                <section class="subBodyForm">
                    <div class="inputText">
                        <input type="password" placeholder="Confirm Password" name="authorityConfirmPassword" required>
                    </div>
                    <div>
                        <img src="../images/Path%209.png" alt="pass">
                    </div>
                </section>
                <section class="submitForm">
                    <div style="width: 30%;">
                        <button class="modalBtn" type="submit" name="signup">Register Authority</button>
                    </div>
                    <div>
                        <a href="#">&nbsp;</a>
                    </div>
                </section>
            </form>
        </section>
    </div>
</div>
<script>
    let registerModal = document.getElementById("register_authority");
    let registerBtn = document.getElementById("authority_register_btn");
    let closeBtn = document.getElementById("registerClose");

    registerBtn.onclick = function () {
        registerModal.style.display = "block";
    }

    closeBtn.onclick = function () {
        registerModal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target === registerModal) {
            registerModal.style.display = "none";
        }
    }

</script>