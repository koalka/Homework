<?php
require './functions.php';

if (!isLoggedIn()) {
    header('Location: login.php');
    exit;
}
logout();
header('Location: index.php');
