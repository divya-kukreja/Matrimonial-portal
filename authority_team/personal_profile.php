<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Your Profile</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../users/css/profile.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="../images/favicon.ico" type="image/ico">
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
        <?php
            require_once "mysql_connection.php";
            $userID = $_GET["id"] ?? false;

            if (isset($userID)) {
                $userSQL = "SELECT * FROM profile WHERE user_id='" . $userID . "'";

                $userExec = $conn->query($userSQL);

                if ($userExec->num_rows > 0) {
                    while ($user = $userExec->fetch_assoc()) {
                        echo "<section>";

                        echo "</section>";
                    }
                }

                else {
                    echo "<h2>No user selected</h2>";
                }
            }

            else {
                echo "<h2>No user selected</h2>";
            }
        ?>
    </main>
</body>
</html>
