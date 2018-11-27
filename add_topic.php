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
						<h2>Создайте новую тему</h2>
					</header>
					<div >
						<div class="col-12">
							<form method="post" >
								<div >
									<div class="col-6 col-12-small">
										<input type = 'text' name = 'topic' placeholder="Напишите название вашей темы"/><br>
										<textarea name='text' placeholder="Опишите вашу проблему"></textarea><br>
										<input type = 'hidden' name = 'id'value = "<?=$user_date['id_users']?>"/>
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
if (isset ($_POST['topic']) and isset ($_POST['id']) and isset ($_POST['text'])){
$result = mysqli_query($connect,"INSERT INTO forum (id_users,topic,text) VALUES ('$_POST[id]','$_POST[topic]','$_POST[text]')");
if ($result == true)
	echo"OK";
else
	echo "ERROR";
}
include('site/footer.php');
ob_end_flush();
?>