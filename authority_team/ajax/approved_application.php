<?php
    session_start();
    require_once "../mysql_connection.php";
    $userID = $_GET["id"] ?? false;
    $authID = $_SESSION["auth_id"] ?? "1";

    if ($userID !== false) {
        try {
            $conn->begin_transaction();
            $insertSQL = "INSERT INTO is_authorized_user(user_id, auth_id, remarks) VALUES(" . "'$userID', " . "'" . $authID . "', " . "'OK'" .")";
            $updateUsersTable = "UPDATE profile SET is_authorized='T' WHERE user_id=" . $userID;

            if ($userID !== '' && $userID !== ' ') {
                $conn->query($insertSQL);
                $conn->query($updateUsersTable);
                $conn->commit();
                echo "<script>alert('User approved')</script>";
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