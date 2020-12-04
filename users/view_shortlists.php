<!DOCTYPE html>


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
    require "submodules/_dbconnect.php";
    ?>
    <h1 class="text-center my-3">Your shortlisted Members are : </h1>
    <?php

    $userID = $_GET["uid"] ?? false;

    if (isset($userID)) {
        $userSQL = "SELECT DISTINCT `shortlisted_id` FROM `shortlisted` WHERE user_id='" . $userID . "'";
        //$userSQL = "SELECT  FROM shortlisted WHERE user_id='" . $userID . "'";

        $result = mysqli_query($conn, $userSQL);

        // if ($userExec->num_rows > 0) {
        //     while ($user = $userExec->fetch_assoc())
        // $id = $_GET['user_id'];
        //$sql = "SELECT * FROM `profile` ";
        //$result = mysqli_query($conn, $sql);

        $num = mysqli_num_rows($result);
        if ($num > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $sort =  $row['shortlisted_id'];
                //echo "$sort <br>";
                //$presult = mysqli_query($conn, $sort);

                // while ($prow = mysqli_fetch_assoc($presult)) {
                //     $sql = "SELECT * from `profile` where user_id = $sort";
                //     $presult = mysqli_query($conn, $sql);
                //     $num = mysqli_num_rows($presult);
                //     //echo $num;
                // }
                // $num = mysqli_num_rows($presult);
                // echo $num;


                $userSQL = "SELECT * FROM profile WHERE user_id='" . $sort . "'";
                $userExec = mysqli_query($conn, $userSQL);
                // $num = mysqli_num_rows($userExec);
                // echo $num;
                while ($row = mysqli_fetch_assoc($userExec)) {
                    $user_id =  $row['user_id'];
                    $name =  $row['name'];
                    $religion = $row['religion'];
                    $maritial = $row['maritial'];
                    $mtongue = $row['mtongue'];
                    $occupation = $row['occupation'];

                    // echo "$name <br>";
                    echo
                        '<main>
        <!-- Submodule -->
        <div class="card">
            <div class="img">
                <img src="' . $row['images'] . '" alt="" width="150" height="200">
            </div>
            <div class="info">
                <div>
                    <h4>' . $user_id . '</h4>
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
                            <span>' . $name . '</span>
                            <span>' . $religion . '</span>
                            <span>' . $maritial . '</span>
                            <span>' . $mtongue . '</span>
                            <span>' . $occupation . '</span>
                        </div>

                        <div class="smallSizeDisplay">
                            <div>
                                <span>Name:&nbsp;</span>
                                <span>' . $name . '</span>
                            </div>
                            <div>
                                <span>Religion:&nbsp;</span>
                                <span>' . $religion . '</span>
                            </div>
                            <div>
                                <span>Martial Status:&nbsp;</span>
                                <span>' . $maritial . '</span>
                            </div>
                            <div>
                                <span>Mother Tongue:&nbsp;</span>
                                <span>' . $mtongue . '</span>
                            </div>
                            <div>
                                <span>Profession:&nbsp;</span>
                                <span>' . $occupation . '</span>
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
    ?>


    <?php
    require_once "submodules/footer_after_login.php";
    ?>

</body>

</html>