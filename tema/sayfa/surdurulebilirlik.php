<?php $blok = $db->query("SELECT * FROM dil2_bloklar{$blokLehce}")->fetch(PDO::FETCH_ASSOC); ?>
<!DOCTYPE html>
<html lang="tr-TR">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
        <title><?php echo $blok["desc7"]; ?> - <?php echo $ayar[$lehce."site_title"];?></title>
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
.elementor-1332 .elementor-element.elementor-element-46504fd > .elementor-container{min-height:100vh;}.elementor-1332 .elementor-element.elementor-element-46504fd:not(.elementor-motion-effects-element-type-background), .elementor-1332 .elementor-element.elementor-element-46504fd > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:url("<?php echo TEMA_URL; ?>ast/uploads/2021/12/27102021-_GAM9974.jpg");background-position:center center;background-size:cover;}.elementor-1332 .elementor-element.elementor-element-46504fd{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-1332 .elementor-element.elementor-element-46504fd > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-1332 .elementor-element.elementor-element-f4876f1{--divider-border-style:solid;--divider-color:#FFFFFF;--divider-border-width:1px;}.elementor-1332 .elementor-element.elementor-element-f4876f1 .elementor-divider-separator{width:100%;}.elementor-1332 .elementor-element.elementor-element-f4876f1 .elementor-divider{padding-top:15px;padding-bottom:15px;}.elementor-1332 .elementor-element.elementor-element-64686bf{--divider-border-style:solid;--divider-color:#FFFFFF;--divider-border-width:1px;}.elementor-1332 .elementor-element.elementor-element-64686bf .elementor-divider-separator{width:100%;}.elementor-1332 .elementor-element.elementor-element-64686bf .elementor-divider{padding-top:15px;padding-bottom:15px;}.elementor-1332 .elementor-element.elementor-element-b7d6a78{--spacer-size:66px;}.elementor-1332 .elementor-element.elementor-element-31d8bf8{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-1332 .elementor-element.elementor-element-31d8bf8 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-1332 .elementor-element.elementor-element-a649bcb{--spacer-size:50px;}.elementor-1332 .elementor-element.elementor-element-6d7db3f .section-image__wrapper img{width:100%;height:auto;}.elementor-1332 .elementor-element.elementor-element-345c224 .section-image__wrapper img{width:100%;height:auto;}.elementor-1332 .elementor-element.elementor-element-63dd7f9 .section-image__wrapper img{width:100%;height:auto;}.elementor-1332 .elementor-element.elementor-element-1d3a525 .section-image__wrapper img{width:100%;height:auto;}.elementor-1332 .elementor-element.elementor-element-8d99d6b{--spacer-size:50px;}.elementor-1332 .elementor-element.elementor-element-9aeca3b:not(.elementor-motion-effects-element-type-background), .elementor-1332 .elementor-element.elementor-element-9aeca3b > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#F8F8F8;}.elementor-1332 .elementor-element.elementor-element-9aeca3b{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-1332 .elementor-element.elementor-element-9aeca3b > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-1332 .elementor-element.elementor-element-ccd58a9{--spacer-size:50px;}.elementor-1332 .elementor-element.elementor-element-d24e551 > .elementor-container > .elementor-column > .elementor-widget-wrap{align-content:center;align-items:center;}.elementor-1332 .elementor-element.elementor-element-1ecec0b > .elementor-element-populated{padding:10% 10% 10% 10%;}.elementor-1332 .elementor-element.elementor-element-a3f372d:not(.elementor-motion-effects-element-type-background) > .elementor-widget-wrap, .elementor-1332 .elementor-element.elementor-element-a3f372d > .elementor-widget-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#E7EFE6;}.elementor-1332 .elementor-element.elementor-element-a3f372d > .elementor-element-populated{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:10% 10% 10% 10%;}.elementor-1332 .elementor-element.elementor-element-a3f372d > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-1332 .elementor-element.elementor-element-f503a87 .section-image__wrapper img{width:100%;height:auto;}.elementor-1332 .elementor-element.elementor-element-ba8e1a9{--spacer-size:50px;}.elementor-1332 .elementor-element.elementor-element-54bf8b0 > .elementor-container > .elementor-column > .elementor-widget-wrap{align-content:center;align-items:center;}.elementor-1332 .elementor-element.elementor-element-bd844e0:not(.elementor-motion-effects-element-type-background) > .elementor-widget-wrap, .elementor-1332 .elementor-element.elementor-element-bd844e0 > .elementor-widget-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#E7EFE6;}.elementor-1332 .elementor-element.elementor-element-bd844e0 > .elementor-element-populated{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:10% 10% 10% 10%;}.elementor-1332 .elementor-element.elementor-element-bd844e0 > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-1332 .elementor-element.elementor-element-5f64240 .section-image__wrapper img{width:100%;height:auto;}.elementor-1332 .elementor-element.elementor-element-5c072c6 > .elementor-element-populated{padding:10% 10% 10% 10%;}.elementor-1332 .elementor-element.elementor-element-126496e{--spacer-size:50px;}.elementor-1332 .elementor-element.elementor-element-66df57f:not(.elementor-motion-effects-element-type-background), .elementor-1332 .elementor-element.elementor-element-66df57f > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#E7EFE6;}.elementor-1332 .elementor-element.elementor-element-66df57f{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-1332 .elementor-element.elementor-element-66df57f > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-1332 .elementor-element.elementor-element-cee1de3 .section-image__wrapper img{width:100%;height:auto;} .elementor-1332 .elementor-element.elementor-element-4f5dd75 .section-image__wrapper img{object-position:50% 50%;}.elementor-1332 .elementor-element.elementor-element-4f5dd75 .section-video__link-inner{color:#000000;}body:not(.rtl) .elementor-1332 .elementor-element.elementor-element-4f5dd75{left:173px;}body.rtl .elementor-1332 .elementor-element.elementor-element-4f5dd75{right:173px;}.elementor-1332 .elementor-element.elementor-element-4f5dd75{top:60px;}.elementor-1332 .elementor-element.elementor-element-3930e414:not(.elementor-motion-effects-element-type-background), .elementor-1332 .elementor-element.elementor-element-3930e414 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#000000;}.elementor-1332 .elementor-element.elementor-element-3930e414{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-1332 .elementor-element.elementor-element-3930e414 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-1332 .elementor-element.elementor-element-7acf9c7b .section-content__inner{max-width:100%;}.elementor-1332 .elementor-element.elementor-element-7acf9c7b .section-content__text{max-width:328px;}.elementor-1332 .elementor-element.elementor-element-7acf9c7b > .elementor-widget-container{margin:0px 0px 0px 0px;}.elementor-bc-flex-widget .elementor-1332 .elementor-element.elementor-element-1e232d06.elementor-column .elementor-widget-wrap{align-items:flex-end;}.elementor-1332 .elementor-element.elementor-element-1e232d06.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:flex-end;align-items:flex-end;}.elementor-1332 .elementor-element.elementor-element-43f1fcda .circle-button_link{width:calc(180px - 10px);height:calc(180px - 10px);}.elementor-1332 .elementor-element.elementor-element-43f1fcda .circle-button_link .circle-button__inner .svg-circle{width:180px;height:180px;}.elementor-1332 .elementor-element.elementor-element-43f1fcda .circle-button__icon{color:#FFFFFF;}.elementor-1332 .elementor-element.elementor-element-43f1fcda{width:170.5px;max-width:170.5px;}:root{--page-title-display:none;}@media(min-width:768px){.elementor-1332 .elementor-element.elementor-element-7fbf765{width:2.07%;}.elementor-1332 .elementor-element.elementor-element-be5b3f0{width:94.923%;}.elementor-1332 .elementor-element.elementor-element-a0068ee{width:2.34%;}.elementor-1332 .elementor-element.elementor-element-8221d95{width:76.402%;}.elementor-1332 .elementor-element.elementor-element-1131967{width:23.311%;}.elementor-1332 .elementor-element.elementor-element-2671cd50{width:28.758%;}.elementor-1332 .elementor-element.elementor-element-526ee4c8{width:56.021%;}.elementor-1332 .elementor-element.elementor-element-1e232d06{width:14.529%;}}@media(max-width:1024px){.elementor-1332 .elementor-element.elementor-element-f4876f1 .elementor-divider{padding-top:0px;padding-bottom:0px;}.elementor-1332 .elementor-element.elementor-element-64686bf .elementor-divider{padding-top:0px;padding-bottom:0px;}.elementor-1332 .elementor-element.elementor-element-3333584 .section-content__inner{max-width:100%;}.elementor-1332 .elementor-element.elementor-element-3333584 .section-content__text{max-width:700px;}.elementor-1332 .elementor-element.elementor-element-6d6c535 .section-content__inner{max-width:100%;}.elementor-1332 .elementor-element.elementor-element-6d6c535 .section-content__text{max-width:700px;}.elementor-1332 .elementor-element.elementor-element-22263aa .section-content__inner{max-width:100%;}.elementor-1332 .elementor-element.elementor-element-22263aa .section-content__text{max-width:700px;}.elementor-1332 .elementor-element.elementor-element-e45257d .section-content__inner{max-width:100%;}.elementor-1332 .elementor-element.elementor-element-e45257d .section-content__text{max-width:700px;}.elementor-1332 .elementor-element.elementor-element-483305b .section-content__inner{max-width:100%;}.elementor-1332 .elementor-element.elementor-element-483305b .section-content__text{max-width:700px;}.elementor-1332 .elementor-element.elementor-element-4f5dd75 .section-video{height:15vh;} .elementor-1332 .elementor-element.elementor-element-4f5dd75 .section-image__wrapper img{object-position:50% 50%;}body:not(.rtl) .elementor-1332 .elementor-element.elementor-element-4f5dd75{left:70px;}body.rtl .elementor-1332 .elementor-element.elementor-element-4f5dd75{right:70px;}.elementor-1332 .elementor-element.elementor-element-4f5dd75{top:19px;}.elementor-1332 .elementor-element.elementor-element-7acf9c7b .section-content__inner{max-width:100%;}.elementor-1332 .elementor-element.elementor-element-7acf9c7b .section-content__text{max-width:700px;}.elementor-1332 .elementor-element.elementor-element-1e232d06.elementor-column > .elementor-widget-wrap{justify-content:flex-end;}.elementor-1332 .elementor-element.elementor-element-1e232d06 > .elementor-element-populated{margin:50px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;}.elementor-1332 .elementor-element.elementor-element-43f1fcda .circle-button_link{width:calc(75px - 10px);height:calc(75px - 10px);}.elementor-1332 .elementor-element.elementor-element-43f1fcda .circle-button_link .circle-button__inner .svg-circle{width:75px;height:75px;}body.elementor-page-1332:not(.elementor-motion-effects-element-type-background), body.elementor-page-1332 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-position:0px 0px;}}@media(max-width:767px){.elementor-1332 .elementor-element.elementor-element-46504fd > .elementor-container{min-height:450px;}.elementor-1332 .elementor-element.elementor-element-3333584 .section-content__inner{max-width:100%;}.elementor-1332 .elementor-element.elementor-element-3333584 .section-content__text{max-width:700px;}.elementor-1332 .elementor-element.elementor-element-6d6c535 .section-content__inner{max-width:100%;}.elementor-1332 .elementor-element.elementor-element-6d6c535 .section-content__text{max-width:700px;}.elementor-1332 .elementor-element.elementor-element-22263aa .section-content__inner{max-width:100%;}.elementor-1332 .elementor-element.elementor-element-22263aa .section-content__text{max-width:700px;}.elementor-1332 .elementor-element.elementor-element-e45257d .section-content__inner{max-width:100%;}.elementor-1332 .elementor-element.elementor-element-e45257d .section-content__text{max-width:700px;}.elementor-1332 .elementor-element.elementor-element-483305b .section-content__inner{max-width:100%;}.elementor-1332 .elementor-element.elementor-element-483305b .section-content__text{max-width:700px;}.elementor-1332 .elementor-element.elementor-element-4f5dd75 .section-video{height:50vh;} .elementor-1332 .elementor-element.elementor-element-4f5dd75 .section-image__wrapper img{object-position:50% 50%;}body:not(.rtl) .elementor-1332 .elementor-element.elementor-element-4f5dd75{left:-10px;}body.rtl .elementor-1332 .elementor-element.elementor-element-4f5dd75{right:-10px;}.elementor-1332 .elementor-element.elementor-element-4f5dd75{top:19px;}.elementor-1332 .elementor-element.elementor-element-2671cd50 > .elementor-element-populated{margin:0px 0px 20px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;}.elementor-1332 .elementor-element.elementor-element-7acf9c7b .section-content__inner{max-width:100%;}.elementor-1332 .elementor-element.elementor-element-7acf9c7b .section-content__text{max-width:700px;}.elementor-1332 .elementor-element.elementor-element-7acf9c7b > .elementor-widget-container{margin:0px 0px 0px 0px;}.elementor-1332 .elementor-element.elementor-element-4d8c8e48 > .elementor-widget-container{margin:0px 0px 0px 0px;}.elementor-1332 .elementor-element.elementor-element-43f1fcda .circle-button_link{width:calc(75px - 10px);height:calc(75px - 10px);}.elementor-1332 .elementor-element.elementor-element-43f1fcda .circle-button_link .circle-button__inner .svg-circle{width:75px;height:75px;}.elementor-1332 .elementor-element.elementor-element-43f1fcda{width:60%;max-width:60%;}body.elementor-page-1332:not(.elementor-motion-effects-element-type-background), body.elementor-page-1332 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-position:0px 0px;}}@media(max-width:1024px) and (min-width:768px){.elementor-1332 .elementor-element.elementor-element-33bbf74{width:20%;}.elementor-1332 .elementor-element.elementor-element-2606de4{width:60%;}.elementor-1332 .elementor-element.elementor-element-b054af4{width:20%;}.elementor-1332 .elementor-element.elementor-element-2671cd50{width:40%;}.elementor-1332 .elementor-element.elementor-element-526ee4c8{width:60%;}.elementor-1332 .elementor-element.elementor-element-1e232d06{width:100%;}}
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
                <h1 class="entry-title section-masthead__heading my-0 h1 split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words"></h1>
                <div class="w-100"></div>
            </div>
        </header>
    </div>
</section>

<div data-elementor-type="wp-page" data-elementor-id="1332" class="elementor elementor-1332">
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-46504fd elementor-section-full_width elementor-section-height-min-height arts-elementor-theme-light elementor-section-height-default elementor-section-items-middle"
        data-id="46504fd"
        data-element_type="section"
        data-settings='{"background_background":"classic","theme_section_main_theme_text":"arts-elementor-theme-light"}'
       style="background-image: url(<?php echo URL.'images/photos/big/'.$resim91["fotograf_src"]; ?>);"
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
                                <div class="marquee-hsas-shortcode-58" style="width: 100%; overflow: hidden;"><span style=""><?php echo $blokRowdil2["baslik7"]; ?></span></div>
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
                                        <div class="section-content__heading split-text js-split-text mb-1" data-split-text-type="lines,words" data-split-text-set="words"><h1><?php echo $blokRowdil2["baslik8"]; ?></h1></div>
                                    </div>
                                    <div class="section-content__wrapper-content">
                                        <div class="w-100"></div>
                                        <div class="section__headline mt-1 mt-md-2 mb-1 mb-md-2"></div>
                                        <div class="w-100"></div>
                                        <div class="section-content__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                                            <p class="p1"><?php echo $blokRowdil2["desc8"]; ?></p>
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
        class="elementor-section elementor-top-section elementor-element elementor-element-1171683 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="1171683"
        data-element_type="section"
    >
        <div class="elementor-container elementor-column-gap-wider">
            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-f2f26e5" data-id="f2f26e5" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-6d7db3f elementor-widget elementor-widget-rhye-widget-parallax-background"
                        data-id="6d7db3f"
                        data-element_type="widget"
                        data-widget_type="rhye-widget-parallax-background.default"
                    >
                        <div class="elementor-widget-container">
                            <div class="section section-image section text-center" data-arts-os-animation="true">
                                <div class="section-image__wrapper mask-reveal lazy" style="padding-bottom: calc((2000 / 1414) * 100%); height: 0;">
                                    <div class="mask-reveal__layer mask-reveal__layer-1">
                                        <div class="mask-reveal__layer mask-reveal__layer-2">
                                            <img
                                                class=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAHCGzyUAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQI12NolQQAASYAn89qhTcAAAAASUVORK5CYII="
                                                data-src="<?php echo URL.'images/photos/big/'.$resim92["fotograf_src"]; ?>"
                                                width="1414"
                                                height="2000"
                                                data-srcset="<?php echo URL.'images/photos/big/'.$resim92["fotograf_src"]; ?> 1414w, <?php echo URL.'images/photos/big/'.$resim92["fotograf_src"]; ?> 212w, <?php echo URL.'images/photos/big/'.$resim92["fotograf_src"]; ?> 724w, <?php echo URL.'images/photos/big/'.$resim92["fotograf_src"]; ?> 768w, <?php echo URL.'images/photos/big/'.$resim92["fotograf_src"]; ?> 1086w"
                                                data-sizes="(max-width: 1414px) 100vw, 1414px"
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
            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-4ed108d" data-id="4ed108d" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-345c224 elementor-widget elementor-widget-rhye-widget-parallax-background"
                        data-id="345c224"
                        data-element_type="widget"
                        data-widget_type="rhye-widget-parallax-background.default"
                    >
                        <div class="elementor-widget-container">
                            <div class="section section-image section text-center" data-arts-os-animation="true">
                                <div class="section-image__wrapper mask-reveal lazy" style="padding-bottom: calc((2000 / 1414) * 100%); height: 0;">
                                    <div class="mask-reveal__layer mask-reveal__layer-1">
                                        <div class="mask-reveal__layer mask-reveal__layer-2">
                                            <img
                                                loading="lazy"
                                                class=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAHCGzyUAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQI12NolQQAASYAn89qhTcAAAAASUVORK5CYII="
                                                data-src="<?php echo URL.'images/photos/big/'.$resim93["fotograf_src"]; ?>"
                                                width="1414"
                                                height="2000"
                                                data-srcset="<?php echo URL.'images/photos/big/'.$resim93["fotograf_src"]; ?> 1414w, <?php echo URL.'images/photos/big/'.$resim93["fotograf_src"]; ?> 212w, <?php echo URL.'images/photos/big/'.$resim93["fotograf_src"]; ?> 724w, <?php echo URL.'images/photos/big/'.$resim93["fotograf_src"]; ?> 768w, <?php echo URL.'images/photos/big/'.$resim93["fotograf_src"]; ?> 1086w"
                                                data-sizes="(max-width: 1414px) 100vw, 1414px"
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
            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-8e662ec" data-id="8e662ec" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-63dd7f9 elementor-widget elementor-widget-rhye-widget-parallax-background"
                        data-id="63dd7f9"
                        data-element_type="widget"
                        data-widget_type="rhye-widget-parallax-background.default"
                    >
                        <div class="elementor-widget-container">
                            <div class="section section-image section text-center" data-arts-os-animation="true">
                                <div class="section-image__wrapper mask-reveal lazy" style="padding-bottom: calc((2000 / 1414) * 100%); height: 0;">
                                    <div class="mask-reveal__layer mask-reveal__layer-1">
                                        <div class="mask-reveal__layer mask-reveal__layer-2">
                                            <img
                                                loading="lazy"
                                                class=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAHCGzyUAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQI12NolQQAASYAn89qhTcAAAAASUVORK5CYII="
                                                data-src="<?php echo URL.'images/photos/big/'.$resim94["fotograf_src"]; ?>"
                                                width="1414"
                                                height="2000"
                                                data-srcset="<?php echo URL.'images/photos/big/'.$resim94["fotograf_src"]; ?> 1414w, <?php echo URL.'images/photos/big/'.$resim94["fotograf_src"]; ?> 212w, <?php echo URL.'images/photos/big/'.$resim94["fotograf_src"]; ?> 724w, <?php echo URL.'images/photos/big/'.$resim94["fotograf_src"]; ?> 768w, <?php echo URL.'images/photos/big/'.$resim94["fotograf_src"]; ?> 1086w"
                                                data-sizes="(max-width: 1414px) 100vw, 1414px"
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
            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-aaea42c" data-id="aaea42c" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-1d3a525 elementor-widget elementor-widget-rhye-widget-parallax-background"
                        data-id="1d3a525"
                        data-element_type="widget"
                        data-widget_type="rhye-widget-parallax-background.default"
                    >
                        <div class="elementor-widget-container">
                            <div class="section section-image section text-center" data-arts-os-animation="true">
                                <div class="section-image__wrapper mask-reveal lazy" style="padding-bottom: calc((2000 / 1414) * 100%); height: 0;">
                                    <div class="mask-reveal__layer mask-reveal__layer-1">
                                        <div class="mask-reveal__layer mask-reveal__layer-2">
                                            <img
                                                loading="lazy"
                                                class=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAHCGzyUAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQI12NolQQAASYAn89qhTcAAAAASUVORK5CYII="
                                                data-src="<?php echo URL.'images/photos/big/'.$resim95["fotograf_src"]; ?>"
                                                width="1414"
                                                height="2000"
                                                data-srcset="<?php echo URL.'images/photos/big/'.$resim95["fotograf_src"]; ?> 1414w, <?php echo URL.'images/photos/big/'.$resim95["fotograf_src"]; ?> 212w, <?php echo URL.'images/photos/big/'.$resim95["fotograf_src"]; ?> 724w, <?php echo URL.'images/photos/big/'.$resim95["fotograf_src"]; ?> 768w, <?php echo URL.'images/photos/big/'.$resim95["fotograf_src"]; ?> 1086w"
                                                data-sizes="(max-width: 1414px) 100vw, 1414px"
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
        class="elementor-section elementor-top-section elementor-element elementor-element-e763549 bg-white elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="e763549"
        data-element_type="section"
        data-settings='{"theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-353e33a" data-id="353e33a" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-8d99d6b elementor-widget elementor-widget-spacer" data-id="8d99d6b" data-element_type="widget" data-widget_type="spacer.default">
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
        class="elementor-section elementor-top-section elementor-element elementor-element-9aeca3b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="9aeca3b"
        data-element_type="section"
        data-settings='{"background_background":"classic"}'
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-131c75a" data-id="131c75a" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-40cfdb9 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="40cfdb9"
                        data-element_type="section"
                    >
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7fbf765" data-id="7fbf765" data-element_type="column">
                                <div class="elementor-widget-wrap"></div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-be5b3f0" data-id="be5b3f0" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-6d6c535 text-center elementor-widget elementor-widget-rhye-widget-content-block"
                                        data-id="6d6c535"
                                        data-element_type="widget"
                                        data-widget_type="rhye-widget-content-block.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="section section-content clearfix pt-small pb-small" data-arts-os-animation="true">
                                                <div class="section-content__inner">
                                                    <div class="section-content__wrapper-heading">
                                                        <div class="section-content__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                                                            <h2 class="p1"><?php echo $blokRowdil2["baslik11"]; ?></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-a0068ee" data-id="a0068ee" data-element_type="column">
                                <div class="elementor-widget-wrap"></div>
                            </div>
                        </div>
                    </section>
                    <div
                        class="elementor-element elementor-element-7beb505 elementor-align-center elementor-widget elementor-widget-rhye-widget-button"
                        data-id="7beb505"
                        data-element_type="widget"
                        data-widget_type="rhye-widget-button.default"
                    >
                        <div class="elementor-widget-container"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-0273691 bg-white elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="0273691"
        data-element_type="section"
        data-settings='{"theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-85fccfb" data-id="85fccfb" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-ccd58a9 elementor-widget elementor-widget-spacer" data-id="ccd58a9" data-element_type="widget" data-widget_type="spacer.default">
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
        class="elementor-section elementor-top-section elementor-element elementor-element-d24e551 elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default"
        data-id="d24e551"
        data-element_type="section"
    >
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1ecec0b" data-id="1ecec0b" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-22263aa text-center elementor-widget elementor-widget-rhye-widget-content-block"
                        data-id="22263aa"
                        data-element_type="widget"
                        data-widget_type="rhye-widget-content-block.default"
                    >
                        <div class="elementor-widget-container">
                            <div class="section section-content clearfix pt-small pb-small" data-arts-os-animation="true">
                                <div class="section-content__inner">
                                    <div class="section-content__wrapper-heading">
                                        <div class="section-content__heading split-text js-split-text mb-1" data-split-text-type="lines,words" data-split-text-set="words"><h2><?php echo $blokRowdil2["desc11"]; ?></h2></div>
                                    </div>
                                    <div class="section-content__wrapper-content">
                                        <div class="w-100"></div>
                                        <div class="section__headline mt-1 mt-md-2 mb-1 mb-md-2"></div>
                                        <div class="w-100"></div>
                                        <div class="section-content__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                                            <p><?php echo $blokRowdil2["baslik12"]; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-a3f372d" data-id="a3f372d" data-element_type="column" data-settings='{"background_background":"classic"}'>
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-f503a87 elementor-widget elementor-widget-rhye-widget-parallax-background"
                        data-id="f503a87"
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
                                                data-src="<?php echo URL.'images/photos/big/'.$resim96["fotograf_src"]; ?>>"
                                                width="1024"
                                                height="1024"
                                                data-srcset="<?php echo URL.'images/photos/big/'.$resim96["fotograf_src"]; ?>> 1024w, <?php echo URL.'images/photos/big/'.$resim96["fotograf_src"]; ?>> 150w"
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
        class="elementor-section elementor-top-section elementor-element elementor-element-1bcb44b bg-white elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="1bcb44b"
        data-element_type="section"
        data-settings='{"theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e8c8c70" data-id="e8c8c70" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-ba8e1a9 elementor-widget elementor-widget-spacer" data-id="ba8e1a9" data-element_type="widget" data-widget_type="spacer.default">
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
        class="elementor-section elementor-top-section elementor-element elementor-element-54bf8b0 elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default"
        data-id="54bf8b0"
        data-element_type="section"
    >
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-bd844e0" data-id="bd844e0" data-element_type="column" data-settings='{"background_background":"classic"}'>
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-5f64240 elementor-widget elementor-widget-rhye-widget-parallax-background"
                        data-id="5f64240"
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
                                                data-src="<?php echo URL.'images/photos/big/'.$resim97["fotograf_src"]; ?>"
                                                width="1024"
                                                height="1024"
                                                data-srcset="<?php echo URL.'images/photos/big/'.$resim97["fotograf_src"]; ?> 1024w, <?php echo URL.'images/photos/big/'.$resim97["fotograf_src"]; ?> 150w"
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
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5c072c6" data-id="5c072c6" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-e45257d text-center elementor-widget elementor-widget-rhye-widget-content-block"
                        data-id="e45257d"
                        data-element_type="widget"
                        data-widget_type="rhye-widget-content-block.default"
                    >
                        <div class="elementor-widget-container">
                            <div class="section section-content clearfix pt-small pb-small" data-arts-os-animation="true">
                                <div class="section-content__inner">
                                    <div class="section-content__wrapper-heading">
                                        <div class="section-content__heading split-text js-split-text mb-1" data-split-text-type="lines,words" data-split-text-set="words"><h2><?php echo $blokRowdil2["desc13"]; ?></h2></div>
                                    </div>
                                    <div class="section-content__wrapper-content">
                                        <div class="w-100"></div>
                                        <div class="section__headline mt-1 mt-md-2 mb-1 mb-md-2"></div>
                                        <div class="w-100"></div>
                                        <div class="section-content__text split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                                            <p>
                                                <?php echo $blokRowdil2["baslik14"]; ?>
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
        class="elementor-section elementor-top-section elementor-element elementor-element-8703587 bg-white elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="8703587"
        data-element_type="section"
        data-settings='{"theme_section_color":"bg-white"}'
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e7aab99" data-id="e7aab99" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-126496e elementor-widget elementor-widget-spacer" data-id="126496e" data-element_type="widget" data-widget_type="spacer.default">
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