<?php
session_start();
require_once "../mysql_connection.php";

$userID = $_GET["id"] ?? false;
$authID = $_SESSION["auth_id"] ?? "1";

if ($userID !== false) {
    try {
        $conn->begin_transaction();
        $insertSQL = "INSERT INTO is_authorized_user(user_id, auth_id, remarks) VALUES(" . "'$userID', " . "'" . $authID . "', " . "'F'" .")";
        if ($userID !== '' && $userID !== ' ') {
            $conn->query($insertSQL);
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