<?php
include('block/db.php');
header('Content-Type: text/html; charset=utf-8');
session_start();
?>
<head>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-2792656877269861",
    enable_page_level_ads: true
  });
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130103348-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-130103348-1');
</script>

    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter51358210 = new Ya.Metrika2({
                    id:51358210,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/51358210" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<meta name="google-site-verification" content="8z0fIdXC10KGZ4kP4sy2B3Yjy8J-cTRL0rzTziqFiFA" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<input type="checkbox" id="nav-toggle" hidden>
		    <!--
		    Выдвижную панель размещаете ниже
		    флажка (checkbox), но не обязательно
		    непосредственно после него, например
		    можно и в конце страницы
		    -->
		    <nav class="nav">
		        <!--
		    Метка с именем `id` чекбокса в `for` атрибуте
		    Символ Unicode 'TRIGRAM FOR HEAVEN' (U+2630)
		    Пустой атрибут `onclick` используем для исправления бага в iOS < 6.0
		    См: http://timpietrusky.com/advanced-checkbox-hack
		    -->
		        <label for="nav-toggle" class="nav-toggle" onclick></label>
		        <!--
		    Здесь размещаете любую разметку,
		    если это меню, то скорее всего неупорядоченный список <ul>
		    -->
		        <h2 class="logo">
		            <a href="//unrealforum.ru/">unrealforu.ru</a>
		        </h2>
		        <ul>





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
									echo " <li><a  class='small'>Добро пожаловать:$login_s</a></li>
									<li><form action='lk.php' method='post'>
										<li><input type='submit' value='Вход в личный кабинет'></li>
									</form></li>";
									echo "<li><form action='exit.php' method='post'>
										<li><input type='submit' value='Выход'></li>
									</form></li>";}
									else
									echo ( "


									<form method = 'post'>

										<li><input type='text' name='login' placeholder='Логин'/></li>

										<li><input type='password' name='password' placeholder='Пароль' /></li>

										<li><input type = 'submit' value='Вход'></li>


										</form>

										<form action='reg.php' method='post'>
											<li><input type='submit' value='Регистрация'></li>
										</form> ");
									?>


									<li><a href="index.php">Главная</a></li>
									<li><a href="search.php">Поиск</a></li>


					  </ul>

		    </nav>
				<div class="navbar">
					<a class="logo" href="index.php">UNREALFORUM</a>
				
				</div>
