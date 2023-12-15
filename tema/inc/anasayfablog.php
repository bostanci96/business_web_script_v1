<section class="bg-extra-dark-gray wow animate__fadeIn padding-20px-tb brRadius pt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 hover-option4 margin-5px-bottom">
                <div class="sliderCatWrapper">
                    <div class="swiper-container" data-slider-options='{ "slidesPerView": "1", "allowTouchMove":true, "spaceBetween":15, "autoplay": { "delay": 3000, "disableOnInteraction": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "pagination": { "el": ".swiper-pagination", "clickable": true } }'>
                        <div class="swiper-wrapper">
                            <?php
                            $haberQuery = $db->query("SELECT * FROM sayfalar WHERE sayfa_durum=1 AND secenekHaber=1 ORDER BY sayfa_id DESC LIMIT 0,3");
                            if( $haberQuery->rowCount() ){
                            foreach($haberQuery as $haberRow){
                            $ustId = $haberRow["portkat"];
                            $ustCatQuery = $db->query("SELECT * FROM haberkategori WHERE kategori_id='$ustId'");
                            if($ustCatQuery->rowCount()){
                            $ustKatRow = $ustCatQuery->fetch(PDO::FETCH_ASSOC);
                            $ustKat = $ustKatRow["kategori_adi"];
                            $katURL = LURL."haberkategori/".$ustKatRow["kategori_id"]."/".$ustKatRow["kategori_url"];
                            }
                            $haberUrl = LURL.$haberRow["sayfa_url"].'/';
                            ?>
                            <!-- start portfolio slider item -->
                            <div class="swiper-slide grid-item">
                                <div class="sliderCatCard">
                                    <a href="<?php echo $haberUrl;?>"><img src="<?php echo URL.'images/sayfalar/860x510/'.$haberRow["sayfa_resim"];?>" alt="<?php echo $haberRow["resim_baslik"];?>"></a>
                                    <div class="sliderCatDesc">
                                        <span> <a href="<?php echo $katURL; ?>"><?php echo  $ustKat; ?></a> </span>
                                        <h3> <a href="<?php echo $haberUrl;?>"> <?php echo $haberRow[$lehce."sayfa_adi"];?></a> </h3>
                                        <div class="sliderInfo">
                                            <div class="sliderCatDate"> <?php echo tarih($haberRow["sayfa_tarih"]);?> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end portfolio slider item -->
                            <?php
                            }
                            }?>
                        </div>
                        <!-- start slider pagination -->
                        <div class="swiper-button-prev swiper-portfolio-prev swiper-button-black-highlight"><i class="ti-arrow-left"></i></div>
                        <div class="swiper-button-next swiper-portfolio-next swiper-button-black-highlight"><i class="ti-arrow-right"></i></div>
                        <!-- end slider pagination -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-extra-dark-gray wow animate__fadeIn padding-50px-tb">
    <div class="container-fluid">
        <div class="row align-items-center">
          <!--  <div class="col-12 text-center text-lg-start wow animate__fadeInDown">
                <div class="heading-inner"><h2 class="heading-title"><?php echo $blokRowdil["desc23"]; ?></h2></div>
            </div>-->
            <?php
            $haberQuery = $db->query("SELECT * FROM haberkategori WHERE kategori_durum=1 ORDER BY kategori_id DESC LIMIT 6");
            if( $haberQuery->rowCount() ){
            foreach($haberQuery as $haberRow){
            $haberUrl = LURL."haberkategori/".$haberRow["kategori_id"]."/".$haberRow["kategori_url"];
            ?>
            
            <div class="col-6 col-lg-2 md-margin-30px-bottom text-center text-lg-start wow animate__fadeInDown">
                <div class="categoryCardWrapper">
                    <a href="<?php echo $haberUrl; ?>">
                        <img src="<?php echo URL;?>images/kategoriler/big/<?php echo $haberRow["kategori_resim"];?>" alt="">
                        <div class="imageDesc">
                            <span><?php echo $haberRow[$lehce."kategori_adi"];?></span>
                            <div class="iconLink">
                                <img src="a/images/plus-circle.svg" alt="">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            
            <?php
            }
            }?>
        </div>
    </div>
</section>