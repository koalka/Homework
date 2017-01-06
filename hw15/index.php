<?php
require './db.php';

try {
    $sql = "SELECT `posts`.`id`, `users`.`first_name`, `users`.`last_name`, `posts`.`post`, `comments`.`comment` 
            FROM `posts` 
            JOIN `comments` ON `posts`.`id` = `comments`.`post_id` 
            JOIN `users`ON `users`.`id` = `posts`.`user_id`
            ORDER BY `posts`.`id` ASC";
    $result = $connection->query($sql, PDO::FETCH_ASSOC);
    $posts = [];
    foreach ($result as $row) {
        if (!isset($posts[$row['id']])) {
            $posts[$row['id']] = [
                'id' => $row['id'],
                'user' => [
                    'first_name' => $row['first_name'],
                    'last_name' => $row['last_name']
                ],
                'post' => $row['post'],
                'comments' => []
            ];
        }
        $posts[$row['id']]['comments'][] = $row['comment'];
    }
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Index</title>
            <style>
                .first-name, .last-name {
                    width: 7em;
                }
                .post {
                    width: 60em;
                }
                .comments {
                    width: 40em;
                }
                th, td {
                    border-bottom: 1px groove; 
                }
            </style>
        </head>
        <body>
            <table>
                <thead>
                    <tr>
                        <th class="first-name">
                            First Name
                        </th>
                        <th class="last-name">
                            Last Name
                        </th>
                        <th class="post">
                            Post
                        </th>
                        <th class="comments">
                            Comments
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($posts as $post) { ?>
                        <tr>
                            <td class="first-name"><?php echo $post['user']['first_name']; ?></td>
                            <td class="last-name"><?php echo $post['user']['first_name']; ?></td>
                            <td class="post"><?php echo $post['post']; ?></td>
                            <td class="comments">
                                <ul>
                                    <li><?php echo implode('</li><li>', $post['comments']); ?></li>
                                </ul>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </body>
    </html>
            <?php
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }













