<?php
session_start();
require_once "../submodules/_dbconnect.php";

$expressed_interest_id = $_GET["id"] ?? false;
$userID = $_SESSION["username"] ?? false;

if (isset($expressed_interest_id)) {
    if (isset($userID)) {
        $userSQL = "UPDATE expressed_interest SET status='T' WHERE expressed_interest_id='" . $userID. "' AND user_id='" . $expressed_interest_id . "'";

        if ($userID !== '' && $userID !== ' ') {
            try {
                $conn->begin_transaction();
                $conn->query($userSQL);
                $conn->commit();
            }
            catch (Throwable $e) {
                $conn->rollback();
            }
        }
    }

    else {
        echo "403 Forbidden";
    }
}

else {
    echo "403 Forbidden";
}
?>