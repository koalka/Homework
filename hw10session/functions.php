<?php

session_start();

function isFormSubmitted($input)
{
    return !empty($input['submit']);
}

function isFormValid($input)
{
    return count($input) === count(array_filter($input));
}

function getFormErrors($input)
{
    $empty = [];
    foreach ($input as $key => $value) {
        if (empty($value)) {
            $empty[$key] = 'empty';
        } else {
            $empty[$key] = '';
        }
    }
    return $empty;
}

function register($input)
{
    if (!empty($input['username']) && !empty($input['password']) && !empty($input['firstname']) && !empty($input['surname'])) {
        $_SESSION['username'] = $input['username'];
        $_SESSION['password'] = $input['password'];
        $_SESSION['firstname'] = $input['firstname'];
        $_SESSION['surname'] = $input['surname'];
    }
}

function isRegistered()
{
    return !empty($_SESSION['username']);
}

function login(array $input)
{
    $tempUsername = $input['username'];
    $tempPassword = $input['password'];
    if (isRegistered() && $_SESSION['username'] === $tempUsername && $_SESSION['password'] === $tempPassword) {
        $_SESSION['isLoggedIn'] = true;
        return true;
    }
    return false;
}

function isLoggedIn()
{
    return !empty($_SESSION['isLoggedIn']);
}

function getUser()
{
    return $_SESSION;
}

function logout()
{
    unset($_SESSION['isLoggedIn']);
}

function deRegister()
{
    session_destroy();
}
