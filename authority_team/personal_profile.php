<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Your Profile</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../users/css/profile.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="../images/favicon.ico" type="image/ico">
</head>
<body>
    <nav>
        <div class="navbar-top">
            <img src="../images/logo.png" alt="brand-logo" class="brand-logo">
            <ul>
                <li>
                    <a class="nav-link" href="index.php?auth_id=<?php echo $_SESSION["auth_id"];?>">Home</a>
                </li>
                <li>
                    <a class="nav-link" href="approved_applications.php">Approved Applications</a>
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
            $userID = $_GET["id"] ?? false;

            if (isset($userID)) {
                $userSQL = "SELECT * FROM profile WHERE user_id='" . $userID . "'";


                $checkIfAuthority = $conn->query("SELECT * FROM authority WHERE auth_id='" . $_SESSION["auth_id"] . "'");

                if ($checkIfAuthority->num_rows > 0) {
                    $userExec = $conn->query($userSQL);

                    if ($userExec->num_rows > 0) {
                        while ($user = $userExec->fetch_assoc()) {
                            echo "<section>";
                            echo "<form>";
                            echo "<br>";
                            echo "<div class='asterick'>&nbsp;</div>";
                            echo "<div class='general'><span>GENERAL INFORMATION</span></div>";
                            # Image
                            echo "<div style='display: flex;justify-content: center;align-items: center;' class='img'>";
                            echo "<img height='200' width='200' src= '" . $user['images'] . "'>";
                            echo "</div>";
                            echo "<br>";
                            echo "<div class='container'>";
                            echo "<div class='info'>";
                            echo "<div class='same-for-all'>";
                            echo "<section>";
                            echo "<label>Full Name* : </label>";
                            echo "<input type='text' placeholder='" . $user["name"] . "' required disabled>";
                            echo "</section>";
                            echo "<section>";
                            echo "<label>Country* : </label>";
                            echo "<input type='text' placeholder='" . $user["country"] . "' required disabled>";
                            echo "</section>";
                            echo "<section>";
                            echo "<label>Date of Birth* : </label>";
                            echo "<input type='text' placeholder='" . $user["dob"] . "' required disabled>";
                            echo "</section>";
                            echo "<section>";
                            echo "<label>City* : </label>";
                            echo "<input type='text' placeholder='" . $user["city"] . "' required disabled>";
                            echo "</section>";
                            echo "<section>";
                            echo "<label>State* : </label>";
                            echo "<input type='text' placeholder='" . $user["state"] . "' required disabled>";
                            echo "</section>";
                            echo "<section>";
                            echo "<label>Mobile* : </label>";
                            echo "<input type='text' placeholder='" . $user["mobile"] . "' required disabled>";
                            echo "</section>";
                            echo "<section>";
                            echo "<label>Email* : </label>";
                            echo "<input type='text' placeholder='" . $user["email"] . "' required disabled>";
                            echo "</section>";
                            echo "<section style='margin-top:15px;'>";
                            echo "<label>Gender* : </label>";
                            echo "<input type='text' placeholder='" . $user["gender"] . "' required disabled>";
                            echo "</section>";
                            echo "</div>";
                            echo "</div>";

                            # Personal Information
                            echo "<div class='general'><span>PERSONAL INFORMATION</span></div>";
                            echo "<div class='info'>";
                            echo "<div class='same-for-all'>";
                            echo "<section>";
                            echo "<label>Citizenship* : </label>";
                            echo "<input type='text' placeholder='" . $user["citizen"] . "' required disabled>";
                            echo "</section>";
                            echo "<section>";
                            echo "<label>Height* : </label>";
                            echo "<input type='text' placeholder='" . $user["height"] . "' required disabled>";
                            echo "</section>";
                            echo "<section>";
                            echo "<label>Marital Status* : </label>";
                            echo "<input type='text' placeholder='" . $user["maritial"] . "' required disabled>";
                            echo "</section>";
                            echo "<section>";
                            echo "<label>Having Children* : </label>";
                            echo "<input type='text' placeholder='" . $user["children"] . "' required disabled>";
                            echo "</section>";
                            echo "<section>";
                            echo "<label>Smoke* : </label>";
                            echo "<input type='text' placeholder='" . $user["smoke"] . "' required disabled>";
                            echo "</section>";
                            echo "<section>";
                            echo "<label>Drink* : </label>";
                            echo "<input type='text' placeholder='" . $user["drink"] . "' required disabled>";
                            echo "</section>";
                            echo "<section>";
                            echo "<label>Diet* : </label>";
                            echo "<input type='text' placeholder='" . $user["diet"] . "' required disabled>";
                            echo "</section>";
                            echo "<section style='margin-top:15px;'>";
                            echo "<label>Blood Group* : </label>";
                            echo "<input type='text' placeholder='" . $user["blood"] . "' required disabled>";
                            echo "</section>";
                            echo "<section style='margin-top:15px;'>";
                            echo "<label>Body Type* : </label>";
                            echo "<input type='text' placeholder='" . $user["bodytype"] . "' required disabled>";
                            echo "</section>";
                            echo "</div>";
                            echo "</div>";

                            # Family Information
                            echo "<div class='general'><span>FAMILY INFORMATION</span></div>";
                            echo "<div class='info'>";
                            echo "<div class='same-for-all'>";
                            echo "<section>";
                            echo "<label>Number of members* : </label>";
                            echo "<input type='text' placeholder='" . $user["member"] . "' required disabled>";
                            echo "</section>";
                            echo "<section>";
                            echo "<label>Number of siblings* : </label>";
                            echo "<input type='text' placeholder='" . $user["sibling"] . "' required disabled>";
                            echo "</section>";
                            echo "<section>";
                            echo "<label>Mother's Occupation : </label>";
                            echo "<input type='text' placeholder='" . $user["moccupation"] . "' required disabled>";
                            echo "</section>";
                            echo "<section>";
                            echo "<label>Father's Occupation : </label>";
                            echo "<input type='text' placeholder='" . $user["foccupation"] . "' required disabled>";
                            echo "</section>";
                            echo "<section>";
                            echo "<label>Family Values* : </label>";
                            echo "<input type='text' placeholder='" . $user["familyvalues"] . "' required disabled>";
                            echo "</section>";
                            echo "<section>";
                            echo "<label>Family Status* : </label>";
                            echo "<input type='text' placeholder='" . $user["familystatus"] . "' required disabled>";
                            echo "</section>";
                            echo "</div>";
                            echo "</div>";

                            # Social Background and astrology
                            echo "<div class='general'><span>SOCIAL BACKGROUND AND ASTROLOGICAL DETAILS</span></div>";
                            echo "<div class='info'>";
                            echo "<div class='same-for-all'>";
                            echo "<section>";
                            echo "<label>Religion* : </label>";
                            echo "<input type='text' placeholder='" . $user["religion"] . "' required disabled>";
                            echo "</section>";
                            echo "<section>";
                            echo "<label>Mother Tongue* : </label>";
                            echo "<input type='text' placeholder='" . $user["mtongue"] . "' required disabled>";
                            echo "</section>";
                            echo "<section>";
                            echo "<label>Caste : </label>";
                            echo "<input type='text' placeholder='" . $user["caste"] . "' required disabled>";
                            echo "</section>";
                            echo "<section>";
                            echo "<label>Country of Birth : </label>";
                            echo "<input type='text' placeholder='" . $user["countrybirth"] . "' required disabled>";
                            echo "</section>";
                            echo "<section>";
                            echo "<label>City of Birth* : </label>";
                            echo "<input type='text' placeholder='" . $user["citybirth"] . "' required disabled>";
                            echo "</section>";
                            echo "<section style='margin-top: 15px;'>";
                            echo "<label>Are you manglik?* : </label>";
                            echo "<input type='text' placeholder='" . $user["manglik"] . "' required disabled>";
                            echo "</section>";
                            echo "</div>";
                            echo "</div>";

                            # Education Details
                            echo "<div class='general'><span>EDUCATION DETAILS</span></div>";
                            echo "<div class='info'>";
                            echo "<div class='same-for-all'>";
                            echo "<section>";
                            echo "<label>Education Level* : </label>";
                            echo "<input type='text' placeholder='" . $user["edulevel"] . "' required disabled>";
                            echo "</section>";
                            echo "<section>";
                            echo "<label>Education Field* : </label>";
                            echo "<input type='text' placeholder='" . $user["edufield"] . "' required disabled>";
                            echo "</section>";
                            echo "<section>";
                            echo "<label>Occupation : </label>";
                            echo "<input type='text' placeholder='" . $user["occupation"] . "' required disabled>";
                            echo "</section>";
                            echo "<section>";
                            echo "<label>Annual Income* : </label>";
                            echo "<input type='text' placeholder='" . $user["income"] . "' required disabled>";
                            echo "</section>";
                            echo "</div>";
                            echo "</div>";

                            # More about yourself
                            echo "<div class='general'><span>MORE ABOUT YOURSELF AND IDEAL PARTNER</span></div>";
                            echo "<div class='info'>";
                            echo "<div class='form-group'>";
                            echo "<label> Describe about yourself and family* : (2000 char)</label>";
                            echo "<textarea class='form-control' id='ta1' rows='5' disabled>" . $user["self"] . "</textarea>";
                            echo "</div>";
                            echo "<div class='form-group'>";
                            echo "<label>  Write about your Ideal partner* : (2000 char)</label>";
                            echo "<textarea class='form-control' id='ta1' rows='5' disabled>" . $user["partner"] . "</textarea>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                            echo "</form>";
                            echo "</section>";
                        }
                    } else {
                        echo "<h2>No user selected</h2>";
                    }
                } else {
                    echo "<h2>No user selected</h2>";
                }
            }
        ?>
    </main>
</body>
</html>
