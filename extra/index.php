<?php include "iClass.php"; ?>
<?php include "valClass.php"; ?>
<?php include "nodeClass.php"; ?>
<?php include "resultClass.php"; ?>
<?php include "init.php"; ?>
<?php

$calc = new Frame();
echo $calc->htmlFrame();

$outcome = new Results();
echo $outcome->result();
