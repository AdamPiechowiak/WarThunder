<?php
	
	session_start();
	
	unset($_SESSION['haslo']);
	
	header('Location: haslo.php')
	
?>