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
	<link rel="stylesheet" href="../css/miejsca.css">
	<link rel="stylesheet" href="../css/zoommiejsca.css">
	<script src="../js/jquery-3.1.1.min.js"></script>
	<script src="../js/slidermiejsca.js"></script>
	<script>
	var url_string = window.location.href;
	var url = new URL(url_string);
	var mapa = url.searchParams.get("mapa");
	</script>
	<!--<script src="../../js/nav.js"></script>
	
	
	<script>
	var url_string = window.location.href;
	var url = new URL(url_string);
	var mapa = url.searchParams.get("mapa");
	</script>
	-->
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
				echo $string.' miejscowki';
				?>
				</h1>
				
		</div>
				
	</header>
	
	<div id="slider"></div>
	
	<div class="box">
		<div class="lewy">
			<!--
			echo '<img src="../img/'.$mapa.'/Miejsca/'.$mapa.'_punkty.jpg" alt="'.$mapa.'">';-->
			<div class="photo">
			</div>
		</div>
		
		<div class="prawy">
		<?php
		echo '<a href="mapy.php?mapa='.$mapa.'" class="powrot">Powrót</a>';
		?>
		<p>wybież punkt który chcesz zobaczyć:</p>
			<ul>
				<?php
				$i=1;
				while(file_exists('../img/'.$mapa.'/Miejsca/'.$mapa.'_punkt'.$i.'1.jpg'))
				{
					$j=1;
					while(file_exists('../img/'.$mapa.'/Miejsca/'.$mapa.'_punkt'.$i.$j.'.jpg'))
					{
						$j++;
					}
					$j--;
					echo '<div class="wlaczslider" onclick="wyswietl(\''.$i.'\','.$j.')"><li>punkt '.$i.'</li></div>';
					$i++;
				}
				?>
			</ul>
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
	
	<script src="../js/zoommiejsca.js"></script>
	
</body>
</html>