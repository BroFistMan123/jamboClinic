<?php
	unset($_SESSION['ongoingsession']);
session_destroy();

header("Location: login.php");
?>