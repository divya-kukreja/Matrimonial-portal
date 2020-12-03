<?php
require_once "../mysql_connection.php";

$userID = $_GET["id"] ?? false;

if ($userID !== false) {
    try {
        $conn->begin_transaction();
        $deleteFromUserSQL = "DELETE FROM profile WHERE user_id='" . $userID . "'";
        $deleteFromIsAuthorized = "DELETE FROM is_authorized_user WHERE user_id='" . $userID . "'";
        $deleteFromExpressed = "DELETE FROM expressed_interest WHERE user_id='" . $userID . "'";
        $deleteFromShortlist = "DELETE FROM shortlisted WHERE user_id='" . $userID . "'";

        if ($userID !== '' && $userID !== ' ') {
            $conn->query($deleteFromExpressed);
            $conn->query($deleteFromIsAuthorized);
            $conn->query($deleteFromUserSQL);
            $conn->query($deleteFromShortlist);
            $conn->commit();
        }
        $conn->close();
    }

    catch (Throwable $e) {
        $conn->rollback();
    }
}

else {
    echo "<script>alert('not clicked')</script>";
}