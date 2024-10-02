<?php
require_once("util-db.php");
require_once("model-test.php");

$pageTitle = "Test";
include "view-header.php";

$test = selectTest();

include "view-test.php";
include "view-footer.php";
?>
