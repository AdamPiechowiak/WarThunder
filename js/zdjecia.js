function wyswietl(sciezka,tryb)
{
	//var html=document.getElementsByTagName('html');
	
	var plik="<div class=\"tlo\"></div><nav id=\"topnav\"><ul class=\"menu\"><li><a href=\"../index.html\">Strona główna</a></li> <li><a href=\"../mczolgowe.html\">Mapy czołgowe</a></li> <li><a href=\"../mlotnicze.html\">Mapy lotnicze</a></li> <li><a href=\"../mokretowe.html\">Mapy okrętowe</a></li> <li><a href=\"../tworcy.html\">Twórcy</a></li></ul></nav><div class=\"wyswietlz\"><img class=\"zdjecia\" src=\"../img/"+mapa+"/"+mapa+sciezka+tryb+".jpg\" alt=\""+mapa+"\"/><div class=\"button\" onclick=\"schowaj()\">Zamknij</div><div style=\"clear: both;\"></div></div>";
	document.getElementById("slider").innerHTML=plik;
	$("#slider").fadeIn(1);
	
	$('html').addClass('blokujscroll');
}

function schowaj()
{
	$("#slider").fadeOut(1);
	
	$('html').removeClass('blokujscroll');
}

function w()
{
	alert("jestem");
}

function zmientryb(tryb)
{
	$('#AB').removeClass('zaznaczony');
	$('#RB').removeClass('zaznaczony');
	$('#SB').removeClass('zaznaczony');
	
	switch(tryb)
	{
		case'AB':
			$('#AB').addClass('zaznaczony');
			break;
			
		case'RB':
			$('#RB').addClass('zaznaczony');
			break;
			
		case'SB':
			$('#SB').addClass('zaznaczony');
			break;
	}
	
				
	
	var zdjecie = "<span onclick=\"wyswietl('_dominacja','"+tryb+"')\" class=\"namape\"><img src=\"../img/"+mapa+"/"+mapa+"_dominacja"+tryb+".jpg\" alt=\""+mapa+"\"/></span>";
	document.getElementById("dominacja").innerHTML=zdjecie;
	
	var zdjecie = "<span onclick=\"wyswietl('_bitwa','"+tryb+"')\" class=\"namape\"><img src=\"../img/"+mapa+"/"+mapa+"_bitwa"+tryb+".jpg\" alt=\""+mapa+"\"/></span>";
	document.getElementById("bitwa").innerHTML=zdjecie;
	
	var zdjecie = "<span onclick=\"wyswietl('_podboj1','"+tryb+"')\" class=\"namape\"><img src=\"../img/"+mapa+"/"+mapa+"_podboj1"+tryb+".jpg\" alt=\""+mapa+"\"/></span>";
	document.getElementById("podboj1").innerHTML=zdjecie;
	
	var zdjecie = "<span onclick=\"wyswietl('_podboj2','"+tryb+"')\" class=\"namape\"><img src=\"../img/"+mapa+"/"+mapa+"_podboj2"+tryb+".jpg\" alt=\""+mapa+"\"/></span>";
	document.getElementById("podboj2").innerHTML=zdjecie;
	
	var zdjecie = "<span onclick=\"wyswietl('_podboj3','"+tryb+"')\" class=\"namape\"><img src=\"../img/"+mapa+"/"+mapa+"_podboj3"+tryb+".jpg\" alt=\""+mapa+"\"/></span>";
	document.getElementById("podboj3").innerHTML=zdjecie;
	
	var zdjecie = "<span onclick=\"wyswietl('_podboj4','"+tryb+"')\" class=\"namape\"><img src=\"../img/"+mapa+"/"+mapa+"_podboj4"+tryb+".jpg\" alt=\""+mapa+"\"/></span>";
	document.getElementById("podboj4").innerHTML=zdjecie;
	
	
	schowaj();
	
}