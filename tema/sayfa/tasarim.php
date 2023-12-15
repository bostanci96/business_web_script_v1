<?php $blok = $db->query("SELECT * FROM dil2_bloklar{$blokLehce}")->fetch(PDO::FETCH_ASSOC); ?>
<!DOCTYPE html>
<html lang="tr-TR">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
        <title><?php echo $blok["desc20"]; ?> - <?php echo $ayar[$lehce."site_title"];?></title>
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
.elementor-kit-6{--e-global-color-primary:#6EC1E4;--e-global-color-secondary:#54595F;--e-global-color-text:#7A7A7A;--e-global-color-accent:#61CE70;--e-global-typography-primary-font-family:"Roboto";--e-global-typography-primary-font-weight:600;--e-global-typography-secondary-font-family:"Roboto Slab";--e-global-typography-secondary-font-weight:400;--e-global-typography-text-font-family:"Roboto";--e-global-typography-text-font-weight:400;--e-global-typography-accent-font-family:"Roboto";--e-global-typography-accent-font-weight:500;background-color:#f5f2ed;}.elementor-section.elementor-section-boxed > .elementor-container{max-width:1140px;}.e-container{--container-max-width:1140px;}.elementor-widget:not(:last-child){margin-bottom:20px;}.elementor-element{--widgets-spacing:20px;}{}h1.entry-title{display:var(--page-title-display);}.elementor-kit-6 e-page-transition{background-color:#FFBC7D;}@media(max-width:1024px){.elementor-section.elementor-section-boxed > .elementor-container{max-width:1024px;}.e-container{--container-max-width:1024px;}}@media(max-width:767px){.elementor-section.elementor-section-boxed > .elementor-container{max-width:767px;}.e-container{--container-max-width:767px;}}
.elementor-481 .elementor-element.elementor-element-38e6dfc:not(.elementor-motion-effects-element-type-background), .elementor-481 .elementor-element.elementor-element-38e6dfc > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#f5f2ed;}.elementor-481 .elementor-element.elementor-element-38e6dfc{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-481 .elementor-element.elementor-element-38e6dfc > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-481 .elementor-element.elementor-element-3985812{--spacer-size:20vh;}.elementor-481 .elementor-element.elementor-element-98d20fa .section-content__inner{max-width:100%;}.elementor-481 .elementor-element.elementor-element-98d20fa .section-content__text{max-width:700px;}.elementor-bc-flex-widget .elementor-481 .elementor-element.elementor-element-c30f367.elementor-column .elementor-widget-wrap{align-items:center;}.elementor-481 .elementor-element.elementor-element-c30f367.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center;}.elementor-481 .elementor-element.elementor-element-c30f367.elementor-column > .elementor-widget-wrap{justify-content:center;} .elementor-481 .elementor-element.elementor-element-fff0727 .section-image__wrapper img{object-position:50% 50%;}.elementor-481 .elementor-element.elementor-element-fff0727 .section-video__link-inner{color:#000000;}.elementor-481 .elementor-element.elementor-element-5b38ee6 .elementor-heading-title{font-size:18px;font-weight:300;}.elementor-481 .elementor-element.elementor-element-fd30dcb{--spacer-size:36px;}.elementor-481 .elementor-element.elementor-element-bf4dd97{--spacer-size:36px;}.elementor-481 .elementor-element.elementor-element-8e04122{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-481 .elementor-element.elementor-element-8e04122 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-481 .elementor-element.elementor-element-6039c96:not(.elementor-motion-effects-element-type-background) > .elementor-widget-wrap, .elementor-481 .elementor-element.elementor-element-6039c96 > .elementor-widget-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:url("../wp-content/uploads/2021/11/DIS408293-ZH1.jpg");background-size:cover;}.elementor-481 .elementor-element.elementor-element-6039c96 > .elementor-element-populated{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:10% 10% 10% 10%;}.elementor-481 .elementor-element.elementor-element-6039c96 > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-481 .elementor-element.elementor-element-68c549f .section-image__wrapper img{width:100%;height:auto;}.elementor-bc-flex-widget .elementor-481 .elementor-element.elementor-element-d690a9e.elementor-column .elementor-widget-wrap{align-items:center;}.elementor-481 .elementor-element.elementor-element-d690a9e.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center;}.elementor-481 .elementor-element.elementor-element-d690a9e.elementor-column > .elementor-widget-wrap{justify-content:center;}.elementor-481 .elementor-element.elementor-element-d690a9e > .elementor-element-populated{padding:0% 10% 0% 10%;}.elementor-481 .elementor-element.elementor-element-d4f19c7{--spacer-size:50px;}.elementor-481 .elementor-element.elementor-element-6ab2461{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-481 .elementor-element.elementor-element-6ab2461 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-bc-flex-widget .elementor-481 .elementor-element.elementor-element-a17b76a.elementor-column .elementor-widget-wrap{align-items:center;}.elementor-481 .elementor-element.elementor-element-a17b76a.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center;}.elementor-481 .elementor-element.elementor-element-a17b76a.elementor-column > .elementor-widget-wrap{justify-content:center;}.elementor-481 .elementor-element.elementor-element-a17b76a > .elementor-element-populated{padding:0% 10% 0% 10%;}.elementor-481 .elementor-element.elementor-element-af00143:not(.elementor-motion-effects-element-type-background) > .elementor-widget-wrap, .elementor-481 .elementor-element.elementor-element-af00143 > .elementor-widget-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#f5f2ed;}.elementor-481 .elementor-element.elementor-element-af00143 > .elementor-element-populated{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:10% 10% 10% 10%;}.elementor-481 .elementor-element.elementor-element-af00143 > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-481 .elementor-element.elementor-element-b37a7df .section-image__wrapper img{width:100%;height:auto;}.elementor-481 .elementor-element.elementor-element-a649bcb{--spacer-size:50px;}.elementor-481 .elementor-element.elementor-element-1e7b4a8{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-481 .elementor-element.elementor-element-1e7b4a8 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-481 .elementor-element.elementor-element-c0af55c:not(.elementor-motion-effects-element-type-background) > .elementor-widget-wrap, .elementor-481 .elementor-element.elementor-element-c0af55c > .elementor-widget-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:url("../wp-content/uploads/2021/11/DIS408293-ZH1.jpg");background-size:cover;}.elementor-481 .elementor-element.elementor-element-c0af55c > .elementor-element-populated{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:10% 10% 10% 10%;}.elementor-481 .elementor-element.elementor-element-c0af55c > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-481 .elementor-element.elementor-element-1b31c2e .section-image__wrapper img{width:100%;height:auto;}.elementor-bc-flex-widget .elementor-481 .elementor-element.elementor-element-b6f2afe.elementor-column .elementor-widget-wrap{align-items:center;}.elementor-481 .elementor-element.elementor-element-b6f2afe.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center;}.elementor-481 .elementor-element.elementor-element-b6f2afe.elementor-column > .elementor-widget-wrap{justify-content:center;}.elementor-481 .elementor-element.elementor-element-b6f2afe > .elementor-element-populated{padding:0% 10% 0% 10%;}.elementor-481 .elementor-element.elementor-element-e4f8cbd{--spacer-size:50px;}.elementor-481 .elementor-element.elementor-element-f41add5{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-481 .elementor-element.elementor-element-f41add5 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-bc-flex-widget .elementor-481 .elementor-element.elementor-element-9bf6ac5.elementor-column .elementor-widget-wrap{align-items:center;}.elementor-481 .elementor-element.elementor-element-9bf6ac5.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center;}.elementor-481 .elementor-element.elementor-element-9bf6ac5.elementor-column > .elementor-widget-wrap{justify-content:center;}.elementor-481 .elementor-element.elementor-element-9bf6ac5 > .elementor-element-populated{padding:0% 10% 0% 10%;}.elementor-481 .elementor-element.elementor-element-ab24ab6:not(.elementor-motion-effects-element-type-background) > .elementor-widget-wrap, .elementor-481 .elementor-element.elementor-element-ab24ab6 > .elementor-widget-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#F3EAE5;}.elementor-481 .elementor-element.elementor-element-ab24ab6 > .elementor-element-populated{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:10% 10% 10% 10%;}.elementor-481 .elementor-element.elementor-element-ab24ab6 > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-481 .elementor-element.elementor-element-9c27569{--spacer-size:100px;}.elementor-481 .elementor-element.elementor-element-94fe44a:not(.elementor-motion-effects-element-type-background), .elementor-481 .elementor-element.elementor-element-94fe44a > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#F8F8F8;}.elementor-481 .elementor-element.elementor-element-94fe44a{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-481 .elementor-element.elementor-element-94fe44a > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-481 .elementor-element.elementor-element-94f18d9 .section-image__wrapper img{width:100%;height:auto;}.elementor-481 .elementor-element.elementor-element-6b55e16{--spacer-size:50px;}.elementor-481 .elementor-element.elementor-element-a025649{--spacer-size:50px;}.elementor-481 .elementor-element.elementor-element-18ef0ae .section-image__wrapper img{width:100%;height:auto;}.elementor-481 .elementor-element.elementor-element-47cf5056:not(.elementor-motion-effects-element-type-background), .elementor-481 .elementor-element.elementor-element-47cf5056 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#000000;}.elementor-481 .elementor-element.elementor-element-47cf5056{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-481 .elementor-element.elementor-element-47cf5056 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-481 .elementor-element.elementor-element-6b3a71e0 .section-content__inner{max-width:100%;}.elementor-481 .elementor-element.elementor-element-6b3a71e0 .section-content__text{max-width:328px;}.elementor-481 .elementor-element.elementor-element-6b3a71e0 > .elementor-widget-container{margin:0px 0px 0px 0px;}.elementor-bc-flex-widget .elementor-481 .elementor-element.elementor-element-46b47429.elementor-column .elementor-widget-wrap{align-items:flex-end;}.elementor-481 .elementor-element.elementor-element-46b47429.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:flex-end;align-items:flex-end;}.elementor-481 .elementor-element.elementor-element-573d1366 .circle-button_link{width:calc(180px - 10px);height:calc(180px - 10px);}.elementor-481 .elementor-element.elementor-element-573d1366 .circle-button_link .circle-button__inner .svg-circle{width:180px;height:180px;}.elementor-481 .elementor-element.elementor-element-573d1366 .circle-button__icon{color:#FFFFFF;}.elementor-481 .elementor-element.elementor-element-573d1366{width:170.5px;max-width:170.5px;}:root{--page-title-display:none;}@media(max-width:1024px){.elementor-481 .elementor-element.elementor-element-98d20fa .section-content__inner{max-width:100%;}.elementor-481 .elementor-element.elementor-element-98d20fa .section-content__text{max-width:700px;}.elementor-481 .elementor-element.elementor-element-fff0727 .section-video{height:20vh;} .elementor-481 .elementor-element.elementor-element-fff0727 .section-image__wrapper img{object-position:50% 50%;}.elementor-481 .elementor-element.elementor-element-1fe4941 .section-content__inner{max-width:100%;}.elementor-481 .elementor-element.elementor-element-1fe4941 .section-content__text{max-width:700px;}.elementor-481 .elementor-element.elementor-element-d1efaa5 .section-content__inner{max-width:100%;}.elementor-481 .elementor-element.elementor-element-d1efaa5 .section-content__text{max-width:700px;}.elementor-481 .elementor-element.elementor-element-af00143 > .elementor-element-populated{padding:10% 10% 10% 10%;}.elementor-481 .elementor-element.elementor-element-31cd7cc .section-content__inner{max-width:100%;}.elementor-481 .elementor-element.elementor-element-31cd7cc .section-content__text{max-width:700px;}.elementor-481 .elementor-element.elementor-element-86ddabd .section-content__inner{max-width:100%;}.elementor-481 .elementor-element.elementor-element-86ddabd .section-content__text{max-width:700px;}.elementor-481 .elementor-element.elementor-element-9133e61 .section-content__inner{max-width:100%;}.elementor-481 .elementor-element.elementor-element-9133e61 .section-content__text{max-width:700px;}.elementor-481 .elementor-element.elementor-element-6b3a71e0 .section-content__inner{max-width:100%;}.elementor-481 .elementor-element.elementor-element-6b3a71e0 .section-content__text{max-width:700px;}.elementor-481 .elementor-element.elementor-element-46b47429.elementor-column > .elementor-widget-wrap{justify-content:flex-end;}.elementor-481 .elementor-element.elementor-element-46b47429 > .elementor-element-populated{margin:50px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;}.elementor-481 .elementor-element.elementor-element-573d1366 .circle-button_link{width:calc(75px - 10px);height:calc(75px - 10px);}.elementor-481 .elementor-element.elementor-element-573d1366 .circle-button_link .circle-button__inner .svg-circle{width:75px;height:75px;}body.elementor-page-481:not(.elementor-motion-effects-element-type-background), body.elementor-page-481 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-position:0px 0px;}}@media(max-width:767px){.elementor-481 .elementor-element.elementor-element-98d20fa .section-content__inner{max-width:100%;}.elementor-481 .elementor-element.elementor-element-98d20fa .section-content__text{max-width:700px;}.elementor-481 .elementor-element.elementor-element-fff0727 .section-video{height:15vh;} .elementor-481 .elementor-element.elementor-element-fff0727 .section-image__wrapper img{object-position:50% 50%;}.elementor-481 .elementor-element.elementor-element-1fe4941 .section-content__inner{max-width:100%;}.elementor-481 .elementor-element.elementor-element-1fe4941 .section-content__text{max-width:700px;}.elementor-481 .elementor-element.elementor-element-d1efaa5 .section-content__inner{max-width:100%;}.elementor-481 .elementor-element.elementor-element-d1efaa5 .section-content__text{max-width:700px;}.elementor-481 .elementor-element.elementor-element-31cd7cc .section-content__inner{max-width:100%;}.elementor-481 .elementor-element.elementor-element-31cd7cc .section-content__text{max-width:700px;}.elementor-481 .elementor-element.elementor-element-86ddabd .section-content__inner{max-width:100%;}.elementor-481 .elementor-element.elementor-element-86ddabd .section-content__text{max-width:700px;}.elementor-481 .elementor-element.elementor-element-9133e61 .section-content__inner{max-width:100%;}.elementor-481 .elementor-element.elementor-element-9133e61 .section-content__text{max-width:700px;}.elementor-481 .elementor-element.elementor-element-517d5c3d > .elementor-element-populated{margin:0px 0px 20px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;}.elementor-481 .elementor-element.elementor-element-6b3a71e0 .section-content__inner{max-width:100%;}.elementor-481 .elementor-element.elementor-element-6b3a71e0 .section-content__text{max-width:700px;}.elementor-481 .elementor-element.elementor-element-6b3a71e0 > .elementor-widget-container{margin:0px 0px 0px 0px;}.elementor-481 .elementor-element.elementor-element-8998bbe > .elementor-widget-container{margin:0px 0px 0px 0px;}.elementor-481 .elementor-element.elementor-element-573d1366 .circle-button_link{width:calc(75px - 10px);height:calc(75px - 10px);}.elementor-481 .elementor-element.elementor-element-573d1366 .circle-button_link .circle-button__inner .svg-circle{width:75px;height:75px;}.elementor-481 .elementor-element.elementor-element-573d1366{width:60%;max-width:60%;}body.elementor-page-481:not(.elementor-motion-effects-element-type-background), body.elementor-page-481 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-position:0px 0px;}}@media(min-width:768px){.elementor-481 .elementor-element.elementor-element-00de480{width:80%;}.elementor-481 .elementor-element.elementor-element-c30f367{width:19.957%;}.elementor-481 .elementor-element.elementor-element-942a455{width:26%;}.elementor-481 .elementor-element.elementor-element-560ded6{width:47.333%;}.elementor-481 .elementor-element.elementor-element-7445557{width:26%;}.elementor-481 .elementor-element.elementor-element-517d5c3d{width:28.758%;}.elementor-481 .elementor-element.elementor-element-3304b796{width:56.021%;}.elementor-481 .elementor-element.elementor-element-46b47429{width:14.529%;}}@media(max-width:1024px) and (min-width:768px){.elementor-481 .elementor-element.elementor-element-942a455{width:20%;}.elementor-481 .elementor-element.elementor-element-560ded6{width:60%;}.elementor-481 .elementor-element.elementor-element-7445557{width:20%;}.elementor-481 .elementor-element.elementor-element-517d5c3d{width:40%;}.elementor-481 .elementor-element.elementor-element-3304b796{width:60%;}.elementor-481 .elementor-element.elementor-element-46b47429{width:100%;}}.section-video{display:flex;width:100%;height:100%;flex-direction:column;align-items:center;justify-content:center}.section-video__link{display:block;margin:auto;width:calc(1 * (80 * 1px));height:calc(1 * (80 * 1px));border-radius:100%;will-change:transform;font-size:calc(10 * 1px);font-weight:700;letter-spacing:2px;line-height:1.3;text-transform:uppercase;color:#fff;z-index:60}@media screen and (min-width:320px){.section-video__link{width:calc(1 * (80 * 1px + (160 - 80) * ((100vw - 320px)/ 1600)))}}@media screen and (min-width:1920px){.section-video__link{width:calc(1 * (160 * 1px))}}@media screen and (min-width:320px){.section-video__link{height:calc(1 * (80 * 1px + (160 - 80) * ((100vw - 320px)/ 1600)))}}@media screen and (min-width:1920px){.section-video__link{height:calc(1 * (160 * 1px))}}@media screen and (min-width:320px){.section-video__link{font-size:calc(10 * 1px + (13 - 10) * ((100vw - 320px)/ 1600))}}@media screen and (min-width:1920px){.section-video__link{font-size:calc(13 * 1px)}}.section-video__link-inner{background-color:var(--color-dark-1);color:#fff;border-radius:100%;width:100%;height:100%;display:flex;align-items:center;justify-content:center}.section-video__link-inner[data-arts-cursor-label]:not([data-arts-cursor-label=false]):hover .section-video__icon{opacity:0;visibility:hidden;transform:translateY(20px)}.section-video__link-inner[data-arts-cursor-label]:not([data-arts-cursor]):not([data-arts-cursor-label=false]):after{content:attr(data-arts-cursor-label);display:inline-block;position:absolute;top:50%;left:50%;z-index:50;transform:translate(-50%,-20px);opacity:0;visibility:hidden;transition:all .2s cubic-bezier(.785,.135,.15,.86)}.section-video__link-inner[data-arts-cursor-label]:not([data-arts-cursor]):not([data-arts-cursor-label=false]):hover:after{opacity:1;visibility:visible;transform:translate(-50%,-50%)}.touchevents .section-video__link-inner[data-arts-cursor-label]:before{content:attr(data-arts-cursor-label);display:inline-block;position:absolute;top:50%;left:50%;z-index:50;transform:translate(-50%,-20px);opacity:0;visibility:hidden;transition:all .2s cubic-bezier(.785,.135,.15,.86)}.touchevents .section-video__link-inner[data-arts-cursor-label]:hover:before{opacity:1;visibility:visible;transform:translate(-50%,-50%)}.section-video__container{position:relative;display:flex;align-items:center;justify-content:center;width:100%;height:100%}.section-video__icon.material-icons{transition:all .2s cubic-bezier(.785,.135,.15,.86);font-size:calc(24 * 1px)}@media screen and (min-width:320px){.section-video__icon.material-icons{font-size:calc(24 * 1px + (32 - 24) * ((100vw - 320px)/ 1600))}}@media screen and (min-width:1920px){.section-video__icon.material-icons{font-size:calc(32 * 1px)}}.section-video__icon.material-icons>*{color:#fff!important}
</style>
  <script src="<?php echo TEMA_URL; ?>ast/jquery-3.6.0.min.js"></script>
                    
            <script type='text/javascript' src='<?php echo TEMA_URL;?>ast/jquery.magnific-popup.js'></script>
        <?php require_once(TEMA_INC.'inc/ust.php');?>
    </head>
    <body class="page-template page-template-elementor_header_footer page page-id-1264 page-parent wp-custom-logo elementor-default elementor-template-full-width elementor-kit-6 elementor-page elementor-page-1264">
        <?php require_once(TEMA_INC.'inc/head.php');?>
        <!-- - PAGE HEADER -->
        <!-- PAGE MAIN -->
        <div class="js-smooth-scroll" id="page-wrapper" data-arts-theme-text="dark" >
            <main class="page-wrapper__content">
             <section class="section section-masthead text-center" data-arts-os-animation="true" data-background-color="#eeece6" data-arts-theme-text="dark">
    <div class="section-masthead__inner container-fluid">
        <header class="row section-masthead__header">
            <div class="col-12">
                <h1 class="entry-title section-masthead__heading my-0 h1 split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">Chi Siamo</h1>
                <div class="w-100"></div>
            </div>
        </header>
    </div>
</section>

<div data-elementor-type="wp-page" data-elementor-id="481" class="elementor elementor-1350 elementor-481">


        <section
          class="elementor-section elementor-top-section elementor-element elementor-element-46504fd elementor-section-full_width elementor-section-height-min-height arts-elementor-theme-light elementor-section-height-default elementor-section-items-middle"
        data-id="46504fd"
        data-element_type="section"
        data-settings='{"background_background":"classic","theme_section_main_theme_text":"arts-elementor-theme-light"}'
       style="background-image: url(<?php echo URL.'images/photos/big/'.$resim129["fotograf_src"]; ?>);"
    >
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
                                <div class="marquee-hsas-shortcode-58" style="width: 100%; overflow: hidden;"><span style=""><?php echo $blokRowdil2["baslik21"]; ?></span></div>
                                <script>
                                    jQuery(function () {
                                        jQuery(".marquee-hsas-shortcode-58").marquee({
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
        class="elementor-section elementor-top-section elementor-element elementor-element-38e6dfc elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="38e6dfc"
        data-element_type="section"
        data-settings='{"background_background":"classic"}'
    >
        <div class="elementor-container elementor-column-gap-default" style="display: none;">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5c219b9" data-id="5c219b9" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-3985812 elementor-widget elementor-widget-spacer" data-id="3985812" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                  <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-fc104f3 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="fc104f3"
                        data-element_type="section"
                    >
                        <div class="elementor-container elementor-column-gap-wider">
                             <!--<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-00de480" data-id="00de480" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-98d20fa elementor-widget elementor-widget-rhye-widget-content-block"
                                        data-id="98d20fa"
                                        data-element_type="widget"
                                        data-widget_type="rhye-widget-content-block.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="section section-content clearfix" data-arts-os-animation="true">
                                                <div class="section-content__inner">
                                                    <div class="section-content__wrapper-heading">
                                                        <div class="section-content__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words"><h1><?php // echo $blokRowdil2["desc20"]; ?></h1></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                              
                           <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-c30f367" data-id="c30f367" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-fff0727 elementor-widget elementor-widget-rhye-widget-lightbox-video"
                                        data-id="fff0727"
                                        data-element_type="widget"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="section section-video js-gallery">
                                                <div class="section-video__container">
                                                    <a class="section-video__link popup-youtube" href="<?php echo $blokRowdil["desc14"]; ?>" data-autoplay="true">
                                                        <div
                                                            class="section-video__link-inner bg-white"
                                              
                                                        >
                                                            <div class="section-video__icon material-icons"><?php echo $blokRowdil["baslik14"]; ?></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-dba7e9c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="dba7e9c"
                        data-element_type="section"
                    >
                        <div class="elementor-container elementor-column-gap-wider">
                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-43e5ba0" data-id="43e5ba0" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-5b38ee6 elementor-widget elementor-widget-heading" data-id="5b38ee6" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h4 class="elementor-heading-title elementor-size-default"><?php echo $blokRowdil2["baslik21"]; ?>
                                                
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="elementor-element elementor-element-fd30dcb elementor-widget elementor-widget-spacer" data-id="fd30dcb" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="elementor-element elementor-element-f005a8c elementor-align-center elementor-widget elementor-widget-rhye-widget-scroll-down"
                        data-id="f005a8c"
                        data-element_type="widget"
                        data-widget_type="rhye-widget-scroll-down.default"
                    >
                        <div class="elementor-widget-container">
                            <div class="circle-button js-circle-button elementor-button-link" data-arts-os-animation="true">
                                <!-- curved label -->
                                <div class="circle-button__outer">
                                    <div class="circle-button__wrapper-label">
                                        <div class="circle-button__label subheading"><?php echo $blokRowdil2["desc21"]; ?></div>
                                    </div>
                                </div>
                                <!-- - curved label -->
                                <!-- geometry wrapper -->
                                <div class="circle-button__inner">
                                    <div class="circle-button__circle" data-arts-scroll-down="true">
                                        <svg class="svg-circle" viewBox="0 0 60 60" width="60" height="60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                                        </svg>
                                    </div>
                                    <!-- browsers WITH touch support -->
                                    <div class="circle-button__icon circle-button__icon-touch">
                                        <svg class="svg-arrow-down" enable-background="new 0 0 64 64" height="512" viewBox="0 0 64 64" width="512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="m32 8c-1.104 0-2 .896-2 2v39.899l-14.552-15.278c-.761-.799-2.026-.832-2.828-.069-.8.762-.831 2.027-.069 2.827l16.62 17.449c.756.756 1.76 1.172 2.829 1.172 1.068 0 2.073-.416 2.862-1.207l16.586-17.414c.762-.8.73-2.065-.069-2.827-.799-.763-2.065-.731-2.827.069l-14.552 15.342v-39.963c0-1.104-.896-2-2-2z"
                                            ></path>
                                        </svg>
                                    </div>
                                    <!-- - browsers WITH touch support -->
                                    <!-- - browsers WITHOUT touch support -->
                                    <div class="circle-button__icon circle-button__icon-mouse">
                                        <svg class="svg-mouse" width="23px" height="35px" viewBox="0 0 23 35" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <!-- border -->
                                            <path
                                                class="svg-mouse__border"
                                                d="M11.5,0 C5.15875132,0 0,5.23135343 0,11.6610111 L0,23.3396542 C0,29.7691456 5.15875132,35 11.5,35 C17.8412487,35 23,29.7693119 23,23.3396542 L23,11.6610111 C23,5.23135343 17.8410847,0 11.5,0 Z M21.7222404,23.3396542 C21.7222404,29.0545544 17.136538,33.7037222 11.5,33.7037222 C5.86346203,33.7037222 1.27775956,29.0545544 1.27775956,23.3396542 L1.27775956,11.6610111 C1.27775956,5.946111 5.86346203,1.29627781 11.5,1.29627781 C17.136538,1.29627781 21.7222404,5.94594466 21.7222404,11.6610111 L21.7222404,23.3396542 Z"
                                            ></path>
                                            <!-- - border -->
                                            <!-- wheel -->
                                            <path
                                                class="svg-mouse__wheel"
                                                d="M11.5,4 C11.2238902,4 11,4.28321727 11,4.63321727 L11,10.3667827 C11,10.7167827 11.2238902,11 11.5,11 C11.7761098,11 12,10.7167827 12,10.3667827 L12,4.63321727 C11.9998717,4.28321727 11.7761098,4 11.5,4 Z"
                                            ></path>
                                            <!-- - wheel -->
                                        </svg>
                                    </div>
                                    <!-- - browsers WITHOUT touch support -->
                                </div>
                                <!-- - geometry wrapper -->
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-bf4dd97 elementor-widget elementor-widget-spacer" data-id="bf4dd97" data-element_type="widget" data-widget_type="spacer.default">
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
        class="elementor-section elementor-top-section elementor-element elementor-element-8e04122 elementor-section-full_width bg-white elementor-section-height-default elementor-section-height-default"
        data-id="8e04122"
        data-element_type="section"
        data-settings='{"background_background":"classic","theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6039c96" data-id="6039c96" data-element_type="column" data-settings='{"background_background":"classic"}'>
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-68c549f elementor-widget elementor-widget-rhye-widget-parallax-background"
                        data-id="68c549f"
                        data-element_type="widget"
                        data-widget_type="rhye-widget-parallax-background.default"
                    >
                        <div class="elementor-widget-container">
                            <div class="section section-image section text-center" data-arts-os-animation="true">
                                <div class="section-image__wrapper mask-reveal lazy" style="padding-bottom: calc((1024 / 1024) * 100%); height: 0;">
                                    <div class="mask-reveal__layer mask-reveal__layer-1">
                                        <div class="mask-reveal__layer mask-reveal__layer-2">
                                            <img
                                                class=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAHCGzyUAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQI12NolQQAASYAn89qhTcAAAAASUVORK5CYII="
                                                data-src="<?php echo URL.'images/photos/big/'.$resim124["fotograf_src"]; ?>"
                                                width="1024"
                                                height="1024"
                                                data-srcset="<?php echo URL.'images/photos/big/'.$resim124["fotograf_src"]; ?> 1024w, <?php echo URL.'images/photos/big/'.$resim124["fotograf_src"]; ?> 150w"
                                                data-sizes="(max-width: 1024px) 100vw, 1024px"
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
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-d690a9e" data-id="d690a9e" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-1fe4941 text-center elementor-widget elementor-widget-rhye-widget-content-block"
                        data-id="1fe4941"
                        data-element_type="widget"
                        data-widget_type="rhye-widget-content-block.default"
                    >
                        <div class="elementor-widget-container">
                            <div class="section section-content clearfix pt-small pb-small" data-arts-os-animation="true">
                                <div class="section-content__inner">
                                    <div class="section-content__wrapper-heading">
                                        <div class="section-content__heading split-text js-split-text mb-1" data-split-text-type="lines,words" data-split-text-set="words"><h2 style="text-align: center;"><?php echo $blokRowdil2["desc22"]; ?></h2></div>
                                    </div>
                                    <div class="section-content__wrapper-content">
                                        <div class="w-100"></div>
                                        <div class="section__headline mt-1 mt-md-2 mb-1 mb-md-2"></div>
                                        <div class="w-100"></div>
                                        <div class="section-content__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                                            <p>
                                                <?php echo $blokRowdil2["baslik23"]; ?>
                                            </p>
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
        class="elementor-section elementor-top-section elementor-element elementor-element-502ce94 bg-white elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="502ce94"
        data-element_type="section"
        data-settings='{"theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7221877" data-id="7221877" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-d4f19c7 elementor-widget elementor-widget-spacer" data-id="d4f19c7" data-element_type="widget" data-widget_type="spacer.default">
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
        class="elementor-section elementor-top-section elementor-element elementor-element-6ab2461 elementor-section-full_width bg-white elementor-reverse-tablet elementor-reverse-mobile elementor-section-height-default elementor-section-height-default"
        data-id="6ab2461"
        data-element_type="section"
        data-settings='{"background_background":"classic","theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-a17b76a" data-id="a17b76a" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-d1efaa5 text-center elementor-widget elementor-widget-rhye-widget-content-block"
                        data-id="d1efaa5"
                        data-element_type="widget"
                        data-widget_type="rhye-widget-content-block.default"
                    >
                        <div class="elementor-widget-container">
                            <div class="section section-content clearfix pt-small pb-small" data-arts-os-animation="true">
                                <div class="section-content__inner">
                                    <div class="section-content__wrapper-heading">
                                        <div class="section-content__heading split-text js-split-text mb-1" data-split-text-type="lines,words" data-split-text-set="words"><h2 style="text-align: center;"><?php echo $blokRowdil2["desc23"]; ?></h2></div>
                                    </div>
                                    <div class="section-content__wrapper-content">
                                        <div class="w-100"></div>
                                        <div class="section__headline mt-1 mt-md-2 mb-1 mb-md-2"></div>
                                        <div class="w-100"></div>
                                        <div class="section-content__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                                            <p>
                                                <?php echo $blokRowdil2["baslik24"]; ?>
                                            </p>
                                        </div>
                                    </div>
                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-af00143" data-id="af00143" data-element_type="column" data-settings='{"background_background":"classic"}'>
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-b37a7df elementor-widget elementor-widget-rhye-widget-parallax-background"
                        data-id="b37a7df"
                        data-element_type="widget"
                        data-widget_type="rhye-widget-parallax-background.default"
                    >
                        <div class="elementor-widget-container">
                            <div class="section section-image section text-center" data-arts-os-animation="true">
                                <div class="section-image__wrapper mask-reveal lazy" style="padding-bottom: calc((1024 / 1024) * 100%); height: 0;">
                                    <div class="mask-reveal__layer mask-reveal__layer-1">
                                        <div class="mask-reveal__layer mask-reveal__layer-2">
                                            <img
                                                loading="lazy"
                                                class=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAHCGzyUAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQI12NolQQAASYAn89qhTcAAAAASUVORK5CYII="
                                                data-src="<?php echo URL.'images/photos/big/'.$resim125["fotograf_src"]; ?>"
                                                width="1024"
                                                height="1024"
                                                data-srcset="<?php echo URL.'images/photos/big/'.$resim125["fotograf_src"]; ?> 1024w, <?php echo URL.'images/photos/big/'.$resim125["fotograf_src"]; ?> 150w"
                                                data-sizes="(max-width: 1024px) 100vw, 1024px"
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
        class="elementor-section elementor-top-section elementor-element elementor-element-afe5057 bg-white elementor-section-boxed elementor-section-height-default elementor-section-height-default"
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
        class="elementor-section elementor-top-section elementor-element elementor-element-1e7b4a8 elementor-section-full_width bg-white elementor-section-height-default elementor-section-height-default"
        data-id="1e7b4a8"
        data-element_type="section"
        data-settings='{"background_background":"classic","theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c0af55c" data-id="c0af55c" data-element_type="column" data-settings='{"background_background":"classic"}'>
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-1b31c2e elementor-widget elementor-widget-rhye-widget-parallax-background"
                        data-id="1b31c2e"
                        data-element_type="widget"
                        data-widget_type="rhye-widget-parallax-background.default"
                    >
                        <div class="elementor-widget-container">
                            <div class="section section-image section text-center" data-arts-os-animation="true">
                                <div class="section-image__wrapper mask-reveal lazy" style="padding-bottom: calc((1024 / 1024) * 100%); height: 0;">
                                    <div class="mask-reveal__layer mask-reveal__layer-1">
                                        <div class="mask-reveal__layer mask-reveal__layer-2">
                                            <img
                                                loading="lazy"
                                                class=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAHCGzyUAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQI12NolQQAASYAn89qhTcAAAAASUVORK5CYII="
                                                data-src="<?php echo URL.'images/photos/big/'.$resim125["fotograf_src"]; ?>"
                                                width="1024"
                                                height="1024"
                                                data-srcset="<?php echo URL.'images/photos/big/'.$resim125["fotograf_src"]; ?> 1024w, <?php echo URL.'images/photos/big/'.$resim125["fotograf_src"]; ?> 150w"
                                                data-sizes="(max-width: 1024px) 100vw, 1024px"
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
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b6f2afe" data-id="b6f2afe" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-31cd7cc text-center elementor-widget elementor-widget-rhye-widget-content-block"
                        data-id="31cd7cc"
                        data-element_type="widget"
                        data-widget_type="rhye-widget-content-block.default"
                    >
                        <div class="elementor-widget-container">
                            <div class="section section-content clearfix pt-small pb-small" data-arts-os-animation="true">
                                <div class="section-content__inner">
                                    <div class="section-content__wrapper-heading">
                                        <div class="section-content__heading split-text js-split-text mb-1" data-split-text-type="lines,words" data-split-text-set="words"><h2 style="text-align: center;"><?php echo $blokRowdil2["desc25"]; ?></h2></div>
                                    </div>
                                    <div class="section-content__wrapper-content">
                                        <div class="w-100"></div>
                                        <div class="section__headline mt-1 mt-md-2 mb-1 mb-md-2"></div>
                                        <div class="w-100"></div>
                                        <div class="section-content__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                                            <p>
                                               <?php echo $blokRowdil2["baslik26"]; ?>
                                            </p>
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
        class="elementor-section elementor-top-section elementor-element elementor-element-360007b bg-white elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="360007b"
        data-element_type="section"
        data-settings='{"theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3b7866d" data-id="3b7866d" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-e4f8cbd elementor-widget elementor-widget-spacer" data-id="e4f8cbd" data-element_type="widget" data-widget_type="spacer.default">
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
        class="elementor-section elementor-top-section elementor-element elementor-element-f41add5 elementor-section-full_width bg-white elementor-reverse-tablet elementor-reverse-mobile elementor-section-height-default elementor-section-height-default"
        data-id="f41add5"
        data-element_type="section"
        data-settings='{"background_background":"classic","theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-9bf6ac5" data-id="9bf6ac5" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-86ddabd text-center elementor-widget elementor-widget-rhye-widget-content-block"
                        data-id="86ddabd"
                        data-element_type="widget"
                        data-widget_type="rhye-widget-content-block.default"
                    >
                        <div class="elementor-widget-container">
                            <div class="section section-content clearfix pt-small pb-small" data-arts-os-animation="true">
                                <div class="section-content__inner">
                                    <div class="section-content__wrapper-heading">
                                        <div class="section-content__heading split-text js-split-text mb-1" data-split-text-type="lines,words" data-split-text-set="words"><h2 style="text-align: center;"><?php echo $blokRowdil2["desc26"]; ?></h2></div>
                                    </div>
                                    <div class="section-content__wrapper-content">
                                        <div class="w-100"></div>
                                        <div class="section__headline mt-1 mt-md-2 mb-1 mb-md-2"></div>
                                        <div class="w-100"></div>
                                        <div class="section-content__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                                            <p>
                                                <?php echo $blokRowdil2["baslik27"]; ?>
                                            </p>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ab24ab6" data-id="ab24ab6" data-element_type="column" data-settings='{"background_background":"classic"}'>
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-c753d1d elementor-widget elementor-widget-rhye-widget-parallax-background"
                        data-id="c753d1d"
                        data-element_type="widget"
                        data-widget_type="rhye-widget-parallax-background.default"
                    >
                        <div class="elementor-widget-container">
                            <div class="section section-image section text-center" data-arts-os-animation="true">
                                <div class="section-image__wrapper mask-reveal lazy" style="padding-bottom: calc((1024 / 1024) * 100%); height: 0;">
                                    <div class="mask-reveal__layer mask-reveal__layer-1">
                                        <div class="mask-reveal__layer mask-reveal__layer-2">
                                            <img
                                                loading="lazy"
                                                class=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAHCGzyUAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQI12NolQQAASYAn89qhTcAAAAASUVORK5CYII="
                                                data-src="<?php echo URL.'images/photos/big/'.$resim127["fotograf_src"]; ?>"
                                                width="1024"
                                                height="1024"
                                                data-srcset="<?php echo URL.'images/photos/big/'.$resim127["fotograf_src"]; ?> 1024w, <?php echo URL.'images/photos/big/'.$resim127["fotograf_src"]; ?> 150w"
                                                data-sizes="(max-width: 1024px) 100vw, 1024px"
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
        class="elementor-section elementor-top-section elementor-element elementor-element-ebead7d bg-white elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="ebead7d"
        data-element_type="section"
        data-settings='{"theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3a59e2e" data-id="3a59e2e" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-9c27569 elementor-widget elementor-widget-spacer" data-id="9c27569" data-element_type="widget" data-widget_type="spacer.default">
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
        class="elementor-section elementor-top-section elementor-element elementor-element-94fe44a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="94fe44a"
        data-element_type="section"
        data-settings='{"background_background":"classic"}'
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fb6aeb2" data-id="fb6aeb2" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-59eac78 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="59eac78"
                        data-element_type="section"
                    >
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-942a455 elementor-hidden-mobile" data-id="942a455" data-element_type="column">
                                <div class="elementor-widget-wrap"></div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-560ded6" data-id="560ded6" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-9133e61 text-center elementor-widget elementor-widget-rhye-widget-content-block"
                                        data-id="9133e61"
                                        data-element_type="widget"
                                        data-widget_type="rhye-widget-content-block.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="section section-content clearfix pt-small pb-small" data-arts-os-animation="true">
                                                <div class="section-content__inner">
                                                    <div class="section-content__wrapper-heading">
                                                        <div class="section-content__heading split-text js-split-text mb-1" data-split-text-type="lines,words" data-split-text-set="words"><h2 class="p1"><?php echo $blokRowdil2["baslik28"]; ?></h2></div>
                                                    </div>
                                                    <div class="section-content__wrapper-content">
                                                        <div class="w-100"></div>
                                                        <div class="section-content__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                                                            <h5></h5>
                                                            <h5>
                                                                <?php echo $blokRowdil2["desc28"]; ?>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7445557 elementor-hidden-mobile" data-id="7445557" data-element_type="column">
                                <div class="elementor-widget-wrap"></div>
                            </div>
                        </div>
                    </section>
           
    
                    <div class="elementor-element elementor-element-a025649 elementor-widget elementor-widget-spacer" data-id="a025649" data-element_type="widget" data-widget_type="spacer.default">
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
   
</div>

                
                <?php require_once(TEMA_INC.'inc/footer.php');?>
                <!-- - PAGE FOOTER -->
            </main>
        </div>
        <!-- - PAGE MAIN -->
        <?php require_once(TEMA_INC.'inc/alt.php');?>
             <link rel='stylesheet' href='<?php echo TEMA_URL;?>ast/magnific-popup.css' type='text/css'  />
      
            
            <script type="text/javascript">

        $('.popup-youtube').magnificPopup({
         
          type: 'iframe',
          mainClass: 'mfp-fade',
          removalDelay: 160,
          preloader: false,

          fixedContentPos: false
        });
    
</script>
        
    </body>
</html>