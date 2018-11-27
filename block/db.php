<?php
$connect = @mysqli_connect('127.0.0.1','root','','forum') or die(mysqli_connect_error());
mysqli_set_charset($connect, "utf8");
?>