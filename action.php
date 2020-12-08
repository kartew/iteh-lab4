<?php
session_start();

$_SESSION['user_name'] = $_POST['name'];
echo "Вы успешно ввели свое имя, {$_SESSION['user_name']}!"

?>
<br>
<a href="main.php">Перейти на главную</a>
