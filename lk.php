<?php
ob_start ();
session_start();
include("site/header.php");
$result2 = mysqli_query ($connect,"SELECT * from users WHERE login = '$_SESSION[login]'");
$myrow = mysqli_fetch_array ($result2,MYSQLI_ASSOC);
//var_dump ($myrow);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Личный кабинет</title>
	</head>

		<!-- Home -->
			<article id="top" class="wrapper style1">
				<div class="container">
					<div class="row">
						<div class="col-4 col-5-large col-12-medium">
							<span class="image fit"><img src="images/pic00.jpg" alt="" /></span>
						</div>
						<div class="col-8 col-7-large col-12-medium">
							<header>
								<h1><strong><?=$myrow['login']?></strong></h1>
							</header>
							<p><?php echo "Дата регистрации: $myrow[date]";?></p>
							<p><?php
								$result_forum = mysqli_query($connect, "SELECT * from forum WHERE id_users = '$myrow[id_users]' order by id_forum DESC");
								$row_forum = mysqli_fetch_all ($result_forum,MYSQLI_ASSOC);
								//var_dump ($row_forum);
								//var_dump ($myrow[id_users]);
								echo "Количество тем которое вы создали: ".count ($row_forum)."<br>";
								foreach ($row_forum as $key=>$vol){

									//echo $key;

									echo "<a href = 'el.php?id=".$row_forum[$key]['id_forum']."'>".$row_forum [$key]['topic'].".</a> Дата создания: ".$row_forum [$key]['date_forum']."<br>";

								}
								//echo "$row_forum ['0']['topic'].<br>";
								$result_answer = mysqli_query($connect, "SELECT * from answer WHERE id_users = '$myrow[id_users]' order by id_answer DESC");
								$row_answer = mysqli_fetch_all ($result_answer,MYSQLI_ASSOC);
								//var_dump ($row_answer);
								//echo "<br>"."Количество комментариев которое вы дали: ".count ($row_answer)."<br>";
								foreach ($row_answer as $key=>$vol){

									//echo $key;

									echo "<a href = 'el.php?id=".$row_answer[$key]['id_forum']."'>".$row_answer [$key]['answer'].".</a> Дата создания: ".$row_answer [$key]['date_answer']."<br>";
								}
							?></p>
						</div>
					</div>

				<br><a href="add_picture.php" class="button large scrolly">Загрузите аватарку</a>
				</div>
			</article>
		<!-- Contact -->
			<?php include('site/footer.php')?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
