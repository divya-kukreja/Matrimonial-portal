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
                    <a href="profile.php?signup_id=<?php echo $_SESSION["username"];?>">My Profile</a>
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
    $uid = $_GET['uid'];
    $id = $_GET['id'];
    $sql = "SELECT * FROM `profile` where user_id=$id";
    $result = mysqli_query($conn, $sql);

    // $num = mysqli_num_rows($result);
    // echo $num;

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['user_id'];
        $name = $row['name'];
        $religion = $row['religion'];
        $maritial = $row['maritial'];
        $mtongue = $row['mtongue'];
        $occupation = $row['occupation'];
        $image = $row['images'];
    }
    ?>


    <?php
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    //echo $method;       // method check krne ke liye get hai ki post

    if ($method == "POST") {
        // Insert into profile table
        $uid = $_GET['uid'];
        $id = $_GET['id'];


        $sql =    "INSERT INTO `shortlisted`(`user_id`, `shortlisted_id`) VALUES ('$uid', '$id')";

        $result = mysqli_query($conn, $sql);
        $showAlert = true;


        if ($showAlert) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> You should check in on some of those fields below.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
        }
    }

    ?>




    <main>
        <!-- Submodule -->
        <div class="card">
            <div class="img">
                <img src="<?php echo $image;?>" alt="" width="150" height="200">
            </div>
            <div class="info">
                <div>
                    <h4><?php echo $id; ?></h4>
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
                            <span><?php echo $name; ?></span>
                            <span><?php echo $religion; ?></span>
                            <span><?php echo $maritial; ?></span>
                            <span><?php echo $mtongue; ?></span>
                            <span><?php echo $occupation; ?></span>
                        </div>

                        <div class="smallSizeDisplay">
                            <div>
                                <span>Name:&nbsp;</span>
                                <span><?php echo $name; ?></span>
                            </div>
                            <div>
                                <span>Religion:&nbsp;</span>
                                <span><?php echo $religion; ?></span>
                            </div>
                            <div>
                                <span>Martial Status:&nbsp;</span>
                                <span><?php echo $maritial; ?></span>
                            </div>
                            <div>
                                <span>Mother Tongue:&nbsp;</span>
                                <span><?php echo $mtongue; ?></span>
                            </div>
                            <div>
                                <span>Profession:&nbsp;</span>
                                <span><?php echo $occupation; ?></span>
                            </div>
                        </div>

                        <!-- For Buttons -->
                        <div class="float-right">
                            <div class="buttons flex">
                                <form action=" <?php $_SERVER['REQUEST_URI']; ?>" method="post">

                                    <div>
                                        <!-- <img src="../images/star-regular.png" alt="shortlist"> -->

                                        <span>
                                            <button type="submit" class="btn btn-outline-secondary bg-light center">Add to Shortlist</button>
                                        </span>

                                        <!-- <span class="ml-50 col-sm-8">Add to Shortlist</span> -->
                                    </div>
                                    </a>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- End Submodule -->

    </main>
    <?php
    echo
        '<div my-3>
        <a href ="view_shortlists.php?uid=' . $uid . '" class="button text-center shortlist">
                                
                            <div class = "text-center">
                                <img src="../images/star-regular.png" alt="shortlist">
                            </div>
                            <div class = "text-center">
                                <span>View Your Shortlists</span>
                            </div>
                        </a>
                        </div>';
    ?>



    <?php
    require_once "./submodules/footer_after_login.php"
    ?>

</body>

</html>