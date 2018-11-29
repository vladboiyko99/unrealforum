<?php
ob_start ();
	session_start();
	include("site/header.php");
	?>
	<!DOCTYPE HTML>
<html>
	<head>
		<title>Нереальный форум</title>
	</head>


		<!-- Home -->


		<!-- Work -->
			<article id="work" class="wrapper style2">
				<div class="container">
					<header>
						<h2>Свежие темы</h2>
						<p><?php if (isset ($_SESSION['login'])) echo "<a href = 'add_topic.php'>Создать свою тему</a>";?></p>
					</header>
					<div class="row aln-center">

							<?php
							$result2 = mysqli_query ($connect,"SELECT * from forum order by id_forum DESC");
							$myrow = mysqli_fetch_array ($result2,MYSQLI_ASSOC);
							//var_dump ($myrow);
							do {
							echo "<div class='col-4 col-6-medium col-12-small'>
							<section class='box style1'>
								<h3><a href = 'el.php?id=$myrow[id_forum]'>$myrow[topic]</a></h3>
								<p>$myrow[text]</p>
								<p>Дата создания темы:<br> $myrow[date_forum]</p>
							</section></div>";}
							while ($myrow = mysqli_fetch_array ($result2,MYSQLI_ASSOC));
							?>
						</div>

					</div>

				</div>
			</article>


		<!-- Contact -->
			<?include ('site/footer.php')?>

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
ob_end_flush();?>
