<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Local CSS File -->
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../users/css/profile.css">
    <link rel="stylesheet" href="../users/css/shortlist.css">
    <link rel="icon" href="../images/favicon.ico" type="image/ico">
    <title>Approved Applications</title>
</head>
<body>
    <nav>
        <div class="navbar-top">
            <img src="../images/logo.png" alt="brand-logo" class="brand-logo">
            <ul>
                <li>
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li>
                    <a class="nav-link active" href="approved_applications.php">Approved Applications</a>
                </li>
                <li>
                    <a class="nav-link" href="rejected_applications.php">Rejected Applications</a>
                </li>
                <li>
                    <a class="nav-link" href="logout.php" id="loginBtn1">Logout</a>
                </li>
            </ul>
        </div>
        <div class="tagline">
            <span class="brand-tagline">You know you're in love when you can't fall asleep because reality is finally better than your dreams.</span>
        </div>
    </nav>
    <main>
        <?php
            require_once "mysql_connection.php";

            session_start();
            $authID = $_SESSION["auth_id"] ?? false;
            $approvedSQL = "SELECT user_id FROM is_authorized_user WHERE remarks='OK' AND auth_id='" . $authID . "'";

            if (isset($authID)) {
                $approvedResult = $conn->query($approvedSQL);

                if (isset($approvedResult)) {
                    if ($approvedResult->num_rows > 0) {
                        while ($approvedResult1 = $approvedResult->fetch_assoc()) {
                            $approvedUserSQL = "SELECT * FROM profile WHERE user_id='" . $approvedResult1["user_id"] . "'";
                            $approvedUserConn = $conn->query($approvedUserSQL);

                            if ($approvedUserConn->num_rows > 0) {
                                while ($approvedUserDetails = $approvedUserConn->fetch_assoc()) {
                                    echo "<div class='card'>";
                                    # Image
                                    echo "<div style='display: flex;justify-content: center;align-items: center;' class='img'>";
                                    echo "<img height='200' width='200' src= '../users/" . $approvedUserDetails['images'] . "'>";
                                    echo "</div>";
                                    echo "<div class='info'>";
                                    echo "<div>";
                                    echo "<h4>MIH(" . $approvedUserDetails["user_id"] . ")</h4>";
                                    echo "<small>" . $approvedUserDetails["name"] . "</small>";
                                    echo "<hr>";
                                    echo "</div>";
                                    echo "<div class='subinfo'>";
                                    echo "<div class='subinfo1'>";
                                    echo "<div class='largeScreenText'>";
                                    echo "<span>DOB: | </span>";
                                    echo "<span>" . $approvedUserDetails["dob"] . "</span>";
                                    echo "<span>Religion: | </span>";
                                    echo "<span>" . $approvedUserDetails["religion"] . "</span>";
                                    echo "<span>Martial Status: | </span>";
                                    echo "<span>" . $approvedUserDetails["maritial"] . "</span>";
                                    echo "<span>City: | </span>";
                                    echo "<span>" . $approvedUserDetails["city"] . "</span>";
                                    echo "</div>";
                                    echo "<div class='smallSizeDisplay'>";
                                    echo "<div>";
                                    echo "<span>DOB: | </span>";
                                    echo "<span>" . $approvedUserDetails["dob"] . "</span>";
                                    echo "</div>";
                                    echo "<div>";
                                    echo "<span>Religion: | </span>";
                                    echo "<span>" . $approvedUserDetails["religion"] . "</span>";
                                    echo "</div>";
                                    echo "<div>";
                                    echo "<span>Martial Status: |</span>";
                                    echo "<span>" . $approvedUserDetails["maritial"] . "</span>";
                                    echo "</div>";
                                    echo "<div>";
                                    echo "<span>City: |</span>";
                                    echo "<span>" . $approvedUserDetails["city"] . "</span>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "</div>";
                                }
                            }
                        }
                    }
                }
            }
            else {
                echo "NA";
            }

        ?>

        <!--
        <div class="card">
            <div class="img">
                <a href="partner_search.php"><img src="../images/ladyprofile.png" alt="Lady" height="200"></a>
            </div>
            <div class="info">
                <div>
                    <h4>MIH (2087)</h4>
                    <small>Sent : 23rd Nov 2020</small>
                    <hr>
                </div>
                <div class="subinfo">
                    <div class="subinfo1">
                        <div class="largeScreenText">
                            <span>Age: </span>
                            <span>28 | </span>
                            <span>Religion: </span>
                            <span>Hindu | </span>
                            <span>Martial Status: </span>
                            <span>Unmarried | </span>
                            <span>city </span>
                            <span>surat| </span>
                        </div>

                        <div class="smallSizeDisplay">
                            <div>
                                <span>Age:&emsp;</span>
                                <span>28</span>
                            </div>
                            <div>
                                <span>Religion:&emsp;</span>
                                <span>Hindu</span>
                            </div>
                            <div>
                                <span>Martial Status:&emsp;</span>
                                <span>Unmarried</span>
                            </div>
                            <div>
                                <span>City:&emsp;</span>
                                <span>Surat</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        -->
    </main>
</body>
</html>