<?php
require '../functions.php';

if (!isLoggedIn()) {
    header('Location: ../login.php');
    exit;
}
$user = getUser();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="../main.css"/>
        <title>Index</title>
    </head>
    <body>
        <div class="wrapper">
            <div class="header secret"><?php echo 'Hello, ' . $user['firstname'] . ' ' . $user['surname'] . ', you are in a restricted area!'; ?></div>
            <main>

                Now you can log out or delete your user account!
            </main>

            <div class="footer">
                Please <a class="button" href="../logout.php"> Log out </a> or <a class="button" href="../deregister.php"> Deregister </a>!
            </div> 
        </div>
    </body>
</html>
