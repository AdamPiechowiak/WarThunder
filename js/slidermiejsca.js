var numer=1;
var punkt;

function wyswietl(punk,koniec)
{
	punkt=punk;
	numer=1;
	var plik="<div class=\"tlo\"></div><nav id=\"topnav\" class=\"sticky\"><ul class=\"menu\"><li><a href=\"../index.php\">Strona główna</a></li> <li><a href=\"../tworcy.php\">Twórcy</a></li> <li><a href=\"../dywizjon.php\">Dywizjon</a></li> <li><a href=\"../logout.php\">Wyloguj</a></li></ul></nav><div class=\"ustaw\"><div class=\"wyswietlz\"><div class=\"lewyz\" onclick=\"zmienobraz('lewo',"+koniec+")\"><div class=\"przyciskzmien\"><</div></div><div class=\"srodekz\" id=\"zdjeciemiejsca\"><img class=\"zdjecia\" src=\"../img/"+mapa+"/Miejsca/"+mapa+"_punkt"+punkt+numer+".jpg\" alt=\""+mapa+"\"/></div><div class=\"prawyz\" onclick=\"zmienobraz('prawo',"+koniec+")\"><div class=\"przyciskzmien\">></div></div><div style=\"clear: both;\"></div></div><div class=\"button\" onclick=\"schowaj()\">Zamknij</div></div>";
	document.getElementById("slider").innerHTML=plik;
	$("#slider").fadeIn(1);
	
	$('html').addClass('blokujscroll');
	
}

function zmienobraz(kierunek,koniec)
{
	if(kierunek=='lewo')
	{
		numer--;
		if (numer<1) numer=koniec;
		var obraz="<img class=\"zdjecia\" src=\"../img/"+mapa+"/Miejsca/"+mapa+"_punkt"+punkt+numer+".jpg\" alt=\""+mapa+"\"/>";
		document.getElementById("zdjeciemiejsca").innerHTML=obraz;
		$("#zdjeciemiejsca").fadeIn(1);
	}
	else
	{
		numer++;
		if (numer>koniec) numer=1;
		var obraz ="<img class=\"zdjecia\" src=\"../img/"+mapa+"/Miejsca/"+mapa+"_punkt"+punkt+numer+".jpg\" alt=\""+mapa+"\"/>";
		document.getElementById("zdjeciemiejsca").innerHTML=obraz;
		$("#zdjeciemiejsca").fadeIn(1);
		
	}
	
}

/*
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