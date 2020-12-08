<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partner Search</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Local CSS -->
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/partner_search.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="icon" href="../images/favicon.ico" type="image/ico">
    <!-- jQuery CDN -->
    <script src="../authority_team/js/jquery-3.5.1.min.js"></script>

    <!-- Sweetalert CDN -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
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
                    <a href="profile.php?signup_id=<?php  echo $_SESSION["username"];?>">My Profile</a>
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
                        <li><?php echo '<a href="my_matches.php?id=' . $_SESSION["username"] . '">My Matches</a>' ?></li>
                    </ul>
                </li>
                <li><a href="logout.php" id="logout" style="color: white;">Logout</a></li>
            </ul>
            <div class="tagline">
                <span class="brand-tagline">You know you're in love when you can't fall asleep because reality is finally better than your dreams.</span>
            </div>
    </nav>
<?php
require "submodules/_dbconnect.php";
?>

<?php

$userID = $_SESSION["username"] ?? false;

if (isset($userID)) {
    $expressedInterestID = "SELECT * FROM expressed_interest WHERE expressed_interest_id='" . $userID . "' AND status = 'F'";

    $res = $conn->query($expressedInterestID);

    if ($res->num_rows > 0) {
        while($expressed = $res->fetch_assoc()) {
            $userSQL = "SELECT * FROM profile WHERE user_id='" . $expressed["user_id"] . "'";

            $userExec = $conn->query($userSQL);

            while ($row = $userExec->fetch_assoc()) {


                if ($row["user_id"] !== $_SESSION["username"]) {
                    echo
                        '<main>
        <!-- Submodule -->
        <div class="card">
            <div class="img">
                <img src="' . $row['images'] . '" alt="" width="150" height="200">
            </div>
            <div class="info">
                <div>
                    <h4>' . $row['user_id'] . '</h4>
                    <hr>
                </div>
                <div class="subinfo">
                    <div class="subinfo1">
                        <div class="largeScreenText">
                            <span>Name:&emsp;</span>
                            <span>Religion:&emsp;</span>
                            <span>Martial Status:&emsp;</span>
                            <span>Mother Tongue:&emsp;</span>
                            <span>Profession:&emsp;</span>
                        </div>
                        <div class="largeScreenText">
                            <span>' . $row['name'] . '</span>
                            <span>' . $row['religion'] . '</span>
                            <span>' . $row['maritial'] . '</span>
                            <span>' . $row['mtongue'] . '</span>
                            <span>' . $row['occupation'] . '</span>
                        </div>

                        <div class="smallSizeDisplay">
                            <div>
                                <span>Name:&nbsp;</span>
                                <span>' . $row['name'] . '</span>
                            </div>
                            <div>
                                <span>Religion:&nbsp;</span>
                                <span>' . $row['religion'] . '</span>
                            </div>
                            <div>
                                <span>Martial Status:&nbsp;</span>
                                <span>' . $row['maritial'] . '</span>
                            </div>
                            <div>
                                <span>Mother Tongue:&nbsp;</span>
                                <span>' . $row['mtongue'] . '</span>
                            </div>
                            <div>
                                <span>Profession:&nbsp;</span>
                                <span>' . $row['occupation'] . '</span>
                            </div>
                        </div>
                      
                    <!-- For Buttons -->
                    <div class = "float-right">
                    <div class="buttons flex">
                        <a href="#" class="button accept" id="' . $row["user_id"] . '">
                            <div>
                                <img src="../images/check-solid.png" alt="smile">
                            </div>
                            <div>
                                <span>Accept</span>
                            </div>
                        </a>
                        <a id="' . $row["user_id"] . '" class="button reject" href="#">
                            <div>
                                <img src="../images/times-solid.png" alt="shortlist">
                            </div>
                            <div>
                                <span>Reject</span>
                            </div>
                        </a>
                        <a href="partner_search_profile.php?id=' . $row['user_id'] . '" class="button">
                            <div>
                                <img src="../images/user-tag-solid.png" alt="user">
                            </div>
                            <div>
                                <span>View Profile</span>
                            </div>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Submodule -->
      
    </main>';
                }
            }
        }
    }

    else {
        echo "No users to show";
    }
}
?>
<script>
    $(".accept").on("click", function () {
        $.ajax({
            url: "ajax/accept_request.php?id=" + this.id,
            type: "GET",
            success: function () {
                swal("Accepted", "The request has been accepted successfully", "success")
            }
        })
    })

    $(".reject").on("click", function () {
        $.ajax({
            url: "ajax/reject_request.php?id=" + this.id,
            type: "GET",
            success: function () {
                swal("Rejected", "The request has been rejected successfully", "success")
            }
        })
    })
</script>
</body>
</html>
