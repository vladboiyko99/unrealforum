<?php
ob_start ();

	session_start();
	include("site/header.php");
	$result2 = mysqli_query ($connect,"SELECT * from forum NATURAL JOIN users WHERE id_forum=$_GET[id]");
	$myrow = mysqli_fetch_array ($result2,MYSQLI_ASSOC);
	//var_dump($myrow);
		$text = preg_replace("/(?![.=$'€%-])\p{P}/u", "", $myrow['text']);
		$topic = preg_replace("/(?![.=$'€%-])\p{P}/u", "", $myrow['topic']);
    $varClean = htmlspecialchars($varClean);
    $varClean = trim($varClean);
							$sum = strlen($text); 
                            $sum1 = $sum - 150;
                            if ($sum > 150){
                            	
                            	$text = substr($text,0 , -$sum1); 
                            	$text = $text;
                            }

	?>
<!DOCTYPE HTML>

<html>
	<head>
		<title><?=$myrow['topic']?></title>
		<meta name="keywords" content="<?=$topic?>">
		<meta name="description" content="<?=$text?>" />
	</head>

		<!-- Home -->
			<article id="top" class="wrapper style1">
				<div class="container">
					<div class="row">
						<div class="col-4 col-5-large col-12-medium">
							<span class="image fit"><img src="images/pic00.jpg" alt="" />
									<p><?=$myrow['login']?></p></span>
						</div>
						<div class="col-8 col-7-large col-12-medium">
							<header>
								<h1><?=$myrow['topic']?></h1>
							</header>
							<p><?=nl2br($myrow['text'])?></p>
							<?php if (isset ($user_date)) echo "<a href='add_answer.php?id_forum=$myrow[id_forum]' class='button large scrolly'>Добавить комментарий</a>";?>
						</div>
					</div>
				</div>
			</article>



		<!-- Portfolio -->
			<article id="portfolio" class="wrapper style3">
				<div class="container">
						<div class="col-4 col-6-medium col-12-small">
						<?php

							/*var_dump ($myrow);
							do {
							echo "<div class='col-4 col-6-medium col-12-small'>
							<section class='box style2'>
								<h3><a href = 'el.php?id=$myrow[id_forum]'>$myrow[topic]</a></h3>
								<p>$myrow[text]</p>
								<p>Дата создания темы:<br> $myrow[date_forum]</p>
							</section></div>";}
							while ($myrow = mysqli_fetch_array ($result2,MYSQLI_ASSOC));*/
							?>
							<?php
							$result3 = mysqli_query ($connect,"SELECT * from answer NATURAL JOIN users  WHERE id_forum = $myrow[id_forum] order by id_answer DESC ");
							$myrow1 = mysqli_fetch_array ($result3,MYSQLI_ASSOC);

							do{
							    
							    if ($myrow1['creator']<>0){
								echo "<article class='box style2'>
								<h3><em>Комментарий создателя темы: $myrow1[login]</h3></em><br>
								<p>$myrow1[answer]</p>
								<p>$myrow1[date_answer]</p>
								</article>
								<br>";}
								
								else{
								 
								 echo "<article class='box style2'>
								<h3>$myrow1[login]</h3><br>
								<p>$myrow1[answer]</p>
								<p>$myrow1[date_answer]</p>
								</article>
								<br>";  
								    
								}
							}
							while (@$myrow1 = mysqli_fetch_array ($result3,MYSQLI_ASSOC))

			?>

			</div>
				</div>

							<br><?php if (isset ($user_date)) echo "<a href='add_answer.php?id_forum=$myrow[id_forum]' class='button large scrolly'>Добавить комментарий</a>";?>

			</article>

		<!-- Contact -->
			<?php include('site/footer.php');?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
