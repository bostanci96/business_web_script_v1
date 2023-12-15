<?php $blok = $db->query("SELECT * FROM dil_bloklar{$blokLehce}")->fetch(PDO::FETCH_ASSOC); ?>
<!DOCTYPE html>
<html lang="tr-TR">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
        <title><?php echo $blok["baslik40"]; ?> - <?php echo $ayar[$lehce."site_title"];?></title>
        <meta name="description" itemprop="description" content="<?php echo $ayar[$lehce."site_desc"];?>" />
        <meta name="keywords" itemprop="keywords" content="<?php echo $ayar[$lehce."site_keyw"];?>" />
        <meta name="Abstract" content="<?php echo $ayar["main_tablo"];?>" />
        <meta name="classification" content="<?php echo $ayar[$lehce."site_title"];?>" />
        <meta http-equiv="content-language" content="tr" />
        <meta name="distribution" content="Global" />
        <meta name="author" content="Ömer Utku Bostancı | Yazılım Uzmanı | Freelancer | İstanbul Web Tasarım ve Web Yazılım">
        <meta name="robots" content="all" />
        <meta name="robots" content="index, follow" />
        <meta name="revisit-after" content="7 days" />
        <meta name="country" content="Türkiye" />
        <link rel="canonical" href="<?php echo "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>" />
        <meta property="og:title" content="<?php echo $ayar[$lehce."site_title"];?>" />
        <meta property="og:locale" content="tr_TR" />
        <meta property="og:type" content="website" />
        <meta property="og:description" content="<?php echo $ayar[$lehce."site_desc"];?>" />
        <meta property="og:url" content="<?php echo LURL;?>" />
        <meta property="og:site_name" content="<?php echo $ayar[$lehce."site_title"];?>" />
       <style id='elementor-frontend-inline-css' type='text/css'>
