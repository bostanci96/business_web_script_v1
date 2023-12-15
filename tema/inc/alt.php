<script>
jQuery(document).ready(function ($) {
    var prev_color = "";
    var active_color = "";
    var $elements = $(".elementor-section-wrap > .elementor-section.change-bg");

    if ($(".elementor-section-wrap > .elementor-section").first().hasClass("change-bg")) {
        // COLORE INIZIALE
        console.log("initial bg color");
        active_color = $(".elementor-section-wrap > .elementor-section.change-bg").first().attr("data-color");
        console.log(active_color);
        $("body").css("data-bg-color", active_color);
    }
    $elements.each(function () {
        console.log($(this).attr("data-color"));
        $(this).waypoint({
            handler: function (direction) {
                var previousWaypoint = this.previous();
                active_color = $(this.element).attr("data-color");
                if ("down" == direction) {
                    $("body").css("background-color", active_color);
                } else if ("up" == direction) {
                    if (previousWaypoint) $("body").css("background-color", $(previousWaypoint.element).attr("data-color"));
                    else $("body").css("background-color", "");
                }
            },
            offset: "50%",
            group: "change-bg",
        });
    });
});
</script>
<style>
body {-webkit-transition: background-color 1s ease-in-out 0s;-moz-transition: background-color 1s ease-in-out 0s;-ms-transition: background-color 1s ease-in-out 0s;-o-transition: background-color 1s ease-in-out 0s;transition: background-color 1s ease-in-out 0s;}
</style>
<script type='text/javascript' src='<?php echo TEMA_URL;?>ast/js/dist/vendor/regenerator-runtime.min.js@ver=0.13.9' id='regenerator-runtime-js'></script>
<script type='text/javascript' src='<?php echo TEMA_URL;?>ast/js/dist/vendor/wp-polyfill.min.js@ver=3.15.0' id='wp-polyfill-js'></script>
<script type='text/javascript' id='contact-form-7-js-extra'>
                        /* <![CDATA[ */
                        var wpcf7 = {
                            "api": {
                                "root": "wp-json\/",
                                "namespace": "contact-form-7\/v1"
                            }
                        };
                        /* ]]> */
