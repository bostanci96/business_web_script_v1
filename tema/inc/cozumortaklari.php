

<section class="elementor-section elementor-top-section elementor-element elementor-element-da63e32 elementor-section-full_width elementor-section-height-min-height elementor-section-height-default elementor-section-items-middle"
    data-id="da63e32"
    data-element_type="section"
    data-settings='{"background_background":"classic"}'>
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-bf72a99" data-id="bf72a99" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-16297e9 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="16297e9" data-element_type="widget" data-widget_type="divider.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-divider">
                            <span class="elementor-divider-separator"></span>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-78377e7 elementor-widget elementor-widget-shortcode" data-id="78377e7" data-element_type="widget" data-widget_type="shortcode.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-shortcode">
                            <div class="marquee-hsas-shortcode-49" style="width: 100%; overflow: hidden;">

<?php
                    $cozumQuery = $db->query("SELECT * FROM fotograflar WHERE fotograf_bolum=58 && fotograf_durum=1");
                    if($cozumQuery->rowCount()){
                        $sayac = 0;
                        foreach($cozumQuery as $cozumRow){
                            $sayac++;

                            ?>

                          
                                <span style=""><img src="<?php echo URL.'images/photos/big/'.$cozumRow["fotograf_src"];?>" alt="<?php echo $cozumRow[$lehce."fotograf_shortDesc"];?>" /></span>&nbsp;&nbsp;&nbsp;
                                 <span style=""> <img src="<?php echo TEMA_URL; ?>ast/uploads/2021/12/reference.svg" alt="" /> </span>&nbsp;&nbsp;&nbsp;
   <?php
                        }
                    }
                    ?>

                            </div>
                            <script>
                                jQuery(function () {
                                    jQuery(".marquee-hsas-shortcode-49").marquee({
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
                <div class="elementor-element elementor-element-e4eced3 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="e4eced3" data-element_type="widget" data-widget_type="divider.default">
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
