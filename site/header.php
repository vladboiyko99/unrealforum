<?php
include('block/db.php');
header('Content-Type: text/html; charset=utf-8');
session_start();
?>
<head>
		<title>Гостевая книга</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
<nav id="nav">
				<form method = "post">
				<ul class="container">
					<li><a href="index.php">Главная</a></li>

					<?php
if (isset ($_POST['login'])){$_SESSION['login'] = $_POST['login'];}
if (isset ($_POST['password'])){$_SESSION['password'] = $_POST['password'];}
$login_s = $_SESSION['login'];
$pass_s = md5($_SESSION['password']);
//var_dump ($login_s,$pass_s);

$result = mysqli_query($connect,"SELECT id_users FROM users WHERE login = '$login_s'and password = '$pass_s'");
//var_dump($result);
$user_date = mysqli_fetch_array($result);
//var_dump ($user_date);
if(isset ($user_date['id_users'])){
	echo "Добро пожаловать, <li><a href = 'lk.php'>$login_s</a></li>";
	echo "<li><a href='exit.php'>Выход</a></li>";}
else
	echo ( "			<li><a href='reg.php'>Регистрация</a></li>
					<li><input type='text' name='login' placeholder='Логин' /></li>
					<li><input type='password' name='password' placeholder='Пароль' /></li>
					<li><button type = 'submit' >Вход</button></li>");
?>
				</ul>
				</form>
			</nav>
