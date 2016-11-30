<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="main.css"/>
        <title>Index</title>
    </head>
    <body>
        <div class="wrapper">
            <div class="header">Задание:</div>
            <main>
                Да се направи форма за регистрация в система (потребителско име,

                парола, име, фамилия). Данните да се изпращат чрез POST и да се

                записват в съответната сесия на регистрирания потребител. След

                регистрация да се направи форма за логин чрез потребителско име и

                парола). При успешен вход, потребителя да бъде отведен към

                /admin/index.php. /admin/index.php файла трябва да бъде защитен да

                не може да се достъпва ако потребителя не е логнат. Самия файл

                (/admin/index.php) може да показва просто съобщение: "Hello, you are

                in restricted area".
            </main>

            <div class="footer">
                Please <a class="button" href="login.php"> Log in </a> or <a class="button" href="register.php"> Register </a>!
            </div> 
        </div>
    </body>
</html>

