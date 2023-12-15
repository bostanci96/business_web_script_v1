<?php
if(isset($_GET["url"])){
$urlSef = g("url");
$sayfaControl = $db->prepare("SELECT * FROM sayfalar WHERE sayfa_url=:url AND sayfa_durum=:durum");
$sayfaControl ->bindParam("url",$urlSef,PDO::PARAM_STR,50);
$sayfaControl ->bindValue("durum",1,PDO::PARAM_INT);
$sayfaControl -> execute();
if($sayfaControl->rowCount()){
$sayfaRow = $sayfaControl->fetch(PDO::FETCH_ASSOC);
$id=$sayfaRow["sayfa_id"];
}else{
header("Location:".LURL."404");exit();
}
}else{
header("Location:".LURL."404");exit();
}
?>
 <?php $kategorix = $db->query("SELECT * FROM kategoriler INNER JOIN sayfalar ON kategori_id=portkat WHERE kat_secenek=2 AND sayfa_id='$id'")->fetch(PDO::FETCH_ASSOC);
        $sanrakipageid = $kategorix["sayfa_id"];
        ?>
 <?php $kategorixyyyy = $db->query("SELECT * FROM haberkategori INNER JOIN sayfalar ON kategori_id=portkat WHERE kat_secenek=1 AND sayfa_id='$id'")->fetch(PDO::FETCH_ASSOC);
        $sanrakipageid = $kategorixyyyy["sayfa_id"];
        ?>


<!DOCTYPE html>
<html lang="it-IT">
    <head>
         <title><?php if($sayfaRow["sayfa_goster1"]){ echo $sayfaRow["sayfa_goster1"]; }else{ echo $sayfaRow["sayfa_adi"]; } ?> - <?php echo $ayar[$lehce."site_title"];?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
        <meta name="description" itemprop="description" content="<?php if($sayfaRow["sayfa_goster2"]){ echo $sayfaRow["sayfa_goster2"]; }else{ echo $sayfaRow["sayfa_desc"]; } ?>" />
        <meta name="keywords" itemprop="keywords" content="<?php echo $sayfaRow[$lehce."sayfa_keyw"];?>" />
        <meta name="Abstract" content="<?php echo $ayar["main_tablo"];?>" />
        <meta name="classification" content="<?php if($sayfaRow["sayfa_goster1"]){ echo $sayfaRow["sayfa_goster1"]; }else{ echo $sayfaRow["sayfa_adi"]; } ?> - <?php echo $ayar[$lehce."site_title"];?>" />
        <meta http-equiv="content-language" content="tr" />
        <meta name="distribution" content="Global" />
        <meta name="robots" content="all" />
        <meta name="robots" content="index, follow" />
        <meta name="revisit-after" content="7 days" />
        <meta name="country" content="Türkiye" />
        <link rel="canonical" href="<?php echo "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>" />
        <meta property="og:title" content="<?php if($sayfaRow["sayfa_goster1"]){ echo $sayfaRow["sayfa_goster1"]; }else{ echo $sayfaRow["sayfa_adi"]; } ?> - <?php echo $ayar[$lehce."site_title"];?>" />
        <meta property="og:locale" content="tr_TR" />
        <meta property="og:type" content="website" />
        <meta property="og:description" content="<?php if($sayfaRow["sayfa_goster2"]){ echo $sayfaRow["sayfa_goster2"]; }else{ echo $sayfaRow["sayfa_desc"]; } ?>" />
        <meta property="og:url" content="<?php echo LURL;?>" />
        <meta property="og:site_name" content="<?php if($sayfaRow["sayfa_goster1"]){ echo $sayfaRow["sayfa_goster1"]; }else{ echo $sayfaRow["sayfa_adi"]; } ?> - <?php echo $ayar[$lehce."site_title"];?>" />
