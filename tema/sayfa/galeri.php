<?php $blok = $db->query("SELECT * FROM dil2_bloklar{$blokLehce}")->fetch(PDO::FETCH_ASSOC); ?>
<!DOCTYPE html>
<html lang="tr-TR">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
        <title><?php echo $blok["desc14"]; ?> - <?php echo $ayar[$lehce."site_title"];?></title>
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
.elementor-kit-6{--e-global-color-primary:#6EC1E4;--e-global-color-secondary:#54595F;--e-global-color-text:#7A7A7A;--e-global-color-accent:#61CE70;--e-global-typography-primary-font-family:"Roboto";--e-global-typography-primary-font-weight:600;--e-global-typography-secondary-font-family:"Roboto Slab";--e-global-typography-secondary-font-weight:400;--e-global-typography-text-font-family:"Roboto";--e-global-typography-text-font-weight:400;--e-global-typography-accent-font-family:"Roboto";--e-global-typography-accent-font-weight:500;background-color:#E7EFE6;}.elementor-section.elementor-section-boxed > .elementor-container{max-width:1140px;}.e-container{--container-max-width:1140px;}.elementor-widget:not(:last-child){margin-bottom:20px;}.elementor-element{--widgets-spacing:20px;}{}h1.entry-title{display:var(--page-title-display);}.elementor-kit-6 e-page-transition{background-color:#FFBC7D;}@media(max-width:1024px){.elementor-section.elementor-section-boxed > .elementor-container{max-width:1024px;}.e-container{--container-max-width:1024px;}}@media(max-width:767px){.elementor-section.elementor-section-boxed > .elementor-container{max-width:767px;}.e-container{--container-max-width:767px;}}
.elementor-1741 .elementor-element.elementor-element-46504fd > .elementor-container{min-height:100vh;}.elementor-1741 .elementor-element.elementor-element-46504fd:not(.elementor-motion-effects-element-type-background), .elementor-1741 .elementor-element.elementor-element-46504fd > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:url("<?php echo TEMA_URL; ?>ast/uploads/2021/12/BANNER-TOP-PROJECT-1.jpg");background-position:center center;background-size:cover;}.elementor-1741 .elementor-element.elementor-element-46504fd{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-1741 .elementor-element.elementor-element-46504fd > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-1741 .elementor-element.elementor-element-f4876f1{--divider-border-style:solid;--divider-color:#FFFFFF;--divider-border-width:1px;}.elementor-1741 .elementor-element.elementor-element-f4876f1 .elementor-divider-separator{width:100%;}.elementor-1741 .elementor-element.elementor-element-f4876f1 .elementor-divider{padding-top:15px;padding-bottom:15px;}.elementor-1741 .elementor-element.elementor-element-64686bf{--divider-border-style:solid;--divider-color:#FFFFFF;--divider-border-width:1px;}.elementor-1741 .elementor-element.elementor-element-64686bf .elementor-divider-separator{width:100%;}.elementor-1741 .elementor-element.elementor-element-64686bf .elementor-divider{padding-top:15px;padding-bottom:15px;}.elementor-1741 .elementor-element.elementor-element-b7d6a78{--spacer-size:66px;}.elementor-1741 .elementor-element.elementor-element-36bd1d0{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-1741 .elementor-element.elementor-element-36bd1d0 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-1741 .elementor-element.elementor-element-d9831f7 img{max-width:30%;}.elementor-1741 .elementor-element.elementor-element-31d8bf8{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-1741 .elementor-element.elementor-element-31d8bf8 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-1741 .elementor-element.elementor-element-a649bcb{--spacer-size:50px;}.elementor-1741 .elementor-element.elementor-element-86cc56f{--spacer-size:80px;}.elementor-1741 .elementor-element.elementor-element-94fe44a:not(.elementor-motion-effects-element-type-background), .elementor-1741 .elementor-element.elementor-element-94fe44a > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:transparent;background-image:linear-gradient(180deg, #F8F8F8 0%, #C6B59E 100%);}.elementor-1741 .elementor-element.elementor-element-94fe44a{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-1741 .elementor-element.elementor-element-94fe44a > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-1741 .elementor-element.elementor-element-6b55e16{--spacer-size:50px;}.elementor-1741 .elementor-element.elementor-element-a5716ce{--spacer-size:50px;}.elementor-1741 .elementor-element.elementor-element-c84268c{--spacer-size:50px;}.elementor-1741 .elementor-element.elementor-element-3ffafe2 > .elementor-container > .elementor-column > .elementor-widget-wrap{align-content:center;align-items:center;}.elementor-1741 .elementor-element.elementor-element-4638111:not(.elementor-motion-effects-element-type-background) > .elementor-widget-wrap, .elementor-1741 .elementor-element.elementor-element-4638111 > .elementor-widget-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:url("<?php echo TEMA_URL; ?>ast/uploads/2021/11/top-P2598_PAL02W.jpg");background-size:cover;}.elementor-1741 .elementor-element.elementor-element-4638111 > .elementor-element-populated{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:10% 10% 10% 10%;}.elementor-1741 .elementor-element.elementor-element-4638111 > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-1741 .elementor-element.elementor-element-228e22c .section-image__wrapper img{width:100%;height:auto;}.elementor-1741 .elementor-element.elementor-element-e2f5e2d > .elementor-element-populated{padding:20% 20% 20% 20%;}.elementor-1741 .elementor-element.elementor-element-2a4fa93 .section-image__wrapper img{width:100%;height:auto;}.elementor-1741 .elementor-element.elementor-element-f46fc2b{--spacer-size:50px;}.elementor-1741 .elementor-element.elementor-element-18ef0ae .section-image__wrapper img{width:100%;height:auto;}.elementor-1741 .elementor-element.elementor-element-d4ecb73{--spacer-size:102px;}.elementor-1741 .elementor-element.elementor-element-9de87db .section-image__wrapper img{width:100%;height:auto;}.elementor-1741 .elementor-element.elementor-element-901f9fc .section-image__wrapper img{width:100%;height:auto;}.elementor-1741 .elementor-element.elementor-element-e6b4323:not(.elementor-motion-effects-element-type-background) > .elementor-widget-wrap, .elementor-1741 .elementor-element.elementor-element-e6b4323 > .elementor-widget-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#E7EFE6;}.elementor-1741 .elementor-element.elementor-element-e6b4323 > .elementor-element-populated{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin:10px 10px 10px 10px;--e-column-margin-right:10px;--e-column-margin-left:10px;padding:10% 10% 10% 10%;}.elementor-1741 .elementor-element.elementor-element-e6b4323 > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-1741 .elementor-element.elementor-element-652402e .section-image__wrapper img{width:100%;height:auto;}.elementor-1741 .elementor-element.elementor-element-925ae04:not(.elementor-motion-effects-element-type-background) > .elementor-widget-wrap, .elementor-1741 .elementor-element.elementor-element-925ae04 > .elementor-widget-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#E7EFE6;}.elementor-1741 .elementor-element.elementor-element-925ae04 > .elementor-element-populated{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin:10px 10px 10px 10px;--e-column-margin-right:10px;--e-column-margin-left:10px;padding:10% 10% 10% 10%;}.elementor-1741 .elementor-element.elementor-element-925ae04 > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-1741 .elementor-element.elementor-element-29116dd .section-image__wrapper img{width:100%;height:auto;}.elementor-1741 .elementor-element.elementor-element-51ebf2d .section-image__wrapper img{width:100%;height:auto;}.elementor-1741 .elementor-element.elementor-element-d8ea3c0 .section-image__wrapper img{width:100%;height:auto;}.elementor-1741 .elementor-element.elementor-element-ac73373{--spacer-size:10px;}.elementor-1741 .elementor-element.elementor-element-b6519a1{--spacer-size:102px;}.elementor-1741 .elementor-element.elementor-element-70e716a .section-image__wrapper img{width:100%;height:auto;}.elementor-1741 .elementor-element.elementor-element-79e12e1{--spacer-size:102px;}.elementor-1741 .elementor-element.elementor-element-28df117 .section-image__wrapper img{width:100%;height:auto;}.elementor-1741 .elementor-element.elementor-element-4c06288 .section-image__wrapper img{width:100%;height:auto;}.elementor-1741 .elementor-element.elementor-element-86a313d:not(.elementor-motion-effects-element-type-background) > .elementor-widget-wrap, .elementor-1741 .elementor-element.elementor-element-86a313d > .elementor-widget-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#E7EFE6;}.elementor-1741 .elementor-element.elementor-element-86a313d > .elementor-element-populated{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin:10px 10px 10px 10px;--e-column-margin-right:10px;--e-column-margin-left:10px;padding:10% 10% 10% 10%;}.elementor-1741 .elementor-element.elementor-element-86a313d > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-1741 .elementor-element.elementor-element-76df477 .section-image__wrapper img{width:100%;height:auto;}.elementor-1741 .elementor-element.elementor-element-2694704:not(.elementor-motion-effects-element-type-background) > .elementor-widget-wrap, .elementor-1741 .elementor-element.elementor-element-2694704 > .elementor-widget-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#E7EFE6;}.elementor-1741 .elementor-element.elementor-element-2694704 > .elementor-element-populated{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin:10px 10px 10px 10px;--e-column-margin-right:10px;--e-column-margin-left:10px;padding:10% 10% 10% 10%;}.elementor-1741 .elementor-element.elementor-element-2694704 > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-1741 .elementor-element.elementor-element-65f17b3 .section-image__wrapper img{width:100%;height:auto;}.elementor-1741 .elementor-element.elementor-element-82b2f8e .section-image__wrapper img{width:100%;height:auto;}.elementor-1741 .elementor-element.elementor-element-600077d .section-image__wrapper img{width:100%;height:auto;}.elementor-1741 .elementor-element.elementor-element-f9c6038{--spacer-size:10px;}.elementor-1741 .elementor-element.elementor-element-b624166{--spacer-size:102px;}.elementor-1741 .elementor-element.elementor-element-6cd5555{--spacer-size:102px;}.elementor-1741 .elementor-element.elementor-element-62505a4 .section-image__wrapper img{width:100%;height:auto;}.elementor-1741 .elementor-element.elementor-element-68ad6332:not(.elementor-motion-effects-element-type-background), .elementor-1741 .elementor-element.elementor-element-68ad6332 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#000000;}.elementor-1741 .elementor-element.elementor-element-68ad6332{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-1741 .elementor-element.elementor-element-68ad6332 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-1741 .elementor-element.elementor-element-1561d04d .section-content__inner{max-width:100%;}.elementor-1741 .elementor-element.elementor-element-1561d04d .section-content__text{max-width:328px;}.elementor-1741 .elementor-element.elementor-element-1561d04d > .elementor-widget-container{margin:0px 0px 0px 0px;}.elementor-bc-flex-widget .elementor-1741 .elementor-element.elementor-element-54c7e0cf.elementor-column .elementor-widget-wrap{align-items:flex-end;}.elementor-1741 .elementor-element.elementor-element-54c7e0cf.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:flex-end;align-items:flex-end;}.elementor-1741 .elementor-element.elementor-element-694797b0 .circle-button_link{width:calc(180px - 10px);height:calc(180px - 10px);}.elementor-1741 .elementor-element.elementor-element-694797b0 .circle-button_link .circle-button__inner .svg-circle{width:180px;height:180px;}.elementor-1741 .elementor-element.elementor-element-694797b0 .circle-button__icon{color:#FFFFFF;}.elementor-1741 .elementor-element.elementor-element-694797b0{width:170.5px;max-width:170.5px;}:root{--page-title-display:none;}@media(min-width:768px){.elementor-1741 .elementor-element.elementor-element-942a455{width:26%;}.elementor-1741 .elementor-element.elementor-element-560ded6{width:47.333%;}.elementor-1741 .elementor-element.elementor-element-7445557{width:26%;}.elementor-1741 .elementor-element.elementor-element-4215a5e{width:28.758%;}.elementor-1741 .elementor-element.elementor-element-128042b1{width:56.021%;}.elementor-1741 .elementor-element.elementor-element-54c7e0cf{width:14.529%;}}@media(max-width:1024px){.elementor-1741 .elementor-element.elementor-element-f4876f1 .elementor-divider{padding-top:0px;padding-bottom:0px;}.elementor-1741 .elementor-element.elementor-element-64686bf .elementor-divider{padding-top:0px;padding-bottom:0px;}.elementor-1741 .elementor-element.elementor-element-3333584 .section-content__inner{max-width:100%;}.elementor-1741 .elementor-element.elementor-element-3333584 .section-content__text{max-width:700px;}.elementor-1741 .elementor-element.elementor-element-3003f9b .section-content__inner{max-width:100%;}.elementor-1741 .elementor-element.elementor-element-3003f9b .section-content__text{max-width:700px;}.elementor-1741 .elementor-element.elementor-element-d4ecb73{--spacer-size:40px;}.elementor-1741 .elementor-element.elementor-element-b6519a1{--spacer-size:40px;}.elementor-1741 .elementor-element.elementor-element-79e12e1{--spacer-size:40px;}.elementor-1741 .elementor-element.elementor-element-b624166{--spacer-size:40px;}.elementor-1741 .elementor-element.elementor-element-6cd5555{--spacer-size:40px;}.elementor-1741 .elementor-element.elementor-element-1561d04d .section-content__inner{max-width:100%;}.elementor-1741 .elementor-element.elementor-element-1561d04d .section-content__text{max-width:700px;}.elementor-1741 .elementor-element.elementor-element-54c7e0cf.elementor-column > .elementor-widget-wrap{justify-content:flex-end;}.elementor-1741 .elementor-element.elementor-element-54c7e0cf > .elementor-element-populated{margin:50px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;}.elementor-1741 .elementor-element.elementor-element-694797b0 .circle-button_link{width:calc(75px - 10px);height:calc(75px - 10px);}.elementor-1741 .elementor-element.elementor-element-694797b0 .circle-button_link .circle-button__inner .svg-circle{width:75px;height:75px;}body.elementor-page-1741:not(.elementor-motion-effects-element-type-background), body.elementor-page-1741 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-position:0px 0px;}}@media(max-width:767px){.elementor-1741 .elementor-element.elementor-element-46504fd > .elementor-container{min-height:450px;}.elementor-1741 .elementor-element.elementor-element-3333584 .section-content__inner{max-width:100%;}.elementor-1741 .elementor-element.elementor-element-3333584 .section-content__text{max-width:700px;}.elementor-1741 .elementor-element.elementor-element-3003f9b .section-content__inner{max-width:100%;}.elementor-1741 .elementor-element.elementor-element-3003f9b .section-content__text{max-width:700px;}.elementor-1741 .elementor-element.elementor-element-4215a5e > .elementor-element-populated{margin:0px 0px 20px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;}.elementor-1741 .elementor-element.elementor-element-1561d04d .section-content__inner{max-width:100%;}.elementor-1741 .elementor-element.elementor-element-1561d04d .section-content__text{max-width:700px;}.elementor-1741 .elementor-element.elementor-element-1561d04d > .elementor-widget-container{margin:0px 0px 0px 0px;}.elementor-1741 .elementor-element.elementor-element-5770f7bb > .elementor-widget-container{margin:0px 0px 0px 0px;}.elementor-1741 .elementor-element.elementor-element-694797b0 .circle-button_link{width:calc(75px - 10px);height:calc(75px - 10px);}.elementor-1741 .elementor-element.elementor-element-694797b0 .circle-button_link .circle-button__inner .svg-circle{width:75px;height:75px;}.elementor-1741 .elementor-element.elementor-element-694797b0{width:60%;max-width:60%;}body.elementor-page-1741:not(.elementor-motion-effects-element-type-background), body.elementor-page-1741 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-position:0px 0px;}}@media(max-width:1024px) and (min-width:768px){.elementor-1741 .elementor-element.elementor-element-33bbf74{width:20%;}.elementor-1741 .elementor-element.elementor-element-2606de4{width:60%;}.elementor-1741 .elementor-element.elementor-element-b054af4{width:20%;}.elementor-1741 .elementor-element.elementor-element-942a455{width:20%;}.elementor-1741 .elementor-element.elementor-element-560ded6{width:60%;}.elementor-1741 .elementor-element.elementor-element-7445557{width:20%;}.elementor-1741 .elementor-element.elementor-element-4215a5e{width:40%;}.elementor-1741 .elementor-element.elementor-element-128042b1{width:60%;}.elementor-1741 .elementor-element.elementor-element-54c7e0cf{width:100%;}}

.felxa{
        display: flex;
    flex-wrap: wrap;
    align-content: center;
    justify-content: center;
    align-items: center;
    flex-direction: row;
}
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
                <h1 class="entry-title section-masthead__heading my-0 h1 split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">Top Project</h1>
                <div class="w-100"></div>
            </div>
        </header>
    </div>
</section>

<div data-elementor-type="wp-page" data-elementor-id="1741" class="elementor elementor-1741">
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-46504fd elementor-section-full_width elementor-section-height-min-height arts-elementor-theme-light elementor-section-height-default elementor-section-items-middle"
        data-id="46504fd"
        data-element_type="section"
        data-settings='{"background_background":"classic","theme_section_main_theme_text":"arts-elementor-theme-light"}'
        style="background-image: url(<?php echo URL.'images/photos/big/'.$resim98["fotograf_src"]; ?>);"
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
                                <div class="marquee-hsas-shortcode-81" style="width: 100%; overflow: hidden;"><span style=""><?php echo $blokRowdil2["baslik15"]; ?> </span></div>
                                <script>
                                    jQuery(function () {
                                        jQuery(".marquee-hsas-shortcode-81").marquee({
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
                        class="elementor-element elementor-element-3333584 text-center h1-mod elementor-widget elementor-widget-rhye-widget-content-block"
                        data-id="3333584"
                        data-element_type="widget"
                        data-widget_type="rhye-widget-content-block.default"
                    >
                        <div class="elementor-widget-container">
                            <div class="section section-content clearfix pt-small pb-small" data-arts-os-animation="true">
                                <div class="section-content__inner">
                                    <div class="section-content__wrapper-heading">
                                        <div class="section-content__heading split-text js-split-text mb-1" data-split-text-type="lines,words" data-split-text-set="words"><h1><?php echo $blokRowdil2["desc15"]; ?></h1></div>
                                    </div>
                                    <div class="section-content__wrapper-content">
                                        <div class="w-100"></div>
                                        <div class="section__headline mt-1 mt-md-2 mb-1 mb-md-2"></div>
                                        <div class="w-100"></div>
                                        <div class="section-content__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                                            <h4><?php echo $blokRowdil2["baslik16"]; ?></h4>
                                            <p>
                                                <?php echo $blokRowdil2["desc16"]; ?>
                                            </p>
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
    <section  style="display: none;" 
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
   
    <section  style="display: none;" 
        class="elementor-section elementor-top-section elementor-element elementor-element-752ac3c bg-white elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="752ac3c"
        data-element_type="section"
        data-settings='{"theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-88b96b6" data-id="88b96b6" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-86cc56f elementor-widget elementor-widget-spacer" data-id="86cc56f" data-element_type="widget" data-widget_type="spacer.default">
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
    <section  style="display: none;" 
        class="elementor-section elementor-top-section elementor-element elementor-element-94fe44a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="94fe44a"
        data-element_type="section"
        data-settings='{"background_background":"gradient"}'
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
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-942a455" data-id="942a455" data-element_type="column">
                                <div class="elementor-widget-wrap"></div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-560ded6" data-id="560ded6" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-3003f9b text-center elementor-widget elementor-widget-rhye-widget-content-block"
                                        data-id="3003f9b"
                                        data-element_type="widget"
                                        data-widget_type="rhye-widget-content-block.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="section section-content clearfix pt-small pb-small" data-arts-os-animation="true">
                                                <div class="section-content__inner">
                                                    <div class="section-content__wrapper-heading">
                                                        <div class="section-content__heading split-text js-split-text mb-1" data-split-text-type="lines,words" data-split-text-set="words">
                                                            <h2 style="text-align: center;"><?php echo $blokRowdil2["baslik17"]; ?></h2>
                                                        </div>
                                                    </div>
                                                    <div class="section-content__wrapper-content">
                                                        <div class="w-100"></div>
                                                        <div class="section__headline mt-1 mt-md-2 mb-1 mb-md-2"></div>
                                                        <div class="w-100"></div>
                                                        <div class="section-content__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                                                            <h5>
                                                                <?php echo $blokRowdil2["desc17"]; ?>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7445557" data-id="7445557" data-element_type="column">
                                <div class="elementor-widget-wrap"></div>
                            </div>
                        </div>
                    </section>
                    <div class="elementor-element elementor-element-6b55e16 elementor-widget elementor-widget-spacer" data-id="6b55e16" data-element_type="widget" data-widget_type="spacer.default">
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
    <section  style="display: none;" 
        class="elementor-section elementor-top-section elementor-element elementor-element-39843f2 bg-white elementor-hidden-tablet elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="39843f2"
        data-element_type="section"
        data-settings='{"theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ee9e7b9" data-id="ee9e7b9" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-a5716ce elementor-widget elementor-widget-spacer" data-id="a5716ce" data-element_type="widget" data-widget_type="spacer.default">
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
    <section style="display: none;" 
        class="elementor-section elementor-top-section elementor-element elementor-element-8d96eed bg-white elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="8d96eed"
        data-element_type="section"
        data-settings='{"theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-24b0083" data-id="24b0083" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-c84268c elementor-widget elementor-widget-spacer" data-id="c84268c" data-element_type="widget" data-widget_type="spacer.default">
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
    <section  style="display: none;" 
        class="elementor-section elementor-top-section elementor-element elementor-element-3ffafe2 elementor-section-content-middle bg-white elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="3ffafe2"
        data-element_type="section"
        data-settings='{"theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4638111" data-id="4638111" data-element_type="column" data-settings='{"background_background":"classic"}'>
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-228e22c elementor-widget elementor-widget-rhye-widget-parallax-background"
                        data-id="228e22c"
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
                                                data-src="<?php echo $blokRowdil2["baslik18"]; ?>"
                                                width="1024"
                                                height="1024"
                                                data-srcset="<?php echo $blokRowdil2["baslik18"]; ?> 1024w, <?php echo $blokRowdil2["baslik18"]; ?>150w"
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
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-e2f5e2d" data-id="e2f5e2d" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-2a4fa93 elementor-widget elementor-widget-rhye-widget-parallax-background"
                        data-id="2a4fa93"
                        data-element_type="widget"
                        data-widget_type="rhye-widget-parallax-background.default"
                    >
                        <div class="elementor-widget-container">
                            <div class="section section-image section text-center" data-arts-parallax="true" data-arts-parallax-factor="0.1" data-arts-os-animation="true">
                                <div class="section-image__wrapper overflow mask-reveal lazy" style="padding-bottom: calc((1024 / 1024) * 100%); height: 0;">
                                    <div class="mask-reveal__layer mask-reveal__layer-1">
                                        <div class="mask-reveal__layer mask-reveal__layer-2">
                                            <img
                                                loading="lazy"
                                                class=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAHCGzyUAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQI12NolQQAASYAn89qhTcAAAAASUVORK5CYII="
                                                data-src="<?php echo $blokRowdil2["desc18"]; ?>"
                                                width="1024"
                                                height="1024"
                                                data-srcset="<?php echo $blokRowdil2["desc18"]; ?> 1024w, <?php echo $blokRowdil2["desc18"]; ?> 150w"
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
    <section  style="display: none;" 
        class="elementor-section elementor-top-section elementor-element elementor-element-77a6c62 bg-white elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="77a6c62"
        data-element_type="section"
        data-settings='{"theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-da15574" data-id="da15574" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-f46fc2b elementor-widget elementor-widget-spacer" data-id="f46fc2b" data-element_type="widget" data-widget_type="spacer.default">
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
    <section  style="display: none;" 
        class="elementor-section elementor-top-section elementor-element elementor-element-7f90d2a elementor-section-full_width bg-white elementor-section-height-default elementor-section-height-default"
        data-id="7f90d2a"
        data-element_type="section"
        data-settings='{"theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7cd5cfb" data-id="7cd5cfb" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-18ef0ae elementor-widget elementor-widget-rhye-widget-parallax-background"
                        data-id="18ef0ae"
                        data-element_type="widget"
                        data-widget_type="rhye-widget-parallax-background.default"
                    >
                        <div class="elementor-widget-container">
                            <div class="section section-image section text-center" data-arts-parallax="true" data-arts-parallax-factor="0.1" data-arts-os-animation="true">
                                <div class="section-image__wrapper overflow mask-reveal lazy" style="padding-bottom: calc((94 / 1922) * 100%); height: 0;">
                                    <div class="mask-reveal__layer mask-reveal__layer-1">
                                        <div class="mask-reveal__layer mask-reveal__layer-2">
                                            <img
                                                loading="lazy"
                                                class=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAHCGzyUAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQI12NolQQAASYAn89qhTcAAAAASUVORK5CYII="
                                                data-src="<?php echo TEMA_URL; ?>ast/uploads/2021/11/bordo-gradiente-01.jpg"
                                                width="1922"
                                                height="94"
                                                data-srcset="<?php echo TEMA_URL; ?>ast/uploads/2021/11/bordo-gradiente-01.jpg 1922w, <?php echo TEMA_URL; ?>ast/uploads/2021/11/bordo-gradiente-01-300x15.jpg 300w, <?php echo TEMA_URL; ?>ast/uploads/2021/11/bordo-gradiente-01-1024x50.jpg 1024w, <?php echo TEMA_URL; ?>ast/uploads/2021/11/bordo-gradiente-01-768x38.jpg 768w, <?php echo TEMA_URL; ?>ast/uploads/2021/11/bordo-gradiente-01-1536x75.jpg 1536w, <?php echo TEMA_URL; ?>ast/uploads/2021/11/bordo-gradiente-01-1920x94.jpg 1920w"
                                                data-sizes="(max-width: 1922px) 100vw, 1922px"
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
        class="elementor-section elementor-top-section elementor-element elementor-element-3b76205 bg-white elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="3b76205"
        data-element_type="section"
        data-settings='{"theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-72441b5" data-id="72441b5" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-d4ecb73 elementor-widget elementor-widget-spacer" data-id="d4ecb73" data-element_type="widget" data-widget_type="spacer.default">
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
        class="elementor-section elementor-top-section elementor-element elementor-element-8550baf bg-white elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="8550baf"
        data-element_type="section"
        data-settings='{"theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-default felxa">










<?php
                    $cozumQuery = $db->query("SELECT * FROM fotograflar WHERE fotograf_bolum=3 && fotograf_durum=1 AND fotograf_bolum2 = 888");
                    if($cozumQuery->rowCount()){
                        $sayac = 0;
                        foreach($cozumQuery as $cozumRow){
                            $sayac++;

                            ?>

            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-eadabf4" data-id="eadabf4" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-9de87db elementor-widget elementor-widget-rhye-widget-parallax-background"
                        data-id="9de87db"
                        data-element_type="widget"
                        data-widget_type="rhye-widget-parallax-background.default"
                    >
                        <div class="elementor-widget-container">
                            <div class="section section-image section text-center" data-arts-parallax="true" data-arts-parallax-factor="0.1" data-arts-os-animation="true">
                                <div class="section-image__wrapper overflow mask-reveal lazy" style="padding-bottom: calc((1024 / 1024) * 100%); height: 0;">
                                    <div class="mask-reveal__layer mask-reveal__layer-1">
                                        <div class="mask-reveal__layer mask-reveal__layer-2">
                                            <img
                                                loading="lazy"
                                                class=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAHCGzyUAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQI12NolQQAASYAn89qhTcAAAAASUVORK5CYII="
                                                data-src="<?php echo URL.'images/photos/big/'.$cozumRow["fotograf_src"];?>"
                                                width="1024"
                                                height="1024"
                                                data-srcset="<?php echo URL.'images/photos/big/'.$cozumRow["fotograf_src"];?> 1024w, <?php echo URL.'images/photos/big/'.$cozumRow["fotograf_src"];?> 150w"
                                                data-sizes="(max-width: 1024px) 100vw, 1024px"
                                                alt="<?php echo $cozumRow[$lehce."fotograf_shortDesc"];?>"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



                                         
  <?php
                        }
                    }
                    ?>

               


          
        </div>
    </section>
  
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-a4cc084 bg-white elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="a4cc084"
        data-element_type="section"
        data-settings='{"theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9be25d3" data-id="9be25d3" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-f9c6038 elementor-widget elementor-widget-spacer" data-id="f9c6038" data-element_type="widget" data-widget_type="spacer.default">
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
        class="elementor-section elementor-top-section elementor-element elementor-element-46e4a44 bg-white elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="46e4a44"
        data-element_type="section"
        data-settings='{"theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c12bc68" data-id="c12bc68" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-b624166 elementor-widget elementor-widget-spacer" data-id="b624166" data-element_type="widget" data-widget_type="spacer.default">
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
        
    </body>
</html>