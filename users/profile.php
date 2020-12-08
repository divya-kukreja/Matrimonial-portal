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
    <link rel="icon" href="../images/favicon.ico" type="image/ico">
    <link rel="stylesheet" href="css/navSmall.css">
    <script src="js/navbar.js" defer></script>
    <style>
        #img {
            display: flex;
            margin: auto;
            width: 180px;
            height: 180px;
        }

        #upload {
            display: flex;
            margin: auto;
            position: relative;
        }
    </style>
</head>

<body>
<?php   session_start(); $_SESSION["username"] = $_GET["signup_id"]; ?>
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

<!-- Small Nav -->
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

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script>
        $('.icon').click(function() {
            $('span').toggleClass("cancel");
        });
    </script>
    <?php
    require "submodules/_dbconnect.php";

    ?>

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

    $maxIDSQL = "SELECT max(user_id) as user_id FROM profile";

    $id=1;
    $res = $conn->query($maxIDSQL);

    if ($res->num_rows > 0) {
        while ($result = $res->fetch_assoc()) {
            $id = $result["user_id"] + 1;
        }
    }

    $_FILES['image']['name'] = "user-" . $id . ".jpg";
    $imagePath = "user_images/" . basename($_FILES['image']['name']);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
        $message = "Successful Upload";
    }

    $signup_id = $_GET["signup_id"] ?? false;

    if (isset($signup_id)) {
        $sql = "INSERT INTO `profile`(`user_id`, `name`, `country`, `dob`, `city`, `state`, `mobile`, `email`, `gender`, `citizen`, `height`, `maritial`, `children`, `smoke`, `drink`, `diet`, `blood`, `bodytype`, `member`, `sibling`, `moccupation`, `foccupation`, `familyvalues`, `familystatus`, `religion`, `mtongue`, `caste`, `countrybirth`, `citybirth`, `manglik`, `edulevel`, `edufield`, `occupation`, `income`, `self`, `partner`, `timestamp`, `images`, `signup_id`) 
            VALUES ('$signup_id', '$name', '$country', '$dob', '$city', '$state', '$mobile', '$email', '$gender', '$citizen', '$height', '$maritial', '$children', '$smoke', '$drink', '$diet', '$blood', '$bodytype', '$member', '$sibling', '$moccupation', '$foccupation', '$familyvalues', '$familystatus', '$religion', '$mtongue', '$caste', '$countrybirth', '$citybirth', '$manglik', '$edulevel', '$edufield', '$occupation', '$income', '$self', '$partner',current_timestamp(), '$imagePath', '$signup_id')";

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
        echo "403 Forbidden";
    }
}

?>

<?php
$checkIfProfileComplete = $conn->query("SELECT * FROM profile WHERE user_id='" . $_SESSION["username"] . "'");

