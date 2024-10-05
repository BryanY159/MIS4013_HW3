<?php

function selectPlaylistsByUsers($UID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select Username, PlaylistID, PlaylistName from users u join playlists p on u.UserID = p.UserID where u.UserID = ?;");
        $stmt->bind_param("i", $UID);
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
