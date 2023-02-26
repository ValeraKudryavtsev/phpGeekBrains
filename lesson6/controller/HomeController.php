<?php

$pageHeader = 'Welcome';
$username = null;

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
}

require_once 'view/home.php';
