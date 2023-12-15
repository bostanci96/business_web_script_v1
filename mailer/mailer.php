<?php
require_once('../admin/host/a.php');
require_once('../admin/host/f.php');

if(isset($_POST["anasayfa"])){

}elseif(isset($_POST["username"])){
	$name = p("name");
	$surname = p("surname");
	$eposta = p("eposta");
	$telefon = p("telefon");
	$konu = p("konu");
	$mesaj = p("mesaj");
	$gelen_ip = GetIP();
	if(empty($name) || empty($surname) || empty($eposta) || empty($telefon) || empty($konu) || empty($mesaj)){
		echo "bos-deger";
	}else{
		$ileti ="Merhaba Yönetici; <br>Satın Alma Formundan Bir Yeni Mesaj Alıdın. Detaylar aşağıdaki gibidir;";
		$ileti .=  "<br><p><strong><h4><u>Gönderilen Mesaj Detayları</u></h4></strong></p>";
		$ileti .= "<b>Ad Soyad :</b> ".$name." ".$surname."<br>";
		$ileti .= "<b>E-Posta :</b> ".$eposta."<br>";
		$ileti .= "<b>Telefon :</b> ".$telefon."<br>";
		$ileti .= "<b>Konu :</b> ".$konu."<br>";
		$ileti .= "<b>Mesaj :</b> ".$mesaj."<br>";
		$ileti .= "<h5><u>Bu mesaj <b>".$gelen_ip."</b> numaralı ip adresinden gönderildi !</u></h5>";
		require 'class.phpmailer.php';
		$mail = new PHPMailer();
		require 'mail_functions_2.php';
		if($mail->Send()){
			echo "basarili";
			die();
		}else{
			echo 'basarisiz';
		}
	}
}

