<?php
require './functions.php';
$logerror = '';
$empty = ['username' => '', 'password' => ''];
if (isFormSubmitted($_POST)) {
    if (isFormValid($_POST)) {
        if (login($_POST)) {
            header('Location: admin/index.php');
            exit;
        } else if (!isRegistered()) {
            $logerror = 'You are not registered. Please register <a href="register.php">here!</a>';
        } else {
            $logerror = 'Wrong Username or Password!';
        }
    } else {
        $empty = getFormErrors($_POST);
        $logerror = 'Please fill all blank fields!';
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="main.css"/>
        <title>Login</title>
    </head>
    <body>
        <div class="wrapper">
            <div class="header">Login</div>
            <form name="login" action="" method="post">
                <ul>
                    <li class="left <?php echo $empty['username']; ?>"><label for="username">Username:</label></li>
                    <li class="right"><input type="text" name="username" id="username"/></li>
                    <li class="left <?php echo $empty['password']; ?>"><label for="password">Password:</label></li>
                    <li class="right"><input type="password" name="password" id="password"/></li>
                </ul> 
                <div class="footer">
                    <div class="error"><?php echo $logerror; ?></div>
                    <input name="submit" type="submit" class="button" value="Submit"/>
                </div> 
            </form>
        </div>
    </body>
</html>