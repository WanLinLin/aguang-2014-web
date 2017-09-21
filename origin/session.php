<?php
	session_start();
	$_SESSION['vote_number'] = $_POST['vote_number'];
	echo "session.php : ".$_SESSION['vote_number'];
?>