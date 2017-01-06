<?php

require './db.php';
$posts = [
    [
        'user_id' => 1,
        'post' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum sapien vel turpis placerat pellentesque. Maecenas hendrerit lorem dui, at posuere nisl varius quis. Vestibulum facilisis ipsum eu nisl maximus, sed vestibulum quam finibus. Nam sed pulvinar nulla. Nunc bibendum ultrices diam eget congue. Mauris porttitor facilisis enim, vel tincidunt purus imperdiet sed. Cras hendrerit mauris id ipsum feugiat, sed scelerisque ante volutpat.'
    ], [
        'user_id' => 1,
        'post' => 'Proin ac augue erat. Proin non nibh volutpat, facilisis arcu nec, commodo justo. Duis vitae nibh sed nisl facilisis iaculis. Suspendisse erat risus, suscipit a vestibulum molestie, gravida dictum risus. Nullam dignissim tincidunt laoreet. Donec commodo velit sit amet tellus scelerisque feugiat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer mollis interdum est, quis fermentum sem aliquam non. Sed et quam sed mi facilisis sagittis sed euismod ante.'
    ], [
        'user_id' => 2,
        'post' => 'Cras bibendum, mauris at hendrerit dapibus, lacus felis pulvinar risus, sed fringilla metus turpis et leo. Integer semper mauris eros, a vehicula nulla condimentum a. Vestibulum in nunc hendrerit, elementum augue id, feugiat ipsum. Proin at sapien non risus vulputate accumsan. Aliquam eget lacus sed diam sodales rutrum at quis ex. Vestibulum dictum mattis leo et viverra. Quisque ut purus placerat, congue massa sit amet, convallis lectus. Ut ultrices ullamcorper lectus, vitae sollicitudin est ultricies sed. Mauris vel turpis sem.'
    ], [
        'user_id' => 3,
        'post' => 'Fusce enim erat, eleifend non condimentum a, auctor non eros. Sed id lectus elit. Duis vitae erat nulla. Curabitur mollis leo non ultrices volutpat. Nulla dignissim urna felis, at pellentesque odio tempor ut. Vivamus non magna efficitur tortor commodo fermentum. Proin eu enim erat.'
    ], [
        'user_id' => 3,
        'post' => 'Vestibulum interdum risus eget tortor mollis, vel ullamcorper mi scelerisque. Aliquam id quam sollicitudin, tincidunt risus sit amet, posuere felis. Aenean at congue lorem. Donec eu mollis urna. Nunc cursus in risus in elementum. Nam leo nulla, pretium eget vulputate eget, ornare vel lectus. Sed ut ipsum tempus neque porta eleifend ut in ipsum. Ut magna felis, suscipit nec eros eget, volutpat blandit erat.'
    ], [
        'user_id' => 2,
        'post' => 'Donec tincidunt ut dui ac efficitur. Nam consequat diam orci, a malesuada nunc fringilla non. Phasellus egestas tempus ultricies. Duis vestibulum massa a enim molestie lobortis. Vestibulum eget tempor justo. Vestibulum a felis pulvinar, facilisis leo sit amet, vulputate ante. Quisque eget scelerisque mauris.'
    ], [
        'user_id' => 2,
        'post' => 'Ut aliquam posuere nisl. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam sed feugiat nisl, eu posuere lacus. Vivamus sodales nisi at tortor aliquet, eu iaculis urna tempus. Vivamus eget ipsum in augue dapibus ultrices. Fusce et magna hendrerit, consectetur tellus non, dignissim mi. Aliquam erat volutpat.'
    ]
];

function generateComments($postId)
{
    $comments = [];
    for ($i = 1; $i <= rand(1, 5); $i++) {
        $comments[] = [
            'post_id' => $postId,
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ];
    }
    return $comments;
}

try {

    $sqlPost = "INSERT INTO `posts`(`user_id`, `post`) VALUES (:user_id, :post)";
    $sqlComment = "INSERT INTO `comments`(`post_id`, `comment`) VALUES (:post_id, :comment)";
    $preparedStmtPost = $connection->prepare($sqlPost);
    $preparedStmtComment = $connection->prepare($sqlComment);
    foreach ($posts as $post) {
        $preparedStmtPost->execute($post);
        $comments = generateComments($connection->lastInsertId());
        foreach ($comments as $comment) {
            $preparedStmtComment->execute($comment);
        }
    }
} catch (PDOException $ex) {
    echo $ex->getMessage();
}
