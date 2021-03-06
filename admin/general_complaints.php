<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Local CSS File -->
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../authority_team/css/index.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="../images/favicon.ico" type="image/ico">
    <link rel="stylesheet" href="css/nav.css">
    <script src="js/navbar.js" defer></script>
    <!-- jQuery CDN -->
    <script src="../authority_team/js/jquery-3.5.1.min.js"></script>
    <!-- Sweetalert CDN -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>General Complaints</title>
</head>
<body>
    <nav id="largeNav">
        <div class="navbar-top">
            <img src="../images/logo.png" alt="brand-logo" class="brand-logo">
            <ul>
                <li>
                    <a class="nav-link" href="index.php?admin_id=<?php echo $_SESSION["admin_id"];?>">Home</a>
                </li>
                <li>
                    <a class="nav-link active" href="general_complaints.php">General Complaints</a>
                </li>
                <li>
                    <a class="nav-link" href="user_complaints.php">User Complaints</a>
                </li>
                <li>
                    <a class="nav-link" href="authority_team_details.php">Track Authority Team</a>
                </li>
                <li>
                    <a class="nav-link" id="authority_register_btn" style="color: #ffffff;" href="#">Register Authority</a>
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
            <ul>
                <li>
                    <a class="nav-link" href="index.php?admin_id=<?php echo $_SESSION["admin_id"];?>">Home</a>
                </li>
                <li>
                    <a class="nav-link" href="general_complaints.php">General Complaints</a>
                </li>
                <li>
                    <a class="nav-link" href="user_complaints.php">User Complaints</a>
                </li>
                <li>
                    <a class="nav-link" href="authority_team_details.php">Track Authority Team</a>
                </li>
                <li>
                    <a class="nav-link" id="authority_register_btn" href="#" style="color: #ffffff;">Register Authority</a>
                </li>
                <li>
                    <a class="nav-link" href="logout.php" id="loginBtn1">Logout</a>
                </li>
            </ul>
        </section>
    </nav>
    <main>
        <div class="table-responsive" id="approveTable">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Contact ID</th>
                    <th>Full Name</th>
                    <th>Email Address</th>
                    <th>Message</th>
                    <th>Complaint Date</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    require_once "mysql_connection.php";

                $adminID = $_SESSION["admin_id"] ?? false;

                if (isset($adminID) && $adminID !== false) {
                    $sql = "SELECT * FROM contact where is_user='F'";
                $checkIfAdmin = $conn->query("SELECT * FROM admin WHERE admin_id='" . $adminID . "'");

                if ($checkIfAdmin->num_rows > 0) {

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["contact_id"] . "</td>";
                            echo "<td>" . $row["full_name"] . "</td>";
                            echo "<td>" . $row["email_address"] . "</td>";
                            echo "<td>" . $row["message"] . "</td>";
                            echo "<td>" . $row["timestamp"] . "</td>";
                            echo "<td class='formAction'>";
                            echo "<form method='post'>";
                            echo "<div class='approveBtn'>";
                            echo "<div>";
                            echo "<img src='../authority_team/images/check-circle-regular.png' alt=''>";
                            echo "</div>";
                            echo "<div>";
                            echo "<a style='cursor: pointer;' id='" . $row["contact_id"] . "' class='approveBtn resolve'>Complaint Resolved</a>";
                            echo "</div>";
                            echo "</div>";
                            echo "</form>";
                            echo "<form method='post'>";
                            echo "<div class='rejectBtn'>";
                            echo "<div>";
                            echo "<img src='../authority_team/images/times-solid.png'>";
                            echo "</div>";
                            echo "<div>";
                            echo "<a style='cursor: pointer;' id='" . $row["contact_id"] . "' class='rejectBtn rejected'>Complaint Rejected</a>";
                            echo "</div>";
                            echo "</div>";
                            echo "</form>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td>NA</td><td>NA</td><td>NA</td><td>NA</td><td>NA</td><td>NA</td><td>NA</td></tr>";
                    }
                }
                }
                ?>
                </tbody>
            </table>
        </div>
    </main>
    <script>
        $(".resolve").on("click", function () {
            $.ajax({
                url: "ajax/general_complaints.php?id=" + this.id,
                type: "GET",
                success: function (data) {
                    console.log("approved");
                }
            })
        })

        $(".rejected").on("click", function () {
            $.ajax({
                url: "ajax/general_complaints.php?id=" + this.id,
                type: "GET",
                success: function (data) {
                    console.log("approved");
                }
            })
        })
    </script>
    <?php
        require_once "register_authority.php";
    ?>
</body>
</html>