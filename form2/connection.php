<?php
$dbname = 'submit';
$dbuser = 'root';
$dbpass = '';
$dbhost = 'localhost';
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($conn) {
    echo "Connect";
} else {
    echo "Not Connect";
}