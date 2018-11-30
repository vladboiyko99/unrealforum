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
		<!-- Yandex.RTB R-A-333767-1 -->
<div id="yandex_rtb_R-A-333767-1"></div>
<script type="text/javascript">
    (function(w, d, n, s, t) {
        w[n] = w[n] || [];
        w[n].push(function() {
            Ya.Context.AdvManager.render({
                blockId: "R-A-333767-1",
                renderTo: "yandex_rtb_R-A-333767-1",
                async: true
            });
        });
        t = d.getElementsByTagName("script")[0];
        s = d.createElement("script");
        s.type = "text/javascript";
        s.src = "//an.yandex.ru/system/context.js";
        s.async = true;
        t.parentNode.insertBefore(s, t);
    })(this, this.document, "yandexContextAsyncCallbacks");
</script><br>
						<h2>Поиск</h2>
						
						<form action = "search.php" method = "GET">
                        
                        <input type = "text" name = "search"/><br/>
                        <button type = "submit">Найти</button>
                        
                    </form>

						<br/>
						<h2>Случайные темы</h2>
						<p><?php if (isset ($_SESSION['login'])) echo "<a href = 'add_topic.php'>Создать свою тему</a>";?></p>
					</header>
					<div class="row aln-center">

                    
							<?php
							//var_dump($_POST['search']); 
							if (isset ($_GET['search'])){
							   
							    	
							$result2 = mysqli_query ($connect,"SELECT * from forum WHERE topic OR text LIKE '%$_GET[search]%'");
							$myrow = mysqli_fetch_array ($result2,MYSQLI_ASSOC);
							//var_dump ($myrow);
							do {
							    
							$result3 = mysqli_query ($connect,"SELECT id_answer from answer WHERE id_forum = '$myrow[id_forum]'");
							$myrow3 = mysqli_fetch_all ($result3,MYSQLI_ASSOC);
							$count = count ($myrow3);  
							
							
							$topic = $myrow['topic'];
							$sum = strlen($topic); 
                            $sum1 = $sum - 60;
                            if ($sum > 60){
                            	
                            	$topic = substr($topic, 0 , -$sum1); 
                            	$topic = $topic."...";
                            }
                            
                            	$text = $myrow['text'];
							$sum = strlen($text); 
                            $sum1 = $sum - 200;
                            if ($sum > 200){
                            	
                            	$text = substr($text,0 , -$sum1); 
                            	$text = $text."...";
                            }
                            
                            if ($count<>0) {
							echo "<div class='col-4 col-6-medium col-12-small'>
							<section class='box style1'>
								<h3><a href = 'el.php?id=$myrow[id_forum]'>$topic</a></h3>
								<em>$text</em><br>
								<strong>Количество комментарий: $count</strong>
								<p>Дата создания темы:<br> $myrow[date_forum]</p>
							</section></div>";}
							else{
							    echo "<div class='col-4 col-6-medium col-12-small'>
							<section class='box style1'>
								<h3><a href = 'el.php?id=$myrow[id_forum]'>$topic</a></h3>
								<em>$text</em><br>
								<strong>Количество комментарий: 0</strong>
								<p>Дата создания темы:<br> $myrow[date_forum]</p>
							</section></div>";
							    
							    
							}
							    
							}
							 
							while ($myrow = mysqli_fetch_array ($result2,MYSQLI_ASSOC));
							    
							    
							}
							else
							{
							
							$result2 = mysqli_query ($connect,"SELECT * from forum ORDER BY RAND() LIMIT 6");
							$myrow = mysqli_fetch_array ($result2,MYSQLI_ASSOC);
							//var_dump ($myrow);
							do {
							    
							$result3 = mysqli_query ($connect,"SELECT id_answer from answer WHERE id_forum = '$myrow[id_forum]'");
							$myrow3 = mysqli_fetch_all ($result3,MYSQLI_ASSOC);
							$count = count ($myrow3);  
							
							
							$topic = $myrow['topic'];
							$sum = strlen($topic); 
                            $sum1 = $sum - 60;
                            if ($sum > 60){
                            	
                            	$topic = substr($topic, 0 , -$sum1); 
                            	$topic = $topic."...";
                            }
                            
                            	$text = $myrow['text'];
							$sum = strlen($text); 
                            $sum1 = $sum - 200;
                            if ($sum > 200){
                            	
                            	$text = substr($text,0 , -$sum1); 
                            	$text = $text."...";
                            }
                            
                            if ($count<>0) {
							echo "<div class='col-4 col-6-medium col-12-small'>
							<section class='box style1'>
								<h3><a href = 'el.php?id=$myrow[id_forum]'>$topic</a></h3>
								<em>$text</em><br>
								<strong>Количество комментарий: $count</strong>
								<p>Дата создания темы:<br> $myrow[date_forum]</p>
							</section></div>";}
							else{
							    echo "<div class='col-4 col-6-medium col-12-small'>
							<section class='box style1'>
								<h3><a href = 'el.php?id=$myrow[id_forum]'>$topic</a></h3>
								<em>$text</em><br>
								<strong>Количество комментарий: 0</strong>
								<p>Дата создания темы:<br> $myrow[date_forum]</p>
							</section></div>";
							    
							    
							}
							    
							}
							while ($myrow = mysqli_fetch_array ($result2,MYSQLI_ASSOC));
							}
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
