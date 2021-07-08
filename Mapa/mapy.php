<?php
	
	session_start();

	if(isset($_SESSION['haslo']))
	{
		require_once"../hash.php";
	
		if(!password_verify($_SESSION['haslo'],$hash))
		{
			header('Location: ../haslo.php');
		}
	}
	else
	{
			header('Location: ../haslo.php');
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
	<link rel="stylesheet" href="../css/mapy.css">
	<script src="../js/jquery-3.1.1.min.js"></script>
	<script src="../js/nav.js"></script>
	<script src="../js/zdjecia.js"></script>
	
	<!--
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="img\fontello-834b8b06\css\fontello.css"/>
	[if lt IE 9]>
	<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
	<script>
	var url_string = window.location.href;
	var url = new URL(url_string);
	var mapa = url.searchParams.get("mapa");
	var miejscowki="<a href=\"miejscowki.php?mapa="+mapa+"\"><img src=\"../img/"+mapa+"/"+mapa+"_miejscowki.jpg\" alt=\""+mapa+"\"/></a><figcaption>Miejsówki</figcaption>"
	var odleglosci="<a href=\"odleglosci.php?mapa="+mapa+"\"><img src=\"../img/"+mapa+"/"+mapa+"_odleglosci.jpg\" alt=\""+mapa+"\"/></a><figcaption>Odległości</figcaption>"
	</script>
	
	
	
	<?php
				$mapa=$_GET["mapa"];
	?>
	
</head>

<body onload="zmientryb('AB')">

	<header>
	
	<h1 class="logo">War Thunder Mapy</h1>
	
	<nav id="topnav">
		<ul class="menu">
			<li><a href="../index.php">Strona główna</a></li>
			<li><a href="../tworcy.php">Twórcy</a></li>
			<li><a href="../dywizjon.php">Dywizjon</a></li>
			<li><a href="../logout.php">Wyloguj</a></li>
		</ul>
	</nav>
	
	</header>
	
	<main>
	
	<section>
	
	
	<header>
		<div class="head" id="mapname">
	
			<h1 id="napis">
				<?php 
				$string = str_replace('_',' ', $mapa);
				echo $string;
				?>
			</h1>
				
		</div>
				
	</header>
	
	
	<div>
	
	
	<div id="slider">
	</div>
	
	<div class="mapy">
		
		<div style="background-color: #191d21;">
		<div class="mapylinki">
		
			
			<p>po lewej stronie są opisane ciekawe miejsca a po prawej najpopularniejsze miejsca snajperskie z odległościami</p>
	
			<div class="mapao">
					
				<figure id="miejscowki">
				</figure>
					
			</div>
			
			<div class="mapao">
					
				<figure id="odleglosci">
				</figure>
					
			</div>
		</div>
		</div>
		
		<!-- tryby -->
		
		<div class="mapyobrazy">
		<p>Mapy różnego typu bitew dominacja, podbój, bitwa</p>
		<div class="zmientryb">
		<div onclick="zmientryb('AB')" class="trybprzycisk" id="AB">AB</div>
		<div onclick="zmientryb('RB')" class="trybprzycisk" id="RB">RB</div>
		<div onclick="zmientryb('SB')" class="trybprzycisk" id="SB">SB</div>
		<div style="clear: both;"></div>
		</div>
		<p>w zależności od trybu AB RB SB mapy mogą się różnić</p>
	
		
		<?php
		
		if(file_exists('../img/'.$mapa.'/'.$mapa.'_dominacjaAB.jpg'))
		{
			echo '
		<div class="mapa">
				
			<figure>
			<span id="dominacja">
			</span>
				<figcaption>Dominacja</figcaption>
			</figure>
				
		</div>';
		}
		
		if(file_exists('../img/'.$mapa.'/'.$mapa.'_bitwaAB.jpg'))
		{
			echo '
		<div class="mapa">
				
			<figure>
			<span id="bitwa">
			</span>
				<figcaption>Bitwa</figcaption>
			</figure>
				
		</div>';
		}
		
		if(file_exists('../img/'.$mapa.'/'.$mapa.'_podboj1AB.jpg'))
		{
			echo '
		<div class="mapa">
				
			<figure>
			<span id="podboj1">
			</span>
				<figcaption>Podbój 1</figcaption>
			</figure>
				
		</div>';
		}
		
		if(file_exists('../img/'.$mapa.'/'.$mapa.'_podboj2AB.jpg'))
		{
			echo '
		<div class="mapa">
				
			<figure>
			<span id="podboj2">
			</span>
				<figcaption>Podbój 2</figcaption>
			</figure>
				
		</div>';
		}
		
		if(file_exists('../img/'.$mapa.'/'.$mapa.'_podboj3AB.jpg'))
		{
			echo '
		<div class="mapa">
				
			<figure>
			<span id="podboj3">
			</span>
				<figcaption>Podbój 3</figcaption>
			</figure>
				
		</div>';
		}
		
		if(file_exists('../img/'.$mapa.'/'.$mapa.'_podboj4AB.jpg'))
		{
			echo '
		<div class="mapa">
				
			<figure>
			<span id="podboj4">
			</span>
				<figcaption>Podbój 4</figcaption>
			</figure>
				
		</div>';
		}
		
		?>
		
		
		
		
		
		
		
		
		
		
		</div>
		
		
	
	</div>
	
	
	
	</div>
		
	</section>
	
	</main>
	
	<footer>
	
	<div class="stopka">
	 Dziękuję za wizytę!
	</div>
	
	</footer>
	
	<script>
	document.getElementById("miejscowki").innerHTML=miejscowki;
	document.getElementById("odleglosci").innerHTML=odleglosci;
	zmientryb('RB');
	zmientryb('SB');
	zmientryb('AB');
	</script>

</body>
</html>