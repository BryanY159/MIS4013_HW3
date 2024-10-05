<?php
require_once("util-db.php");
require_once("model-playlists.php");

$pageTitle = "Playlists";
include "view-header.php";

$playlists = selectPlaylists();

include "view-playlists.php";
include "view-footer.php";
?>
