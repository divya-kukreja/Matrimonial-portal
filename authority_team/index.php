<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Local CSS File -->
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="../images/favicon.ico" type="image/ico">
    <title>Home page</title>
</head>
<body>
    <nav>
        <div class="navbar-top">
            <img src="../images/logo.png" alt="brand-logo" class="brand-logo">
            <ul>
                <li>
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li>
                    <a class="nav-link" href="approved_applications.php">Approved Applications</a>
                </li>
                <li>
                    <a class="nav-link" href="rejected_applications.php">Rejected Applications</a>
                </li>
                <li>
                    <a class="nav-link" href="#" id="loginBtn1">Logout</a>
                </li>
            </ul>
        </div>
        <div class="tagline">
            <span class="brand-tagline">You know you're in love when you can't fall asleep because reality is finally better than your dreams.</span>
        </div>
    </nav>
    <main>
        <div class="table-responsive" id="approveTable">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name of Applicant</th>
                        <th>Country</th>
                        <th>Date of Birth</th>
                        <th>State</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Parth Kalbag</td>
                    <td>India</td>
                    <td>04/05/2001</td>
                    <td>Maharashtra</td>
                    <td>345345345</td>
                    <td>abc@gmail.com</td>
                    <td class="formAction">
                        <form method="post">
                            <input type="hidden" name="user_id" value="1234">
                            <div class="approveBtn">
                                <div>
                                    <img src="images/check-circle-regular.png">
                                </div>
                                <div>
                                    <button type="submit" class="approveBtn">Approve</button>
                                </div>
                            </div>
                        </form>
                        <form method="post">
                            <input type="hidden" name="user_id" value="1234">
                            <div class="rejectBtn">
                                <div>
                                    <img src="images/times-solid.png">
                                </div>
                                <div>
                                    <button type="submit" class="rejectBtn">Reject</button>
                                </div>
                            </div>
                        </form>
                        <form method="post">
                            <input type="hidden" name="user_id" value="1234">
                            <div class="viewProfile">
                                <div>
                                    <img src="images/user-solid.png">
                                </div>
                                <div>
                                    <a href="personal_profile.php?id=1" class="viewProfile">View Profile</a>
                                </div>
                            </div>
                        </form>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>