</script>
<script type='text/javascript' src='<?php echo TEMA_URL;?>ast/plugins/contact-form-7/includes/js/index.js@ver=5.6.2' id='contact-form-7-js'></script>
<script type='text/javascript' src='<?php echo TEMA_URL;?>ast/js/imagesloaded.min.js@ver=4.1.4' id='imagesloaded-js'></script>
<script type='text/javascript' src='<?php echo TEMA_URL;?>ast/themes/lisaspa/js/gsap.min.js@ver=3.6.0' id='gsap-js'></script>
<script type='text/javascript' src='<?php echo TEMA_URL;?>ast/themes/lisaspa/js/DrawSVGPlugin.min.js@ver=3.4.2' id='drawsvg-plugin-js'></script>
<script type='text/javascript' src='<?php echo TEMA_URL;?>ast/themes/lisaspa/js/jquery.lazy.min.js@ver=1.7.10' id='jquery-lazy-js'></script>
<script type='text/javascript' src='<?php echo TEMA_URL;?>ast/themes/lisaspa/js/jquery.lazy.plugins.min.js@ver=1.7.10' id='jquery-lazy-plugins-js'></script>
<script type='text/javascript' src='<?php echo TEMA_URL;?>ast/themes/lisaspa/js/MorphSVGPlugin.min.js@ver=3.6.0' id='morph-svg-plugin-js'></script>
<script type='text/javascript' src='<?php echo TEMA_URL;?>ast/themes/lisaspa/js/SplitText.min.js@ver=3.6.0' id='split-text-js'></script>
<script type='text/javascript' src='<?php echo TEMA_URL;?>ast/themes/lisaspa/js/ScrollTrigger.min.js@ver=3.6.0' id='scrolltrigger-js'></script>
<script type='text/javascript' src='<?php echo TEMA_URL;?>ast/themes/lisaspa/modules/base/base.min.js@ver=2.7.0' id='rhye-base-components-js'></script>
                    <script type='text/javascript' id='rhye-components-js-extra'>
                        /* <![CDATA[ */
                        var plugin = {
                            "assets": {
                                "aside-counters-js": {
                                    "id": "aside-counters-js",
                                    "type": "script",
                                    "src": "<?php echo TEMA_URL;?>ast\/plugins\/rhye-core\/modules\/asideCounters\/asideCounters.min.js",
                                    "cache": true,
                                    "version": "2.5.0"
                                },
                                "aside-counters-css": {
                                    "id": "aside-counters-css",
                                    "type": "style",
                                    "src": "<?php echo TEMA_URL;?>ast\/plugins\/rhye-core\/modules\/asideCounters\/asideCounters.min.css",
                                    "cache": true,
                                    "version": "2.5.0"
                                },
                                "base-gl-animation-js": {
                                    "id": "base-gl-animation-js",
                                    "type": "script",
                                    "src": "<?php echo TEMA_URL;?>ast\/plugins\/rhye-core\/modules\/baseGLAnimation\/baseGLAnimation.min.js",
                                    "cache": true,
                                    "version": "2.5.0"
                                },
                                "effect-distortion-offscreen-js": {
                                    "id": "effect-distortion-offscreen-js",
                                    "type": "script",
                                    "src": "<?php echo TEMA_URL;?>ast\/plugins\/rhye-core\/modules\/baseGLAnimationOffscreen\/EffectDistortionOffscreen.js",
                                    "cache": true,
                                    "version": "2.5.0"
                                },
                                "effect-stretch-offscreen-js": {
                                    "id": "effect-stretch-offscreen-js",
                                    "type": "script",
                                    "src": "<?php echo TEMA_URL;?>ast\/plugins\/rhye-core\/modules\/baseGLAnimationOffscreen\/EffectStretchOffscreen.js",
                                    "cache": true,
                                    "version": "2.5.0"
                                },
                                "circle-button-js": {
                                    "id": "circle-button-js",
                                    "type": "script",
                                    "src": "<?php echo TEMA_URL;?>ast\/plugins\/rhye-core\/modules\/circleButton\/circleButton.min.js",
                                    "cache": true,
                                    "version": "2.5.0"
                                },
                                "circle-button-css": {
                                    "id": "circle-button-css",
                                    "type": "style",
                                    "src": "<?php echo TEMA_URL;?>ast\/plugins\/rhye-core\/modules\/circleButton\/circleButton.min.css",
                                    "cache": true,
                                    "version": "2.5.0"
                                },
                                "googlemap-js": {
                                    "id": "googlemap-js",
                                    "type": "script",
                                    "src": "<?php echo TEMA_URL;?>ast\/plugins\/rhye-core\/modules\/googleMap\/googleMap.min.js",
                                    "cache": true,
                                    "version": "2.5.0"
                                },
                                "googlemap-map-js": {
                                    "id": "googlemap-map-js",
                                    "type": "script",
                                    "src": "\/\/maps.googleapis.com\/maps\/api\/js?key=",
                                    "cache": true
                                },
                                "googlemap-css": {
                                    "id": "googlemap-css",
                                    "type": "style",
                                    "src": "<?php echo TEMA_URL;?>ast\/plugins\/rhye-core\/modules\/googleMap\/googleMap.min.css",
                                    "cache": true,
                                    "version": "2.5.0"
                                },
                                "pswp-js": {
                                    "id": "pswp-js",
                                    "type": "script",
                                    "src": "<?php echo TEMA_URL;?>ast\/plugins\/rhye-core\/modules\/pswp\/pswp.min.js",
                                    "cache": true,
                                    "version": "2.5.0"
                                },
                                "pswp-css": {
                                    "id": "pswp-css",
                                    "type": "style",
                                    "src": "<?php echo TEMA_URL;?>ast\/plugins\/rhye-core\/modules\/pswp\/pswp.min.css",
                                    "cache": true,
                                    "version": "2.5.0"
                                },
                                "section-content-js": {
                                    "id": "section-content-js",
                                    "type": "script",
                                    "src": "<?php echo TEMA_URL;?>ast\/plugins\/rhye-core\/modules\/sectionContent\/sectionContent.min.js",
                                    "cache": true,
                                    "version": "2.5.0"
                                },
                                "section-content-css": {
                                    "id": "section-content-css",
                                    "type": "style",
                                    "src": "<?php echo TEMA_URL;?>ast\/plugins\/rhye-core\/modules\/sectionContent\/sectionContent.min.css",
                                    "cache": true,
                                    "version": "2.5.0"
                                },
                                "section-grid-js": {
                                    "id": "section-grid-js",
                                    "type": "script",
                                    "src": "<?php echo TEMA_URL;?>ast\/plugins\/rhye-core\/modules\/sectionGrid\/sectionGrid.min.js",
                                    "cache": true,
                                    "version": "2.5.0"
                                },
                                "section-grid-css": {
                                    "id": "section-grid-css",
                                    "type": "style",
                                    "src": "<?php echo TEMA_URL;?>ast\/plugins\/rhye-core\/modules\/sectionGrid\/sectionGrid.min.css",
                                    "cache": true,
                                    "version": "2.5.0"
                                },
                                "section-image-js": {
                                    "id": "section-image-js",
                                    "type": "script",
                                    "src": "<?php echo TEMA_URL;?>ast\/plugins\/rhye-core\/modules\/sectionImage\/sectionImage.min.js",
                                    "cache": true,
                                    "version": "2.5.0"
                                },
                                "section-image-css": {
                                    "id": "section-image-css",
                                    "type": "style",
                                    "src": "<?php echo TEMA_URL;?>ast\/plugins\/rhye-core\/modules\/sectionImage\/sectionImage.min.css",
                                    "cache": true,
                                    "version": "2.5.0"
                                },
                                "section-list-js": {
                                    "id": "section-list-js",
                                    "type": "script",
                                    "src": "<?php echo TEMA_URL;?>ast\/plugins\/rhye-core\/modules\/sectionList\/sectionList.min.js",
                                    "cache": true,
                                    "version": "2.5.0"
                                },
                                "section-list-css": {
                                    "id": "section-list-css",
                                    "type": "style",
                                    "src": "<?php echo TEMA_URL;?>ast\/plugins\/rhye-core\/modules\/sectionList\/sectionList.min.css",
                                    "cache": true,
                                    "version": "2.5.0"
                                },
                                "section-projects-slider-js": {
                                    "id": "section-projects-slider-js",
                                    "type": "script",
                                    "src": "<?php echo TEMA_URL;?>ast\/plugins\/rhye-core\/modules\/sectionProjectsSlider\/sectionProjectsSlider.min.js",
                                    "cache": true,
                                    "version": "2.5.0"
                                },
                                "section-projects-slider-css": {
                                    "id": "section-projects-slider-css",
                                    "type": "style",
                                    "src": "<?php echo TEMA_URL;?>ast\/plugins\/rhye-core\/modules\/sectionProjectsSlider\/sectionProjectsSlider.min.css",
                                    "cache": true,
                                    "version": "2.5.0"
                                },
                                "section-scroll-js": {
                                    "id": "section-scroll-js",
                                    "type": "script",
                                    "src": "<?php echo TEMA_URL;?>ast\/plugins\/rhye-core\/modules\/sectionScroll\/sectionScroll.min.js",
                                    "cache": true,
                                    "version": "2.5.0"
                                },
                                "section-slider-images-js": {
                                    "id": "section-slider-images-js",
                                    "type": "script",
                                    "src": "<?php echo TEMA_URL;?>ast\/plugins\/rhye-core\/modules\/sectionSliderImages\/sectionSliderImages.min.js",
                                    "cache": true,
                                    "version": "2.5.0"
                                },
                                "section-slider-testimonials-js": {
                                    "id": "section-slider-testimonials-js",
                                    "type": "script",
                                    "src": "<?php echo TEMA_URL;?>ast\/plugins\/rhye-core\/modules\/sectionSliderTestimonials\/sectionSliderTestimonials.min.js",
                                    "cache": true,
                                    "version": "2.5.0"
                                },
                                "section-video-css": {
                                    "id": "section-video-css",
                                    "type": "style",
                                    "src": "<?php echo TEMA_URL;?>ast\/plugins\/rhye-core\/modules\/sectionVideo\/sectionVideo.min.css",
                                    "cache": true,
                                    "version": "2.5.0"
                                },
                                "slider-js": {
                                    "id": "slider-js",
                                    "type": "script",
                                    "src": "<?php echo TEMA_URL;?>ast\/plugins\/rhye-core\/modules\/slider\/slider.min.js",
                                    "cache": true,
                                    "version": "2.5.0"
                                },
                                "slider-css": {
                                    "id": "slider-css",
                                    "type": "style",
                                    "src": "<?php echo TEMA_URL;?>ast\/plugins\/rhye-core\/modules\/slider\/slider.min.css",
                                    "cache": true,
                                    "version": "2.5.0"
                                }
                            }
                        };
                        var theme = {
                            "isFirstLoad": "1",
                            "themeURL": "<?php echo TEMA_URL;?>ast\/themes\/lisaspa",
                            "ajax": {
                                "enabled": "",
                                "preventRules": "",
                                "evalInlineContainerScripts": "",
                                "loadMissingScripts": "1",
                                "loadMissingStyles": "1",
                                "updateScriptNodes": false
                            },
                            "animations": {
                                "triggerHook": "0.85",
                                "timeScale": {
                                    "onScrollReveal": "1",
                                    "overlayMenuOpen": "1",
                                    "overlayMenuClose": "1",
                                    "preloader": "0.9",
                                    "ajaxCurtainTransition": "1",
                                    "ajaxFlyingImageTransition": "1"
                                },
                                "scrollDown": {
                                    "enabled": "1"
                                }
                            },
                            "smoothScroll": {
                                "enabled": "",
                                "damping": "0.12",
                                "renderByPixels": "1",
                                "continuousScrolling": false,
                                "plugins": {
                                    "edgeEasing": "1"
                                }
                            },
                            "cursorFollower": {
                                "enabled": "1",
                                "labels": {
                                    "slider": "Drag Me"
                                },
                                "factorTrailing": "6",
                                "animationDuration": "0.25",
                                "elements": {
                                    "circleArrows": "1",
                                    "sliderDots": "1",
                                    "socialItems": "1",
                                    "blogPagination": "1"
                                }
                            },
                            "contactForm7": {
                                "customModals": "1"
                            },
                            "customJSInit": "",
                            "updateHeadNodes": "",
                            "mobileBarFix": {
                                "enabled": "1",
                                "update": "1"
                            },
                            "elementor": {
                                "isEditor": "",
                                "features": {
                                    "optimizedAssetsLoading": "1"
                                }
                            },
                            "promises": [],
                            "highPerformance": "1",
                            "offscreenCanvas": "",
                            "assets": {
                                "swiper-js": {
                                    "id": "swiper-js",
                                    "type": "script",
                                    "src": "<?php echo TEMA_URL;?>ast\/themes\/lisaspa\/js\/swiper.min.js",
                                    "cache": true,
                                    "version": "6.4.15"
                                },
                                "bootstrap-modal-js": {
                                    "id": "bootstrap-modal-js",
                                    "type": "script",
                                    "src": "<?php echo TEMA_URL;?>ast\/themes\/lisaspa\/js\/bootstrap-modal.js",
                                    "cache": true,
                                    "version": "4.1.3"
                                },
                                "bootstrap-util-js": {
                                    "id": "bootstrap-util-js",
                                    "type": "script",
                                    "src": "<?php echo TEMA_URL;?>ast\/themes\/lisaspa\/js\/bootstrap-util.js",
                                    "cache": true,
                                    "version": "4.1.3"
                                },
                                "isotope-js": {
                                    "id": "isotope-js",
                                    "type": "script",
                                    "src": "<?php echo TEMA_URL;?>ast\/themes\/lisaspa\/js\/isotope.pkgd.min.js",
                                    "cache": true,
                                    "version": "3.0.6"
                                },
                                "circletype-js": {
                                    "id": "circletype-js",
                                    "type": "script",
                                    "src": "<?php echo TEMA_URL;?>ast\/themes\/lisaspa\/js\/circletype.min.js",
                                    "cache": true,
                                    "version": "2.3.1"
                                },
                                "pjax-js": {
                                    "id": "pjax-js",
                                    "type": "script",
                                    "src": "<?php echo TEMA_URL;?>ast\/themes\/lisaspa\/modules\/PJAX\/PJAX.min.js",
                                    "cache": true,
                                    "version": "2.7.0"
                                },
                                "cursor-js": {
                                    "id": "cursor-js",
                                    "type": "script",
                                    "src": "<?php echo TEMA_URL;?>ast\/themes\/lisaspa\/modules\/cursor\/cursor.min.js",
                                    "cache": true,
                                    "version": "2.7.0"
                                },
                                "cursor-css": {
                                    "id": "cursor-css",
                                    "type": "style",
                                    "src": "<?php echo TEMA_URL;?>ast\/themes\/lisaspa\/modules\/cursor\/cursor.min.css",
                                    "cache": true,
                                    "version": "2.7.0"
                                },
                                "smooth-scrolling-js": {
                                    "id": "smooth-scrolling-js",
                                    "type": "script",
                                    "src": "<?php echo TEMA_URL;?>ast\/themes\/lisaspa\/modules\/smoothScroll\/smoothScroll.min.js",
                                    "cache": true,
                                    "version": "2.7.0"
                                },
                                "section-masthead-js": {
                                    "id": "section-masthead-js",
                                    "type": "script",
                                    "src": "<?php echo TEMA_URL;?>ast\/themes\/lisaspa\/modules\/sectionMasthead\/sectionMasthead.min.js",
                                    "cache": true,
                                    "version": "2.7.0"
                                },
                                "section-nav-projects-js": {
                                    "id": "section-nav-projects-js",
                                    "type": "script",
                                    "src": "<?php echo TEMA_URL;?>ast\/themes\/lisaspa\/modules\/sectionNavProjects\/sectionNavProjects.min.js",
                                    "cache": true,
                                    "version": "2.7.0"
                                },
                                "section-nav-projects-css": {
                                    "id": "section-nav-projects-css",
                                    "type": "style",
                                    "src": "<?php echo TEMA_URL;?>ast\/themes\/lisaspa\/modules\/sectionNavProjects\/sectionNavProjects.min.css",
                                    "cache": true,
                                    "version": "2.7.0"
                                },
                                "scroll-down-js": {
                                    "id": "scroll-down-js",
                                    "type": "script",
                                    "src": "<?php echo TEMA_URL;?>ast\/themes\/lisaspa\/modules\/scrollDown\/scrollDown.min.js",
                                    "cache": true,
                                    "version": "2.7.0"
                                },
                                "change-text-hover-js": {
                                    "id": "change-text-hover-js",
                                    "type": "script",
                                    "src": "<?php echo TEMA_URL;?>ast\/themes\/lisaspa\/modules\/changeTextHover\/changeTextHover.min.js",
                                    "cache": true,
                                    "version": "2.7.0"
                                },
                                "change-text-hover-css": {
                                    "id": "change-text-hover-css",
                                    "type": "style",
                                    "src": "<?php echo TEMA_URL;?>ast\/themes\/lisaspa\/modules\/changeTextHover\/changeTextHover.min.css",
                                    "cache": true,
                                    "version": "2.7.0"
                                }
                            }
                        };
                        /* ]]> */
                    </script>
                    <script type='text/javascript' src='<?php echo TEMA_URL;?>ast/themes/lisaspa/js/components.js@ver=2.7.0' id='rhye-components-js'></script>
                    <script type='text/javascript' src='<?php echo TEMA_URL;?>ast/plugins/rhye-core/modules/elementorInit/elementorInit.min.js@ver=2.5.0' id='rhye-elementor-init-js'></script>
                    <script type='text/javascript' src='<?php echo TEMA_URL;?>ast/themes/lisaspa-child/js/jquery.waypoints.min.js@ver=4.0.1' id='waypoint-js'></script>
                    <script type='text/javascript' src='<?php echo TEMA_URL;?>ast/plugins/horizontal-scrolling-announcements/script/jquery.marquee.min.js@ver=6.0.1' id='jquery.marquee.min-js'></script>
                    <script type='text/javascript' src='<?php echo TEMA_URL;?>ast/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js@ver=3.7.2' id='elementor-pro-webpack-runtime-js'></script>
                    <script type='text/javascript' src='<?php echo TEMA_URL;?>ast/plugins/elementor/assets/js/webpack.runtime.min.js@ver=3.7.2' id='elementor-webpack-runtime-js'></script>
                    <script type='text/javascript' src='<?php echo TEMA_URL;?>ast/plugins/elementor/assets/js/frontend-modules.min.js@ver=3.7.2' id='elementor-frontend-modules-js'></script>
                    <script type='text/javascript' src='<?php echo TEMA_URL;?>ast/js/dist/hooks.min.js@ver=c6d64f2cb8f5c6bb49caca37f8828ce3' id='wp-hooks-js'></script>
                    <script type='text/javascript' src='<?php echo TEMA_URL;?>ast/js/dist/i18n.min.js@ver=ebee46757c6a411e38fd079a7ac71d94' id='wp-i18n-js'></script>
                    <script type='text/javascript' id='wp-i18n-js-after'>
                        wp.i18n.setLocaleData({
                            'text direction\u0004ltr': ['ltr']
                        });
                    </script>
                    <script type='text/javascript' id='elementor-pro-frontend-js-before'>
                        var ElementorProFrontendConfig = {
                            "nonce": "6ab3de21ad",
                            "urls": {
                                "assets": "<?php echo TEMA_URL;?>ast\/plugins\/elementor-pro\/assets\/",
                                "rest": "wp-json\/"
                            },
                            "shareButtonsNetworks": {
                                "facebook": {
                                    "title": "Facebook",
                                    "has_counter": true
                                },
                                "twitter": {
                                    "title": "Twitter"
                                },
                                "linkedin": {
                                    "title": "LinkedIn",
                                    "has_counter": true
                                },
                                "pinterest": {
                                    "title": "Pinterest",
                                    "has_counter": true
                                },
                                "reddit": {
                                    "title": "Reddit",
                                    "has_counter": true
                                },
                                "vk": {
                                    "title": "VK",
                                    "has_counter": true
                                },
                                "odnoklassniki": {
                                    "title": "OK",
                                    "has_counter": true
                                },
                                "tumblr": {
                                    "title": "Tumblr"
                                },
                                "digg": {
                                    "title": "Digg"
                                },
                                "skype": {
                                    "title": "Skype"
                                },
                                "stumbleupon": {
                                    "title": "StumbleUpon",
                                    "has_counter": true
                                },
                                "mix": {
                                    "title": "Mix"
                                },
                                "telegram": {
                                    "title": "Telegram"
                                },
                                "pocket": {
                                    "title": "Pocket",
                                    "has_counter": true
                                },
                                "xing": {
                                    "title": "XING",
                                    "has_counter": true
                                },
                                "whatsapp": {
                                    "title": "WhatsApp"
                                },
                                "email": {
                                    "title": "Email"
                                },
                                "print": {
                                    "title": "Print"
                                }
                            },
                            "facebook_sdk": {
                                "lang": "it_IT",
                                "app_id": ""
                            },
                            "lottie": {
                                "defaultAnimationUrl": "<?php echo TEMA_URL;?>ast\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"
                            }
                        };
                    </script>
                    <script type='text/javascript' src='<?php echo TEMA_URL;?>ast/plugins/elementor-pro/assets/js/frontend.min.js@ver=3.7.2' id='elementor-pro-frontend-js'></script>
                    <script type='text/javascript' src='<?php echo TEMA_URL;?>ast/plugins/elementor/assets/lib/waypoints/waypoints.min.js@ver=4.0.2' id='elementor-waypoints-js'></script>
                    <script type='text/javascript' src='<?php echo TEMA_URL;?>ast/js/jquery/ui/core.min.js@ver=1.13.1' id='jquery-ui-core-js'></script>
                    <script type='text/javascript' id='elementor-frontend-js-before'>
                        var elementorFrontendConfig = {
                            "environmentMode": {
                                "edit": false,
                                "wpPreview": false,
                                "isScriptDebug": false
                            },
                            "i18n": {
                                "shareOnFacebook": "Condividi su Facebook",
                                "shareOnTwitter": "Condividi su Twitter",
                                "pinIt": "Pinterest",
                                "download": "Download",
                                "downloadImage": "Scarica immagine",
                                "fullscreen": "Schermo intero",
                                "zoom": "Zoom",
                                "share": "Condividi",
                                "playVideo": "Riproduci video",
                                "previous": "Precedente",
                                "next": "Successivo",
                                "close": "Chiudi"
                            },
                            "is_rtl": false,
                            "breakpoints": {
                                "xs": 0,
                                "sm": 480,
                                "md": 768,
                                "lg": 1025,
                                "xl": 1440,
                                "xxl": 1600
                            },
                            "responsive": {
                                "breakpoints": {
                                    "mobile": {
                                        "label": "Mobile",
                                        "value": 767,
                                        "default_value": 767,
                                        "direction": "max",
                                        "is_enabled": true
                                    },
                                    "mobile_extra": {
                                        "label": "Mobile Extra",
                                        "value": 880,
                                        "default_value": 880,
                                        "direction": "max",
                                        "is_enabled": false
                                    },
                                    "tablet": {
                                        "label": "Tablet",
                                        "value": 1024,
                                        "default_value": 1024,
                                        "direction": "max",
                                        "is_enabled": true
                                    },
                                    "tablet_extra": {
                                        "label": "Tablet Extra",
                                        "value": 1200,
                                        "default_value": 1200,
                                        "direction": "max",
                                        "is_enabled": false
                                    },
                                    "laptop": {
                                        "label": "Laptop",
                                        "value": 1366,
                                        "default_value": 1366,
                                        "direction": "max",
                                        "is_enabled": false
                                    },
                                    "widescreen": {
                                        "label": "Widescreen",
                                        "value": 2400,
                                        "default_value": 2400,
                                        "direction": "min",
                                        "is_enabled": false
                                    }
                                }
                            },
                            "version": "3.7.2",
                            "is_static": false,
                            "experimentalFeatures": {
                                "e_dom_optimization": true,
                                "e_optimized_assets_loading": true,
                                "a11y_improvements": true,
                                "e_import_export": true,
                                "e_hidden_wordpress_widgets": true,
                                "theme_builder_v2": true,
                                "landing-pages": true,
                                "elements-color-picker": true,
                                "favorite-widgets": true,
                                "admin-top-bar": true,
                                "page-transitions": true,
                                "notes": true,
                                "form-submissions": true,
                                "e_scroll_snap": true
                            },
                            "urls": {
                                "assets": "<?php echo TEMA_URL;?>ast\/plugins\/elementor\/assets\/"
                            },
                            "settings": {
                                "page": [],
                                "editorPreferences": []
                            },
                            "kit": {
                                "body_background_background": "classic",
                                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                                "global_image_lightbox": "yes",
                                "lightbox_enable_counter": "yes",
                                "lightbox_enable_fullscreen": "yes",
                                "lightbox_enable_zoom": "yes",
                                "lightbox_enable_share": "yes",
                                "lightbox_title_src": "title",
                                "lightbox_description_src": "description"
                            },
                            "post": {
                                "id": 2180,
                                "title": "Lisa%20Spa%20%7C%20Tessuti%20stampati%20per%20abbigliamento",
                                "excerpt": "",
                                "featuredImage": false
                            }
                        };
                    </script>
                    <script type='text/javascript' src='<?php echo TEMA_URL;?>ast/plugins/elementor/assets/js/frontend.min.js@ver=3.7.2' id='elementor-frontend-js'></script>
                    <script type='text/javascript' src='<?php echo TEMA_URL;?>ast/plugins/elementor-pro/assets/js/elements-handlers.min.js@ver=3.7.2' id='pro-elements-handlers-js'></script>
                    <script>
                        /*<![CDATA[*/
                        /*]]>*/
                    </script>