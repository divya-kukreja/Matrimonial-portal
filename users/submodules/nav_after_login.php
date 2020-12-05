<?php

require "_dbconnect.php";
session_start();
error_reporting(0);
?>

<?php

$sql = "SELECT * FROM `profile`";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
//echo $num;


if ($num > 0) {
    $row = mysqli_fetch_assoc($result);
}

if (isset($_GET["id"])) {
    $_SESSION["username"] = $_GET["id"];
}

else if (isset($_GET["uid"])) {
    $_SESSION["username"] = $_GET["uid"];
}
else {
    $_SESSION["username"] = $_GET["signup_id"];
}
$userID = $_GET["signup_id"] ?? false;

?>


<nav>
    <div class="navbar-top">
        <a href=""><img src="../images/logo.png" alt="brand-logo" class="brand-logo"></a>
        <label for="btn" class="icon">
            <span class="fa fa-bars"></span>
        </label>
        <input type="checkbox" id="btn">
        <ul>
            <li><a href="#">&nbsp;</a></li>
            <li>
                <label for="btn-1" class="show">Features +</label>
                <a href="profile.php">My Profile</a>
                <input type="checkbox" id="btn-1">
                <ul>
                    <li><?php echo '<a href="my_profile.php?id=' . $_SESSION["username"] . '">View_profile</a>' ?></li>
                    <li><?php echo '<a href="edit_profile.php?id=' . $_SESSION["username"] . '">Edit_profile</a>' ?></li>
                </ul>
            </li>
            <li>
                <label for="btn-2" class="show">Services +</label>
                <?php echo '<a href="partner_search.php?id=' . $_SESSION["username"] . '">Partner search</a>' ?>
                <input type="checkbox" id="btn-2">
                <ul>
                    <!-- <li><a href="#">Age</a></li>
                    <li><a href="#">Qualification</a></li>
                    <li>
                        <label for="btn-3" class="show">More +</label>
                        <a href="#">More <span class="fa fa-plus"></span></a>
                         <input type="checkbox" id="btn-3"> -->
                    <!-- <ul>
                            <li><a href="#">Profession</a></li>
                            <li><a href="#">Caste</a></li>
                        </ul>
                    </li> -->
                </ul>
            </li>
            <li>
                <label for="btn-1" class="show">Requests +</label>
                <a href="#">Requests</a>
                <input type="checkbox" id="btn-1">
                <ul>
                    <li><?php echo '<a href="sent_requests.php?id=' . $_SESSION["username"] . '">Sent Requests</a>' ?></li>
                    <li><?php echo '<a href="received_requests.php?id=' . $_SESSION["username"] . '">Received Requests</a>' ?></li>
                    <li><?php echo '<a href="edit_profile.php?id=' . $_SESSION["username"] . '">My Matches</a>' ?></li>
                </ul>
            </li>
            <li><a href="logout.php" id="logout" style="color: white;">Logout</a></li>
        </ul>
        <div class="tagline">
            <span class="brand-tagline">You know you're in love when you can't fall asleep because reality is finally better than your dreams.</span>
        </div>
</nav>

<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script>
    $('.icon').click(function() {
        $('span').toggleClass("cancel");
    });
</script>