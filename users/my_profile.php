<!DOCTYPE html>


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
    <!-- <link rel="stylesheet" href="css/view_profile.css"> -->
    <link rel="icon" href="../images/favicon.ico" type="image/ico">
</head>

<body>
    <?php
    require_once "submodules/nav_after_login.php";
    ?>



    <section>
        <br>
        <div class="heading">
            View Your Profile &nbsp;<img src="../images/profile.png" alt="">
        </div>

        <form>
            <br>
            <div class="asterick">Fields are mark with * are compulsory</div>

            <div class="general">
                <span>GENERAL INFORMATION</span>
            </div>
            <?php
            require_once "photo.php"
            ?>
            <br>

            <div class="container">
                <div class="info">
                    <div class="same-for-all">
                        <section>
                            <label>Full Name* : </label>
                            <input type="text" name="' . $name . '" placeholder="Divya Kukreja" required disabled>
                        </section>
                        <section>
                            <label>Country* : </label>
                            <input type="text" name="' . $country . '" placeholder="India" required disabled>
                        </section>
                        <section>
                            <label>Date Of Birth* : </label>
                            <input type="text" name="' . $dob . '" placeholder="06/12/2000" required disabled>
                        </section>
                        <section>
                            <label>City* : </label>
                            <input type="text" name="' . $city . '" placeholder="Ulhasnagar" required disabled>
                        </section>
                        <section>
                            <label>State* : </label>
                            <input type="text" name="' . $state . '" placeholder="Maharashtra" required disabled>
                        </section>
                        <section>
                            <label>Mobile* : </label>
                            <input type="tel" name="' . $mobile . '" placeholder="9604160454" required disabled>
                        </section>
                        <section>
                            <label>Email* : </label>
                            <input type="email" name="' . $email . '" placeholder="kukrejadivyaneel@gmail.com" required disabled>
                        </section>
                        <section style="margin-top:15px;">
                            <label>Gender* : </label>
                            <input name="' . $gender . '" class="" placeholder="Female" required disabled>

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
                            <input type="text" name="' . $citizen . '" placeholder="Indian" required disabled>
                        </section>
                        <section>
                            <label>Height* : </label>
                            <input type="text" name="' . $height . '" placeholder="5.5'" required disabled>
                        </section>
                        <section style="margin-top:15px;">
                            <label>Maritial Status* : </label>
                            <input name="' . $maritial . '" class="" placeholder="Never Married" disabled>
                            </input>
                        </section>
                        <section>
                            <label>Having Children* : </label>
                            <input name="' . $children . '" class="" placeholder="no" disabled>

                            </input>
                        </section>
                        <section>
                            <label>Smoke* : </label>
                            <input name="' . $smoke . '" class="" placeholder="no" disabled>

                            </input>
                        </section>
                        <section>
                            <label>Drink* : </label>
                            <input name="' . $drink . '" class="" placeholder="no" disabled>

                            </input>
                        </section>
                        <section>
                            <label>Diet* : </label>
                            <input name="' . $diet . '" class="" placeholder="vegeterian" disabled>

                            </input>
                        </section>
                        <section>
                            <label>Blood Group* : </label>
                            <input name="' . $blood . '" class="" placeholder="O+" disabled>

                            </input>
                        </section>
                        <section>
                            <label>Body type* : </label>
                            <input type="text" name="' . $bodytype . '" placeholder="Slim" required disabled>
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
                            <input type="number" name="' . $member . '" minlength="1" placeholder="6" required disabled>
                        </section>
                        <section>
                            <label>Number of sibling* : </label>
                            <input type="number" name="' . $sibling . '" placeholder="2" required disabled>
                        </section>
                        <section>
                            <label>Mother\'s Occupation* : </label>
                            <input type="text" name="' . $moccupation . '" placeholder="Housewife" required disabled>
                        </section>
                        <section>
                            <label>Father\'s Occupation* : </label>
                            <input type="text" name="' . $foccupation . '" placeholder="Business" required disabled>
                        </section>
                        <section style="margin-top:15px;">
                            <label>Family Values* : </label>
                            <input name="' . $familyvalues . '" class="" placeholder="Modern" disabled>

                            </input>
                        </section>
                        <section>
                            <label>Family Status* : </label>
                            <input name="' . $familystatus . '" class="" placeholder="Neutral" disabled>

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
                            <input type="text" name="' . $religion . '" placeholder="Hindu" required disabled>
                        </section>
                        <section>
                            <label>Mother Tongue* : </label>
                            <input type="text" name="' . $mtongue . '" placeholder="Sindhi" required disabled>
                        </section>
                        <section>
                            <label>Caste* : </label>
                            <input type="text" name="' . $caste . '" placeholder="Sindhi" required disabled>
                        </section>
                        <section>
                            <label>Country of birth* : </label>
                            <input type="text" name="' . $countrybirth . '" placeholder="India" required disabled>
                        </section>
                        <section>
                            <label>City of birth* : </label>
                            <input type="text" name="' . $citybirth . '" placeholder="Ulhasnagar" required disabled>
                        </section>
                        <section style="margin-top:15px;">
                            <label>Are You Manglik ?* : </label>
                            <input name="' . $manglik . '" class="" placeholder="Yes" disabled>

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
                            <input type="text" name="' . $edulevel . '" class="" placeholder="Master's" disabled>

                            </input>
                        </section>
                        <section>
                            <label>Education Field* : </label>
                            <input type="text" name="' . $edufield . '" placeholder="Engineering" required disabled>
                        </section>
                        <section>
                            <label>Occupation* : </label>
                            <input type="text" name="' . $occupation . '" placeholder="Software Engineer" required disabled>
                        </section>
                        <section>
                            <label>Annual Income* : </label>
                            <input type="text" name="' . $income . '" placeholder="15 LPA" required disabled>
                        </section>
                    </div>
                </div>

                <div class="general">
                    <span>MORE ABOUT YOURSELF AND IDEAL PARTNER</span>
                </div>

                <div class="info">
                    <div class="form-group">
                        <label> Describe about yourself and family* : (2000 char)</label>
                        <textarea name="' . $self . '" class="form-control" id="ta1" rows="5" onkeyup="count_self(this);" disabled>Hello . I am a very dedicated and an honest person. Love for my work !</textarea>
                        <span class="text-muted pull-right" id="count2">2000</span><span> &nbsp;Characters left</span>
                    </div>
                    <div class="form-group">
                        <label> Write about your Ideal partner* : (2000 char)</label>
                        <textarea name="' . $partner . '" class="form-control" id="ta2" rows="5" onkeyup="count_partner(this);" disabled>>Hello . I want a very dedicated and an honest person. Love for one's work !</textarea>
                        <span class="text-muted pull-right" id="count3">2000</span><span> &nbsp;Characters left</span>
                    </div>
                </div>
            </div>



        </form>
    </section>





</body>
<?php
require_once "submodules/footer_after_login.php"
?>

</html>