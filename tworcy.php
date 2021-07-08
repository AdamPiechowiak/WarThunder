<?php
	
	session_start();

	if(isset($_SESSION['haslo']))
	{
		require_once"hash.php";
	
		if(!password_verify($_SESSION['haslo'],$hash))
		{
			header('Location: haslo.php');
		}
	}
	else
	{
			header('Location: haslo.php');
	}
	
?>
<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<title>War Thunder Mapy</title>
	<!--
	<meta name="description" content="Strona poświęcona mapą w grze War Thunder">
	<meta name="keywords" content="War Thunder, mapy, gra, czołgi">
	<meta name="author" content="Adam Piechowiak">
	-->
	
	<meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">
	<link rel="stylesheet" href="css/style.css">
	
	<!--<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="img\fontello-834b8b06\css\fontello.css"/>
	[if lt IE 9]>
	<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
	
</head>

<body>

	<header>
	
	<h1 class="logo">War Thunder Mapy</h1>
	
	<nav id="topnav">
		<ul class="menu">
			<li><a href="index.php">Strona główna</a></li>
			<li><a href="tworcy.php">Twórcy</a></li>
			<li><a href="dywizjon.php">Dywizjon</a></li>
			<li><a href="logout.php">Wyloguj</a></li>
		</ul>
	</nav>
	
	</header>
	
	<main>
	
	<section>
		
		<header>
					<h1>Twórcy</h1>
		</header>
		
		
		<div class="box" style="text-align: left; height: 400px;">
		
		<p>adamos321 - twórca strony internetowej</p>
		<p>patryjota1 - opracowanie map</p>
		<p>Lord_190 - opracowanie map</p>
		
		</div>
		
	</section>
	
	</main>
	
	<footer>
	
	<div class="stopka">
	 Dziękuję za wizytę!
	</div>
	
	</footer>

</body>
</html>