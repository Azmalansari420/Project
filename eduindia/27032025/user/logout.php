<?php
	session_start();
	unset($_SESSION['session_user']);
	header('Location: index.php');
	echo "<script>location.href='index.php';</script>";

?>