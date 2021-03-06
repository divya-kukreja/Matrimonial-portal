<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Your Profile</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="css/profile.css">
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
    require "submodules/_dbconnect.php";

    ?>
    <section>
        <br>
        <div class="heading">
            Make Your Profile &nbsp;<img src="../images/profile.png" alt="">
        </div>
        <div class="note">
            <p>NOTE : &nbsp; The profile form has to be complete in order to proceed further.In case any information is not finished is not furnished at the time of submitting application,then the same will not be considered for the purpos of match making.For further refer our policy rules</p>
        </div>
        <a href="../privacy.php"><button class="btn-1">Read More</button></a>


        <!-- Handling the form request -->
        <?php
        $showAlert = false;
        $method = $_SERVER['REQUEST_METHOD'];
        //echo $method;       // method check krne ke liye get hai ki post

        if ($method == "POST") {
            // Insert into profile table
            $name = $_POST['name'];
            $country = $_POST['country'];
            $dob = $_POST['dob'];
            $city     = $_POST['city'];
            $state    = $_POST['state'];
            $mobile     = $_POST['mobile'];
            $email     = $_POST['email'];
            $gender     = $_POST['gender'];
            $citizen     = $_POST['citizen'];
            $height     = $_POST['height'];
            $maritial    = $_POST['maritial'];
            $children     = $_POST['children'];
            $smoke     = $_POST['smoke'];
            $drink     = $_POST['drink'];
            $diet     = $_POST['diet'];
            $blood     = $_POST['blood'];
            $bodytype     = $_POST['bodytype'];
            $member     = $_POST['member'];
            $sibling     = $_POST['sibling'];
            $moccupation     = $_POST['moccupation'];
            $foccupation     = $_POST['foccupation'];
            $familyvalues     = $_POST['familyvalues'];
            $familystatus     = $_POST['familystatus'];
            $religion     = $_POST['religion'];
            $mtongue     = $_POST['mtongue'];
            $caste     = $_POST['caste'];
            $countrybirth     = $_POST['countrybirth'];
            $citybirth     = $_POST['citybirth'];
            $manglik              = $_POST['manglik'];
            $edulevel              = $_POST['edulevel'];
            $edufield              = $_POST['edufield'];
            $occupation              = $_POST['occupation'];
            $income              = $_POST['income'];
            $self           = $_POST['self'];
            $partner        = $_POST['partner'];
            //$timestamp = $_POST['timestamp'];

            $userID1 = $_SESSION["username"];

            if ($userID1 == $_SESSION["username"]) {
                // GET user default image
                $photoQuery = "SELECT * FROM profile WHERE user_id='" . $userID1 . "'";

                $res = $conn->query($photoQuery);

                $image = 'user_images/default_view.jpg';
                $signupID = null;
                $isAuthorized ='F';

                while ($result = $res->fetch_assoc()) {
                    $image = $result['images'];
                    $signupID = $result['signup_id'];
                    $isAuthorized = $result['is_authorized'];
                }
                $del = "Delete from `profile` where user_id='" . $userID1 . "'";
                $delres = mysqli_query($conn, $del);
                $sql = "INSERT INTO `profile`(`user_id`, `name`, `country`, `dob`, `city`, `state`, `mobile`, `email`, `gender`, `citizen`, `height`, `maritial`, `children`, `smoke`, `drink`, `diet`, `blood`, `bodytype`, `member`, `sibling`, `moccupation`, `foccupation`, `familyvalues`, `familystatus`, `religion`, `mtongue`, `caste`, `countrybirth`, `citybirth`, `manglik`, `edulevel`, `edufield`, `occupation`, `income`, `self`, `partner`, `timestamp`, `images`, `signup_id`, `is_authorized`) 
            VALUES ('$userID1','$name', '$country', '$dob', '$city', '$state', '$mobile', '$email', '$gender', '$citizen', '$height', '$maritial', '$children', '$smoke', '$drink', '$diet', '$blood', '$bodytype', '$member', '$sibling', '$moccupation', '$foccupation', '$familyvalues', '$familystatus', '$religion', '$mtongue', '$caste', '$countrybirth', '$citybirth', '$manglik', '$edulevel', '$edufield', '$occupation', '$income', '$self', '$partner',current_timestamp(), '$image', '$signupID', '$isAuthorized' )";

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

            else {
                echo die("403 Access forbidden");
            }
        }

        ?>





        <!-- Handled request post -->





        <form action=" <?php $_SERVER['REQUEST_URI']; ?>" method="POST">

            <br>
            <div class="asterick">Fields are mark with * are compulsory</div>
            <?php
            require_once "../admin/mysql_connection.php";
            $userID = $_SESSION["username"] ?? false;

            if (isset($userID)) {
                $userSQL = "select * FROM profile WHERE user_id='" . $userID . "'";

                $userExec = $conn->query($userSQL);
                $row = $userExec->fetch_assoc();

                if ($userExec->num_rows > 0) {

                    if ($row['is_authorized'] === 'T') {
                        echo
                            '<div class="general">
                <span>GENERAL INFORMATION</span>
            </div>'
                            .
                            # Image
                            "<div style='display: flex;justify-content: center;align-items: center;'>" .
                            "<img height='200' width='200' src= '" . $row['images'] . "'>" .
                            "</div>" .
                            '
            <br>
            <div class="info">
                <div class="same-for-all">
                    <section>
                        <label>Full Name* : </label>
                        <input type="text" name="name" value = "' . $row['name'] . '" required>
                    </section>
                    <section>
                        <label>Country* : </label>
                        <input type="text" name="country" value = "' . $row['country'] . '" required>
                    </section>
                    <section>
                        <label>Date Of Birth* : </label>
                        <input type="date" value = "' . $row['dob'] . '" name="dob" required>
                    </section>
                    <section>
                        <label>City* : </label>
                        <input type="text" name="city" value = "' . $row['city'] . '" required>
                    </section>
                    <section>
                        <label>State* : </label>
                        <input type="text" name="state" value = "' . $row['state'] . '" " required>
                    </section>
                    <section>
                        <label>Mobile* : </label>
                        <input type="tel" name="mobile" value = "' . $row['mobile'] . '" required>
                    </section>
                    <section>
                        <label>Email* : </label>
                        <input type="email" name="email" value = "' . $row['email'] . '" required>
                    </section>
                    <section style="margin-top:15px;">
                        <label>Gender* : </label>
                        <input name="gender" class="input" value = "' . $row['gender'] . '" required>
                           
                        </input>
                    </section>
                </div>
            </div>

            <div class="general">
                <span>PERSONAL INFORMATION</span>
            </div>
            <div class="info">
                <div class="same-for-all">
                    <section>
                        <label>Citizenship* : </label>
                        <input type="text" value = "' . $row['citizen'] . '" name="citizen" required>
                    </section>
                    <section>
                        <label>Height* : </label>
                        <input type="text" name="height" value = "' . $row['height'] . '" required>
                    </section>
                    <section style="margin-top:15px;">
                        <label>Maritial Status* : </label>
                        <input name="maritial" value = "' . $row['maritial'] . '" class="input">
                            
                        </input>
                    </section>
                    <section>
                        <label>Having Children* : </label>
                        <input name="children"  value = "' . $row['children'] . '"class="input">
                           
                        </input>
                    </section>
                    <section>
                        <label>Smoke* : </label>
                        <input name="smoke" value = "' . $row['smoke'] . '" class="input">
                           
                        </input>
                    </section>
                    <section>
                        <label>Drink* : </label>
                        <input name="drink" value = "' . $row['drink'] . '" class="input">
                          
                        </input>
                    </section>
                    <section>
                        <label>Diet* : </label>
                        <input name="diet" value = "' . $row['diet'] . '" class="input">
                         
                        </input>
                    </section>
                    <section>
                        <label>Blood Group* : </label>
                        <input name="blood" value = "' . $row['blood'] . '" class="input">
                          
                        </input>
                    </section>
                    <section>
                        <label>Body type* : </label>
                        <input type="text" name="bodytype" value = "' . $row['bodytype'] . '" required>
                    </section>
                </div>

            </div>

            <div class="general">
                <span>Family INFORMATION</span>
            </div>
            <div class="info">
                <div class="same-for-all">
                    <section>
                        <label>Number of members* : </label>
                        <input type="number" name="member" value = "' . $row['member'] . '" minlength="1" required>
                    </section>
                    <section>
                        <label>Number of sibling* : </label>
                        <input type="number" name="sibling" value = "' . $row['sibling'] . '" required>
                    </section>
                    <section>
                        <label>Mother\'s Occupation* : </label>
                        <input type="text" name="moccupation" value = "' . $row['moccupation'] . '" required>
                    </section>
                    <section>
                        <label>Father\'s Occupation* : </label>
                        <input type="text" name="foccupation" value = "' . $row['foccupation'] . '" required>
                    </section>
                    <section style="margin-top:15px;">
                        <label>Family Values* : </label>
                        <input name="familyvalues" value = "' . $row['familyvalues'] . '" class="input">
                          
                        </input>
                    </section>
                    <section>
                        <label>Family Status* : </label>
                        <input name="familystatus" value = "' . $row['familystatus'] . '"class="input">
                            
                        </input>
                    </section>
                </div>
            </div>

            <div class="general">
                <span>SOCIAL BACKGROUND AND ASTROLOGICAL DETAILS</span>
            </div>
            <div class="info">
                <div class="same-for-all">
                    <section>
                        <label>Religion* : </label>
                        <input type="text" name="religion" value = "' . $row['religion'] . '" required>
                    </section>
                    <section>
                        <label>Mother Tongue* : </label>
                        <input type="text" name="mtongue"value = "' . $row['mtongue'] . '"  required>
                    </section>
                    <section>
                        <label>Caste* : </label>
                        <input type="text" name="caste" value = "' . $row['caste'] . '" required>
                    </section>
                    <section>
                        <label>Country of birth* : </label>
                        <input type="text" name="countrybirth" value = "' . $row['countrybirth'] . '" required>
                    </section>
                    <section>
                        <label>City of birth* : </label>
                        <input type="text" name="citybirth" value = "' . $row['citybirth'] . '" required>
                    </section>
                    <section style="margin-top:15px;">
                        <label>Are You Manglik ?* : </label>
                        <input name="manglik" value = "' . $row['manglik'] . '" class="input">
                            
                        </input>
                    </section>
                </div>
            </div>

            <div class="general">
                <span>EDUCATION DETAILS</span>
            </div>
            <div class="info">
                <div class="same-for-all">
                    <section>
                        <label>Education level* : </label>
                        <input type="text" name="edulevel" class="input" value = "' . $row['edulevel'] . '">
                         
                        </input>
                    </section>
                    <section>
                        <label>Education Field* : </label>
                        <input type="text" name="edufield" value = "' . $row['edufield'] . '" required>
                    </section>
                    <section>
                        <label>Occupation* : </label>
                        <input type="text" name="occupation" value = "' . $row['occupation'] . '" required>
                    </section>
                    <section>
                        <label>Annual Income* : </label>
                        <input type="text" name="income" value = "' . $row['income'] . '"  required>
                    </section>
                </div>
            </div>

            <div class="general">
                <span>MORE ABOUT YOURSELF AND IDEAL PARTNER</span>
            </div>

            <div class="info">
                <div class="form-group">
                    <label> Describe about yourself and family* : (2000 char)</label>
                    <textarea name="self" class="form-control" id="ta1"  rows="5" onkeyup="count_self(this);">' . $row['self'] . '</textarea>
                    <span class="text-muted pull-right" id="count2">2000</span><span> &nbsp;Characters left</span>
                </div>
                <div class="form-group">
                    <label> Write about your Ideal partner* : (2000 char)</label>
                    <textarea name="partner" class="form-control" id="ta2"   rows="5" onkeyup="count_partner(this);">' . $row['partner'] . '</textarea>
                    <span class="text-muted pull-right" id="count3">2000</span><span> &nbsp;Characters left</span>
                </div>
            </div>';

                        echo '<div class="info">
<a href="edit_profile.php"><button type="submit" class="submit" name="submit">Submit</button></a>
                        
</div>';

                    } else {
                        echo "You are not yet authorized to perform this action";
                    }
                }
            }
            ?>


        </form>
    </section>

    <?php
    require_once "submodules/footer_after_login.php"
    ?>

    <script>
        function count_self(obj) {
            var element = document.getElementById('count2');
            element.innerHTML = 2000 - obj.value.length;
            element.style.color = "red";
        }

        function count_partner(obj) {
            var element = document.getElementById('count3');
            element.innerHTML = 2000 - obj.value.length;
            element.style.color = "red";
        }
    </script>
</body>

</html>