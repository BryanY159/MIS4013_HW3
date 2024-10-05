<?php

function selectPlaylists() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select * from playlists");
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
