<?php $blok = $db->query("SELECT * FROM dil_bloklar{$blokLehce}")->fetch(PDO::FETCH_ASSOC); ?>
<!DOCTYPE html>
<html lang="tr-TR">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
        <title><?php echo $blok["desc33"]; ?> - <?php echo $ayar[$lehce."site_title"];?></title>
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
        .elementor-1052 .elementor-element.elementor-element-46504fd > .elementor-container{min-height:100vh;}.elementor-1052 .elementor-element.elementor-element-46504fd:not(.elementor-motion-effects-element-type-background), .elementor-1052 .elementor-element.elementor-element-46504fd > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:url("<?php echo TEMA_URL; ?>ast/uploads/2021/12/BANNER-PRODUZIONE-LISA-2021-1.jpg");background-position:center center;background-size:cover;}.elementor-1052 .elementor-element.elementor-element-46504fd{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-1052 .elementor-element.elementor-element-46504fd > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-1052 .elementor-element.elementor-element-f4876f1{--divider-border-style:solid;--divider-color:#FFFFFF;--divider-border-width:1px;}.elementor-1052 .elementor-element.elementor-element-f4876f1 .elementor-divider-separator{width:100%;}.elementor-1052 .elementor-element.elementor-element-f4876f1 .elementor-divider{padding-top:15px;padding-bottom:15px;}.elementor-1052 .elementor-element.elementor-element-64686bf{--divider-border-style:solid;--divider-color:#FFFFFF;--divider-border-width:1px;}.elementor-1052 .elementor-element.elementor-element-64686bf .elementor-divider-separator{width:100%;}.elementor-1052 .elementor-element.elementor-element-64686bf .elementor-divider{padding-top:15px;padding-bottom:15px;}.elementor-1052 .elementor-element.elementor-element-b7d6a78{--spacer-size:66px;}.elementor-1052 .elementor-element.elementor-element-31d8bf8{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-1052 .elementor-element.elementor-element-31d8bf8 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-1052 .elementor-element.elementor-element-a649bcb{--spacer-size:50px;}.elementor-1052 .elementor-element.elementor-element-e28f5f3{--spacer-size:50px;}.elementor-1052 .elementor-element.elementor-element-346f291{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-1052 .elementor-element.elementor-element-346f291 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-1052 .elementor-element.elementor-element-43352e4:not(.elementor-motion-effects-element-type-background) > .elementor-widget-wrap, .elementor-1052 .elementor-element.elementor-element-43352e4 > .elementor-widget-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#f5f2ed;}.elementor-1052 .elementor-element.elementor-element-43352e4 > .elementor-element-populated{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:10% 10% 10% 10%;}.elementor-1052 .elementor-element.elementor-element-43352e4 > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-1052 .elementor-element.elementor-element-db8dbff .section-image__wrapper img{width:100%;height:auto;}.elementor-bc-flex-widget .elementor-1052 .elementor-element.elementor-element-1d8f850.elementor-column .elementor-widget-wrap{align-items:center;}.elementor-1052 .elementor-element.elementor-element-1d8f850.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center;}.elementor-1052 .elementor-element.elementor-element-1d8f850.elementor-column > .elementor-widget-wrap{justify-content:center;}.elementor-1052 .elementor-element.elementor-element-1d8f850 > .elementor-element-populated{padding:0% 10% 0% 10%;}.elementor-1052 .elementor-element.elementor-element-7a94d9e{--spacer-size:50px;}.elementor-1052 .elementor-element.elementor-element-4cd6e2c{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-1052 .elementor-element.elementor-element-4cd6e2c > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-bc-flex-widget .elementor-1052 .elementor-element.elementor-element-df29cb6.elementor-column .elementor-widget-wrap{align-items:center;}.elementor-1052 .elementor-element.elementor-element-df29cb6.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center;}.elementor-1052 .elementor-element.elementor-element-df29cb6.elementor-column > .elementor-widget-wrap{justify-content:center;}.elementor-1052 .elementor-element.elementor-element-df29cb6 > .elementor-element-populated{padding:0% 10% 0% 10%;}.elementor-1052 .elementor-element.elementor-element-4a3410d:not(.elementor-motion-effects-element-type-background) > .elementor-widget-wrap, .elementor-1052 .elementor-element.elementor-element-4a3410d > .elementor-widget-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#f5f2ed;}.elementor-1052 .elementor-element.elementor-element-4a3410d > .elementor-element-populated{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:10% 10% 10% 10%;}.elementor-1052 .elementor-element.elementor-element-4a3410d > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-1052 .elementor-element.elementor-element-86bd542 .section-image__wrapper img{width:100%;height:auto;}.elementor-1052 .elementor-element.elementor-element-6cd5555{--spacer-size:102px;}.elementor-1052 .elementor-element.elementor-element-d7b2c0e{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-1052 .elementor-element.elementor-element-d7b2c0e > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-bc-flex-widget .elementor-1052 .elementor-element.elementor-element-d891a6a.elementor-column .elementor-widget-wrap{align-items:center;}.elementor-1052 .elementor-element.elementor-element-d891a6a.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center;}.elementor-1052 .elementor-element.elementor-element-d891a6a.elementor-column > .elementor-widget-wrap{justify-content:center;}.elementor-1052 .elementor-element.elementor-element-d891a6a > .elementor-element-populated{padding:0% 10% 0% 10%;}.elementor-1052 .elementor-element.elementor-element-f596492 > .elementor-element-populated{padding:0px 10px 0px 10px;}.elementor-1052 .elementor-element.elementor-element-12cf16a{--spacer-size:102px;}.elementor-1052 .elementor-element.elementor-element-62505a4 .section-image__wrapper img{width:100%;height:auto;}.elementor-1052 .elementor-element.elementor-element-31130eaa:not(.elementor-motion-effects-element-type-background), .elementor-1052 .elementor-element.elementor-element-31130eaa > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#000000;}.elementor-1052 .elementor-element.elementor-element-31130eaa{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-1052 .elementor-element.elementor-element-31130eaa > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-1052 .elementor-element.elementor-element-701934 .section-content__inner{max-width:100%;}.elementor-1052 .elementor-element.elementor-element-701934 .section-content__text{max-width:328px;}.elementor-1052 .elementor-element.elementor-element-701934 > .elementor-widget-container{margin:0px 0px 0px 0px;}.elementor-bc-flex-widget .elementor-1052 .elementor-element.elementor-element-5b2376e9.elementor-column .elementor-widget-wrap{align-items:flex-end;}.elementor-1052 .elementor-element.elementor-element-5b2376e9.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:flex-end;align-items:flex-end;}.elementor-1052 .elementor-element.elementor-element-18872dfe .circle-button_link{width:calc(180px - 10px);height:calc(180px - 10px);}.elementor-1052 .elementor-element.elementor-element-18872dfe .circle-button_link .circle-button__inner .svg-circle{width:180px;height:180px;}.elementor-1052 .elementor-element.elementor-element-18872dfe .circle-button__icon{color:#FFFFFF;}.elementor-1052 .elementor-element.elementor-element-18872dfe{width:170.5px;max-width:170.5px;}:root{--page-title-display:none;}@media(min-width:768px){.elementor-1052 .elementor-element.elementor-element-3f2ab076{width:28.758%;}.elementor-1052 .elementor-element.elementor-element-29fde576{width:56.021%;}.elementor-1052 .elementor-element.elementor-element-5b2376e9{width:14.529%;}}@media(max-width:1024px){.elementor-1052 .elementor-element.elementor-element-f4876f1 .elementor-divider{padding-top:0px;padding-bottom:0px;}.elementor-1052 .elementor-element.elementor-element-64686bf .elementor-divider{padding-top:0px;padding-bottom:0px;}.elementor-1052 .elementor-element.elementor-element-3333584 .section-content__inner{max-width:100%;}.elementor-1052 .elementor-element.elementor-element-3333584 .section-content__text{max-width:700px;}.elementor-1052 .elementor-element.elementor-element-69f687e .section-content__inner{max-width:100%;}.elementor-1052 .elementor-element.elementor-element-69f687e .section-content__text{max-width:700px;}.elementor-1052 .elementor-element.elementor-element-0a81149 .section-content__inner{max-width:100%;}.elementor-1052 .elementor-element.elementor-element-0a81149 .section-content__text{max-width:700px;}.elementor-1052 .elementor-element.elementor-element-ba17bb6 .section-content__inner{max-width:100%;}.elementor-1052 .elementor-element.elementor-element-ba17bb6 .section-content__text{max-width:700px;}.elementor-1052 .elementor-element.elementor-element-a795bac .section-content__inner{max-width:100%;}.elementor-1052 .elementor-element.elementor-element-a795bac .section-content__text{max-width:700px;}.elementor-1052 .elementor-element.elementor-element-701934 .section-content__inner{max-width:100%;}.elementor-1052 .elementor-element.elementor-element-701934 .section-content__text{max-width:700px;}.elementor-1052 .elementor-element.elementor-element-5b2376e9.elementor-column > .elementor-widget-wrap{justify-content:flex-end;}.elementor-1052 .elementor-element.elementor-element-5b2376e9 > .elementor-element-populated{margin:50px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;}.elementor-1052 .elementor-element.elementor-element-18872dfe .circle-button_link{width:calc(75px - 10px);height:calc(75px - 10px);}.elementor-1052 .elementor-element.elementor-element-18872dfe .circle-button_link .circle-button__inner .svg-circle{width:75px;height:75px;}body.elementor-page-1052:not(.elementor-motion-effects-element-type-background), body.elementor-page-1052 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-position:0px 0px;}}@media(max-width:767px){.elementor-1052 .elementor-element.elementor-element-46504fd > .elementor-container{min-height:450px;}.elementor-1052 .elementor-element.elementor-element-46504fd{padding:0px 0px 0px 0px;}.elementor-1052 .elementor-element.elementor-element-3b57798 > .elementor-element-populated{margin:0px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:0px 0px 0px 0px;}.elementor-1052 .elementor-element.elementor-element-f4876f1 .elementor-divider{padding-top:0px;padding-bottom:0px;}.elementor-1052 .elementor-element.elementor-element-64686bf .elementor-divider{padding-top:0px;padding-bottom:0px;}.elementor-1052 .elementor-element.elementor-element-3333584 .section-content__inner{max-width:100%;}.elementor-1052 .elementor-element.elementor-element-3333584 .section-content__text{max-width:700px;}.elementor-1052 .elementor-element.elementor-element-69f687e .section-content__inner{max-width:100%;}.elementor-1052 .elementor-element.elementor-element-69f687e .section-content__text{max-width:700px;}.elementor-1052 .elementor-element.elementor-element-0a81149 .section-content__inner{max-width:100%;}.elementor-1052 .elementor-element.elementor-element-0a81149 .section-content__text{max-width:700px;}.elementor-1052 .elementor-element.elementor-element-6cd5555{--spacer-size:40px;}.elementor-1052 .elementor-element.elementor-element-ba17bb6 .section-content__inner{max-width:100%;}.elementor-1052 .elementor-element.elementor-element-ba17bb6 .section-content__text{max-width:700px;}.elementor-1052 .elementor-element.elementor-element-a795bac .section-content__inner{max-width:100%;}.elementor-1052 .elementor-element.elementor-element-a795bac .section-content__text{max-width:700px;}.elementor-1052 .elementor-element.elementor-element-12cf16a{--spacer-size:40px;}.elementor-1052 .elementor-element.elementor-element-3f2ab076 > .elementor-element-populated{margin:0px 0px 20px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;}.elementor-1052 .elementor-element.elementor-element-701934 .section-content__inner{max-width:100%;}.elementor-1052 .elementor-element.elementor-element-701934 .section-content__text{max-width:700px;}.elementor-1052 .elementor-element.elementor-element-701934 > .elementor-widget-container{margin:0px 0px 0px 0px;}.elementor-1052 .elementor-element.elementor-element-4acb60b5 > .elementor-widget-container{margin:0px 0px 0px 0px;}.elementor-1052 .elementor-element.elementor-element-18872dfe .circle-button_link{width:calc(75px - 10px);height:calc(75px - 10px);}.elementor-1052 .elementor-element.elementor-element-18872dfe .circle-button_link .circle-button__inner .svg-circle{width:75px;height:75px;}.elementor-1052 .elementor-element.elementor-element-18872dfe{width:60%;max-width:60%;}body.elementor-page-1052:not(.elementor-motion-effects-element-type-background), body.elementor-page-1052 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-position:0px 0px;}}@media(max-width:1024px) and (min-width:768px){.elementor-1052 .elementor-element.elementor-element-33bbf74{width:20%;}.elementor-1052 .elementor-element.elementor-element-2606de4{width:60%;}.elementor-1052 .elementor-element.elementor-element-b054af4{width:20%;}.elementor-1052 .elementor-element.elementor-element-3f2ab076{width:40%;}.elementor-1052 .elementor-element.elementor-element-29fde576{width:60%;}.elementor-1052 .elementor-element.elementor-element-5b2376e9{width:100%;}}
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
                <h1 class="entry-title section-masthead__heading my-0 h1 split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">La Produzione</h1>
                <div class="w-100"></div>
            </div>
        </header>
    </div>
</section>

<div data-elementor-type="wp-page" data-elementor-id="1052" class="elementor elementor-1052">
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-46504fd elementor-section-full_width elementor-section-height-min-height arts-elementor-theme-light elementor-section-height-default elementor-section-items-middle"
        data-id="46504fd"
        data-element_type="section"
        data-settings='{"background_background":"classic","theme_section_main_theme_text":"arts-elementor-theme-light"}'
        style="background-image: url(<?php echo URL.'images/photos/big/'.$resim74["fotograf_src"]; ?>);"
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
                                <div class="marquee-hsas-shortcode-16" style="width: 100%; overflow: hidden;"><span style=""><?php echo $blokRowdil["baslik33"]; ?></span></div>
                                <script>
                                    jQuery(function () {
                                        jQuery(".marquee-hsas-shortcode-16").marquee({
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
        class="elementor-section elementor-top-section elementor-element elementor-element-270ab37 bg-white elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
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
                                        <div class="section-content__heading split-text js-split-text mb-1" data-split-text-type="lines,words" data-split-text-set="words">
                                            <h1 class="h1-mod"><?php echo $blokRowdil["baslik34"]; ?></h1>
                                        </div>
                                    </div>
                                    <div class="section-content__wrapper-content">
                                        <div class="w-100"></div>
                                        <div class="section__headline mt-1 mt-md-2 mb-1 mb-md-2"></div>
                                        <div class="w-100"></div>
                                        <div class="section-content__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                                            <p><?php echo $blokRowdil["desc34"]; ?></p>
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
        class="elementor-section elementor-top-section elementor-element elementor-element-afe5057 bg-white elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
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
        class="elementor-section elementor-top-section elementor-element elementor-element-4c8b93a bg-white elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="4c8b93a"
        data-element_type="section"
        data-settings='{"theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3423908" data-id="3423908" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-e28f5f3 elementor-widget elementor-widget-spacer" data-id="e28f5f3" data-element_type="widget" data-widget_type="spacer.default">
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
        class="elementor-section elementor-top-section elementor-element elementor-element-346f291 elementor-section-full_width bg-white elementor-section-height-default elementor-section-height-default"
        data-id="346f291"
        data-element_type="section"
        data-settings='{"background_background":"classic","theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-43352e4" data-id="43352e4" data-element_type="column" data-settings='{"background_background":"classic"}'>
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-db8dbff elementor-widget elementor-widget-rhye-widget-parallax-background"
                        data-id="db8dbff"
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
                                                data-src="<?php echo URL.'images/photos/big/'.$resim75["fotograf_src"]; ?>"
                                                width="1024"
                                                height="1024"
                                                data-srcset="<?php echo URL.'images/photos/big/'.$resim75["fotograf_src"]; ?> 1024w, <?php echo URL.'images/photos/big/'.$resim75["fotograf_src"]; ?> 150w"
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
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1d8f850" data-id="1d8f850" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-69f687e text-center elementor-widget elementor-widget-rhye-widget-content-block"
                        data-id="69f687e"
                        data-element_type="widget"
                        data-widget_type="rhye-widget-content-block.default"
                    >
                        <div class="elementor-widget-container">
                            <div class="section section-content clearfix pt-small pb-small" data-arts-os-animation="true">
                                <div class="section-content__inner">
                                    <div class="section-content__wrapper-heading">
                                        <div class="section-content__heading split-text js-split-text mb-1" data-split-text-type="lines,words" data-split-text-set="words">
                                            <h2 style="text-align: center;"><?php echo $blokRowdil["desc35"]; ?></h2>
                                        </div>
                                    </div>
                                    <div class="section-content__wrapper-content">
                                        <div class="w-100"></div>
                                        <div class="section__headline mt-1 mt-md-2 mb-1 mb-md-2"></div>
                                        <div class="w-100"></div>
                                        <div class="section-content__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                                            <p><?php echo $blokRowdil["baslik36"]; ?></p>
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
        class="elementor-section elementor-top-section elementor-element elementor-element-1785c5f bg-white elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="1785c5f"
        data-element_type="section"
        data-settings='{"theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9baf681" data-id="9baf681" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-7a94d9e elementor-widget elementor-widget-spacer" data-id="7a94d9e" data-element_type="widget" data-widget_type="spacer.default">
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
        class="elementor-section elementor-top-section elementor-element elementor-element-4cd6e2c elementor-section-full_width bg-white elementor-reverse-tablet elementor-reverse-mobile elementor-section-height-default elementor-section-height-default"
        data-id="4cd6e2c"
        data-element_type="section"
        data-settings='{"background_background":"classic","theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-df29cb6" data-id="df29cb6" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-0a81149 text-center elementor-widget elementor-widget-rhye-widget-content-block"
                        data-id="0a81149"
                        data-element_type="widget"
                        data-widget_type="rhye-widget-content-block.default"
                    >
                        <div class="elementor-widget-container">
                            <div class="section section-content clearfix pt-small pb-small" data-arts-os-animation="true">
                                <div class="section-content__inner">
                                    <div class="section-content__wrapper-heading">
                                        <div class="section-content__heading split-text js-split-text mb-1" data-split-text-type="lines,words" data-split-text-set="words">
                                            <h2 style="text-align: center;"><?php echo $blokRowdil["desc36"]; ?></h2>
                                        </div>
                                    </div>
                                    <div class="section-content__wrapper-content">
                                        <div class="w-100"></div>
                                        <div class="section__headline mt-1 mt-md-2 mb-1 mb-md-2"></div>
                                        <div class="w-100"></div>
                                        <div class="section-content__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                                            <p class="p1"><?php echo $blokRowdil["baslik37"]; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4a3410d" data-id="4a3410d" data-element_type="column" data-settings='{"background_background":"classic"}'>
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-86bd542 elementor-widget elementor-widget-rhye-widget-parallax-background"
                        data-id="86bd542"
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
                                                data-src="<?php echo URL.'images/photos/big/'.$resim76["fotograf_src"]; ?>"
                                                width="1024"
                                                height="1024"
                                                data-srcset="<?php echo URL.'images/photos/big/'.$resim76["fotograf_src"]; ?> 1024w, <?php echo URL.'images/photos/big/'.$resim76["fotograf_src"]; ?> 300w, <?php echo URL.'images/photos/big/'.$resim76["fotograf_src"]; ?> 150w, <?php echo URL.'images/photos/big/'.$resim76["fotograf_src"]; ?> 768w, <?php echo URL.'images/photos/big/'.$resim76["fotograf_src"]; ?> 1080w"
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
        class="elementor-section elementor-top-section elementor-element elementor-element-4c8b93a bg-white elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="4c8b93a"
        data-element_type="section"
        data-settings='{"theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3423908" data-id="3423908" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-e28f5f3 elementor-widget elementor-widget-spacer" data-id="e28f5f3" data-element_type="widget" data-widget_type="spacer.default">
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
        class="elementor-section elementor-top-section elementor-element elementor-element-346f291 elementor-section-full_width bg-white elementor-section-height-default elementor-section-height-default"
        data-id="346f291"
        data-element_type="section"
        data-settings='{"background_background":"classic","theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-43352e4" data-id="43352e4" data-element_type="column" data-settings='{"background_background":"classic"}'>
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-db8dbff elementor-widget elementor-widget-rhye-widget-parallax-background"
                        data-id="db8dbff"
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
                                                data-src="<?php echo URL.'images/photos/big/'.$resim81["fotograf_src"]; ?>"
                                                width="1024"
                                                height="1024"
                                                data-srcset="<?php echo URL.'images/photos/big/'.$resim81["fotograf_src"]; ?> 1024w, <?php echo URL.'images/photos/big/'.$resim76["fotograf_src"]; ?> 150w"
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
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1d8f850" data-id="1d8f850" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-69f687e text-center elementor-widget elementor-widget-rhye-widget-content-block"
                        data-id="69f687e"
                        data-element_type="widget"
                        data-widget_type="rhye-widget-content-block.default"
                    >
                        <div class="elementor-widget-container">
                            <div class="section section-content clearfix pt-small pb-small" data-arts-os-animation="true">
                                <div class="section-content__inner">
                                    <div class="section-content__wrapper-heading">
                                        <div class="section-content__heading split-text js-split-text mb-1" data-split-text-type="lines,words" data-split-text-set="words">
                                            <h2 style="text-align: center;"><?php echo $blokRowdil2["desc5"]; ?></h2>
                                        </div>
                                    </div>
                                    <div class="section-content__wrapper-content">
                                        <div class="w-100"></div>
                                        <div class="section__headline mt-1 mt-md-2 mb-1 mb-md-2"></div>
                                        <div class="w-100"></div>
                                        <div class="section-content__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                                            <p><?php echo $blokRowdil2["baslik6"]; ?></p>
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
        class="elementor-section elementor-top-section elementor-element elementor-element-a6afd18 bg-white elementor-section-full_width elementor-section-height-default elementor-section-height-default"
        data-id="a6afd18"
        data-element_type="section"
        data-settings='{"theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0e9223b" data-id="0e9223b" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-b440c43 elementor-widget elementor-widget-rhye-widget-slider-images" data-id="b440c43" data-element_type="widget" data-widget_type="rhye-widget-slider-images.default">
                        <div class="elementor-widget-container">
                            <div class="section section-slider-images" data-arts-os-animation="true">
                                <div class="slider slider-images js-slider-images">
                                    <div
                                        class="swiper-container js-slider-images__slider slider_vertical-centered"
                                        data-speed="1200"
                                        data-slides-per-view="2"
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
                    $cozumQuery = $db->query("SELECT * FROM fotograflar WHERE fotograf_bolum=3 && fotograf_durum=1 AND fotograf_bolum2 = 23");
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
                                                                loading="lazy"
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
                                        <div class="section-content__heading split-text js-split-text mb-1" data-split-text-type="lines,words" data-split-text-set="words">
                                            <h2 style="text-align: center;"><?php echo $blokRowdil["baslik38"]; ?></h2>
                                        </div>
                                    </div>
                                    <div class="section-content__wrapper-content">
                                        <div class="w-100"></div>
                                        <div class="section__headline mt-1 mt-md-2 mb-1 mb-md-2"></div>
                                        <div class="w-100"></div>
                                        <div class="section-content__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                                            <p class="p1"><?php echo $blokRowdil["desc38"]; ?></p>
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
                                        <div class="section-content__heading split-text js-split-text mb-1" data-split-text-type="lines,words" data-split-text-set="words">
                                            <h2 style="text-align: center;"><?php echo $blokRowdil["baslik39"]; ?></h2>
                                        </div>
                                    </div>
                                    <div class="section-content__wrapper-content">
                                        <div class="w-100"></div>
                                        <div class="section__headline mt-1 mt-md-2 mb-1 mb-md-2"></div>
                                        <div class="w-100"></div>
                                        <div class="section-content__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                                            <p class="p1"><?php echo $blokRowdil["desc39"]; ?></p>
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

   
</div>

                
                <?php require_once(TEMA_INC.'inc/footer.php');?>
                <!-- - PAGE FOOTER -->
            </main>
        </div>
        <!-- - PAGE MAIN -->
        <?php require_once(TEMA_INC.'inc/alt.php');?>
        
    </body>
</html>