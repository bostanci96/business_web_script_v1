<?php
session_start();
ob_start();


$dbHost  	= "localhost";
$dbName 	= "elisa";
$dbUser 	= "elisa";
$dbPass 	= "Qs3^94cj";


try{
	$db = new PDO("mysql:host=".$dbHost.";dbname=".$dbName.";charset=utf8",$dbUser,$dbPass);
	$db->query("SET CHARACTER SET UTF8");
	$db->query("SET NAMES 'utf8'");
}catch(PDOException $e){
	print $e->getMessage();
	die();
}
$ayar = $db->query("SELECT * FROM ayarlar")->fetch(PDO::FETCH_ASSOC);
$bakim = $db->query("SELECT * FROM bakim")->fetch(PDO::FETCH_ASSOC);


$resim66 = $db->query("SELECT * FROM fotograflar WHERE fotograf_id = 66")->fetch(PDO::FETCH_ASSOC);
$resim67 = $db->query("SELECT * FROM fotograflar WHERE fotograf_id = 67")->fetch(PDO::FETCH_ASSOC);
$resim68 = $db->query("SELECT * FROM fotograflar WHERE fotograf_id = 68")->fetch(PDO::FETCH_ASSOC);
$resim69 = $db->query("SELECT * FROM fotograflar WHERE fotograf_id = 69")->fetch(PDO::FETCH_ASSOC);
$resim70 = $db->query("SELECT * FROM fotograflar WHERE fotograf_id = 70")->fetch(PDO::FETCH_ASSOC);
$resim71 = $db->query("SELECT * FROM fotograflar WHERE fotograf_id = 71")->fetch(PDO::FETCH_ASSOC);
$resim72 = $db->query("SELECT * FROM fotograflar WHERE fotograf_id = 72")->fetch(PDO::FETCH_ASSOC);
$resim73 = $db->query("SELECT * FROM fotograflar WHERE fotograf_id = 73")->fetch(PDO::FETCH_ASSOC);
$resim74 = $db->query("SELECT * FROM fotograflar WHERE fotograf_id = 74")->fetch(PDO::FETCH_ASSOC);
$resim75 = $db->query("SELECT * FROM fotograflar WHERE fotograf_id = 75")->fetch(PDO::FETCH_ASSOC);
$resim76 = $db->query("SELECT * FROM fotograflar WHERE fotograf_id = 76")->fetch(PDO::FETCH_ASSOC);
$resim81 = $db->query("SELECT * FROM fotograflar WHERE fotograf_id = 81")->fetch(PDO::FETCH_ASSOC);
$resim84 = $db->query("SELECT * FROM fotograflar WHERE fotograf_id = 84")->fetch(PDO::FETCH_ASSOC);
$resim85 = $db->query("SELECT * FROM fotograflar WHERE fotograf_id = 85")->fetch(PDO::FETCH_ASSOC);
$resim88 = $db->query("SELECT * FROM fotograflar WHERE fotograf_id = 88")->fetch(PDO::FETCH_ASSOC);
$resim89 = $db->query("SELECT * FROM fotograflar WHERE fotograf_id = 89")->fetch(PDO::FETCH_ASSOC);
$resim91 = $db->query("SELECT * FROM fotograflar WHERE fotograf_id = 91")->fetch(PDO::FETCH_ASSOC);
$resim92 = $db->query("SELECT * FROM fotograflar WHERE fotograf_id = 92")->fetch(PDO::FETCH_ASSOC);
$resim93 = $db->query("SELECT * FROM fotograflar WHERE fotograf_id = 93")->fetch(PDO::FETCH_ASSOC);
$resim94 = $db->query("SELECT * FROM fotograflar WHERE fotograf_id = 94")->fetch(PDO::FETCH_ASSOC);
$resim95 = $db->query("SELECT * FROM fotograflar WHERE fotograf_id = 95")->fetch(PDO::FETCH_ASSOC);
$resim96 = $db->query("SELECT * FROM fotograflar WHERE fotograf_id = 96")->fetch(PDO::FETCH_ASSOC);
$resim97 = $db->query("SELECT * FROM fotograflar WHERE fotograf_id = 97")->fetch(PDO::FETCH_ASSOC);
$resim98 = $db->query("SELECT * FROM fotograflar WHERE fotograf_id = 98")->fetch(PDO::FETCH_ASSOC);
$resim99 = $db->query("SELECT * FROM fotograflar WHERE fotograf_id = 99")->fetch(PDO::FETCH_ASSOC);
$resim100 = $db->query("SELECT * FROM fotograflar WHERE fotograf_id = 100")->fetch(PDO::FETCH_ASSOC);
$resim124 = $db->query("SELECT * FROM fotograflar WHERE fotograf_id = 124")->fetch(PDO::FETCH_ASSOC);
$resim125 = $db->query("SELECT * FROM fotograflar WHERE fotograf_id = 125")->fetch(PDO::FETCH_ASSOC);
$resim126 = $db->query("SELECT * FROM fotograflar WHERE fotograf_id = 126")->fetch(PDO::FETCH_ASSOC);
$resim127 = $db->query("SELECT * FROM fotograflar WHERE fotograf_id = 127")->fetch(PDO::FETCH_ASSOC);
$resim129 = $db->query("SELECT * FROM fotograflar WHERE fotograf_id = 129")->fetch(PDO::FETCH_ASSOC);



define("PATH",realpath("."));


define("URL",$ayar["site_url"]);


define("TEMA_URL",URL."tema/");

define("TEMA_INC","tema/");

define("ADMIN_URL",URL."admin/");
define("TEMA_YAPIM","tema/bakim/");
define("YAPIM_AST",URL."tema/bakim/yapim/");
					
define("SITE",TRUE);

require_once("f.php");
?>
