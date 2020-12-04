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
    <!-- jQuery CDN -->
    <script src="../authority_team/js/jquery-3.5.1.min.js"></script>
    <title>General Complaints</title>
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
                <a class="nav-link" href="general_complaints.php">General Complaints</a>
            </li>
            <li>
                <a class="nav-link active" href="user_complaints.php">User Complaints</a>
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

            if (isset($adminID)) {
                $sql = "SELECT * FROM contact where is_user='T'";

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

            else {
                echo "403 Forbidden";
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
</body>
</html>