<!DOCTYPE html>
<html lang="tr-TR">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
        <title><?php echo $ayar[$lehce."site_title"];?></title>
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
                  <script src="<?php echo TEMA_URL; ?>ast/jquery-3.6.0.min.js"></script>
                    
            <script type='text/javascript' src='<?php echo TEMA_URL;?>ast/jquery.magnific-popup.js'></script>
        <?php require_once(TEMA_INC.'inc/ust.php');?>
        <style>
            .sosyalmedya{
                    display: flex;
    width: 100%;
    flex-direction: row;
    flex-wrap: nowrap;
    align-content: center;
    justify-content: center;
    align-items: center;

    margin-top: 10rem;

}.sosyalmedya span{
    font-size: 3rem;
    margin-right: 2rem;
    width: 8%;

}
@media only screen and (max-width: 768px) {
.sosyalmedya span{
    width: auto;

}
}

        </style>

    </head>
    <body class="home page-template-default page page-id-2180 wp-custom-logo elementor-default elementor-kit-6 elementor-page elementor-page-2180">
        <?php require_once(TEMA_INC.'inc/head.php');?>
        <!-- - PAGE HEADER -->
        <!-- PAGE MAIN -->
        <div class="js-smooth-scroll" id="page-wrapper" data-arts-theme-text="dark">
            <main class="page-wrapper__content">
                <section class="section section-masthead text-center pt-large" data-arts-os-animation="true" data-background-color="#eeece6" data-arts-theme-text="dark">
                    <div class="section-masthead__inner container-fluid">
                        <header class="row section-masthead__header">
                            <div class="col-12">
                                <h1 class="entry-title section-masthead__heading my-0 h1 split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words"></h1>
                                <div class="w-100"></div>
                            </div>
                        </header>
                    </div>
                </section>
                <div data-elementor-type="wp-page" data-elementor-id="2180" class="elementor elementor-2180">
                    <?php require_once(TEMA_INC.'inc/slide.php');?>
                   <!-- <div class="sosyalmedya">
                    <span><a target="_blank" href="<?php echo $ayar["facebook_url"]; ?>">FB</a></span>
                    <span><a target="_blank" href="<?php echo $ayar["twitter_url"]; ?>">TW</a></span>
                    <span><a target="_blank" href="<?php echo $ayar["instagram_url"]; ?>">IG</a></span>
                    <span><a target="_blank" href="<?php echo $ayar["linkedin_url"]; ?>">IN</a></span>
                    </div>
                   <section class="elementor-section elementor-top-section elementor-element elementor-element-6038d8e3 elementor-section-full_width pt-medium pb-medium container-fluid elementor-section-height-default elementor-section-height-default"
                data-id="6038d8e3"
                data-element_type="section"
                data-settings='{"background_background":"classic","theme_section_main_theme_text":"arts-elementor-theme-light"}' >
                <div class="elementor-container elementor-column-gap-no">
                   <div class="cs-m-instagram">
    <div class="cs-m-instagram_title"><i class="icon icon-instagram_thin"></i><span><?php echo $blokRowdil2["baslik19"]; ?></span></div>
    <div class="cs-m-instagram_baseline"><?php echo $blokRowdil2["desc19"]; ?></div>

    <div class="cs-m-carousel cs-m-carousel--instagram cs-m-carousel--scrollbar">
        <div id="mpinstagramfeed-photos--63aefab124719" class="swiper-container">
            <ul class="cs-m-instagram_list swiper-wrapper">



                <?php
                    $cozumQuery = $db->query("SELECT * FROM fotograflar WHERE fotograf_bolum=3 && fotograf_durum=1 AND fotograf_bolum2 = 24698");
                    if($cozumQuery->rowCount()){
                        $sayac = 0;
                        foreach($cozumQuery as $cozumRow){
                            $sayac++;

                            ?>
                <li class="cs-m-instagram_item swiper-slide cs-m-carousel_item">
                    <a href="<?php echo $cozumRow[$lehce."fotograf_shortDesc"];?>" target="_blank" class="image-loaded">
                        
                        <img class="lazyloaded"
                            src="<?php echo URL.'images/photos/big/'.$cozumRow["fotograf_src"];?>"
                            alt="" />
                    </a>
                </li>
                 <?php
                        }
                    }
                    ?>




            </ul>
            <div class="swiper-scrollbar"></div>
        </div>
    </div>
</div>
</div>
            </section>-->
                    <?php require_once(TEMA_INC.'inc/anasayfakurumsal.php');?>
                    
                    <?php require_once(TEMA_INC.'inc/anasayfakurumsal2.php');?>
                    <?php require_once(TEMA_INC.'inc/cozumortaklari.php');?>
                    <?php require_once(TEMA_INC.'inc/anasayfasabit.php');?>
                </div>
                <!-- PAGE FOOTER -->
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