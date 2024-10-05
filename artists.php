<?php
require_once("util-db.php");
require_once("model-artists.php");

$pageTitle = "Artists";
include "view-header.php";

$artist = selectArtists();

include "view-artists.php";
include "view-footer.php";
?>
