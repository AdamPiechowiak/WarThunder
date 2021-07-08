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
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/nav.js"></script>
	
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
	
	<div class="box">
	
	<header>
				<h1>Mapy czołgowe</h1>
	</header>
	
	<div class="mapy">
	
		<div class="mapa">
				
			<figure>
				<a href="Mapa/mapy.php?mapa=El_Alamein"><img src="img/El_Alamein/El_Alamein.jpg" alt="El_Alamein"/></a>
				<figcaption>El Alamein</figcaption>
			</figure>
				
		</div>
		
		<div class="mapa">
				
			<figure>
				<a href="Mapa/mapy.php?mapa=Polska"><img src="img/Polska/Polska.jpg" alt="Polska"/></a>
				<figcaption>Polska</figcaption>
			</figure>
				
		</div>
		
		
		<div class="mapa">
				
			<figure>
				<a href="Mapa/mapy.php?mapa=Opuszczona_fabryka"><img src="img/Opuszczona_fabryka/Opuszczona_fabryka.jpg" alt="Opuszczona_fabryka"/></a>
				<figcaption>Opuszczona fabryka</figcaption>
			</figure>
				
		</div>
		
		
		<div class="mapa">
				
			<figure>
				<a href="Mapa/mapy.php?mapa=Berlin"><img src="img/Berlin/Berlin.jpg" alt="Berlin"/></a>
				<figcaption>Berlin</figcaption>
			</figure>
				
		</div>
		
		
		<div class="mapa">
				
			<figure>
				<a href="Mapa/mapy.php?mapa=Lasy_Hurtgen"><img src="img/Lasy_Hurtgen/Lasy_Hurtgen.jpg" alt="Lasy_Hurtgen"/></a>
				<figcaption>Lasy Hürtgen</figcaption>
			</figure>
				
		</div>
		
		
		<!--
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=Forsowanie_Renu"><img src="img/Forsowanie_Renu/Forsowanie_Renu.jpg" alt="Forsowanie_Renu"/></a>
				<figcaption>Forsowanie Renu</figcaption>
			</figure>
				
		</div>
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=Alaska"><img src="img/Alaska/Alaska.jpg" alt="Alaska"/></a>
				<figcaption>Alaska</figcaption>
			</figure>
				
		</div>
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=Pustynia_Ameryki"><img src="img/Pustynia_Ameryki/Pustynia_Ameryki.jpg" alt="Pustynia_Ameryki"/></a>
				<figcaption>Pustynia Ameryki</figcaption>
			</figure>
				
		</div>
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=Ardeny"><img src="img/Ardeny/Ardeny.jpg" alt="Ardeny"/></a>
				<figcaption>Ardeny</figcaption>
			</figure>
				
		</div>
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=Rzeka_popiolu"><img src="img/Rzeka_popiolu/Rzeka_popiolu.jpg" alt="Rzeka_popiolu"/></a>
				<figcaption>Rzeka popiołu</figcaption>
			</figure>
				
		</div>
		
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=Port"><img src="img/Port/Port.jpg" alt="Port"/></a>
				<figcaption>Port</figcaption>
			</figure>
				
		</div>
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=Karpaty"><img src="img/Karpaty/Karpaty.jpg" alt="Karpaty"/></a>
				<figcaption>Karpaty</figcaption>
			</figure>
				
		</div>
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=Europa_wschodnia"><img src="img/Europa_wschodnia/Europa_wschodnia.jpg" alt="Europa_wschodnia"/></a>
				<figcaption>Europa wschodnia</figcaption>
			</figure>
				
		</div>
		
		
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=Europejska_prowincja"><img src="img/Europejska_prowincja/Europejska_prowincja.jpg" alt="Europejska_prowincja"/></a>
				<figcaption>Europejska prowincja</figcaption>
			</figure>
				
		</div>
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=Pola_Normandii"><img src="img/Pola_Normandii/Pola_Normandii.jpg" alt="Pola_Normandii"/></a>
				<figcaption>Pola Normandii</figcaption>
			</figure>
				
		</div>
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=Pola_Polski"><img src="img/Pola_Polski/Pola_Polski.jpg" alt="Pola_Polski"/></a>
				<figcaption>Pola Polski</figcaption>
			</figure>
				
		</div>
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=Finlandia"><img src="img/Finlandia/Finlandia.jpg" alt="Finlandia"/></a>
				<figcaption>Finlandia</figcaption>
			</figure>
				
		</div>
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=Sniezna_dolina"><img src="img/Sniezna_dolina/Sniezna_dolina.jpg" alt="Sniezna_dolina"/></a>
				<figcaption>Śnieżna dolina</figcaption>
			</figure>
				
		</div>
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=Szwecja"><img src="img/Szwecja/Szwecja.jpg" alt="Szwecja"/></a>
				<figcaption>Szwecja</figcaption>
			</figure>
				
		</div>
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=Fulda"><img src="img/Fulda/Fulda.jpg" alt="Fulda"/></a>
				<figcaption>Fulda</figcaption>
			</figure>
				
		</div>
		
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=Wlochy"><img src="img/Wlochy/Wlochy.jpg" alt="Wlochy"/></a>
				<figcaption>Włochy</figcaption>
			</figure>
				
		</div>
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=Japonia"><img src="img/Japonia/Japonia.jpg" alt="Japonia"/></a>
				<figcaption>Japonia</figcaption>
			</figure>
				
		</div>
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=Dzungla"><img src="img/Dzungla/Dzungla.jpg" alt="Dzungla"/></a>
				<figcaption>Dżungla</figcaption>
			</figure>
				
		</div>
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=Karelia"><img src="img/Karelia/Karelia.jpg" alt="Karelia"/></a>
				<figcaption>Karelia</figcaption>
			</figure>
				
		</div>
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=38_Rownoleznik"><img src="img/38_Rownoleznik/38_Rownoleznik.jpg" alt="38_Rownoleznik"/></a>
				<figcaption>38 Równoleżnik</figcaption>
			</figure>
				
		</div>
		
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=Kuban"><img src="img/Kuban/Kuban.jpg" alt="Kuban"/></a>
				<figcaption>Kubań</figcaption>
			</figure>
				
		</div>
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=Kursk"><img src="img/Kursk/Kursk.jpg" alt="Kursk"/></a>
				<figcaption>Kursk</figcaption>
			</figure>
				
		</div>
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=Linia_Maginota"><img src="img/Linia_Maginota/Linia_Maginota.jpg" alt="Linia_Maginota"/></a>
				<figcaption>Linia Maginot'a</figcaption>
			</figure>
				
		</div>
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=Srodkowy_wschod"><img src="img/Srodkowy_wschod/Srodkowy_wschod.jpg" alt="Srodkowy_wschod"/></a>
				<figcaption>Środkowy wschód</figcaption>
			</figure>
				
		</div>
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=Mozdok"><img src="img/Mozdok/Mozdok.jpg" alt="Mozdok"/></a>
				<figcaption>Mozdok</figcaption>
			</figure>
				
		</div>
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=Normandia"><img src="img/Normandia/Normandia.jpg" alt="Normandia"/></a>
				<figcaption>Normandia</figcaption>
			</figure>
				
		</div>
		
		
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=Port_Noworosyjsk"><img src="img/Port_Noworosyjsk/Port_Noworosyjsk.jpg" alt="Port_Noworosyjsk"/></a>
				<figcaption>Port Noworosyjsk</figcaption>
			</figure>
				
		</div>
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=Piaski_Synaju"><img src="img/Piaski_Synaju/Piaski_Synaju.jpg" alt="Piaski_Synaju"/></a>
				<figcaption>Piaski Synaju</figcaption>
			</figure>
				
		</div>
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=Piaski_Tunezji"><img src="img/Piaski_Tunezji/Piaski_Tunezji.jpg" alt="Piaski_Tunezji"/></a>
				<figcaption>Piaski Tunezji</figcaption>
			</figure>
				
		</div>
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=Synaj"><img src="img/Synaj/Synaj.jpg" alt="Synaj"/></a>
				<figcaption>Synaj</figcaption>
			</figure>
				
		</div>
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=Stalingrad"><img src="img/Stalingrad/Stalingrad.jpg" alt="Stalingrad"/></a>
				<figcaption>Stalingrad</figcaption>
			</figure>
				
		</div>
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=Okolice_Wolokolamska"><img src="img/Okolice_Wolokolamska/Okolice_Wolokolamska.jpg" alt="Okolice_Wolokolamska"/></a>
				<figcaption>Okolice Wołokołamska</figcaption>
			</figure>
				
		</div>
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=Tunezja"><img src="img/Tunezja/Tunezja.jpg" alt="Tunezja"/></a>
				<figcaption>Tunezja</figcaption>
			</figure>
				
		</div>
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=Wzgorza_Wietnamu"><img src="img/Wzgorza_Wietnamu/Wzgorza_Wietnamu.jpg" alt="Wzgorza_Wietnamu"/></a>
				<figcaption>Wzgórza Wietnamu</figcaption>
			</figure>
				
		</div>
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=Wolokolamsk"><img src="img/Wolokolamsk/Wolokolamsk.jpg" alt="Wolokolamsk"/></a>
				<figcaption>Wołokołamsk</figcaption>
			</figure>
				
		</div>
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=Wallonia"><img src="img/Wallonia/Wallonia.jpg" alt="Wallonia"/></a>
				<figcaption>Wallonia</figcaption>
			</figure>
				
		</div>
		
		<div class="mapa">
				
			<figure>
				<a href="Mczolgowe/mapy.html?mapa=Biala_Forteca"><img src="img/Biala_Forteca/Biala_Forteca.jpg" alt="Biala_Forteca"/></a>
				<figcaption>Biała Forteca</figcaption>
			</figure>
				
		</div>
		-->
		
	</div>
		
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