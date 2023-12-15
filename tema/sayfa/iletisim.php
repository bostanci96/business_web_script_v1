<?php $blok = $db->query("SELECT * FROM dil_bloklar{$blokLehce}")->fetch(PDO::FETCH_ASSOC); ?>
<!DOCTYPE html>
<html lang="tr-TR">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
        <title><?php echo $blok["desc3"]; ?> - <?php echo $ayar[$lehce."site_title"];?></title>
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
.elementor-1264 .elementor-element.elementor-element-11f9482{--spacer-size:20vh;}.elementor-1264 .elementor-element.elementor-element-b0d63ca{--spacer-size:50px;}.elementor-1264 .elementor-element.elementor-element-91acb42{--spacer-size:20px;}.elementor-1264 .elementor-element.elementor-element-163ff4c{--spacer-size:70px;}.elementor-1264 .elementor-element.elementor-element-83e38d9{--divider-border-style:solid;--divider-color:#000;--divider-border-width:2px;}.elementor-1264 .elementor-element.elementor-element-83e38d9 .elementor-divider-separator{width:100%;}.elementor-1264 .elementor-element.elementor-element-83e38d9 .elementor-divider{padding-top:15px;padding-bottom:15px;}.elementor-1264 .elementor-element.elementor-element-0cce7fa{--divider-border-style:solid;--divider-color:#000;--divider-border-width:2px;}.elementor-1264 .elementor-element.elementor-element-0cce7fa .elementor-divider-separator{width:100%;}.elementor-1264 .elementor-element.elementor-element-0cce7fa .elementor-divider{padding-top:15px;padding-bottom:15px;}.elementor-1264 .elementor-element.elementor-element-34cf59b{--spacer-size:70px;}.elementor-1264 .elementor-element.elementor-element-de006d8 .section-image__wrapper img{width:100%;height:auto;}:root{--page-title-display:none;}@media(max-width:1024px){.elementor-1264 .elementor-element.elementor-element-83e38d9 .elementor-divider{padding-top:0px;padding-bottom:0px;}.elementor-1264 .elementor-element.elementor-element-0cce7fa .elementor-divider{padding-top:0px;padding-bottom:0px;}body.elementor-page-1264:not(.elementor-motion-effects-element-type-background), body.elementor-page-1264 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-position:0px 0px;}}@media(max-width:767px){body.elementor-page-1264:not(.elementor-motion-effects-element-type-background), body.elementor-page-1264 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-position:0px 0px;}}
</style>
        <?php require_once(TEMA_INC.'inc/ust.php');?>
             <link rel="stylesheet" href="<?php echo TEMA_URL;?>ast/iziToast.min.css" type="text/css">
        <script src="<?php echo TEMA_URL;?>ast/iziToast.min.js"></script>
    </head>
    <body class="page-template page-template-elementor_header_footer page page-id-1264 page-parent wp-custom-logo elementor-default elementor-template-full-width elementor-kit-6 elementor-page elementor-page-1264">
        <?php require_once(TEMA_INC.'inc/head.php');?>
        <!-- - PAGE HEADER -->
        <!-- PAGE MAIN -->
  <div class="js-smooth-scroll" id="page-wrapper" data-arts-theme-text="dark" >
                                  <main class="page-wrapper__content">
                <!-- PAGE FOOTER -->
                <!-- Element to set transition background -->
            <section class="section section-masthead d-none" data-background-color=""></section>
            <!-- - Element to set transition background -->
            <div data-elementor-type="wp-page" data-elementor-id="1264" class="elementor elementor-1264">
                <section class="elementor-section elementor-top-section elementor-element elementor-element-373031c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="373031c" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3207cc1" data-id="3207cc1" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-11f9482 elementor-widget elementor-widget-spacer" data-id="11f9482" data-element_type="widget" data-widget_type="spacer.default">
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
                <section class="elementor-section elementor-top-section elementor-element elementor-element-8b98383 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8b98383" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6871c22" data-id="6871c22" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-b0d63ca elementor-widget elementor-widget-spacer" data-id="b0d63ca" data-element_type="widget" data-widget_type="spacer.default">
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
                <section class="elementor-section elementor-top-section elementor-element elementor-element-3df954f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3df954f" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-55c6857" data-id="55c6857" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-daea37f elementor-widget elementor-widget-heading" data-id="daea37f" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h1 class="elementor-heading-title elementor-size-default"><?php echo $blokRowdil["desc3"]; ?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-17f9bef elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="17f9bef" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-wider">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7c68d05" data-id="7c68d05" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-2c1236b elementor-widget elementor-widget-heading" data-id="2c1236b" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h3 class="elementor-heading-title elementor-size-default"><?php echo $blokRowdil["baslik4"]; ?></h3>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-91acb42 elementor-widget elementor-widget-spacer" data-id="91acb42" data-element_type="widget" data-widget_type="spacer.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-spacer">
                                            <div class="elementor-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-e5a9c84 elementor-widget elementor-widget-heading" data-id="e5a9c84" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h3 class="elementor-heading-title elementor-size-default"><a href="tel:<?php echo $ayar["telefon"]; ?>"><b><?php echo $ayar["telefon"]; ?></b></a></h3>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-61e19d1 elementor-widget elementor-widget-heading" data-id="61e19d1" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h3 class="elementor-heading-title elementor-size-default"><a href="mailto:<?php echo $ayar["email"]; ?>"><b><?php echo $ayar["email"]; ?></b></a></h3>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-b199fb7 elementor-widget elementor-widget-text-editor" data-id="b199fb7" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <p><strong><?php echo $ayar["site_title"]; ?></strong><br /><?php echo $ayar["adres"]; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-55f9544" data-id="55f9544" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-43b3aeb elementor-widget elementor-widget-text-editor" data-id="43b3aeb" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <p>
                                            <div class="frm_forms  with_frm_style frm_style_stile-di-formidable" id="frm_form_3_container" data-token="e0965074be2100c44302b20fa8470e41">
                                                <form enctype="multipart/form-data" class="frm-show-form"  id="frx" method="post" name="submitxx" action="<?php echo URL; ?>mailer/mailer.php">
                                                    <div class="frm_form_fields ">
                                                        <fieldset>
                                                            <legend class="frm_screen_reader">Contatti</legend>
                                                            <div class="frm_fields_container">
                                                       
                                                                <div  class="frm_form_field form-field  frm_required_field frm_none_container frm6 frm_first">
                                                                    <label for="field_3l4dr249652e660"  class="frm_primary_label"><?php echo $blokRowdil["desc4"]; ?>
                                                                        <span class="frm_required" aria-hidden="true">*</span>
                                                                    </label>
                                                                    <input type="text" name="name" value="" placeholder="<?php echo $blokRowdil["desc4"]; ?>*"/>
                                                                </div>
                                                                <div class="frm_form_field form-field  frm_required_field frm_none_container frm6">
                                                                    <label for="field_vbac16ed404a2bc" class="frm_primary_label"><?php echo $blokRowdil["baslik5"]; ?>
                                                                        <span class="frm_required" aria-hidden="true">*</span>
                                                                    </label>
                                                                    <input type="text" name="surname" value="" placeholder="<?php echo $blokRowdil["baslik5"]; ?>*"/>
                                                                </div>
                                                                <div class="frm_form_field form-field  frm_required_field frm_none_container frm6 frm6 frm12 frm_first">
                                                                    <label for="field_ikbeo9f74212ada" class="frm_primary_label"><?php echo $blokRowdil["desc5"]; ?>
                                                                        <span class="frm_required" aria-hidden="true">*</span>
                                                                    </label>
                                                                    <input type="email" name="eposta" value="" placeholder="<?php echo $blokRowdil["desc5"]; ?>*" />
                                                                </div>
                                                                <div class="frm_form_field form-field  frm_none_container frm6">
                                                                    <label for="field_y16g9"  class="frm_primary_label"><?php echo $blokRowdil["baslik6"]; ?>
                                                                        <span class="frm_required" aria-hidden="true"></span>
                                                                    </label>
                                                                    <input type="text" name="telefon" value="" placeholder="<?php echo $blokRowdil["baslik6"]; ?>" />
                                                                </div>
                                                               
                                                                <div  class="frm_form_field form-field  frm_required_field frm_none_container">
                                                                    <label for="field_qrc" class="frm_primary_label"><?php echo $blokRowdil["desc6"]; ?>
                                                                        <span class="frm_required" aria-hidden="true">*</span>
                                                                    </label>
                                                                    <input type="text" name="konu" value="" placeholder="<?php echo $blokRowdil["desc6"]; ?>*"/>
                                                                </div>
                                                                <div class="frm_form_field form-field  frm_required_field frm_none_container">
                                                                    <label for="field_nntx3" id="field_nntx3_label" class="frm_primary_label"><?php echo $blokRowdil["baslik7"]; ?>
                                                                        <span class="frm_required" aria-hidden="true">*</span>
                                                                    </label>
                                                                    <textarea name="mesaj" rows="5" placeholder="<?php echo $blokRowdil["baslik7"]; ?>*"></textarea>
                                                                </div>
                                                                <div class="frm_submit">
                                                                    <button class="frm_button_submit frm_final_submit" type="submit" ><?php echo $blokRowdil["desc7"]; ?></button>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </form>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-d436662 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d436662" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a5fe8b0" data-id="a5fe8b0" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-163ff4c elementor-widget elementor-widget-spacer" data-id="163ff4c" data-element_type="widget" data-widget_type="spacer.default">
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
      <script type="text/javascript" src="<?=TEMA_URL;?>ast/jquery-3.2.1.min.js"></script>
        
        <script type="text/javascript" src="<?=TEMA_URL;?>ast/ajaxFormData.js"></script>
        <script type="text/javascript">
        $(document).ready(function(event) {
        $('#frx').ajaxForm({
        success: function(data) {
        if(data=="bos-deger"){
        iziToast.warning({
        title: '<?php echo $blokRowdil["baslik8"]; ?>',
        message: '<?php echo $blokRowdil["desc8"]; ?>',
        });
        return false;
        }else if(data=="basarili"){
        iziToast.success({
        title: '<?php echo $blokRowdil["baslik9"]; ?>',
        message: '<?php echo $blokRowdil["desc9"]; ?>',
        });
        return true;
        }else{
        iziToast.error({
        title: '<?php echo $blokRowdil["baslik10"]; ?>',
        message: '<?php echo $blokRowdil["desc10"]; ?>',
        });
        return false;
        }
        }
        });
        });
        </script>
</body>
</html>