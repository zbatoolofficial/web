<?php
session_start();
session_unset();
session_destroy();
header("LOCATION: page1.php");
?>