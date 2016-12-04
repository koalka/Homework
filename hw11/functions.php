<?php

session_start();
require_once './classes/Human.php';
function isFormSubmitted($input)
{
    return !empty($input['submit']);
}

function isFormValid($input)
{
    return !empty($input['name1']) && !empty($input['gender1']) && !empty($input['name2']) && !empty($input['gender2']);
}

function submit($input)
{
    if (isFormValid($input)) {
        $_SESSION['person1'] = new Human(
        $input['name1'], $input['gender1'], $input['weight1'], $input['height1'], new Dog($input['dogname1'], $input['breed1'], $input['furcolor1'], $input['furlength1'], $input['eyecolor1']
        )
);
        $_SESSION['person2'] = new Human(
        $input['name2'], $input['gender2'], $input['weight2'], $input['height2'], new Dog($input['dogname2'], $input['breed2'], $input['furcolor2'], $input['furlength2'], $input['eyecolor2']
        )
);
    }
}
