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
						<h2>Дайте свой комментарий</h2>
					</header>
					<div >
						<div class="col-12">
							<form method="post" >
								<div >
									<div class="col-6 col-12-small">
										<input type = 'text' name = 'answer' placeholder='Напишите ваш комментарий'/><br>"
										<input type = 'hidden' name = 'id_users'value = "<?=$user_date['id_users']?>"/>
										<input type = 'hidden' name = 'id_forum'value = "<?=$_GET['id_forum']?>"/>
									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" value="Добавить обсуждение" /></li>
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

if (isset ($_POST['id_users']) and isset ($_POST['answer']) and isset ($_POST['id_forum'])){
$result = mysqli_query($connect,"INSERT INTO answer (id_users,answer,id_forum) VALUES ('$_POST[id_users]','$_POST[answer]','$_POST[id_forum]')");
var_dump ($result);
if ($result == true)
	header ("location: el.php?id=$_POST[id_forum]");
else
	echo "ERROR";
}
include('site/footer.php');
ob_end_flush();
?>
