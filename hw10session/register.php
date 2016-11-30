<?php
require './functions.php';
$regerror = '';
$empty = ['firstname' => '', 'surname' => '', 'username' => '', 'password' => ''];

if (isFormSubmitted($_POST)) {
    if (isFormValid($_POST)) {
        register($_POST);
        header('Location: index.php');
        exit;
    } else {
        $empty = getFormErrors($_POST);
        $regerror = 'Please fill all blank fields!';
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="main.css"/>
        <title>Register</title>
    </head>
    <body>
        <div class="wrapper">
            <div class="header">Register</div>
            <form name="register" action="" method="post">
                <ul>
                    <li class="left <?php echo $empty['firstname']; ?>"><label for="firstname">First Name:</label></li>
                    <li class="right"><input type="text" name="firstname" id="firstname"/></li>
                    <li class="left <?php echo $empty['surname']; ?>"><label for="surname">Last Name:</label></li>
                    <li class="right"><input type="text" name="surname" id="surname"/></li>
                    <li class="left <?php echo $empty['username']; ?>"><label for="username">Username:</label></li>
                    <li class="right"><input type="text" name="username" id="username"/></li>
                    <li class="left <?php echo $empty['password']; ?>"><label for="password">Password:</label></li>
                    <li class="right"><input type="password" name="password" id="password"/></li>
                </ul>

                <div class="footer">
                    <div class="error"><?php echo $regerror; ?></div>
                    <input name="submit" type="submit" class="button" value="Submit"/>
                </div> 
            </form>
        </div>
    </body>
</html>