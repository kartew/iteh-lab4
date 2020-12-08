<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Page</title>
</head>
<body>
    <h1>
        Привет, <?php session_start();
        if(isset($_SESSION['user_name'])) {
            echo $_SESSION['user_name'];
        }
        else {
            echo "None";
        }

        ?>!
    </h1>
    <p>Две страницы для отображения твоего имени: </p>
    <a href="page1.php">Страница №1</a> |
    <a href="page2.php">Страница №2</a>
    <br>
    <br>

    <form action="action_logout.php">
        <button>Забыть имя</button>
    </form>

</body>
</html>