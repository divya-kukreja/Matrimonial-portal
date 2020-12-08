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
    <link rel="icon" href="../images/favicon.ico" type="image/ico"><link rel="stylesheet" href="css/navSmall.css">
    <script src="js/navbar.js" defer></script>
</head>

<body>
    <nav id="largeNav">
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
    <nav id="smallNav">
        <section class="displayContent">
            <section id="image">
                <img src="../images/logo.png" alt="brand-logo" style="height: 40px;width: 40px;">
            </section>
            <section id="toggler-btn">
                <img src="../images/bars-solid.png" alt="toggle" style="height: 25px;width: 25px;" id="toggler-btn">
            </section>
        </section>
        <section id="navContent">
            <ul style="margin-top: 12px;">
                <li class="profileData">
                    <div>
                        <a href="profile.php?signup_id=<?php echo $_SESSION["username"];?>" id="myProfile" style="font-size: 16px;">My Profile</a>
                    </div>
                    <div style="margin-left: 5px;" id="profileData">
                        <img src="../images/sort-down-solid.png" style="height: 10px;width: 10px;" alt="">
                    </div>
                </li>
                <li id="profileDataDrop" class="profileDataDrop">
                    <ul>
                        <li style="border: 1px solid white">
                            <?php echo '<a href="my_profile.php?id=' . $_SESSION["username"] . '">View_profile</a>' ?>
                        </li>
                        <li style="border: 1px solid white">
                            <?php echo '<a href="edit_profile.php?id=' . $_SESSION["username"] . '">Edit_profile</a>' ?>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-link" href="partner_search.php?id=<?php echo $_SESSION["username"];?>" style="font-size: 16px;">Partner Search</a>
                </li>
                <li id="profileRequest" class="profileData">
                    <div>
                        <a href="#" id="myProfile" style="font-size: 16px;">Requests</a>
                    </div>
                    <div style="margin-left: 5px;">
                        <img src="../images/sort-down-solid.png" style="height: 10px;width: 10px;" alt="">
                    </div>
                </li>
                <li id="profileRequestData" class="profileDataDrop">
                    <ul>
                        <li style="border: 1px solid white"><?php echo '<a href="sent_requests.php?id=' . $_SESSION["username"] . '">Sent Requests</a>' ?></li>
                        <li style="border: 1px solid white"><?php echo '<a href="received_requests.php?id=' . $_SESSION["username"] . '">Received Requests</a>' ?></li>
                        <li style="border: 1px solid white"><?php echo '<a href="my_matches.php?id=' . $_SESSION["username"] . '">My Matches</a>' ?></li>
                    </ul>
                </li>
                <li>
                    <a class="nav-link" href="logout.php" id="logout">Logout</a>
                </li>
            </ul>
        </section>
    </nav>
    <?php
    require "../submodules/_dbconnect.php";
    ?>

    <?php


    $sql = "SELECT * FROM `profile` where gender = 'Bride'";
    $result = mysqli_query($conn, $sql);

    $num = mysqli_num_rows($result);
    //echo $num;


    if ($num > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo
                '<main>
        <!-- Submodule -->
        <div class="card">
            <div class="img">
                <img src="../images/ladyprofile.png" alt="Lady">
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
                      
                    <!-- For Buttons -->
                    <div class="buttons ">
                        <a href="express_profiles.php" class="button">
                            <div>
                                <img src="../images/smile-regular.png" alt="smile">
                            </div>
                            <div>
                                <span>Express Interest</span>
                            </div>
                        </a>
                        <a href="shortlist.php" class="button">
                            <div>
                                <img src="../images/star-regular.png" alt="shortlist">
                            </div>
                            <div>
                                <span>Add to Shortlist</span>
                            </div>
                        </a>
                        <a href="partner_search_profile.php" class="button">
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
        <!-- End Submodule -->
      
    </main>';
        }
    }

    ?>


    <?php
    require_once "submodules/footer_after_login.php"
    ?>

</body>

</html>