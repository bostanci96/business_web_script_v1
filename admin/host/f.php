<?php 

function p($par,$st=false){
	return str_replace(array("'"), array("&#39;"), trim($_POST[$par]));
	if($st){
		return str_replace(array("'"), array("&#39;"), addslashes(htmlspecialchars($_POST[$par])));
	}else{
		return str_replace(array("'"), array("&#39;"), addslashes(trim($_POST[$par])));
	}
}
function etiket_url_donustur($post){
	$parcala = str_word_count($post,1," ıİüÜöÖğĞçÇşŞ1234567890");
	$dizi = '';
	foreach($parcala as $etiket){
		$etiket = sef_link($etiket);
		$dizi.=$etiket.",";
	}
	$dizi = rtrim($dizi,",");
	return $dizi;
}
function GetIP(){
	if(getenv("HTTP_CLIENT_IP")) {
		$ip = getenv("HTTP_CLIENT_IP");
	} elseif(getenv("HTTP_X_FORWARDED_FOR")) {
		$ip = getenv("HTTP_X_FORWARDED_FOR");
		if (strstr($ip, ',')) {
			$tmp = explode (',', $ip);
			$ip = trim($tmp[0]);
		}
	} else {
		$ip = getenv("REMOTE_ADDR");
	}
	return $ip;
}
function alert($string){
	echo '<h4 class="alert_error">'.$string.'</h4>';
}

function success($string){
	echo '<h4 class="alert_success">'.$string.'</h4>';
}
function g($par){
	return strip_tags(trim(addslashes($_GET[$par])));
}

function kisalt($par,$uzunluk=600){
	if(strlen($par)>$uzunluk){
		$par = mb_substr($par, 0 , $uzunluk,"UTF-8")."...";
	}
	return $par;
}

function go($par,$time=0){
	if($time==0){
		header("Location:{$par}");
	}else{
		header("Refresh:$time; url={$par}");
	}
}

function session($par){
	if($_SESSION[$par]){
		return $_SESSION[$par];
	}else{
		return false;
	}
}

function cookie($par)
{
	if(isset($_COOKIE[$par]))
	{
		return $_COOKIE[$par];
	}
	else
	{
		return false;
	}
}

function ss($par){
	return stripslashes($par);
}

function session_olustur($par){
	foreach($par as $anahtar => $deger){
		$_SESSION[$anahtar] = $deger;
	}
}

function sef_link($string)
{
	$find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
	$replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
	$string = strtolower(str_replace($find, $replace, $string));
	$string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
	$string = trim(preg_replace('/\s+/', ' ', $string));
	$string = str_replace(' ', '-', $string);
	$string = str_replace('.', '',$string);
	return $string;
}


function tarih($par){
	$ay			= substr($par,5,2);
	$eski_ay  = array("01","02","03","04","05","06","07","08","09","10","11","12");
	$yeni_ay  = array("Ocak","Şubat","Mart","Nisan","Mayıs","Haziran","Temmuz","Ağustos","Eylül","Ekim","Kasım","Aralık");
	return substr($par,8,2).' '.str_replace($eski_ay,$yeni_ay,$ay).' '.substr($par,0,4);
}

function ckeditor($editorName="editor1"){
	
	echo "<script type='text/javascript' language='javascript'>
	CKEDITOR.replace('".$editorName."',{
		filebrowserWindowWidth : '900',
		filebrowserWindowHeight : '500',
		filebrowserBrowseUrl : '".ADMIN_URL."app-assets/libs/ckfinder/ckfinder.html',
		filebrowserImageBrowseUrl : '".ADMIN_URL."app-assets/libs/ckfinder/ckfinder.html?type=Images',
		filebrowserFlashBrowseUrl : '".ADMIN_URL."app-assets/libs/ckfinder/ckfinder.html?type=Flash',
		filebrowserUploadUrl : '".ADMIN_URL."app-assets/libs/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
		filebrowserImageUploadUrl : '".ADMIN_URL."app-assets/libs/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
		filebrowserFlashUploadUrl : '".ADMIN_URL."app-assets/libs/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',	
	});
</script>";
}


function imgAdd($fileName,$folderName,$tableName,$setName,$whereName,$last_insert_id,$resim_onad=null){
	global $db;
	require_once 'app.upload.php';
$toplam		= count($_FILES["{$fileName}"]["tmp_name"]);
$formatlar	= array("image/png","image/jpeg","image/jpg","image/gif" , "image/webp" ,"image/svg+xml", "application/pdf", "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet", "application/vnd.openxmlformats-officedocument.wordprocessingml.document", "application/msword", "application/vnd.ms-excel");

for($i=0; $i<$toplam; $i++){
	$dosya_tipi		= $_FILES["{$fileName}"]["type"][$i];
	if(in_array($dosya_tipi,$formatlar)){
		$resimler = array();
		foreach ($_FILES["{$fileName}"] as $k => $l) {
			foreach ($l as $i => $v) {
				if (!array_key_exists($i, $resimler))
					$resimler[$i] = array();
				$resimler[$i][$k] = $v;
			}
		}

		$sira_no	= 1;
		foreach($resimler as $resim){
			$handle = new Upload($resim);

			if($handle->uploaded){
				$resimGenislik = $handle->image_src_x;
				/*if($resimGenislik>1920){
					$handle->image_resize = true;
					$handle->image_x = 1920;
					$handle->image_ratio_y = true;
				}*/
				/* resmi yeniden isimlendir */
				$randName 	= substr(base64_encode(uniqid(true)),0,20);
				$newName 	= str_replace("=","",$randName);
				$newName 	= $resim_onad.$newName;
				$handle->file_new_name_body = $newName;
				$resim_adi = $handle->file_new_name_body;
				/* Resim Uzantısını Alma */
				$uzanti = $handle->file_src_name_ext;
				$resimAdi = $resim_adi.".".$uzanti;
				/* Resim yükleme izini */
				$handle->allowed = array('image/*','application/*');
				/* Büyük resmi yükle */
				$handle->Process("../images/{$folderName}/big/");
				if($handle->processed){
					$handle->image_resize = true;
					$handle->image_x = 275;
					$handle->image_y = 312;
					$handle->image_ratio_crop=true;
					$handle->file_new_name_body = $newName;
					$handle->Process("../images/{$folderName}/thumb/");
					$imgInsert = $db->query("UPDATE {$tableName} SET {$setName} = '$resimAdi' WHERE {$whereName} ={$last_insert_id}");
					return true;
				}
			}
			$sira_no++;
		}
	}
}						
}	

?>