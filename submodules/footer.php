<footer>
    <div>
        <h4><b>Need Help ?</b></h4>
        <hr>
        <h5><a href="#" id="loginBtn2">Member login</a></h5>
        <h5><a href="#" id="signUpBtn">Signup</a></h5>
    </div>
    <div>
        <h4><b>Company</b></h4>
        <hr>
        <h5><a href="about_us.php">About Us</a></h5>
        <h5><a href="contact_us.php">Contact Us</a></h5>
    </div>
    <div>
        <h4><b>Privacy &amp; You</b></h4>
        <hr>
        <h5><a href="privacy.php">Terms Of Use</a></h5>
        <h5><a href="#">Signup</a></h5>
    </div>
    <div>
        <h4><b>Contact With Us</b></h4>
        <hr>
        <div class="brands">
            <div>
                <img src="images/instagram-brands.png" alt="">
            </div>
            <div>
                <img src="images/twitter-brands.png" alt="">
            </div>
            <div>
                <img src="images/facebook-f-brands.png" alt="">
            </div>
        </div>
    </div>
</footer>

<!-- Login Modal -->
<?php
    require_once "login.php";
?>

<!-- Register Modal -->
<?php
    require_once "register.php";
?>

<script>
    let loginModal = document.getElementById("login");
    let loginBtn1 = document.getElementById("loginBtn1");
    let loginBtn2 = document.getElementById("loginBtn2");
    let registerModal = document.getElementById("register");
    let registerBtn = document.getElementById("goToRegister");
    let goToLoginBtn = document.getElementById("goToLogin");
    let signUpBtn = document.getElementById("signUpBtn");
    let spanLogin = document.getElementsByClassName("close")[0];
    let spanRegister = document.getElementById("registerClose");

    loginBtn1.onclick = function() {
        loginModal.style.display = "block";
        registerModal.style.display = "none";
    }

    loginBtn2.onclick = function() {
        loginModal.style.display = "block";
        registerModal.style.display = "none";
    }

    goToLoginBtn.onclick = function () {
        registerModal.style.display = "none";
        loginModal.style.display = "block";
    }

    spanLogin.onclick = function() {
        loginModal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target === loginModal) {
            loginModal.style.display = "none";
        }
    }

    spanRegister.onclick = function () {
        registerModal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target === registerModal) {
            registerModal.style.display = "none";
        }
    }

    registerBtn.onclick = function() {
        loginModal.style.display = "none";
        registerModal.style.display = "block";
    }

    signUpBtn.onclick = function() {
        loginModal.style.display = "none";
        registerModal.style.display = "block";
    }

</script>