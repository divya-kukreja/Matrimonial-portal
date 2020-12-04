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
</head>

<body>
    <?php
    require_once "submodules/nav_after_login.php";
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