.elementor-kit-6{--e-global-color-primary:#6EC1E4;--e-global-color-secondary:#54595F;--e-global-color-text:#7A7A7A;--e-global-color-accent:#61CE70;--e-global-typography-primary-font-family:"Roboto";--e-global-typography-primary-font-weight:600;--e-global-typography-secondary-font-family:"Roboto Slab";--e-global-typography-secondary-font-weight:400;--e-global-typography-text-font-family:"Roboto";--e-global-typography-text-font-weight:400;--e-global-typography-accent-font-family:"Roboto";--e-global-typography-accent-font-weight:500;background-color:#f5f2ed;}.elementor-section.elementor-section-boxed > .elementor-container{max-width:1140px;}.e-container{--container-max-width:1140px;}.elementor-widget:not(:last-child){margin-bottom:20px;}.elementor-element{--widgets-spacing:20px;}{}h1.entry-title{display:var(--page-title-display);}.elementor-kit-6 e-page-transition{background-color:#FFBC7D;}@media(max-width:1024px){.elementor-section.elementor-section-boxed > .elementor-container{max-width:1024px;}.e-container{--container-max-width:1024px;}}@media(max-width:767px){.elementor-section.elementor-section-boxed > .elementor-container{max-width:767px;}.e-container{--container-max-width:767px;}}
.elementor-1350 .elementor-element.elementor-element-46504fd > .elementor-container{min-height:100vh;}.elementor-1350 .elementor-element.elementor-element-46504fd:not(.elementor-motion-effects-element-type-background), .elementor-1350 .elementor-element.elementor-element-46504fd > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:url("<?php echo TEMA_URL; ?>ast/uploads/2021/12/28102021-_GAM1458.jpg");background-position:center center;background-size:cover;}.elementor-1350 .elementor-element.elementor-element-46504fd > .elementor-background-overlay{background-color:#000000;opacity:0.2;transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-1350 .elementor-element.elementor-element-46504fd{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-1350 .elementor-element.elementor-element-f4876f1{--divider-border-style:solid;--divider-color:#FFFFFF;--divider-border-width:1px;}.elementor-1350 .elementor-element.elementor-element-f4876f1 .elementor-divider-separator{width:100%;}.elementor-1350 .elementor-element.elementor-element-f4876f1 .elementor-divider{padding-top:15px;padding-bottom:15px;}.elementor-1350 .elementor-element.elementor-element-64686bf{--divider-border-style:solid;--divider-color:#FFFFFF;--divider-border-width:1px;}.elementor-1350 .elementor-element.elementor-element-64686bf .elementor-divider-separator{width:100%;}.elementor-1350 .elementor-element.elementor-element-64686bf .elementor-divider{padding-top:15px;padding-bottom:15px;}.elementor-1350 .elementor-element.elementor-element-b7d6a78{--spacer-size:66px;}.elementor-1350 .elementor-element.elementor-element-27402cd{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-1350 .elementor-element.elementor-element-27402cd > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-1350 .elementor-element.elementor-element-a649bcb{--spacer-size:50px;}.elementor-1350 .elementor-element.elementor-element-22ad78a{--spacer-size:50px;}.elementor-1350 .elementor-element.elementor-element-ffbf513:not(.elementor-motion-effects-element-type-background), .elementor-1350 .elementor-element.elementor-element-ffbf513 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#f5f2ed;}.elementor-1350 .elementor-element.elementor-element-ffbf513{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-1350 .elementor-element.elementor-element-ffbf513 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-1350 .elementor-element.elementor-element-1279cdf{--spacer-size:50px;}.elementor-1350 .elementor-element.elementor-element-013130d{--divider-border-style:solid;--divider-color:#000;--divider-border-width:1px;}.elementor-1350 .elementor-element.elementor-element-013130d .elementor-divider-separator{width:100%;}.elementor-1350 .elementor-element.elementor-element-013130d .elementor-divider{padding-top:15px;padding-bottom:15px;}.elementor-1350 .elementor-element.elementor-element-80680d3{--divider-border-style:solid;--divider-color:#000;--divider-border-width:1px;}.elementor-1350 .elementor-element.elementor-element-80680d3 .elementor-divider-separator{width:100%;}.elementor-1350 .elementor-element.elementor-element-80680d3 .elementor-divider{padding-top:15px;padding-bottom:15px;}.elementor-1350 .elementor-element.elementor-element-51ebbc7{--spacer-size:50px;}.elementor-1350 .elementor-element.elementor-element-6cd5555{--spacer-size:102px;}.elementor-1350 .elementor-element.elementor-element-d7b2c0e{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-1350 .elementor-element.elementor-element-d7b2c0e > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-bc-flex-widget .elementor-1350 .elementor-element.elementor-element-d891a6a.elementor-column .elementor-widget-wrap{align-items:center;}.elementor-1350 .elementor-element.elementor-element-d891a6a.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center;}.elementor-1350 .elementor-element.elementor-element-d891a6a.elementor-column > .elementor-widget-wrap{justify-content:center;}.elementor-1350 .elementor-element.elementor-element-d891a6a > .elementor-element-populated{padding:0% 10% 0% 10%;}.elementor-1350 .elementor-element.elementor-element-ba17bb6 > .elementor-widget-container{padding:0px 0px 0px 0px;}.elementor-1350 .elementor-element.elementor-element-f596492 > .elementor-element-populated{margin:0% 0% 0% 0%;--e-column-margin-right:0%;--e-column-margin-left:0%;padding:0% 10% 0% 10%;}.elementor-1350 .elementor-element.elementor-element-a795bac > .elementor-widget-container{margin:0% 0% 0% 0%;padding:0px 0px 0px 0px;}.elementor-1350 .elementor-element.elementor-element-12cf16a{--spacer-size:102px;}.elementor-1350 .elementor-element.elementor-element-ac00f85:not(.elementor-motion-effects-element-type-background), .elementor-1350 .elementor-element.elementor-element-ac00f85 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#F8F8F8;}.elementor-1350 .elementor-element.elementor-element-ac00f85{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-1350 .elementor-element.elementor-element-ac00f85 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-1350 .elementor-element.elementor-element-f90ff68{--spacer-size:50px;}.elementor-1350 .elementor-element.elementor-element-e3708a0{--spacer-size:102px;}.elementor-1350 .elementor-element.elementor-element-006045d{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-1350 .elementor-element.elementor-element-006045d > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-1350 .elementor-element.elementor-element-5aa41ac > .elementor-container > .elementor-column > .elementor-widget-wrap{align-content:center;align-items:center;}.elementor-1350 .elementor-element.elementor-element-9c89889{text-align:center;}.elementor-1350 .elementor-element.elementor-element-9c89889 img{max-width:70%;}.elementor-1350 .elementor-element.elementor-element-8b53121 .elementor-icon-wrapper{text-align:center;}.elementor-1350 .elementor-element.elementor-element-8b53121.elementor-view-stacked .elementor-icon{background-color:#020101;}.elementor-1350 .elementor-element.elementor-element-8b53121.elementor-view-framed .elementor-icon, .elementor-1350 .elementor-element.elementor-element-8b53121.elementor-view-default .elementor-icon{color:#020101;border-color:#020101;}.elementor-1350 .elementor-element.elementor-element-8b53121.elementor-view-framed .elementor-icon, .elementor-1350 .elementor-element.elementor-element-8b53121.elementor-view-default .elementor-icon svg{fill:#020101;}.elementor-1350 .elementor-element.elementor-element-8b53121 .elementor-icon i, .elementor-1350 .elementor-element.elementor-element-8b53121 .elementor-icon svg{transform:rotate(0deg);}.elementor-1350 .elementor-element.elementor-element-511c5c1{text-align:center;}.elementor-1350 .elementor-element.elementor-element-511c5c1 img{max-width:70%;}.elementor-1350 .elementor-element.elementor-element-a59505b .elementor-icon-wrapper{text-align:center;}.elementor-1350 .elementor-element.elementor-element-a59505b.elementor-view-stacked .elementor-icon{background-color:#020101;}.elementor-1350 .elementor-element.elementor-element-a59505b.elementor-view-framed .elementor-icon, .elementor-1350 .elementor-element.elementor-element-a59505b.elementor-view-default .elementor-icon{color:#020101;border-color:#020101;}.elementor-1350 .elementor-element.elementor-element-a59505b.elementor-view-framed .elementor-icon, .elementor-1350 .elementor-element.elementor-element-a59505b.elementor-view-default .elementor-icon svg{fill:#020101;}.elementor-1350 .elementor-element.elementor-element-a59505b .elementor-icon i, .elementor-1350 .elementor-element.elementor-element-a59505b .elementor-icon svg{transform:rotate(0deg);}.elementor-1350 .elementor-element.elementor-element-0d66280{text-align:center;}.elementor-1350 .elementor-element.elementor-element-0d66280 img{max-width:70%;}.elementor-1350 .elementor-element.elementor-element-62505a4 .section-image__wrapper img{width:100%;height:auto;}.elementor-1350 .elementor-element.elementor-element-31d8bf8{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-1350 .elementor-element.elementor-element-31d8bf8 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-1350 .elementor-element.elementor-element-677db00{--spacer-size:102px;}.elementor-1350 .elementor-element.elementor-element-53c2157{--divider-border-style:solid;--divider-color:#000;--divider-border-width:1px;}.elementor-1350 .elementor-element.elementor-element-53c2157 .elementor-divider-separator{width:100%;}.elementor-1350 .elementor-element.elementor-element-53c2157 .elementor-divider{padding-top:15px;padding-bottom:15px;}.elementor-1350 .elementor-element.elementor-element-a036bbc{--divider-border-style:solid;--divider-color:#000;--divider-border-width:1px;}.elementor-1350 .elementor-element.elementor-element-a036bbc .elementor-divider-separator{width:100%;}.elementor-1350 .elementor-element.elementor-element-a036bbc .elementor-divider{padding-top:15px;padding-bottom:15px;}.elementor-1350 .elementor-element.elementor-element-054e377{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-1350 .elementor-element.elementor-element-054e377 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-1350 .elementor-element.elementor-element-306d938 > .elementor-widget-container{margin:10px 10px 10px 10px;}.elementor-1350 .elementor-element.elementor-element-54c9669 > .elementor-container{min-height:80vh;}.elementor-1350 .elementor-element.elementor-element-54c9669:not(.elementor-motion-effects-element-type-background), .elementor-1350 .elementor-element.elementor-element-54c9669 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:url("<?php echo TEMA_URL; ?>ast/uploads/2021/12/01-BANNER-SUITE-LISA-03.jpg");background-position:center center;background-size:cover;}.elementor-1350 .elementor-element.elementor-element-54c9669{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-1350 .elementor-element.elementor-element-54c9669 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-1350 .elementor-element.elementor-element-babba89 .circle-button_link{width:calc(130px - 10px);height:calc(130px - 10px);}.elementor-1350 .elementor-element.elementor-element-babba89 .circle-button_link .circle-button__inner .svg-circle{width:130px;height:130px;}.elementor-1350 .elementor-element.elementor-element-babba89 .circle-button__icon{color:#0A0A0A;}.elementor-1350 .elementor-element.elementor-element-58edf048:not(.elementor-motion-effects-element-type-background), .elementor-1350 .elementor-element.elementor-element-58edf048 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#000000;}.elementor-1350 .elementor-element.elementor-element-58edf048{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-1350 .elementor-element.elementor-element-58edf048 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-1350 .elementor-element.elementor-element-59cc2b14 .section-content__inner{max-width:100%;}.elementor-1350 .elementor-element.elementor-element-59cc2b14 .section-content__text{max-width:328px;}.elementor-1350 .elementor-element.elementor-element-59cc2b14 > .elementor-widget-container{margin:0px 0px 0px 0px;}.elementor-bc-flex-widget .elementor-1350 .elementor-element.elementor-element-4891ecab.elementor-column .elementor-widget-wrap{align-items:flex-end;}.elementor-1350 .elementor-element.elementor-element-4891ecab.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:flex-end;align-items:flex-end;}.elementor-1350 .elementor-element.elementor-element-56c23d23 .circle-button_link{width:calc(180px - 10px);height:calc(180px - 10px);}.elementor-1350 .elementor-element.elementor-element-56c23d23 .circle-button_link .circle-button__inner .svg-circle{width:180px;height:180px;}.elementor-1350 .elementor-element.elementor-element-56c23d23 .circle-button__icon{color:#FFFFFF;}.elementor-1350 .elementor-element.elementor-element-56c23d23{width:170.5px;max-width:170.5px;}:root{--page-title-display:none;}@media(min-width:768px){.elementor-1350 .elementor-element.elementor-element-2a4df69{width:14.927%;}.elementor-1350 .elementor-element.elementor-element-9f35d78{width:70.101%;}.elementor-1350 .elementor-element.elementor-element-cf811de{width:14.305%;}.elementor-1350 .elementor-element.elementor-element-2adc401{width:15%;}.elementor-1350 .elementor-element.elementor-element-988d157{width:69.333%;}.elementor-1350 .elementor-element.elementor-element-0c36a84{width:15%;}.elementor-1350 .elementor-element.elementor-element-407e394{width:28%;}.elementor-1350 .elementor-element.elementor-element-94049b4{width:8%;}.elementor-1350 .elementor-element.elementor-element-cc49eda{width:28%;}.elementor-1350 .elementor-element.elementor-element-1452082{width:7.982%;}.elementor-1350 .elementor-element.elementor-element-d16968b{width:28%;}.elementor-1350 .elementor-element.elementor-element-82ef690{width:44%;}.elementor-1350 .elementor-element.elementor-element-74af1b4{width:11.332%;}.elementor-1350 .elementor-element.elementor-element-5f13815{width:44%;}.elementor-1350 .elementor-element.elementor-element-415be138{width:28.758%;}.elementor-1350 .elementor-element.elementor-element-48388872{width:56.021%;}.elementor-1350 .elementor-element.elementor-element-4891ecab{width:14.529%;}}@media(max-width:1024px){.elementor-1350 .elementor-element.elementor-element-f4876f1 .elementor-divider{padding-top:0px;padding-bottom:0px;}.elementor-1350 .elementor-element.elementor-element-64686bf .elementor-divider{padding-top:0px;padding-bottom:0px;}.elementor-1350 .elementor-element.elementor-element-9f73b24 .section-content__inner{max-width:100%;}.elementor-1350 .elementor-element.elementor-element-9f73b24 .section-content__text{max-width:700px;}.elementor-1350 .elementor-element.elementor-element-013130d .elementor-divider{padding-top:0px;padding-bottom:0px;}.elementor-1350 .elementor-element.elementor-element-80680d3 .elementor-divider{padding-top:0px;padding-bottom:0px;}.elementor-1350 .elementor-element.elementor-element-a6e21e2 .section-content__inner{max-width:100%;}.elementor-1350 .elementor-element.elementor-element-a6e21e2 .section-content__text{max-width:700px;}.elementor-1350 .elementor-element.elementor-element-6cd5555{--spacer-size:20px;}.elementor-1350 .elementor-element.elementor-element-ba17bb6 .section-content__inner{max-width:100%;}.elementor-1350 .elementor-element.elementor-element-ba17bb6 .section-content__text{max-width:700px;}.elementor-1350 .elementor-element.elementor-element-a795bac .section-content__inner{max-width:100%;}.elementor-1350 .elementor-element.elementor-element-a795bac .section-content__text{max-width:700px;}.elementor-1350 .elementor-element.elementor-element-12cf16a{--spacer-size:30px;}.elementor-1350 .elementor-element.elementor-element-b5e6800 .section-content__inner{max-width:100%;}.elementor-1350 .elementor-element.elementor-element-b5e6800 .section-content__text{max-width:700px;}.elementor-1350 .elementor-element.elementor-element-e3708a0{--spacer-size:30px;}.elementor-1350 .elementor-element.elementor-element-fa073b0 .section-content__inner{max-width:100%;}.elementor-1350 .elementor-element.elementor-element-fa073b0 .section-content__text{max-width:700px;}.elementor-1350 .elementor-element.elementor-element-3333584 .section-content__inner{max-width:100%;}.elementor-1350 .elementor-element.elementor-element-3333584 .section-content__text{max-width:700px;}.elementor-1350 .elementor-element.elementor-element-677db00{--spacer-size:20px;}.elementor-1350 .elementor-element.elementor-element-53c2157 .elementor-divider{padding-top:0px;padding-bottom:0px;}.elementor-1350 .elementor-element.elementor-element-a036bbc .elementor-divider{padding-top:0px;padding-bottom:0px;}.elementor-1350 .elementor-element.elementor-element-faa99bc .section-content__inner{max-width:100%;}.elementor-1350 .elementor-element.elementor-element-faa99bc .section-content__text{max-width:700px;}.elementor-1350 .elementor-element.elementor-element-babba89 .circle-button_link{width:calc(100px - 10px);height:calc(100px - 10px);}.elementor-1350 .elementor-element.elementor-element-babba89 .circle-button_link .circle-button__inner .svg-circle{width:100px;height:100px;}.elementor-1350 .elementor-element.elementor-element-59cc2b14 .section-content__inner{max-width:100%;}.elementor-1350 .elementor-element.elementor-element-59cc2b14 .section-content__text{max-width:700px;}.elementor-1350 .elementor-element.elementor-element-4891ecab.elementor-column > .elementor-widget-wrap{justify-content:flex-end;}.elementor-1350 .elementor-element.elementor-element-4891ecab > .elementor-element-populated{margin:50px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;}.elementor-1350 .elementor-element.elementor-element-56c23d23 .circle-button_link{width:calc(75px - 10px);height:calc(75px - 10px);}.elementor-1350 .elementor-element.elementor-element-56c23d23 .circle-button_link .circle-button__inner .svg-circle{width:75px;height:75px;}body.elementor-page-1350:not(.elementor-motion-effects-element-type-background), body.elementor-page-1350 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-position:0px 0px;}}@media(max-width:767px){.elementor-1350 .elementor-element.elementor-element-46504fd > .elementor-container{min-height:450px;}.elementor-1350 .elementor-element.elementor-element-b7d6a78{--spacer-size:20px;}.elementor-1350 .elementor-element.elementor-element-9f73b24 .section-content__inner{max-width:100%;}.elementor-1350 .elementor-element.elementor-element-9f73b24 .section-content__text{max-width:700px;}.elementor-1350 .elementor-element.elementor-element-1279cdf{--spacer-size:10px;}.elementor-1350 .elementor-element.elementor-element-a6e21e2 .section-content__inner{max-width:100%;}.elementor-1350 .elementor-element.elementor-element-a6e21e2 .section-content__text{max-width:700px;}.elementor-1350 .elementor-element.elementor-element-ba17bb6 .section-content__inner{max-width:100%;}.elementor-1350 .elementor-element.elementor-element-ba17bb6 .section-content__text{max-width:700px;}.elementor-1350 .elementor-element.elementor-element-a795bac .section-content__inner{max-width:100%;}.elementor-1350 .elementor-element.elementor-element-a795bac .section-content__text{max-width:700px;}.elementor-1350 .elementor-element.elementor-element-b5e6800 .section-content__inner{max-width:100%;}.elementor-1350 .elementor-element.elementor-element-b5e6800 .section-content__text{max-width:700px;}.elementor-1350 .elementor-element.elementor-element-fa073b0 .section-content__inner{max-width:100%;}.elementor-1350 .elementor-element.elementor-element-fa073b0 .section-content__text{max-width:700px;}.elementor-1350 .elementor-element.elementor-element-9c89889 img{max-width:50%;}.elementor-1350 .elementor-element.elementor-element-511c5c1 img{max-width:50%;}.elementor-1350 .elementor-element.elementor-element-0d66280 img{max-width:50%;}.elementor-1350 .elementor-element.elementor-element-3333584 .section-content__inner{max-width:100%;}.elementor-1350 .elementor-element.elementor-element-3333584 .section-content__text{max-width:700px;}.elementor-1350 .elementor-element.elementor-element-faa99bc .section-content__inner{max-width:100%;}.elementor-1350 .elementor-element.elementor-element-faa99bc .section-content__text{max-width:700px;}.elementor-1350 .elementor-element.elementor-element-54c9669 > .elementor-container{min-height:250px;}.elementor-1350 .elementor-element.elementor-element-54c9669:not(.elementor-motion-effects-element-type-background), .elementor-1350 .elementor-element.elementor-element-54c9669 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-position:center right;}.elementor-1350 .elementor-element.elementor-element-babba89 .circle-button_link{width:calc(90px - 10px);height:calc(90px - 10px);}.elementor-1350 .elementor-element.elementor-element-babba89 .circle-button_link .circle-button__inner .svg-circle{width:90px;height:90px;}.elementor-1350 .elementor-element.elementor-element-415be138 > .elementor-element-populated{margin:0px 0px 20px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;}.elementor-1350 .elementor-element.elementor-element-59cc2b14 .section-content__inner{max-width:100%;}.elementor-1350 .elementor-element.elementor-element-59cc2b14 .section-content__text{max-width:700px;}.elementor-1350 .elementor-element.elementor-element-59cc2b14 > .elementor-widget-container{margin:0px 0px 0px 0px;}.elementor-1350 .elementor-element.elementor-element-9be9dca > .elementor-widget-container{margin:0px 0px 0px 0px;}.elementor-1350 .elementor-element.elementor-element-56c23d23 .circle-button_link{width:calc(75px - 10px);height:calc(75px - 10px);}.elementor-1350 .elementor-element.elementor-element-56c23d23 .circle-button_link .circle-button__inner .svg-circle{width:75px;height:75px;}.elementor-1350 .elementor-element.elementor-element-56c23d23{width:60%;max-width:60%;}body.elementor-page-1350:not(.elementor-motion-effects-element-type-background), body.elementor-page-1350 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-position:0px 0px;}}@media(max-width:1024px) and (min-width:768px){.elementor-1350 .elementor-element.elementor-element-b7e6165{width:20%;}.elementor-1350 .elementor-element.elementor-element-098c4f3{width:60%;}.elementor-1350 .elementor-element.elementor-element-471883a{width:20%;}.elementor-1350 .elementor-element.elementor-element-81ed4f2{width:20%;}.elementor-1350 .elementor-element.elementor-element-fdc284f{width:60%;}.elementor-1350 .elementor-element.elementor-element-bdcf917{width:20%;}.elementor-1350 .elementor-element.elementor-element-33bbf74{width:20%;}.elementor-1350 .elementor-element.elementor-element-2606de4{width:60%;}.elementor-1350 .elementor-element.elementor-element-b054af4{width:20%;}.elementor-1350 .elementor-element.elementor-element-0c6a9ca{width:20%;}.elementor-1350 .elementor-element.elementor-element-1662283{width:60%;}.elementor-1350 .elementor-element.elementor-element-87fc7ad{width:20%;}.elementor-1350 .elementor-element.elementor-element-415be138{width:40%;}.elementor-1350 .elementor-element.elementor-element-48388872{width:60%;}.elementor-1350 .elementor-element.elementor-element-4891ecab{width:100%;}}
</style>
        <?php require_once(TEMA_INC.'inc/ust.php');?>
    </head>
    <body class="page-template page-template-elementor_header_footer page page-id-1264 page-parent wp-custom-logo elementor-default elementor-template-full-width elementor-kit-6 elementor-page elementor-page-1264">
        <?php require_once(TEMA_INC.'inc/head.php');?>
        <!-- - PAGE HEADER -->
        <!-- PAGE MAIN -->
        <div class="js-smooth-scroll" id="page-wrapper" data-arts-theme-text="dark" >
            <main class="page-wrapper__content">
                <!-- PAGE FOOTER -->
               <section class="section section-masthead text-center" data-arts-os-animation="true" data-background-color="#eeece6" data-arts-theme-text="dark">
    <div class="section-masthead__inner container-fluid">
        <header class="row section-masthead__header">
            <div class="col-12">
                <h1 class="entry-title section-masthead__heading my-0 h1 split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">Ufficio Stile</h1>
                <div class="w-100"></div>
            </div>
        </header>
    </div>
</section>

<div data-elementor-type="wp-page" data-elementor-id="1350" class="elementor elementor-1350">
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-46504fd elementor-section-full_width elementor-section-height-min-height arts-elementor-theme-light elementor-section-height-default elementor-section-items-middle"
        data-id="46504fd"
        data-element_type="section"
        data-settings='{"background_background":"classic","theme_section_main_theme_text":"arts-elementor-theme-light"}'
      style="background-image: url(<?php echo URL.'images/photos/big/'.$resim100["fotograf_src"]; ?>);"
    >
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3b57798" data-id="3b57798" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-f4876f1 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="f4876f1" data-element_type="widget" data-widget_type="divider.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-divider">
                                <span class="elementor-divider-separator"> </span>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-6b99734 scroll-big-txt elementor-widget elementor-widget-shortcode" data-id="6b99734" data-element_type="widget" data-widget_type="shortcode.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-shortcode">
                                <div class="marquee-hsas-shortcode-76" style="width: 100%; overflow: hidden;"><span style=""><?php echo $blokRowdil["desc40"]; ?></span></div>
                                <script>
                                    jQuery(function () {
                                        jQuery(".marquee-hsas-shortcode-76").marquee({
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
                    <div class="elementor-element elementor-element-64686bf elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="64686bf" data-element_type="widget" data-widget_type="divider.default">
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
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-270ab37 bg-white elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="270ab37"
        data-element_type="section"
        data-settings='{"theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b9dde1e" data-id="b9dde1e" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-b7d6a78 elementor-widget elementor-widget-spacer" data-id="b7d6a78" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-27402cd bg-white elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="27402cd"
        data-element_type="section"
        data-settings='{"background_background":"classic","theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-b7e6165" data-id="b7e6165" data-element_type="column">
                <div class="elementor-widget-wrap"></div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-098c4f3" data-id="098c4f3" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-9f73b24 text-center h1-mod elementor-widget elementor-widget-rhye-widget-content-block"
                        data-id="9f73b24"
                        data-element_type="widget"
                        data-widget_type="rhye-widget-content-block.default"
                    >
                        <div class="elementor-widget-container">
                            <div class="section section-content clearfix pt-small pb-small" data-arts-os-animation="true">
                                <div class="section-content__inner">
                                    <div class="section-content__wrapper-heading">
                                        <div class="section-content__heading split-text js-split-text mb-1" data-split-text-type="lines,words" data-split-text-set="words"><h1><?php echo $blokRowdil["baslik41"]; ?></h1></div>
                                    </div>
                                    <div class="section-content__wrapper-content">
                                        <div class="w-100"></div>
                                        <div class="section__headline mt-1 mt-md-2 mb-1 mb-md-2"></div>
                                        <div class="w-100"></div>
                                        <div class="section-content__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                                            <p class="p1"><?php echo $blokRowdil["desc41"]; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-471883a" data-id="471883a" data-element_type="column">
                <div class="elementor-widget-wrap"></div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-afe5057 bg-white elementor-hidden-tablet elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="afe5057"
        data-element_type="section"
        data-settings='{"theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5046a67" data-id="5046a67" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-a649bcb elementor-widget elementor-widget-spacer" data-id="a649bcb" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-31145f7 bg-white elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="31145f7"
        data-element_type="section"
        data-settings='{"theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b293970" data-id="b293970" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-22ad78a elementor-widget elementor-widget-spacer" data-id="22ad78a" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-ffbf513 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
        data-id="ffbf513"
        data-element_type="section"
        data-settings='{"background_background":"classic"}'
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-16d0748" data-id="16d0748" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-1279cdf elementor-widget elementor-widget-spacer" data-id="1279cdf" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-013130d elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="013130d" data-element_type="widget" data-widget_type="divider.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-divider">
                                <span class="elementor-divider-separator"> </span>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-4ac88eb scroll-big-txt elementor-widget elementor-widget-shortcode" data-id="4ac88eb" data-element_type="widget" data-widget_type="shortcode.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-shortcode">
                                <div class="marquee-hsas-shortcode-47" style="width: 100%; overflow: hidden;"><span style=""><?php echo $blokRowdil["baslik42"]; ?></span></div>
                                <script>
                                    jQuery(function () {
                                        jQuery(".marquee-hsas-shortcode-47").marquee({
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
                    <div class="elementor-element elementor-element-80680d3 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="80680d3" data-element_type="widget" data-widget_type="divider.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-divider">
                                <span class="elementor-divider-separator"> </span>
                            </div>
                        </div>
                    </div>
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-7452b93 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="7452b93"
                        data-element_type="section"
                    >
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2a4df69" data-id="2a4df69" data-element_type="column">
                                <div class="elementor-widget-wrap"></div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-9f35d78" data-id="9f35d78" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-a6e21e2 text-center elementor-widget elementor-widget-rhye-widget-content-block"
                                        data-id="a6e21e2"
                                        data-element_type="widget"
                                        data-widget_type="rhye-widget-content-block.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="section section-content clearfix pt-small pb-small" data-arts-os-animation="true">
                                                <div class="section-content__inner">
                                                    <div class="section-content__wrapper-content">
                                                        <div class="w-100"></div>
                                                        <div class="section-content__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                                                            <p class="p1"><?php echo $blokRowdil["desc42"]; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-cf811de" data-id="cf811de" data-element_type="column">
                                <div class="elementor-widget-wrap"></div>
                            </div>
                        </div>
                    </section>
                    <div class="elementor-element elementor-element-8760efa elementor-widget elementor-widget-rhye-widget-slider-images" data-id="8760efa" data-element_type="widget" data-widget_type="rhye-widget-slider-images.default">
                        <div class="elementor-widget-container">
                            <div class="section section-slider-images" data-arts-os-animation="true">
                                <div class="slider slider-images js-slider-images">
                                    <div
                                        class="swiper-container js-slider-images__slider slider_vertical-centered"
                                        data-speed="1200"
                                        data-slides-per-view="2.5"
                                        data-slides-per-view-tablet="1.33"
                                        data-slides-per-view-mobile="1.33"
                                        data-space-between="40"
                                        data-space-between-tablet="20"
                                        data-space-between-mobile="20"
                                        data-centered-slides=""
                                        data-centered-slides-tablet="1"
                                        data-centered-slides-mobile="1"
                                        data-touch-ratio="3"
                                        data-counter-style=""
                                        data-counter-add-zeros=""
                                        data-auto-height="true"
                                        data-autoplay-enabled="true"
                                        data-autoplay-delay="6000"
                                        data-drag-mouse="true"
                                        data-drag-cursor="true"
                                        data-drag-class="slider-images_touched"
                                    >
                                        <div class="swiper-wrapper">







<?php
                    $cozumQuery = $db->query("SELECT * FROM fotograflar WHERE fotograf_bolum=3 && fotograf_durum=1 AND fotograf_bolum2 = 32");
                    if($cozumQuery->rowCount()){
                        $sayac = 0;
                        foreach($cozumQuery as $cozumRow){
                            $sayac++;

                            ?>
                     <div class="swiper-slide overflow d-flex-centered text-center">
                                                <div class="w-100 h-100" data-swiper-parallax="10%" data-swiper-parallax-zoom="10%">
                                                    <div class="slider__zoom-container w-100 h-100 user-select-none pointer-events-none">
                                                        <div class="lazy" style="padding-bottom: calc((1335 / 2000) * 100%); height: 0;">
                                                            <img
                                                                class="swiper-lazy w-100"
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAHCGzyUAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQI12NolQQAASYAn89qhTcAAAAASUVORK5CYII="
                                                                data-src="<?php echo URL.'images/photos/big/'.$cozumRow["fotograf_src"];?>"
                                                                width="2000"
                                                                height="1335"
                                                                data-srcset="<?php echo URL.'images/photos/big/'.$cozumRow["fotograf_src"];?> 2000w, <?php echo URL.'images/photos/big/'.$cozumRow["fotograf_src"];?> 300w, <?php echo URL.'images/photos/big/'.$cozumRow["fotograf_src"];?> 1024w, <?php echo URL.'images/photos/big/'.$cozumRow["fotograf_src"];?> 768w, <?php echo URL.'images/photos/big/'.$cozumRow["fotograf_src"];?> 1536w"
                                                                data-sizes="(max-width: 2000px) 100vw, 2000px"
                                                                alt="<?php echo $cozumRow[$lehce."fotograf_shortDesc"];?>"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        

                 <?php
                        }
                    }
                    ?>
                       



                                        </div>
                                    </div>
                                    <!-- slider FOOTER -->
                                    <div class="slider-images__footer">
                                        <div class="row no-gutters justify-content-center">
                                            <div class="col-auto">
                                                <!-- slider DOTS -->
                                                <div class="slider__dots js-slider__dots"></div>
                                                <!-- - slider DOTS -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- - slider FOOTER -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-51ebbc7 elementor-widget elementor-widget-spacer" data-id="51ebbc7" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-d3d819c bg-white elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="d3d819c"
        data-element_type="section"
        data-settings='{"theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1136013" data-id="1136013" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-6cd5555 elementor-widget elementor-widget-spacer" data-id="6cd5555" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-d7b2c0e elementor-section-full_width bg-white elementor-section-height-default elementor-section-height-default"
        data-id="d7b2c0e"
        data-element_type="section"
        data-settings='{"background_background":"classic","theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-d891a6a" data-id="d891a6a" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-ba17bb6 text-center elementor-widget elementor-widget-rhye-widget-content-block"
                        data-id="ba17bb6"
                        data-element_type="widget"
                        data-widget_type="rhye-widget-content-block.default"
                    >
                        <div class="elementor-widget-container">
                            <div class="section section-content clearfix pt-small pb-small" data-arts-os-animation="true">
                                <div class="section-content__inner">
                                    <div class="section-content__wrapper-heading">
                                        <div class="section-content__heading split-text js-split-text mb-1" data-split-text-type="lines,words" data-split-text-set="words"><h2 style="text-align: center;"><?php echo $blokRowdil["baslik43"]; ?></h2></div>
                                    </div>
                                    <div class="section-content__wrapper-content">
                                        <div class="w-100"></div>
                                        <div class="section__headline mt-1 mt-md-2 mb-1 mb-md-2"></div>
                                        <div class="w-100"></div>
                                        <div class="section-content__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                                            <p class="p1"><?php echo $blokRowdil["desc43"]; ?></p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f596492" data-id="f596492" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-a795bac text-center elementor-widget elementor-widget-rhye-widget-content-block"
                        data-id="a795bac"
                        data-element_type="widget"
                        data-widget_type="rhye-widget-content-block.default"
                    >
                        <div class="elementor-widget-container">
                            <div class="section section-content clearfix pt-small pb-small" data-arts-os-animation="true">
                                <div class="section-content__inner">
                                    <div class="section-content__wrapper-heading">
                                        <div class="section-content__heading split-text js-split-text mb-1" data-split-text-type="lines,words" data-split-text-set="words"><h2 style="text-align: center;"><?php echo $blokRowdil["baslik44"]; ?></h2></div>
                                    </div>
                                    <div class="section-content__wrapper-content">
                                        <div class="w-100"></div>
                                        <div class="section__headline mt-1 mt-md-2 mb-1 mb-md-2"></div>
                                        <div class="w-100"></div>
                                        <div class="section-content__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                                            <p class="p1"><?php echo $blokRowdil["desc44"]; ?></p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-6e612ff bg-white elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="6e612ff"
        data-element_type="section"
        data-settings='{"theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-29d3c07" data-id="29d3c07" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-12cf16a elementor-widget elementor-widget-spacer" data-id="12cf16a" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-ac00f85 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="ac00f85"
        data-element_type="section"
        data-settings='{"background_background":"classic"}'
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2803e13" data-id="2803e13" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-0db8cb1 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="0db8cb1"
                        data-element_type="section"
                    >
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2adc401" data-id="2adc401" data-element_type="column">
                                <div class="elementor-widget-wrap"></div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-988d157" data-id="988d157" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-b5e6800 text-center elementor-widget elementor-widget-rhye-widget-content-block"
                                        data-id="b5e6800"
                                        data-element_type="widget"
                                        data-widget_type="rhye-widget-content-block.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="section section-content clearfix pt-small pb-small" data-arts-os-animation="true">
                                                <div class="section-content__inner">
                                                    <div class="section-content__wrapper-heading">
                                                        <div class="section-content__heading split-text js-split-text mb-1" data-split-text-type="lines,words" data-split-text-set="words"><h2 class="p1"><?php echo $blokRowdil["baslik45"]; ?></h2></div>
                                                    </div>
                                                    <div class="section-content__wrapper-content">
                                                        <div class="w-100"></div>
                                                        <div class="section__headline mt-1 mt-md-2 mb-1 mb-md-2"></div>
                                                        <div class="w-100"></div>
                                                        <div class="section-content__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                                                            <h5><?php echo $blokRowdil["desc45"]; ?></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-0c36a84" data-id="0c36a84" data-element_type="column">
                                <div class="elementor-widget-wrap"></div>
                            </div>
                        </div>
                    </section>
                
                    <div class="elementor-element elementor-element-f90ff68 elementor-widget elementor-widget-spacer" data-id="f90ff68" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-184b086 bg-white elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="184b086"
        data-element_type="section"
        data-settings='{"theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ffa431c" data-id="ffa431c" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-e3708a0 elementor-widget elementor-widget-spacer" data-id="e3708a0" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-006045d bg-white elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="006045d"
        data-element_type="section"
        data-settings='{"background_background":"classic","theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-81ed4f2" data-id="81ed4f2" data-element_type="column">
                <div class="elementor-widget-wrap"></div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-fdc284f" data-id="fdc284f" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-f4ed313 elementor-widget elementor-widget-menu-anchor" data-id="f4ed313" data-element_type="widget" data-widget_type="menu-anchor.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-menu-anchor"></div>
                        </div>
                    </div>
                    <div
                        class="elementor-element elementor-element-fa073b0 text-center elementor-widget elementor-widget-rhye-widget-content-block"
                        data-id="fa073b0"
                        data-element_type="widget"
                        data-widget_type="rhye-widget-content-block.default"
                    >
                        <div class="elementor-widget-container">
                            <div class="section section-content clearfix pt-small pb-small" data-arts-os-animation="true">
                                <div class="section-content__inner">
                                    <div class="section-content__wrapper-heading">
                                        <div class="section-content__heading split-text js-split-text mb-1" data-split-text-type="lines,words" data-split-text-set="words"><h2><?php echo $blokRowdil["baslik46"]; ?></h2></div>
                                    </div>
                                    <div class="section-content__wrapper-content">
                                        <div class="w-100"></div>
                                        <div class="section__headline mt-1 mt-md-2 mb-1 mb-md-2"></div>
                                        <div class="w-100"></div>
                                        <div class="section-content__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                                            <p class="p1"><?php echo $blokRowdil["desc46"]; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-bdcf917" data-id="bdcf917" data-element_type="column">
                <div class="elementor-widget-wrap"></div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-5aa41ac elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="5aa41ac"
        data-element_type="section"
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-407e394" data-id="407e394" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-9c89889 elementor-widget elementor-widget-image" data-id="9c89889" data-element_type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <img
                                width="315"
                                height="272"
                                src="<?php echo URL.'images/photos/big/'.$resim84["fotograf_src"]; ?>"
                                class="attachment-full size-full"
                                alt=""
                                loading="lazy"
                                srcset="<?php echo URL.'images/photos/big/'.$resim84["fotograf_src"]; ?> 315w, <?php echo URL.'images/photos/big/'.$resim84["fotograf_src"]; ?> 300w"
                                sizes="(max-width: 315px) 100vw, 315px"
                            />
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-94049b4 elementor-hidden-mobile" data-id="94049b4" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-8b53121 elementor-view-default elementor-widget elementor-widget-icon" data-id="8b53121" data-element_type="widget" data-widget_type="icon.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-icon-wrapper">
                                <div class="elementor-icon">
                                    <i aria-hidden="true" class="material-icons arrow_forward"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-cc49eda" data-id="cc49eda" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-511c5c1 elementor-widget elementor-widget-image" data-id="511c5c1" data-element_type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <img width="297" height="274" src="<?php echo URL.'images/photos/big/'.$resim85["fotograf_src"]; ?>" class="attachment-full size-full" alt="" loading="lazy" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-1452082 elementor-hidden-mobile" data-id="1452082" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-a59505b elementor-view-default elementor-widget elementor-widget-icon" data-id="a59505b" data-element_type="widget" data-widget_type="icon.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-icon-wrapper">
                                <div class="elementor-icon">
                                    <i aria-hidden="true" class="material-icons arrow_forward"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-d16968b" data-id="d16968b" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-0d66280 elementor-widget elementor-widget-image" data-id="0d66280" data-element_type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <img width="297" height="272" src="<?php echo URL.'images/photos/big/'.$resim88["fotograf_src"]; ?>" class="attachment-full size-full" alt="" loading="lazy" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-55afe10 elementor-section-full_width bg-white elementor-section-height-default elementor-section-height-default"
        data-id="55afe10"
        data-element_type="section"
        data-settings='{"theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-12507e4" data-id="12507e4" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-62505a4 elementor-widget elementor-widget-rhye-widget-parallax-background"
                        data-id="62505a4"
                        data-element_type="widget"
                        data-widget_type="rhye-widget-parallax-background.default"
                    >
                        <div class="elementor-widget-container">
                            <div class="section section-image section text-center" data-arts-parallax="true" data-arts-parallax-factor="0.1" data-arts-os-animation="true">
                                <div class="section-image__wrapper overflow mask-reveal lazy" style="padding-bottom: calc((1333 / 2000) * 100%); height: 0;">
                                    <div class="mask-reveal__layer mask-reveal__layer-1">
                                        <div class="mask-reveal__layer mask-reveal__layer-2">
                                            <img
                                                loading="lazy"
                                                class=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAHCGzyUAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQI12NolQQAASYAn89qhTcAAAAASUVORK5CYII="
                                                data-src="<?php echo URL.'images/photos/big/'.$resim89["fotograf_src"]; ?>"
                                                width="2000"
                                                height="1333"
                                                data-srcset="<?php echo URL.'images/photos/big/'.$resim89["fotograf_src"]; ?> 2000w, <?php echo URL.'images/photos/big/'.$resim89["fotograf_src"]; ?> 300w, <?php echo URL.'images/photos/big/'.$resim89["fotograf_src"]; ?> 1024w, <?php echo URL.'images/photos/big/'.$resim89["fotograf_src"]; ?> 768w, <?php echo URL.'images/photos/big/'.$resim89["fotograf_src"]; ?> 1536w, <?php echo URL.'images/photos/big/'.$resim89["fotograf_src"]; ?> 1920w"
                                                data-sizes="(max-width: 2000px) 100vw, 2000px"
                                                alt=""
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-31d8bf8 bg-white elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="31d8bf8"
        data-element_type="section"
        data-settings='{"background_background":"classic","theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-33bbf74" data-id="33bbf74" data-element_type="column">
                <div class="elementor-widget-wrap"></div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2606de4" data-id="2606de4" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-3333584 text-center elementor-widget elementor-widget-rhye-widget-content-block"
                        data-id="3333584"
                        data-element_type="widget"
                        data-widget_type="rhye-widget-content-block.default"
                    >
                        <div class="elementor-widget-container">
                            <div class="section section-content clearfix pt-small pb-small" data-arts-os-animation="true">
                                <div class="section-content__inner">
                                    <div class="section-content__wrapper-heading">
                                        <div class="section-content__heading split-text js-split-text mb-1" data-split-text-type="lines,words" data-split-text-set="words"><h2><?php echo $blokRowdil2["baslik3"]; ?></h2></div>
                                    </div>
                                    <div class="section-content__wrapper-content">
                                        <div class="w-100"></div>
                                        <div class="section__headline mt-1 mt-md-2 mb-1 mb-md-2"></div>
                                        <div class="w-100"></div>
                                        <div class="section-content__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                                            <p class="p1"><?php echo $blokRowdil2["desc3"]; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-b054af4" data-id="b054af4" data-element_type="column">
                <div class="elementor-widget-wrap"></div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-0fe38e3 bg-white elementor-section-full_width elementor-section-height-default elementor-section-height-default"
        data-id="0fe38e3"
        data-element_type="section"
        data-settings='{"theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6ddcc3d" data-id="6ddcc3d" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-677db00 elementor-widget elementor-widget-spacer" data-id="677db00" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-53c2157 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="53c2157" data-element_type="widget" data-widget_type="divider.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-divider">
                                <span class="elementor-divider-separator"> </span>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-b103664 scroll-big-txt elementor-widget elementor-widget-shortcode" data-id="b103664" data-element_type="widget" data-widget_type="shortcode.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-shortcode">
                                <div class="marquee-hsas-shortcode-96" style="width: 100%; overflow: hidden;"><span style=""><?php echo $blokRowdil2["baslik4"]; ?> </span></div>
                                <script>
                                    jQuery(function () {
                                        jQuery(".marquee-hsas-shortcode-96").marquee({
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
                    <div class="elementor-element elementor-element-a036bbc elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="a036bbc" data-element_type="widget" data-widget_type="divider.default">
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
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-054e377 bg-white elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="054e377"
        data-element_type="section"
        data-settings='{"background_background":"classic","theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-0c6a9ca" data-id="0c6a9ca" data-element_type="column">
                <div class="elementor-widget-wrap"></div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1662283" data-id="1662283" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-306d938 elementor-widget elementor-widget-menu-anchor" data-id="306d938" data-element_type="widget" data-widget_type="menu-anchor.default">
                        <div class="elementor-widget-container">
                            <div id="mysuite" class="elementor-menu-anchor"></div>
                        </div>
                    </div>
                    <div
                        class="elementor-element elementor-element-faa99bc text-center elementor-widget elementor-widget-rhye-widget-content-block"
                        data-id="faa99bc"
                        data-element_type="widget"
                        data-widget_type="rhye-widget-content-block.default"
                    >
                        <div class="elementor-widget-container">
                            <div class="section section-content clearfix pt-small pb-small" data-arts-os-animation="true">
                                <div class="section-content__inner">
                                    <div class="section-content__wrapper-heading">
                                        <div class="section-content__heading split-text js-split-text mb-1" data-split-text-type="lines,words" data-split-text-set="words"><h2><?php echo $blokRowdil2["desc4"]; ?></h2></div>
                                    </div>
                                    <div class="section-content__wrapper-content">
                                        <div class="w-100"></div>
                                        <div class="section__headline mt-1 mt-md-2 mb-1 mb-md-2"></div>
                                        <div class="w-100"></div>
                                        <div class="section-content__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                                            <p class="p1"><?php echo $blokRowdil2["baslik5"]; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-87fc7ad" data-id="87fc7ad" data-element_type="column">
                <div class="elementor-widget-wrap"></div>
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