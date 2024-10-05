<?php
require_once("util-db.php");
require_once("model-test2-by-test.php");

$pageTitle = "Test2 by Test";
include "view-header.php";

$test = selectTest2ByTest($_GET['id']);

include "view-test2-by-test.php";
include "view-footer.php";
?>
