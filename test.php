<?php
session_start();
include_once "style/header.php"

$i = 13;

if ($i < 16 ) {
    echo "Hello";
} else { echo "Noooop" ; }
?>