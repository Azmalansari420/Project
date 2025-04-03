<?php
	session_start();
	unset($_SESSION['session_branch']);
	header('Location: index.php');
	echo "<script>location.href='index.php';</script>";

?>