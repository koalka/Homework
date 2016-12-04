<?php

require_once './functions.php';

$inputerror = '';

if (isFormSubmitted($_POST)) {
    if (isFormValid($_POST)) {
        submit($_POST);
        header('Location: meeting.php');
        exit;
    } else {
        $inputerror = "You haven't provided the required information!";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="main.css"/>
        <title>Dog Owners' Network</title>
    </head>
    <body>
        <div class="wrapper">
            <div class="header">Create two humans!</div>
            <form name="create" action="" method="post">
                <div class="first">
                    <h4 class="label">First Person:</h4>
                    <ul>
                        <li class="left"><label for="name1">Name:</label></li>
                        <li class="right"><input type="text" name="name1" id="name1"/></li>

                        <li class="left">Gender:</li>
                        <li class="right">
                            <input type="radio" name="gender1" value="male" id="male1"/>
                            <label for="male1">Male</label>
                            <input type="radio" name="gender1" value="female" id="female1"/>
                            <label for="female1">Female</label>
                        </li>

                        <li class="left"><label for="weight1">Weight:</label></li>
                        <li class="right"><input type="number" name="weight1" id="weight1"/></li>

                        <li class="left"><label for="height1">Height:</label></li>
                        <li class="right"><input type="number" name="height1" id="height1"/></li>
                    </ul>
                    <h4 class="label">Dog:</h4>
                    <ul>
                        <li class="left"><label for="dogname1">Name:</label></li>
                        <li class="right"><input type="text" name="dogname1" id="dogname1"/></li>

                        <li class="left"><label for="breed1">Breed:</label></li>
                        <li class="right"><input type="text" name="breed1" id="breed1"/></li>

                        <li class="left"><label for="furcolor1">Fur color:</label></li>
                        <li class="right"><input type="text" name="furcolor1" id="furcolor1"/></li>

                        <li class="left"><label for="furlength1">Fur length:</label></li>
                        <li class="right"><input type="text" name="furlength1" id="furlength1"/></li>

                        <li class="left"><label for="eyecolor1">Eye color:</label></li>
                        <li class="right"><input type="text" name="eyecolor1" id="eyecolor1"/></li>
                    </ul>
                </div>
                <div class="second">
                    <h4 class="label">Second Person:</h4>
                    <ul>
                        <li class="left"><label for="name2">Name:</label></li>
                        <li class="right"><input type="text" name="name2" id="name2"/></li>

                        <li class="left">Gender:</li>
                        <li class="right">
                            <input type="radio" name="gender2" value="male" id="male2"/>
                            <label for="male2">Male</label>
                            <input type="radio" name="gender2" value="female" id="female2"/>
                            <label for="female2">Female</label>
                        </li>

                        <li class="left"><label for="weight2">Weight:</label></li>
                        <li class="right"><input type="number" name="weight2" id="weight2"/></li>

                        <li class="left"><label for="height2">Height:</label></li>
                        <li class="right"><input type="number" name="height2" id="height2"/></li>
                    </ul>
                    <h4 class="label">Dog:</h4>
                    <ul>
                        <li class="left"><label for="dogname2">Name:</label></li>
                        <li class="right"><input type="text" name="dogname2" id="dogname2"/></li>

                        <li class="left"><label for="breed2">Breed:</label></li>
                        <li class="right"><input type="text" name="breed2" id="breed2"/></li>

                        <li class="left"><label for="furcolor2">Fur color:</label></li>
                        <li class="right"><input type="text" name="furcolor2" id="furcolor2"/></li>

                        <li class="left"><label for="furlength2">Fur length:</label></li>
                        <li class="right"><input type="text" name="furlength2" id="furlength2"/></li>

                        <li class="left"><label for="eyecolor2">Eye color:</label></li>
                        <li class="right"><input type="text" name="eyecolor2" id="eyecolor2"/></li>
                    </ul>
                </div>
                <div class="footer">
                    <div class="error"><?php echo $inputerror; ?></div>
                    <input name="submit" type="submit" class="button" value="See if they could meet?"/>
                </div> 
            </form>
        </div>
    </body>
</html>
