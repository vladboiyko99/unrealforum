<?php
	ob_start ();
			include('site/header.php');
			include('block/db.php');?>
			<!DOCTYPE HTML>
<html>
			<!-- Nav -->
		
		<!-- Work -->
			<article id="work" class="wrapper style2">
				<div class="container">
					<div class="container medium">
					<header>
						<h2>Регистрация</h2>
					</header>
					<div class="row">
						<div class="col-12">
							<form method="post" action="#">
								<div class="row">
									<div class="col-6 col-12-small">
										<input type="text" name="login" placeholder="Введите ваш логин" />
									</div>
									<div class="col-6 col-12-small">
										<input type="text" name="email" placeholder="Введите email" />
									</div>
									<div class="col-6 col-12-small">
										<input type="password" name="password" placeholder="Введите пароль" />
									</div>
									<div class="col-6 col-12-small">
										<input type="password" name="password_r" placeholder="Повторите пароль" />
									</div>
									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" value="Зарегистрироваться" /></li>
											
										</ul>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</article>
		

		<!-- Contact -->
			<?//include('site/footer.php')?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>
<?php
$login = $_POST['login'];
$password = md5($_POST['password']);
$password_r = md5($_POST['password_r']);
$email = $_POST['email'];
if (strcmp($password,$password_r)==0){
if (isset ($_POST['login'])and isset ($_POST['password'])){
$repetition = "SELECT login FROM users WHERE login = '$login'";
$result = mysqli_query ($connect,$repetition);
$myrow = mysqli_fetch_array($result, MYSQLI_ASSOC);
if(empty ($myrow)){
	$insert = "INSERT INTO users (login,password,email) VALUES ('$login','$password','$email')";
	mysqli_query ($connect,$insert);
	header("Location: index.php");
	}
else {
	echo '<center><h1>Этот Логин уже занят</h1></center>';
}
}
}
else 
{echo "<center><h1>Пароли не совпадают</h1></center>";}
include('site/footer.php');
ob_end_flush();
?>