<style id='elementor-frontend-inline-css' type='text/css'>
    .elementor-kit-6{--e-global-color-primary:#6EC1E4;--e-global-color-secondary:#54595F;--e-global-color-text:#7A7A7A;--e-global-color-accent:#61CE70;--e-global-typography-primary-font-family:"Roboto";--e-global-typography-primary-font-weight:600;--e-global-typography-secondary-font-family:"Roboto Slab";--e-global-typography-secondary-font-weight:400;--e-global-typography-text-font-family:"Roboto";--e-global-typography-text-font-weight:400;--e-global-typography-accent-font-family:"Roboto";--e-global-typography-accent-font-weight:500;background-color:#E7EFE6;}.elementor-section.elementor-section-boxed > .elementor-container{max-width:1140px;}.e-container{--container-max-width:1140px;}.elementor-widget:not(:last-child){margin-bottom:20px;}.elementor-element{--widgets-spacing:20px;}{}h1.entry-title{display:var(--page-title-display);}.elementor-kit-6 e-page-transition{background-color:#FFBC7D;}@media(max-width:1024px){.elementor-section.elementor-section-boxed > .elementor-container{max-width:1024px;}.e-container{--container-max-width:1024px;}}@media(max-width:767px){.elementor-section.elementor-section-boxed > .elementor-container{max-width:767px;}.e-container{--container-max-width:767px;}}
.elementor-5026 .elementor-element.elementor-element-2777ab1 > .elementor-container{min-height:100vh;}.elementor-5026 .elementor-element.elementor-element-2777ab1:not(.elementor-motion-effects-element-type-background), .elementor-5026 .elementor-element.elementor-element-2777ab1 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:url("<?php echo URL; ?>images/blog.jpg");background-position:center center;background-size:cover;}.elementor-5026 .elementor-element.elementor-element-2777ab1 > .elementor-background-overlay{background-color:#000000;opacity:0.25;transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-5026 .elementor-element.elementor-element-2777ab1{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-5026 .elementor-element.elementor-element-ff4c9a7{--divider-border-style:solid;--divider-color:#FFFFFF;--divider-border-width:1px;}.elementor-5026 .elementor-element.elementor-element-ff4c9a7 .elementor-divider-separator{width:100%;}.elementor-5026 .elementor-element.elementor-element-ff4c9a7 .elementor-divider{padding-top:15px;padding-bottom:15px;}.elementor-5026 .elementor-element.elementor-element-f118364{--divider-border-style:solid;--divider-color:#FFFFFF;--divider-border-width:1px;}.elementor-5026 .elementor-element.elementor-element-f118364 .elementor-divider-separator{width:100%;}.elementor-5026 .elementor-element.elementor-element-f118364 .elementor-divider{padding-top:15px;padding-bottom:15px;}.elementor-5026 .elementor-element.elementor-element-09e9418{--spacer-size:15vh;}.elementor-5026 .elementor-element.elementor-element-06b9332 .elementor-element-populated a{color:#000000;}.elementor-5026 .elementor-element.elementor-element-b01a87a .section-content__inner{max-width:100%;}.elementor-5026 .elementor-element.elementor-element-b01a87a .section-content__text{max-width:1440px;}.elementor-5026 .elementor-element.elementor-element-b01a87a > .elementor-widget-container{margin:-40px 0px 0px 0px;}.elementor-5026 .elementor-element.elementor-element-a2499ce .elementor-element-populated a{color:#000000;}.elementor-5026 .elementor-element.elementor-element-de3ff34{--spacer-size:150px;}.elementor-5026 .elementor-element.elementor-element-f7f34c9 .section-content__inner{max-width:100%;}.elementor-5026 .elementor-element.elementor-element-f7f34c9 .section-content__text{max-width:1440px;}.elementor-5026 .elementor-element.elementor-element-f7f34c9 > .elementor-widget-container{margin:-40px 0px 0px 0px;}.elementor-5026 .elementor-element.elementor-element-8fa2f1e .elementor-element-populated a{color:#000000;}.elementor-5026 .elementor-element.elementor-element-661caf4 .section-content__inner{max-width:100%;}.elementor-5026 .elementor-element.elementor-element-661caf4 .section-content__text{max-width:1440px;}.elementor-5026 .elementor-element.elementor-element-661caf4 > .elementor-widget-container{margin:-40px 0px 0px 0px;}.elementor-5026 .elementor-element.elementor-element-3050a0a .elementor-element-populated a{color:#000000;}.elementor-5026 .elementor-element.elementor-element-0795fb2{--spacer-size:150px;}.elementor-5026 .elementor-element.elementor-element-cdeeb13 .section-content__inner{max-width:100%;}.elementor-5026 .elementor-element.elementor-element-cdeeb13 .section-content__text{max-width:1440px;}.elementor-5026 .elementor-element.elementor-element-cdeeb13 > .elementor-widget-container{margin:-40px 0px 0px 0px;}.elementor-5026 .elementor-element.elementor-element-aae2bb7{padding:50px 0px 50px 0px;}.elementor-5026 .elementor-element.elementor-element-df7e612{text-align:center;}.elementor-5026 .elementor-element.elementor-element-a8c8eda .elementor-element-populated a{color:#000000;}.elementor-5026 .elementor-element.elementor-element-764b045 .section-content__inner{max-width:100%;}.elementor-5026 .elementor-element.elementor-element-764b045 .section-content__text{max-width:1440px;}.elementor-5026 .elementor-element.elementor-element-764b045 > .elementor-widget-container{margin:-40px 0px 0px 0px;}.elementor-5026 .elementor-element.elementor-element-9ff1e9a .elementor-element-populated a{color:#000000;}.elementor-5026 .elementor-element.elementor-element-4fe4a3c{--spacer-size:150px;}.elementor-5026 .elementor-element.elementor-element-b577f37 .section-content__inner{max-width:100%;}.elementor-5026 .elementor-element.elementor-element-b577f37 .section-content__text{max-width:1440px;}.elementor-5026 .elementor-element.elementor-element-b577f37 > .elementor-widget-container{margin:-40px 0px 0px 0px;}.elementor-5026 .elementor-element.elementor-element-a5abfbe .elementor-element-populated a{color:#000000;}.elementor-5026 .elementor-element.elementor-element-a02f75b .section-content__inner{max-width:100%;}.elementor-5026 .elementor-element.elementor-element-a02f75b .section-content__text{max-width:1440px;}.elementor-5026 .elementor-element.elementor-element-a02f75b > .elementor-widget-container{margin:-40px 0px 0px 0px;}.elementor-5026 .elementor-element.elementor-element-b9a33e8 .elementor-element-populated a{color:#000000;}.elementor-5026 .elementor-element.elementor-element-93fd58e{--spacer-size:150px;}.elementor-5026 .elementor-element.elementor-element-5e44070 .section-content__inner{max-width:100%;}.elementor-5026 .elementor-element.elementor-element-5e44070 .section-content__text{max-width:1440px;}.elementor-5026 .elementor-element.elementor-element-5e44070 > .elementor-widget-container{margin:-40px 0px 0px 0px;}.elementor-5026 .elementor-element.elementor-element-128c896 .elementor-element-populated a{color:#000000;}.elementor-5026 .elementor-element.elementor-element-bcfa11c .section-content__inner{max-width:100%;}.elementor-5026 .elementor-element.elementor-element-bcfa11c .section-content__text{max-width:1440px;}.elementor-5026 .elementor-element.elementor-element-bcfa11c > .elementor-widget-container{margin:-40px 0px 0px 0px;}.elementor-5026 .elementor-element.elementor-element-146a0a5 .elementor-element-populated a{color:#000000;}.elementor-5026 .elementor-element.elementor-element-089a073{--spacer-size:150px;}.elementor-5026 .elementor-element.elementor-element-10ba0a9 .section-content__inner{max-width:100%;}.elementor-5026 .elementor-element.elementor-element-10ba0a9 .section-content__text{max-width:1440px;}.elementor-5026 .elementor-element.elementor-element-10ba0a9 > .elementor-widget-container{margin:-40px 0px 0px 0px;}.elementor-5026 .elementor-element.elementor-element-278d3cf .elementor-element-populated a{color:#000000;}.elementor-5026 .elementor-element.elementor-element-eda3868 .section-content__inner{max-width:100%;}.elementor-5026 .elementor-element.elementor-element-eda3868 .section-content__text{max-width:1440px;}.elementor-5026 .elementor-element.elementor-element-eda3868 > .elementor-widget-container{margin:-40px 0px 0px 0px;}.elementor-5026 .elementor-element.elementor-element-1627e71{--spacer-size:150px;}.elementor-5026 .elementor-element.elementor-element-de1f1ad > .elementor-container{min-height:72vh;}.elementor-5026 .elementor-element.elementor-element-de1f1ad > .elementor-container > .elementor-column > .elementor-widget-wrap{align-content:center;align-items:center;}.elementor-5026 .elementor-element.elementor-element-de1f1ad{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin-top:0px;margin-bottom:0px;}.elementor-5026 .elementor-element.elementor-element-de1f1ad > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-5026 .elementor-element.elementor-element-de1f1ad a{color:#000000;}.elementor-5026 .elementor-element.elementor-element-230cda7 .section-content__inner{max-width:100%;}.elementor-5026 .elementor-element.elementor-element-230cda7 .section-content__text{max-width:700px;}.elementor-5026 .elementor-element.elementor-element-230cda7 > .elementor-widget-container{margin:-25px 0px 0px 0px;}.elementor-5026 .elementor-element.elementor-element-469355b{--spacer-size:50px;}.section-masthead .section-masthead__background{height:900px;}.section-masthead .section-masthead__background img.of-cover{object-position:50% 50%;}@media(min-width:768px){.elementor-5026 .elementor-element.elementor-element-06b9332{width:44.996%;}.elementor-5026 .elementor-element.elementor-element-dfbf6e0{width:9.645%;}.elementor-5026 .elementor-element.elementor-element-a2499ce{width:44.996%;}.elementor-5026 .elementor-element.elementor-element-8fa2f1e{width:44.996%;}.elementor-5026 .elementor-element.elementor-element-a65f582{width:9.645%;}.elementor-5026 .elementor-element.elementor-element-3050a0a{width:44.996%;}.elementor-5026 .elementor-element.elementor-element-a8c8eda{width:44.996%;}.elementor-5026 .elementor-element.elementor-element-3143bf0{width:9.645%;}.elementor-5026 .elementor-element.elementor-element-9ff1e9a{width:44.996%;}.elementor-5026 .elementor-element.elementor-element-a5abfbe{width:44.996%;}.elementor-5026 .elementor-element.elementor-element-5fa0264{width:9.645%;}.elementor-5026 .elementor-element.elementor-element-b9a33e8{width:44.996%;}.elementor-5026 .elementor-element.elementor-element-128c896{width:44.996%;}.elementor-5026 .elementor-element.elementor-element-828aa6e{width:9.645%;}.elementor-5026 .elementor-element.elementor-element-146a0a5{width:44.996%;}.elementor-5026 .elementor-element.elementor-element-278d3cf{width:44.996%;}.elementor-5026 .elementor-element.elementor-element-3b5c96b{width:9.641%;}.elementor-5026 .elementor-element.elementor-element-a08f34e{width:45%;}}@media(max-width:1024px){.elementor-5026 .elementor-element.elementor-element-ff4c9a7 .elementor-divider{padding-top:0px;padding-bottom:0px;}.elementor-5026 .elementor-element.elementor-element-f118364 .elementor-divider{padding-top:0px;padding-bottom:0px;}.elementor-5026 .elementor-element.elementor-element-ccb2656{margin-top:80px;margin-bottom:0px;}.elementor-5026 .elementor-element.elementor-element-b01a87a .section-content__inner{max-width:100%;}.elementor-5026 .elementor-element.elementor-element-b01a87a .section-content__text{max-width:700px;}.elementor-5026 .elementor-element.elementor-element-b01a87a > .elementor-widget-container{margin:-40px 0px 0px 10px;}.elementor-5026 .elementor-element.elementor-element-f7f34c9 .section-content__inner{max-width:100%;}.elementor-5026 .elementor-element.elementor-element-f7f34c9 .section-content__text{max-width:700px;}.elementor-5026 .elementor-element.elementor-element-f7f34c9 > .elementor-widget-container{margin:-40px 0px 0px 10px;}.elementor-5026 .elementor-element.elementor-element-07e56b3{margin-top:80px;margin-bottom:0px;}.elementor-5026 .elementor-element.elementor-element-661caf4 .section-content__inner{max-width:100%;}.elementor-5026 .elementor-element.elementor-element-661caf4 .section-content__text{max-width:700px;}.elementor-5026 .elementor-element.elementor-element-661caf4 > .elementor-widget-container{margin:-40px 0px 0px 10px;}.elementor-5026 .elementor-element.elementor-element-cdeeb13 .section-content__inner{max-width:100%;}.elementor-5026 .elementor-element.elementor-element-cdeeb13 .section-content__text{max-width:700px;}.elementor-5026 .elementor-element.elementor-element-cdeeb13 > .elementor-widget-container{margin:-40px 0px 0px 10px;}.elementor-5026 .elementor-element.elementor-element-5e6eecd{margin-top:80px;margin-bottom:0px;}.elementor-5026 .elementor-element.elementor-element-764b045 .section-content__inner{max-width:100%;}.elementor-5026 .elementor-element.elementor-element-764b045 .section-content__text{max-width:700px;}.elementor-5026 .elementor-element.elementor-element-764b045 > .elementor-widget-container{margin:-40px 0px 0px 10px;}.elementor-5026 .elementor-element.elementor-element-b577f37 .section-content__inner{max-width:100%;}.elementor-5026 .elementor-element.elementor-element-b577f37 .section-content__text{max-width:700px;}.elementor-5026 .elementor-element.elementor-element-b577f37 > .elementor-widget-container{margin:-40px 0px 0px 10px;}.elementor-5026 .elementor-element.elementor-element-3461bec{margin-top:80px;margin-bottom:0px;}.elementor-5026 .elementor-element.elementor-element-a02f75b .section-content__inner{max-width:100%;}.elementor-5026 .elementor-element.elementor-element-a02f75b .section-content__text{max-width:700px;}.elementor-5026 .elementor-element.elementor-element-a02f75b > .elementor-widget-container{margin:-40px 0px 0px 10px;}.elementor-5026 .elementor-element.elementor-element-5e44070 .section-content__inner{max-width:100%;}.elementor-5026 .elementor-element.elementor-element-5e44070 .section-content__text{max-width:700px;}.elementor-5026 .elementor-element.elementor-element-5e44070 > .elementor-widget-container{margin:-40px 0px 0px 10px;}.elementor-5026 .elementor-element.elementor-element-bfb8ad2{margin-top:80px;margin-bottom:0px;}.elementor-5026 .elementor-element.elementor-element-bcfa11c .section-content__inner{max-width:100%;}.elementor-5026 .elementor-element.elementor-element-bcfa11c .section-content__text{max-width:700px;}.elementor-5026 .elementor-element.elementor-element-bcfa11c > .elementor-widget-container{margin:-40px 0px 0px 10px;}.elementor-5026 .elementor-element.elementor-element-10ba0a9 .section-content__inner{max-width:100%;}.elementor-5026 .elementor-element.elementor-element-10ba0a9 .section-content__text{max-width:700px;}.elementor-5026 .elementor-element.elementor-element-10ba0a9 > .elementor-widget-container{margin:-40px 0px 0px 10px;}.elementor-5026 .elementor-element.elementor-element-061552d{margin-top:80px;margin-bottom:0px;}.elementor-5026 .elementor-element.elementor-element-eda3868 .section-content__inner{max-width:100%;}.elementor-5026 .elementor-element.elementor-element-eda3868 .section-content__text{max-width:700px;}.elementor-5026 .elementor-element.elementor-element-eda3868 > .elementor-widget-container{margin:-40px 0px 0px 10px;}.elementor-5026 .elementor-element.elementor-element-de1f1ad > .elementor-container{min-height:296px;}.elementor-5026 .elementor-element.elementor-element-de1f1ad{margin-top:-40px;margin-bottom:0px;}.elementor-5026 .elementor-element.elementor-element-230cda7 .section-content__inner{max-width:100%;}.elementor-5026 .elementor-element.elementor-element-230cda7 .section-content__text{max-width:700px;}.elementor-5026 .elementor-element.elementor-element-230cda7 > .elementor-widget-container{margin:-20px 0px 0px 10px;}.section-masthead .section-masthead__background{height:70vh;}.section-masthead .section-masthead__background img.of-cover{object-position:50% 50%;}}@media(max-width:767px){.elementor-5026 .elementor-element.elementor-element-2777ab1 > .elementor-container{min-height:450px;}.elementor-5026 .elementor-element.elementor-element-ccb2656{margin-top:100px;margin-bottom:0px;}.elementor-5026 .elementor-element.elementor-element-b01a87a .section-content__inner{max-width:100%;}.elementor-5026 .elementor-element.elementor-element-b01a87a .section-content__text{max-width:700px;}.elementor-5026 .elementor-element.elementor-element-b01a87a > .elementor-widget-container{margin:-40px 0px 0px 10px;}.elementor-5026 .elementor-element.elementor-element-dfbf6e0{-webkit-order:0;-ms-flex-order:0;order:0;}.elementor-5026 .elementor-element.elementor-element-de3ff34{--spacer-size:50px;}.elementor-5026 .elementor-element.elementor-element-f7f34c9 .section-content__inner{max-width:100%;}.elementor-5026 .elementor-element.elementor-element-f7f34c9 .section-content__text{max-width:700px;}.elementor-5026 .elementor-element.elementor-element-f7f34c9 > .elementor-widget-container{margin:-40px 0px 0px 10px;}.elementor-5026 .elementor-element.elementor-element-07e56b3{margin-top:100px;margin-bottom:0px;}.elementor-5026 .elementor-element.elementor-element-661caf4 .section-content__inner{max-width:100%;}.elementor-5026 .elementor-element.elementor-element-661caf4 .section-content__text{max-width:700px;}.elementor-5026 .elementor-element.elementor-element-661caf4 > .elementor-widget-container{margin:-40px 0px 0px 10px;}.elementor-5026 .elementor-element.elementor-element-a65f582{-webkit-order:0;-ms-flex-order:0;order:0;}.elementor-5026 .elementor-element.elementor-element-0795fb2{--spacer-size:50px;}.elementor-5026 .elementor-element.elementor-element-cdeeb13 .section-content__inner{max-width:100%;}.elementor-5026 .elementor-element.elementor-element-cdeeb13 .section-content__text{max-width:700px;}.elementor-5026 .elementor-element.elementor-element-cdeeb13 > .elementor-widget-container{margin:-40px 0px 0px 10px;}.elementor-5026 .elementor-element.elementor-element-5e6eecd{margin-top:100px;margin-bottom:0px;}.elementor-5026 .elementor-element.elementor-element-764b045 .section-content__inner{max-width:100%;}.elementor-5026 .elementor-element.elementor-element-764b045 .section-content__text{max-width:700px;}.elementor-5026 .elementor-element.elementor-element-764b045 > .elementor-widget-container{margin:-40px 0px 0px 10px;}.elementor-5026 .elementor-element.elementor-element-3143bf0{-webkit-order:0;-ms-flex-order:0;order:0;}.elementor-5026 .elementor-element.elementor-element-4fe4a3c{--spacer-size:50px;}.elementor-5026 .elementor-element.elementor-element-b577f37 .section-content__inner{max-width:100%;}.elementor-5026 .elementor-element.elementor-element-b577f37 .section-content__text{max-width:700px;}.elementor-5026 .elementor-element.elementor-element-b577f37 > .elementor-widget-container{margin:-40px 0px 0px 10px;}.elementor-5026 .elementor-element.elementor-element-3461bec{margin-top:100px;margin-bottom:0px;}.elementor-5026 .elementor-element.elementor-element-a02f75b .section-content__inner{max-width:100%;}.elementor-5026 .elementor-element.elementor-element-a02f75b .section-content__text{max-width:700px;}.elementor-5026 .elementor-element.elementor-element-a02f75b > .elementor-widget-container{margin:-40px 0px 0px 10px;}.elementor-5026 .elementor-element.elementor-element-5fa0264{-webkit-order:0;-ms-flex-order:0;order:0;}.elementor-5026 .elementor-element.elementor-element-93fd58e{--spacer-size:50px;}.elementor-5026 .elementor-element.elementor-element-5e44070 .section-content__inner{max-width:100%;}.elementor-5026 .elementor-element.elementor-element-5e44070 .section-content__text{max-width:700px;}.elementor-5026 .elementor-element.elementor-element-5e44070 > .elementor-widget-container{margin:-40px 0px 0px 10px;}.elementor-5026 .elementor-element.elementor-element-bfb8ad2{margin-top:100px;margin-bottom:0px;}.elementor-5026 .elementor-element.elementor-element-bcfa11c .section-content__inner{max-width:100%;}.elementor-5026 .elementor-element.elementor-element-bcfa11c .section-content__text{max-width:700px;}.elementor-5026 .elementor-element.elementor-element-bcfa11c > .elementor-widget-container{margin:-40px 0px 0px 10px;}.elementor-5026 .elementor-element.elementor-element-828aa6e{-webkit-order:0;-ms-flex-order:0;order:0;}.elementor-5026 .elementor-element.elementor-element-089a073{--spacer-size:50px;}.elementor-5026 .elementor-element.elementor-element-10ba0a9 .section-content__inner{max-width:100%;}.elementor-5026 .elementor-element.elementor-element-10ba0a9 .section-content__text{max-width:700px;}.elementor-5026 .elementor-element.elementor-element-10ba0a9 > .elementor-widget-container{margin:-40px 0px 0px 10px;}.elementor-5026 .elementor-element.elementor-element-061552d{margin-top:100px;margin-bottom:0px;}.elementor-5026 .elementor-element.elementor-element-eda3868 .section-content__inner{max-width:100%;}.elementor-5026 .elementor-element.elementor-element-eda3868 .section-content__text{max-width:700px;}.elementor-5026 .elementor-element.elementor-element-eda3868 > .elementor-widget-container{margin:-40px 0px 0px 10px;}.elementor-5026 .elementor-element.elementor-element-3b5c96b{-webkit-order:0;-ms-flex-order:0;order:0;}.elementor-5026 .elementor-element.elementor-element-1627e71{--spacer-size:50px;}.elementor-5026 .elementor-element.elementor-element-230cda7 .section-content__inner{max-width:100%;}.elementor-5026 .elementor-element.elementor-element-230cda7 .section-content__text{max-width:700px;}.elementor-5026 .elementor-element.elementor-element-230cda7 > .elementor-widget-container{margin:-20px 0px 0px 10px;}.section-masthead .section-masthead__background{height:50vh;}.section-masthead .section-masthead__background img.of-cover{object-position:50% 50%;}}
.elementor-section .elementor-container { flex-wrap: wrap;}
.elementor-kit-6{--e-global-color-primary:#6EC1E4;--e-global-color-secondary:#54595F;--e-global-color-text:#7A7A7A;--e-global-color-accent:#61CE70;--e-global-typography-primary-font-family:"Roboto";--e-global-typography-primary-font-weight:600;--e-global-typography-secondary-font-family:"Roboto Slab";--e-global-typography-secondary-font-weight:400;--e-global-typography-text-font-family:"Roboto";--e-global-typography-text-font-weight:400;--e-global-typography-accent-font-family:"Roboto";--e-global-typography-accent-font-weight:500;background-color:#E7EFE6;}.elementor-section.elementor-section-boxed > .elementor-container{max-width:1140px;}.e-container{--container-max-width:1140px;}.elementor-widget:not(:last-child){margin-bottom:20px;}.elementor-element{--widgets-spacing:20px;}{}h1.entry-title{display:block!important;}.elementor-kit-6 e-page-transition{background-color:#FFBC7D;}@media(max-width:1024px){.elementor-section.elementor-section-boxed > .elementor-container{max-width:1024px;}.e-container{--container-max-width:1024px;}}@media(max-width:767px){.elementor-section.elementor-section-boxed > .elementor-container{max-width:767px;}.e-container{--container-max-width:767px;}}
.section-masthead .section-masthead__background{height:900px;}.section-masthead .section-masthead__background img.of-cover{object-position:50% 50%;}@media(max-width:1024px){.section-masthead .section-masthead__background{height:70vh;}.section-masthead .section-masthead__background img.of-cover{object-position:50% 50%;}}@media(max-width:767px){.section-masthead .section-masthead__background{height:50vh;}.section-masthead .section-masthead__background img.of-cover{object-position:50% 50%;}}
</style>
        <?php require_once(TEMA_INC.'inc/ust.php');?>
    </head>
    <body class="page-template page-template-elementor_header_footer page page-id-1264 page-parent wp-custom-logo elementor-default elementor-template-full-width elementor-kit-6 elementor-page elementor-page-1264">
        <?php require_once(TEMA_INC.'inc/head.php');?>
        <!-- - PAGE HEADER -->
        <!-- PAGE MAIN -->
  <div class="js-smooth-scroll" id="page-wrapper" data-arts-theme-text="dark">
    <main class="page-wrapper__content">


 <?php if ($sayfaRow["secenekHaber"]==1) { ?>
                <!-- PAGE FOOTER -->
             <section class="section section-masthead d-none" data-background-color=""></section>
<!-- - Element to set transition background -->
<div data-elementor-type="wp-page" data-elementor-id="5026" class="elementor elementor-5026">
 <section
        class="elementor-section elementor-top-section elementor-element elementor-element-2777ab1 elementor-section-full_width elementor-section-height-min-height arts-elementor-theme-light elementor-section-height-default elementor-section-items-middle"
        data-id="2777ab1"
        data-element_type="section"
        data-settings='{"background_background":"classic","theme_section_main_theme_text":"arts-elementor-theme-light"}'
        style="background-image: url(<?php echo URL.'images/sayfalar/big/'.$sayfaRow["sayfa_resim"];?>);"
    >
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e5b9004" data-id="e5b9004" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-ff4c9a7 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="ff4c9a7" data-element_type="widget" data-widget_type="divider.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-divider">
                                <span class="elementor-divider-separator"> </span>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-2f482a6 scroll-big-txt elementor-widget elementor-widget-shortcode" data-id="2f482a6" data-element_type="widget" data-widget_type="shortcode.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-shortcode">
                                <div class="marquee-hsas-shortcode-70" style="width: 100%; overflow: hidden;"><?php echo $sayfaRow[$lehce."sayfa_adi"];?> </div>
                                <script>
                                    jQuery(function () {
                                        jQuery(".marquee-hsas-shortcode-70").marquee({
                                            allowCss3Support: true,
                                            css3easing: "linear",
                                            easing: "linear",
                                            delayBeforeStart: 2000,
                                            direction: "left",
                                            duplicated: true,
                                            duration: 30000,
                                            gap: 20,
                                            pauseOnCycle: true,
                                            pauseOnHover: true,
                                            startVisible: true,
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-f118364 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="f118364" data-element_type="widget" data-widget_type="divider.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-divider">
                                <span class="elementor-divider-separator"> </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


          <?php  } ?>
        <section class="section section-masthead text-center pt-large pb-medium" data-background-color="#eeece6" data-arts-theme-text="dark" data-arts-os-animation="true">
            <div class="section-masthead__inner container-fluid">
                <header class="row section-masthead__header">
                    <div class="col-12">
                        <h1 class="entry-title section-masthead__heading my-0 h1 split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words"><?php echo $sayfaRow[$lehce."sayfa_adi"];?></h1>
                        <div class="w-100"></div>
                        <div class="section-masthead__headline section__headline mt-2"></div>
                    </div>
                </header>
            </div>
        </section>

        <div data-elementor-type="wp-page" data-elementor-id="3" class="elementor elementor-3">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-58b455d5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="58b455d5"
                data-element_type="section"
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3147b52f" data-id="3147b52f" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-142c764 elementor-widget elementor-widget-html" data-id="142c764" data-element_type="widget" data-widget_type="html.default">
                                <div class="elementor-widget-container">
                                    <p><?php echo $sayfaRow[$lehce."sayfa_icerik"];?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
  


            <?php require_once(TEMA_INC.'inc/footer.php');?>
            <!-- - PAGE FOOTER -->
        </main>
    </div>
    <!-- - PAGE MAIN -->
    <?php require_once(TEMA_INC.'inc/alt.php');?>

</body>
</html>