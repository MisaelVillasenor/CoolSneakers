<?php

//session_start();

if (!isset($_SESSION['token']) || !isset($_COOKIE['token'])) {
    header('location: php/login2.php');
} elseif ($_SESSION['token'] != $_COOKIE['token']) {
    header('location: php/login2.php');
} else {
    $id = $_SESSION['id'];
}
