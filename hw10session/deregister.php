<?php

require './functions.php';

if (!isLoggedIn()) {
    header('Location: login.php');
    exit;
}

deRegister();
header('Location: index.php');
