<?php
    session_start();
    require_once "../submodules/_dbconnect.php";

    $expressed_interest_id = $_GET["id"] ?? false;
    $userID = $_SESSION["username"] ?? false;

    if (isset($expressed_interest_id)) {
        if (isset($userID)) {
            $userSQL = "INSERT INTO expressed_interest(user_id, expressed_interest_id, status) VALUES(" . "'$userID', " . "'" . $expressed_interest_id . "', " . "'F'" .")";

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