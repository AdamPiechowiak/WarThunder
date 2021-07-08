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
					<h1>Dywizjon 2TC</h1>
		</header>
		
		<div class="box">
		
		<p>Dywizjon =2TC= Zaprasza aktywnych graczy w swoje szeregi</p>
		
		<div class="lewy">
		<h2>wymagania</h2>
		<ul>
			<li>16+</li>
			<li>Minimalnie 4.7 BR na Czołgach</li>
			<li>używanie discorda</li>
			<li>40 lvl</li>
		</ul>
		</div>
		
		<div class="prawy">
		<h2>kontakt</h2>
		
		<p>discord : https://discord.gg/AxQUbFEe</p>
		<p>lub napisać do nas w grze</p>
		
		</div>
		
		<div style="clear: both;"></div>
		
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