<?php

require './db.php';
$users = [
    [
        'username' => 'koalka',
        'password' => '12345',
        'email' => 'koalka@example.com',
        'first_name' => 'Krasimira',
        'last_name' => 'Dimitrova'
    ], [
        'username' => 'chavdar',
        'password' => '12345',
        'email' => 'chavdar@example.com',
        'first_name' => 'Chavdar',
        'last_name' => 'Borislavov'
    ], [
        'username' => 'nadia',
        'password' => '12345',
        'email' => 'nadia@example.com',
        'first_name' => 'Nadezhda',
        'last_name' => 'Yankova'
    ]
];
try {

    $sql = "INSERT INTO `users`(`username`, `password`, `email`, `first_name`, `last_name`) VALUES (:username, :password, :email, :first_name, :last_name)";
    $preparedStmt = $connection->prepare($sql);
    foreach ($users as $user) {
        $user['password'] = md5($user['password']);
        $preparedStmt->execute($user);
    }
} catch (PDOException $ex) {
    echo $ex->getMessage();
}
