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
    <!-- jQuery CDN -->
    <script src="js/jquery-3.5.1.min.js"></script>
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
                <?php
                    require_once "mysql_connection.php";

                    $sql = "SELECT * FROM profile where is_authorized='F'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {

                            $checkIfRejectedSQL = "SELECT * FROM is_authorized_user WHERE user_id='" . $row["user_id"] . "'";

                            $checkIfRejectedResult = $conn->query($checkIfRejectedSQL);

                            if ($checkIfRejectedResult->num_rows <= 0) {
                                echo "<tr>";
                                echo "<td>" . $row["name"] . "</td>";
                                echo "<td>" . $row["country"] . "</td>";
                                echo "<td>" . $row["dob"] . "</td>";
                                echo "<td>" . $row["state"] . "</td>";
                                echo "<td>" . $row["mobile"] . "</td>";
                                echo "<td>" . $row["email"] . "</td>";
                                echo "<td class='formAction'>";
                                echo "<form method='post'>";
                                echo "<input type='hidden' name='user_id' value='1234'>";
                                echo "<div class='approveBtn'>";
                                echo "<div>";
                                echo "<img src='images/check-circle-regular.png'>";
                                echo "</div>";
                                echo "<div>";
                                echo "<a style='cursor: pointer;' id='" . $row["user_id"] . "' class='approveBtn'>Approve</a>";
                                echo "</div>";
                                echo "</div>";
                                echo "</form>";
                                echo "<form method='post'>";
                                #echo "<input type='hidden' name='user_id' value='1234'>";
                                echo "<div class='rejectBtn'>";
                                echo "<div>";
                                echo "<img src='images/times-solid.png'>";
                                echo "</div>";
                                echo "<div>";
                                echo "<a style='cursor: pointer;' id='" . $row["user_id"] . "' class='rejectBtn'>Reject</a>";
                                echo "</div>";
                                echo "</div>";
                                echo "</form>";
                                echo "<form method='post'>";
                                #echo "<input type='hidden' name='user_id' value='1234'>";
                                echo "<div class='viewProfile'>";
                                echo "<div>";
                                echo "<img src='images/user-solid.png'>";
                                echo "</div>";
                                echo "<div>";
                                echo "<a style='cursor: pointer;' class='viewProfile' href='personal_profile.php?id=1'>View Profile</a>";
                                echo "</div>";
                                echo "</div>";
                                echo "</form>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        }
                    }

                    else {
                        echo "<tr><td>NA</td><td>NA</td><td>NA</td><td>NA</td><td>NA</td><td>NA</td><td>NA</td></tr>";
                    }
                ?>
                </tbody>
            </table>
        </div>
    </main>
    <script>
        $(".approveBtn").on("click", function () {
            $.ajax({
                url: "ajax/approved_application.php?id=" + this.id,
                type: "GET",
                success: function (data) {
                    console.log("approved");
                }
            })
        })

        $(".rejectBtn").on("click", function () {
            $.ajax({
                url: "ajax/rejected_application.php?id=" + this.id,
                type: "GET",
                success: function (data) {
                    console.log("rejected");
                }
            })
        })
    </script>
</body>
</html>