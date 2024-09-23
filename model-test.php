<?php

function selectTest() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select * from test");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