if ($checkIfProfileComplete->num_rows <= 0) {
    echo '
              <section>
        <br>
        <div class="heading">
            Make Your Profile &nbsp;<img src="../images/profile.png" alt="">
        </div>
        <div class="note">
            <p>NOTE : &nbsp; The profile form has to be complete in order to proceed further.In case any information is not finished is not furnished at the time of submitting application,then the same will not be considered for the purpos of match making.For further refer our policy rules</p>
        </div>
        
        <!-- Handled request post -->
        <form action=" ' .  $_SERVER['REQUEST_URI']  .

        '" method="POST" enctype="multipart/form-data">
            <br>
            <div class="asterick">Fields are mark with * are compulsory</div>

            <div class="general">
                <span>GENERAL INFORMATION</span>
            </div>
            <div class="profile">
                <img src="user_images/default_view.jpg" id="img" alt="" height="60" width="60"><br>
                <input type="file" name="image" onchange="preview(event)" id="upload" required><br>
            </div>

            <script>
                function preview(event) {
                    var input = event.target.files[0];
                    var reader = new FileReader();

                    reader.onload = function() {
                        var result = reader.result;
                        var img = document.getElementById("img");
                        img.src = result;
                    }
                    reader.readAsDataURL(input)
                }
            </script>
            <br>
            <div class="info">
                <div class="same-for-all">
                    <section>
                        <label>Full Name* : </label>
                        <input type="text" name="name" placeholder="first middle last name(sequence)" required>
                    </section>
                    <section>
                        <label>Country* : </label>
                        <input type="text" name="country" required>
                    </section>
                    <section>
                        <label>Date Of Birth* : </label>
                        <input type="date" name="dob" required>
                    </section>
                    <section>
                        <label>City* : </label>
                        <input type="text" name="city" placeholder="currently living" required>
                    </section>
                    <section>
                        <label>State* : </label>
                        <input type="text" name="state" placeholder="currently living" required>
                    </section>
                    <section>
                        <label>Mobile* : </label>
                        <input type="tel" name="mobile" required>
                    </section>
                    <section>
                        <label>Email* : </label>
                        <input type="email" name="email" required>
                    </section>
                    <section style="margin-top:15px;">
                        <label>Gender* : </label>
                        <select name="gender" class="select" required>
                            <option>select an option</option>
                            <option>Groom</option>
                            <option>Bride</option>
                            <option>Others</option>
                        </select>
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
                        <input type="text" name="citizen" required>
                    </section>
                    <section>
                        <label>Height* : </label>
                        <input type="text" name="height" placeholder="mention in feets" required>
                    </section>
                    <section style="margin-top:15px;">
                        <label>Maritial Status* : </label>
                        <select name="maritial" class="select">
                            <option>select an option</option>
                            <option>Married</option>
                            <option>Never Married</option>
                            <option>Awaiting for divorce</option>
                            <option>Widow</option>
                        </select>
                    </section>
                    <section>
                        <label>Having Children* : </label>
                        <select name="children" class="select">
                            <option>select an option</option>
                            <option>no</option>
                            <option>yes,living together</option>
                            <option>yes,not living together</option>
                        </select>
                    </section>
                    <section>
                        <label>Smoke* : </label>
                        <select name="smoke" class="select">
                            <option>select an option</option>
                            <option>Yes</option>
                            <option>No</option>
                            <option>Occasionally</option>
                        </select>
                    </section>
                    <section>
                        <label>Drink* : </label>
                        <select name="drink" class="select">
                            <option>select an option</option>
                            <option>Yes</option>
                            <option>No</option>
                            <option>Occasionally</option>
                        </select>
                    </section>
                    <section>
                        <label>Diet* : </label>
                        <select name="diet" class="select">
                            <option>select an option</option>
                            <option>Vegeterian</option>
                            <option>Non vegeterian</option>
                            <option>Eggeterian</option>
                            <option>Jain</option>
                            <option>Occasionally Non veg</option>
                        </select>
                    </section>
                    <section>
                        <label>Blood Group* : </label>
                        <select name="blood" class="select">
                            <option>select an option</option>
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                            <option>O+</option>
                            <option>O-</option>
                        </select>
                    </section>
                    <section>
                        <label>Body type* : </label>
                        <input type="text" name="bodytype" required>
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
                        <input type="number" name="member" minlength="1" required>
                    </section>
                    <section>
                        <label>Number of sibling* : </label>
                        <input type="number" name="sibling" required>
                    </section>
                    <section>
                        <label>Mother\'s Occupation* : </label>
                        <input type="text" name="moccupation" required>
                    </section>' . '
                    <section>
                        <label>Father\'s Occupation* : </label>
                        <input type="text" name="foccupation" required>
                    </section>
                    <section style="margin-top:15px;">
                        <label>Family Values* : </label>
                        <select name="familyvalues" class="select">
                            <option>select an option</option>
                            <option>Traditional</option>
                            <option>Modern</option>
                            <option>liberal</option>
                        </select>
                    </section>
                    <section>
                        <label>Family Status* : </label>
                        <select name="familystatus" class="select">
                            <option>select an option</option>
                            <option>Join</option>
                            <option>Neutral</option>
                            <option>Alone</option>
                        </select>
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
                        <input type="text" name="religion" required>
                    </section>
                    <section>
                        <label>Mother Tongue* : </label>
                        <input type="text" name="mtongue" required>
                    </section>
                    <section>
                        <label>Caste* : </label>
                        <input type="text" name="caste" required>
                    </section>
                    <section>
                        <label>Country of birth* : </label>
                        <input type="text" name="countrybirth" required>
                    </section>
                    <section>
                        <label>City of birth* : </label>
                        <input type="text" name="citybirth" required>
                    </section>
                    <section style="margin-top:15px;">
                        <label>Are You Manglik ?* : </label>
                        <select name="manglik" class="select">
                            <option> Select an option </option>
                            <option> Yes </option>
                            <option> No </option>
                            <option> Don\'t Know </option> ' . '
                        </select>
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
                        <select type="text" name="edulevel" class="select">
                            <option> Select an option </option>
                            <option>High School</option>
                            <option> Diploma </option>
                            <option> Bachelors </option>
                            <option> Graduate </option>
                            <option> masters </option>
                            <option> Doctorate </option>
                        </select>
                    </section>
                    <section>
                        <label>Education Field* : </label>
                        <input type="text" name="edufield" required>
                    </section>
                    <section>
                        <label>Occupation* : </label>
                        <input type="text" name="occupation" required>
                    </section>
                    <section>
                        <label>Annual Income* : </label>
                        <input type="text" name="income" placeholder="In Indian currency" required>
                    </section>
                </div>
            </div>

            <div class="general">
                <span>MORE ABOUT YOURSELF AND IDEAL PARTNER</span>
            </div>

            <div class="info">
                <div class="form-group">
                    <label> Describe about yourself and family* : (2000 char)</label>
                    <textarea name="self" class="form-control" id="ta1" rows="5" onkeyup="count_self(this);"></textarea>
                    <span class="text-muted pull-right" id="count2">2000</span><span> &nbsp;Characters left</span>
                </div>
                <div class="form-group">
                    <label> Write about your Ideal partner* : (2000 char)</label>
                    <textarea name="partner" class="form-control" id="ta2" rows="5" onkeyup="count_partner(this);"></textarea>
                    <span class="text-muted pull-right" id="count3">2000</span><span> &nbsp;Characters left</span>
                </div>
            </div>

            <div class="info">
                <a href=""><button type="submit" class="submit" name="submit">Submit</button></a>
            </div>


        </form>
    </section>
          
            ';
}

else {
    echo "<br><br>.<div class='container-fluid'>
    <div class='jumbotron'>
      <p class='text-center' style='font-size:30px;font-weight:200;'>Your profile is already completed</p>
      <br>
      <p class='text-center' style='font-size:26px;font-weight:100;' >If you want to edit your profile you can go to edit profile menu in the section.
      </p>

    </div>
  ";
}
?>
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