<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>War Thunder Mapy</title>
		
	<link rel="stylesheet" href="css/haslo.css" type="text/css" />
	
	
</head>

<body>

	<div id="container">
		<form method="post">
			
			<input type="password" name="haslo" placeholder="hasło 123" onfocus="this.placeholder=''" onblur="this.placeholder='hasło'">
			
			<input type="submit" value="Zaloguj się">
			
			<?php
			
			session_start();
			
			if(isset($_POST['haslo']))
			{
				$haslo = $_POST['haslo'];
				//$haslo_hash = password_hash($haslo, PASSWORD_DEFAULT);
				//echo $haslo_hash;
				
				require_once"hash.php";
				
						
				if(password_verify($haslo,$hash))
				{
					$_SESSION['haslo']=$haslo;
					header('Location: index.php');
				}
				else
				{
					unset($_SESSION['haslo']);
					echo "<p>nieprawidłowe hasło</p>";
					//echo $haslo_hash;
				}
				
			}
			
			

			?>
			
		</form>
	</div>
	
</body>
</html>