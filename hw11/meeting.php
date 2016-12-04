<?php
require_once './functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="main.css"/>
        <title>Meeting</title>
    </head>
    <body class="meeting">
        <h4><?php echo $_SESSION['person1']->meet($_SESSION['person2']); ?> </h4>
    </body>
</html>

