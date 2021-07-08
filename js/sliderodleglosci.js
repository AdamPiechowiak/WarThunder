var numer=1;



function zmienmape(pun)
{
	punkt=pun;
	var obrazMapy = document.querySelector('.photo');
	
	obrazMapy.style.backgroundImage = "url(\"../img/"+mapa+"/Odlegloscipunkty/"+mapa+"_punkt"+punkt+".jpg\")";
	
	
	$('.zmienmape').removeClass('wcisniety');
	$('#przycisk'+punkt).addClass('wcisniety');
	$('.podpunkt'+punkt).addClass('pokaz');
	
}

function odcisnij()
{
	punkt=0;
	
	var obrazMapy = document.querySelector('.photo');
	
	obrazMapy.style.backgroundImage = "url(\"../img/"+mapa+"/Odlegloscipunkty/"+mapa+"_punkt0.jpg\")";
	
	$('.zmienmape').removeClass('wcisniety');
	$('.podpunkt').removeClass('pokaz');
}

function nacisnij(punk)
{
	if(punkt!=punk)
	{
		odcisnij();
		zmienmape(punk);
	}
	else
	{
		odcisnij();
	}
}

function wyswietl(p1,p2)
{
	var plik="<div class=\"tlo\"></div><nav id=\"topnav\" class=\"sticky\"><ul class=\"menu\"><li><a href=\"../index.php\">Strona główna</a></li> <li><a href=\"../tworcy.php\">Twórcy</a></li> <li><a href=\"../dywizjon.php\">Dywizjon</a></li> <li><a href=\"../logout.php\">Wyloguj</a></li></ul></nav><div class=\"ustaw\"><div class=\"wyswietlz\"><div class=\"srodekz\" id=\"zdjeciemiejsca\"><img class=\"zdjecia\" src=\"../img/"+mapa+"/Odleglosci/"+mapa+"_punkt"+p1+p2+".jpg\" alt=\""+mapa+"\"/></div></div><div class=\"button\" onclick=\"schowaj()\">Zamknij</div></div>";
	document.getElementById("slider").innerHTML=plik;
	$("#slider").fadeIn(1);
	
	$('html').addClass('blokujscroll');
	
}

/*

function zmienobraz(kierunek,koniec)
{
	if(kierunek=='lewo')
	{
		numer--;
		if (numer<1) numer=koniec;
		var obraz="<img class=\"zdjecia\" src=\"../../img/"+mapa+"/Odleglosci/"+mapa+"punkt"+punkt+numer+".jpg\" alt=\""+mapa+"\"/>";
		document.getElementById("zdjeciemiejsca").innerHTML=obraz;
		$("#zdjeciemiejsca").fadeIn(1);
	}
	else
	{
		numer++;
		if (numer>koniec) numer=1;
		var obraz ="<img class=\"zdjecia\" src=\"../../img/"+mapa+"/Odleglosci/"+mapa+"punkt"+punkt+numer+".jpg\" alt=\""+mapa+"\"/>";
		document.getElementById("zdjeciemiejsca").innerHTML=obraz;
		$("#zdjeciemiejsca").fadeIn(1);
		
	}
	
}

<div class=\"tlo\"></div>

<nav id=\"topnav\" class=\"sticky\"><ul class=\"menu\"><li><a href=\"../index.html\">Strona główna</a></li> <li><a href=\"../mczolgowe.html\">Mapy czołgowe</a></li> <li><a href=\"../mlotnicze.html\">Mapy lotnicze</a></li> <li><a href=\"../mokretowe.html\">Mapy okrętowe</a></li> <li><a href=\"../tworcy.html\">Twórcy</a></li></ul></nav>

<div class=\"wyswietlz\">
	<div class=\"lewyz\">
	<div class=\"przyciskzmien\" onclick=\"zmienobraz('lewo')\">(--</div>
	</div>
	
	<div class=\"srodekz\" id=\"zdjeciemiejsca\">
	<img class=\"zdjecia\" src=\"../../img/"+mapa+"/Miejsca/"+mapa+"punkt"+punkt+numer+".jpg\" alt=\""+mapa+"\"/>
	</div>
	
	<div class=\"prawyz\">
	<div class=\"przyciskzmien\" onclick=\"zmienobraz('prawo')\">--)</div>
	</div>
	<div class=\"button\" onclick=\"schowaj()\">Zamknij</div>
	<div style=\"clear: both;\"></div>
</div>
*/


function schowaj()
{
	$("#slider").fadeOut(1);
	
	$('html').removeClass('blokujscroll');
}