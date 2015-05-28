<?php
require('libs/Smarty.class.php');
$smarty = new Smarty;
error_reporting(0);
//META
$smarty->assign("tytulStrony","Acyk.pl");
$smarty->assign("favi","img/favi.png");

//LOGO
$logo = array("img/logol.png", "img/logo.png");
$smarty->assign("logo",$logo);

//SHARE
$share = array("img/icons/facebook.png", "img/icons/naszaklasa.png", "img/icons/googleplus.png", "img/icons/rss.png");
$smarty->assign("share",$share);



//MENU
$menu = array(
  array("title"=>"Aktualności",		"act"=>false, "link"=>"index.php", "sub"=>false),
  array("title"=>"Napisz artykuł",	"act"=>false, "link"=>"index.php", "sub"=>false),
  array("title"=>"Programowanie",	"act"=>true,  "link"=>"#",		   "sub"=>true, 
		"submenu"=>array(	"Assembler", 	"Matlab", 	"C ", 	"C++", 	"Python", 	"SQL", 	"Java", "Smarty"),	
		"sublink"=>array(	"#", 			"#", 		"#", 	"#", 	"#", 		"#", 	"#", 	"#"), 
		"subact"=>array(	false, 			false, 		false, 	true, 	false, 		false, 	false, 	false)),
  array("title"=>"Skrypty",			"act"=>false, "link"=>"#",		 "sub"=>true, 
		"submenu"=>array(	"HTML 5", 	"CSS3", "PHP", 	"Windows vbs", 	"Bash"),
		"sublink"=>array(	"#", 		"#", 	"#", 	"#", 			"#"),
		"subact"=>array(	false,		false,	false, 	false, 			false)),
  array("title"=>"Sieci",			"act"=>false, "link"=>"#",		 "sub"=>true, 
		"submenu"=>array(	"Windows", 	"Linux"), 
		"sublink"=>array(	"#", 		"#"),
		"subact"=>array(	false, 		false)),  										
  array("title"=>"Grafika",			"act"=>false, "link"=>"#",		 "sub"=>false),
  array("title"=>"Dobre strony",	"act"=>false, "link"=>"#",		 "sub"=>false),
  array("title"=>"Kontakt",			"act"=>false, "link"=>"#",		 "sub"=>false));
$smarty->assign("menu",$menu);









//GDZIEJESTEM
$gdzie = array(
  "tytul"	=>	array("Kursy", "Java", "Lekcja 11"),
  "link"	=>	array("wp.pl", "#", "#"));
$smarty->assign("gdzie",$gdzie);

//ARTYKUŁ
$articcle = '<img src="img/logol.png" alt="" />
				Gracz przyjmuje zakład od swojego znajomego o to, kto pierwszy przy 
				użyciu własnego aerostatu dotrze na Biegun Północny. Wyścig rozpoczy
				namy od skonfigurowania "elementu napędowego", dzięki któremu balon nape
				łni się gorącym powietrzem i będzie w stanie unieść nas wraz z gondolą w
				powietrze. Nie zapominamy również o zrzuceniu balastu, odpowiednim usta
				ieniu kompasu oraz innych niezbędnych do lotu przyrządów.
				Będąc już w powietrzu naszym podstawowym zadaniem jest łapa
				nie możliwie najlepszych prądów powietrznych umożliwiających jak 
				najszybsze dotarcie na Biegun. Kolejną istotną kwestią są zapasy paliwa 
				oraz żywności,
				które trzeba będzie systematycznie uzupełniać lądując na napotkanych 
				na szlaku wyspach. Niejednokrotnie przyjdzie nam zwiedzić ogromne połacie 
				terenu zanim wyposażymy siebie i statek w odpowiedni ekwipunek.
				W trakcie rozgrywki nie skupiamy się jedynie na czynnościach bez
				pośrednio związanych z obsługą licznych urządzeń sterowniczych, szeregu 
				wskaźników, zegarów, liczników, ale upajamy się cudownymi widokami 
				oraz pięknem otaczającej nas zewsząd przy
				rody zapominając mimowolnie o podstawowym celu wyprawy.';
$article = array(
  "tytul"	=>	array("Programiści WebKitu zadowoleni z odejścia Google", "Programiści WebKitu zadowoleni z odejścia Google", "Programiści WebKitu zadowoleni z odejścia Google"),
  "link"	=>	array("http://wp.pl", "http://haks.pl", "http://haks.pl"),
  "kateg"	=>	array("Python", "C, C++", "Java"),
  "kategl"	=>	array("#", "#", "#"),
  "tresc"	=>	array($articcle, $articcle, $articcle),
  "autor"	=>	array("pawel33317", "aryuro1819", "pawel33317"),
  "autorl"	=>	array("#", "#", "#"),
  "data"	=>	array("13.03.2013", "13.03.2013", "13.03.2013"),
  "koment"	=>	array("23 komentarzy", "12 komentarzy", "12 komentarzy"),
  "komentl"	=>	array("#", "#", "#"),
  "ocena"	=>	array("4", "4.5", "6"),
  "ocenal"	=>	array("#", "#", "#")
);
$smarty->assign("article",$article);

//LOGOWANIE
$logowanie["user"]="pawel33317";
$logowanie["userl"]="#";
$logowanie["ranga"]="Administrator";
$logowanie["rangal"]="#";
$logowanie["panel"]="http://haks.pl";
$logowanie["wyloguj"]="http://haks.pl";
$smarty->assign("logowanie",$logowanie);

//POPULARNE
$pop = array(
  "tytul"	=>	array("PhraseExpress 9.1.19d", "Java", "Lekcja 11","Java Runtime Environment","Defraggler 2.13.670","Process Explorer 15.30","WindowBlinds 7.4","Yahoo! Messenger","Linux Polska","Microsowt wired","ZoneAlarm Free"),
  "link"	=>	array("wp.pl", "#", "#", "#", "#", "#", "#", "#", "#", "#", "#"));
$smarty->assign("pop",$pop);

//INFO
$info="Serwis będzie nieczynny w dniach 11.12 - 06.02 z powodu aktualizacji. Bardzo przepraszamy";
$smarty->assign("info",$info);

//FOOTER
$footer="Copyright © <strong>2013</strong>. Created by <strong>Paweł Czubak</strong>.<br>Valid <strong>HTML 5</strong> and <strong>CSS 3</strong>.";
$smarty->assign("footer",$footer);
$footerlnk = array(
  "tytul"	=>	array("GŁÓWNA", "INNE", "GALERIA", "INFORMACJE PRAWNE", "LICENCJA", "PORTFOLIO", "KONTAKT"),
  "link"	=>	array("wp.pl", "#", "#", "#", "#", "#", "#"));
$smarty->assign("footerlnk",$footerlnk);





$smarty->display('index.tpl');
?>
