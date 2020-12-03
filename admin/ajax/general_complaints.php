<?php
require_once "../mysql_connection.php";

$userID = $_GET["id"] ?? false;

if ($userID !== false) {
    try {
        $conn->begin_transaction();
        $deleteFromUserSQL = "DELETE FROM profile WHERE user_id='" . $userID . "'";

        if ($userID !== '' && $userID !== ' ') {
            $conn->query($deleteFromUserSQL);
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