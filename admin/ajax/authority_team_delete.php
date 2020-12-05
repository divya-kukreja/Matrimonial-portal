<?php
require_once "../mysql_connection.php";

$contactID = $_GET["id"] ?? false;

if ($contactID !== false) {
    try {
        $conn->begin_transaction();
        $deleteFromUserSQL = "DELETE FROM authority WHERE auth_id='" . $contactID . "'";

        if ($contactID !== '' && $contactID !== ' ') {
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