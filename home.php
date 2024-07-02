<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<div>
	
<!doctype html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<title>WEBINAR &#8211; Room ACADEMY</title>
    <style>
        :root{
            --sejoli-lms-primary-bg-color: #21ba45;
            --sejoli-lms-primary-text-color: #ffffff;
        }
    </style>
    <script src="https://kit.fontawesome.com/eefaa3dbe5.js" crossorigin="anonymous"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>    <script>
        jQuery(document).ready(function($){
            $('.confirm input').on("input", function(){
                if($(this).val().length==$(this).attr("maxlength")){
                    $(this).next().focus();
                }else if($(this).val().length==0){
                    $(this).prev().focus();
                }
            });
        });
    </script>
    <style>
        .confirm input{
            text-align: center;
        }
    </style>
    <meta name='robots' content='max-image-preview:large' />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel='dns-prefetch' href='//cdn.datatables.net' />
<link rel='dns-prefetch' href='//cdn.jsdelivr.net' />
<link rel='dns-prefetch' href='//cdnjs.cloudflare.com' />
<link rel='dns-prefetch' href='//assets.swarmcdn.com' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel="alternate" type="text/calendar" title="SIPILPEDIA ACADEMY &raquo; iCal Feed" href="https://sipilpediaacademy.com/events/?ical=1" />
<link rel="preconnect" href="https://assets.swarmcdn.com"><link rel='stylesheet' id='bootstrap4-css' href='https://sipilpediaacademy.com/wp-content/themes/larisdigital-wp/assets/lib/bootstrap4/css/bootstrap.min.css?ver=4.3.1' media='all' />
<link rel='stylesheet' id='mmenu-css' href='https://sipilpediaacademy.com/wp-content/themes/larisdigital-wp/assets/lib/mmenu/jquery.mmenu.tp.css?ver=6.1.8' media='all' />
<link rel='stylesheet' id='mighty-slickcss-css' href='https://sipilpediaacademy.com/wp-content/plugins/mighty-addons/assets/css/slick.min.css?ver=1.9.3' media='all' />
<link rel='stylesheet' id='mighty-slicktheme-css' href='https://sipilpediaacademy.com/wp-content/plugins/mighty-addons/assets/css/slick-theme.min.css?ver=1.9.3' media='all' />
<link rel='stylesheet' id='mighty-sectionslider-css' href='https://sipilpediaacademy.com/wp-content/plugins/mighty-addons-pro/assets/css/sectionslider.css?ver=1.5.3' media='all' />
<link rel='stylesheet' id='tribe-events-pro-mini-calendar-block-styles-css' href='https://sipilpediaacademy.com/wp-content/plugins/events-calendar-pro/src/resources/css/tribe-events-pro-mini-calendar-block.min.css?ver=5.11.1' media='all' />
<link rel='stylesheet' id='smartvideo_guten-cgb-style-css-css' href='https://sipilpediaacademy.com/wp-content/plugins/smartvideo/includes/page-builders/gutenberg/dist/blocks.style.build.css?ver=2.1.0' media='all' />
<style id='classic-theme-styles-inline-css'>
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id='global-styles-inline-css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<link rel='stylesheet' id='sejoli-lms-public-css' href='https://sipilpediaacademy.com/wp-content/plugins/dw-sejoli-lms/assets/css/public.css?ver=all' media='all' />
<link rel='stylesheet' id='scrf-frontend-css' href='https://sipilpediaacademy.com/wp-content/plugins/dw-sejoli-register-form-builder/assets/scrf-frontend.css?ver=all' media='all' />
<link rel='stylesheet' id='checker-pro-css' href='https://sipilpediaacademy.com/wp-content/plugins/dw-sheet-data-checker-pro/assets/public.css?ver=all' media='all' />
<link rel='stylesheet' id='graphina-charts-for-elementor-public-css' href='https://sipilpediaacademy.com/wp-content/plugins/graphina-elementor-charts-and-graphs/elementor/css/graphina-charts-for-elementor-public.css?ver=1.8.10' media='all' />
<link rel='stylesheet' id='graphina-charts-pro-requirement-css' href='https://sipilpediaacademy.com/wp-content/plugins/graphina-elementor-charts-and-graphs/elementor/css/graphina-charts-for-elementor-pro.css?ver=1.8.10' media='all' />
<link rel='stylesheet' id='public-css-css' href='https://sipilpediaacademy.com/wp-content/plugins/whatsify-login/assets/css/public.css?ver=6.4.4' media='all' />
<link rel='stylesheet' id='sacc_public_css-css' href='https://sipilpediaacademy.com/wp-content/plugins/sejoli-addon-custom-checkout//public/css/style.css?ver=6.4.4' media='all' />
<link rel='stylesheet' id='dashicons-css' href='https://sipilpediaacademy.com/wp-includes/css/dashicons.min.css?ver=6.4.4' media='all' />
<link rel='stylesheet' id='wp-jquery-ui-dialog-css' href='https://sipilpediaacademy.com/wp-includes/css/jquery-ui-dialog.min.css?ver=6.4.4' media='all' />
<link rel='stylesheet' id='landingkit-widgets-css' href='https://sipilpediaacademy.com/wp-content/plugins/landingkit-elementor/assets/css/widgets.css?ver=2.1.0' media='all' />
<link rel='stylesheet' id='datatable-css' href='https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css?ver=6.4.4' media='all' />
<link rel='stylesheet' id='sdx-datatable-css' href='https://sipilpediaacademy.com/wp-content/plugins/dw-sejoli-donation-extra/assets/css/bs-only-table.css?ver=6.4.4' media='all' />
<link rel='stylesheet' id='semantic-ui-css' href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css?ver=all' media='all' />
<link rel='stylesheet' id='mightypro-grid-css' href='https://sipilpediaacademy.com/wp-content/plugins/mighty-addons-pro/assets/css/mt-grid.css?ver=1.5.3' media='all' />
<link rel='stylesheet' id='mightypro-main-css' href='https://sipilpediaacademy.com/wp-content/plugins/mighty-addons-pro/assets/css/main.css?ver=1.5.3' media='all' />
<link rel='stylesheet' id='mt-common-css' href='https://sipilpediaacademy.com/wp-content/plugins/mighty-addons/assets/css/common.css?ver=1.9.3' media='all' />
<link rel='stylesheet' id='plus-icons-mind-css-css' href='//sipilpediaacademy.com/wp-content/plugins/theplus_elementor_addon/assets/css/extra/iconsmind.min.css?ver=5.5.1' media='all' />
<link rel='stylesheet' id='googlefonts-css' href='https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C700%7CHind+Guntur%3A300%2C700&#038;ver=6.4.4' media='all' />
<link rel='stylesheet' id='elementor-icons-css' href='https://sipilpediaacademy.com/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.29.0' media='all' />
<link rel='stylesheet' id='elementor-frontend-css' href='https://sipilpediaacademy.com/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.20.3' media='all' />
<link rel='stylesheet' id='swiper-css' href='https://sipilpediaacademy.com/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5' media='all' />
<link rel='stylesheet' id='elementor-post-5157-css' href='https://sipilpediaacademy.com/wp-content/uploads/elementor/css/post-5157.css?ver=1706600126' media='all' />
<link rel='stylesheet' id='elementor-pro-css' href='https://sipilpediaacademy.com/wp-content/plugins/elementor-pro/assets/css/frontend.min.css?ver=3.18.1' media='all' />
<link rel='stylesheet' id='elementor-global-css' href='https://sipilpediaacademy.com/wp-content/uploads/elementor/css/global.css?ver=1706600128' media='all' />
<link rel='stylesheet' id='elementor-post-12614-css' href='https://sipilpediaacademy.com/wp-content/uploads/elementor/css/post-12614.css?ver=1718332299' media='all' />
<link rel='stylesheet' id='larisdigital-css' href='https://sipilpediaacademy.com/wp-content/themes/larisdigital-wp/style.css?ver=1.9.1' media='all' />
<link rel='stylesheet' id='larisdigital-child-css' href='https://sipilpediaacademy.com/wp-content/themes/larisdigital-wp-child/style.css?ver=1.6.1' media='all' />
<link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CCaladea%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMukta%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CWork+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CLato%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.4.4' media='all' />
<link rel='stylesheet' id='elementor-icons-shared-0-css' href='https://sipilpediaacademy.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-solid-css' href='https://sipilpediaacademy.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3' media='all' />
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin><script src="https://sipilpediaacademy.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
<script src="https://sipilpediaacademy.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
<script src="https://sipilpediaacademy.com/wp-content/plugins/mighty-addons-pro/assets/js/advance-shadow.js?ver=1.5.3" id="mt-advanceshadowjs-js"></script>
<script src="https://sipilpediaacademy.com/wp-content/plugins/mighty-addons-pro/assets/js/advance-gradients.js?ver=1.5.3" id="mt-advancegradientsjs-js"></script>
<script src="https://sipilpediaacademy.com/wp-content/plugins/mighty-addons/assets/js/slick.min.js?ver=1.9.3" id="mighty-slickjs-js"></script>
<script src="https://sipilpediaacademy.com/wp-content/plugins/mighty-addons/assets/js/custom-css.js?ver=1.9.3" id="mt-customcssjs-js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js?ver=2.3.1" id="semantic-ui-js"></script>
<script src="https://sipilpediaacademy.com/wp-content/plugins/dw-sejoli-register-form-builder/assets/scrf-frontend.js?ver=1" id="scrf-frontend-js"></script>
<script src="https://sipilpediaacademy.com/wp-content/plugins/dw-sheet-data-checker-pro/assets/public.js?ver=1" id="checker-pro-js"></script>
<script src="https://sipilpediaacademy.com/wp-content/plugins/graphina-elementor-charts-and-graphs/elementor/js/apexcharts.min.js?ver=1.8.10" id="apexcharts-min-js"></script>
<script id="graphina-charts-for-elementor-public-js-extra">
var graphina_localize = {"ajaxurl":"https:\/\/sipilpediaacademy.com\/wp-admin\/admin-ajax.php","nonce":"4747679483","graphinaAllGraphs":[],"graphinaAllGraphsOptions":[],"graphinaBlockCharts":[],"is_view_port_disable":"off","thousand_seperator":","};
</script>
<script src="https://sipilpediaacademy.com/wp-content/plugins/graphina-elementor-charts-and-graphs/elementor/js/graphina-charts-for-elementor-public.js?ver=1.8.10" id="graphina-charts-for-elementor-public-js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js?ver=1" id="datatable-js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js?ver=6.4.4" id="chartjs-js"></script>
<script data-cfasync="false" id="smartvideo_swarmdetect-js-before">
				var swarmoptions = {
					swarmcdnkey: "228a540e-e758-4ed7-bd9b-5ffd741cf4ec",
					autoreplace: {"youtube":false,"youtubecaptions":true,"videotag":true},
					theme: {},
					plugins: {},
					iframeReplacement: "iframe"
				};
			
</script>
<script data-cfasync="false" async src="https://assets.swarmcdn.com/cross/swarmdetect.js?ver=2.1.1" id="smartvideo_swarmdetect-js"></script>
<link rel="canonical" href="https://sipilpediaacademy.com/webinar/" />
        <style>
            :root{
                --s-loader-border-color-trans: #0eae5720;
                --s-loader-border-color-full: #0eae57;
            }
                        #resend_login_get_passkey{
                background-color: unset;
                border: none;
                color: #333;
                font-weight: 400;
                font-size: 14px;
            }
                    </style>
        <style type="text/css" id="visibility_control_for_learnpress">
        .hidden_to_logged_out, .visible_to_logged_in, .visible_to_member {
            display: none !important;
        }
    </style>
    <script>
        if (typeof jQuery == "function")
        jQuery(document).ready(function() {
            jQuery(window).on("load", function(e) {
                //<![CDATA[
                var hidden_classes = [".hidden_to_logged_out",".visible_to_logged_in",".visible_to_member"];
                //]]>
                jQuery(hidden_classes.join(",")).remove();
            });
        });
    </script>
        <style>
        .ssc-aff-copy-link-formatted .field{
            margin-bottom: 1em;
        }
        .aff-board .ui.ordered.list .list>.item:before, .ui.ordered.list>.item:before, ol.ui.list li:before {
            background-color: #ccc;
            width: 2em;
            height: 2em;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
        }
        .header.aff-name {
            margin-bottom: .5em!important;
        }
    </style>
    <meta name="tec-api-version" content="v1"><meta name="tec-api-origin" content="https://sipilpediaacademy.com"><link rel="alternate" href="https://sipilpediaacademy.com/wp-json/tribe/events/v1/" /><meta name="generator" content="Elementor 3.20.3; features: e_optimized_assets_loading, additional_custom_breakpoints, block_editor_assets_optimize, e_image_loading_optimization; settings: css_print_method-external, google_font-enabled, font_display-auto">
<style>.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style><style type="text/css">
svg { width: 1em; height: 1em; fill: currentColor; display: inline-block; vertical-align: middle; margin-top: -2px; }
body,.site-description{font-family:"Open Sans", sans-serif;}.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6,.site-title{font-family:"Hind Guntur", sans-serif;}.site-navigation { background-color: #dd3333 !important; }.site-navigation.site-navigation-sticky-active { background-color: #dd3333 !important; }.site-navigation-menu, .site-navigation-menu .dropdown-menu, .site-navigation-quicknav, .site-navigation-quicknav .dropdown-menu, .site-navigation-quicknav .form-control { font-size: 1.1rem; }.site-navigation .site-navigation-menu .nav-link { color: #fcfcfc }.site-navigation .site-navigation-menu .nav-link:focus, .site-navigation .site-navigation-menu .nav-link:hover { color: #ffffff }.site-header { text-align: center; }.site-header-overlay { background-color: rgba(255,255,255,0.85); }.ld-shop-item .card { text-align: left; }@media (min-width: 992px) { .site-navigation-brand{ height:40px; } .site-navigation-brand img { height: 40px; margin-top: -5px; } .site-navigation-small .site-navigation-brand img { height: 30px; margin-top: 0; } }
</style>
<link rel="icon" href="https://sipilpediaacademy.com/wp-content/uploads/2020/10/cropped-Favicon-32x32.png" sizes="32x32" />
<link rel="icon" href="https://sipilpediaacademy.com/wp-content/uploads/2020/10/cropped-Favicon-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://sipilpediaacademy.com/wp-content/uploads/2020/10/cropped-Favicon-180x180.png" />
<meta name="msapplication-TileImage" content="https://sipilpediaacademy.com/wp-content/uploads/2020/10/cropped-Favicon-270x270.png" />
        <style>
                .sejolisa-memberarea-menu.ui.inverted.menu{
                    background-color: #ffffff!important;
                }
                .pusher.sejolisa-memberarea-content{
                    background-color: !important;
                }
                .ui.segment{
                    margin:0;
                }
                .ui.teal.button, .ui.teal.buttons .button{
                    background-color: !important;
                }
                            @media (min-width: 783px) {
                .sejolisa-memberarea-menu.ui.visible.left.sidebar ~ .pusher.sejolisa-memberarea-content{
                    margin-left: 300px;
                }
                
                .ui.inverted.menu .item, .ui.inverted.menu .item>a:not(.ui){
                    color: !important;
                }
                .ui.left.sidebar, .ui.right.sidebar{
                    width: 300px!important;
                }
            }
                    @media (max-width:782px){
                .sejolisa-menubars{
                    display: none!important;
                }
                .sejolisa-memberarea-menu.ui.visible.left.sidebar ~ .pusher.sejolisa-memberarea-content{
                    margin-left: 0px!important;
                }
            }
                    @media (max-width: 782px) {
                                    .ui.left.visible.sidebar, .ui.right.visible.sidebar{
                        width: 260px!important;
                    }
                                .sejolisa-memberarea-menu.ui.uncover.visible.left.sidebar ~ .pusher:after{
                    left: 300px!important;
                }
            }
        </style>
                    <style>
                .sejolisa-memberarea-menu.ui.menu .item.header-menu, .ui.inverted.menu .item, .ui.inverted.menu .item>a:not(.ui), .master-menu{
                    display: none;
                }
            </style>

                        <style>
                @media (max-width:782px){
                    button.ui.black.icon.button.sidebar-toggle {
                        visibility: hidden;
                    }
                    i.bars.icon {
                        visibility: visible;
                        display: block;
                        width: auto;
                        height: auto!important;
                        padding: 14px 15px;
                        border-radius: 100px;
                        box-shadow: 2px 2px 5px rgba(0,0,0,0.15);
                    }
                    .sidebar-toggle i.bars.icon{
                        background-color: #216fce!important;
                        color: !important;
                    }
                }
            </style>
                        <style>
                @media (max-width:782px){
                    i.bars.icon {
                        position: fixed;
                        z-index: 9;
                    }
                }
            </style>
                        <!-- <style>
            .sejoli.login .ui.stackable.centered.grid{
                display: none!important;
            }
            </style> -->
                        <!-- <style>
            .sejoli.register .ui.stackable.centered.grid{
                display: none!important;
            }
            </style> -->
                        <style>
            .default-sejoli-dashboard{
                display:none;
            }
            </style>
            		<style id="wp-custom-css">
			section.dw-sejoli-access .ui.card .content:last-child, .sejoli.akses .ui.card .content:last-child {
    display: none;
}
section.dw-sejoli-access .ui.card .content h4, .sejoli.akses .ui.card .content h4{
	display: none;
}
section.dw-sejoli-access .ui.card .content:nth-child(2)::before, .sejoli.akses .ui.card .content:nth-child(2)::before{
	content: 'AKSES REKAMAN DAN MATERI DISINI';
	font-size: small;
	font-family: 'Poppins';
	font-weight: 600;
}

.sejoli.akses .item-holder {
    display: none;
}
		</style>
		<style>#wp-admin-bar-sejoli-member-area { display: block !important; } #wp-admin-bar-sejoli-member-area a { padding-left: 15px !important; padding-right: 15px !important; }</style>		<style media="screen">
			#wp-admin-bar-sejoli-member-area { background-color: #179822!important; }
		</style>

		        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>
        <style media="screen">
            .ui.cards.information .ui.card .content, .ui.cards.information.daily .ui.card.orange .content, .ui.cards.information.daily .ui.card.green .content, .ui.cards.information.daily .ui.card.blue .content, .ui.cards.information.daily .ui.card.light-green .content, .ui.cards.information .ui.card {
                background: transparent!important;
            }
            .ui.cards.information .content .header, .ui.cards.information .content.value {
                color: #3a3a3a!important;
                text-align:center!important;
            }
            .ui.basic.segment::-webkit-scrollbar-thumb { background-color: #000000!important; }
            .ui.basic.segment::-webkit-scrollbar-thumb:hover { background-color: #00000050!important; }
            .ui.card.orange.member-today-lead {
                border-top: 3px solid #FF6600!important;
            }
            .ui.card.green.member-today-sales{
                border-top: 3px solid #179822!important;
            }
            .ui.card.blue.member-today-omset{
                border-top: 3px solid #162B9E!important;
            }
            .ui.card.light-green.member-today-commission{
                border-top: 3px solid #40DF10!important;
            }
            body.sejoli-member-area{
                background-color: !important;
            }
            /* desktop Only */
            @media (min-width:783px){
                div.greeting{
                    background-color: #000000!important;
                    color: #ffffff!important;
                }
                div.greeting h2{
                    color: #ffffff!important;
                }
            }
            @media (max-width:782px){
                section.greeting::-webkit-scrollbar-thumb { background-color: #ffffff!important; }
                section.greeting::-webkit-scrollbar-thumb:hover { background-color: #ffffff50!important; }
            }
        </style>
            <style>
        @media (min-width: 483px) {
            .mobile-search {
                display: none!important;
            }
        }
        @media (max-width: 482px) {
            .desktop-search {
                display: none!important;
            }
        }
    </style>
    <script>
        function isDevice(){
        var device = '';
            if(navigator.userAgent.match(/iPhone/i)
            || navigator.userAgent.match(/iPad/i)
            || navigator.userAgent.match(/iPod/i)
            || navigator.userAgent.match(/Android/i) ) {
                device = 'smaui-mweb';
            }else{
                device = 'smaui-web';
            }
            return device;
        }
    </script>
                <style>
                @media (max-width:782px){
                    .ui.left.sidebar, .ui.right.sidebar{
                        width: 260px!important;
                    }
                    .sejolisa-memberarea-menu.ui.uncover.visible.left.sidebar ~ .pusher.sejolisa-memberarea-content{
                        margin-left: 260px!important;
                    }
                    .sejolisa-memberarea-menu.ui.uncover.visible.left.sidebar ~ .pusher:after{
                        left: 260px!important;
                    }
                }
            </style>
        </head>

<body data-rsssl=1 class="page-template page-template-elementor_header_footer page page-id-12614 tribe-no-js ltr elementor-default elementor-template-full-width elementor-kit-5157 elementor-page elementor-page-12614">


<div class="site-wrap">


<div class="site-header-wrapper site-navigation-relative">
  <nav class="navbar bg-primary" data-bs-theme="dark">
	<div class="container">

					<button id="site-navigation-toggler" class="site-navigation-toggler navbar-toggler" type="button">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"/></svg>
			</button>
		
		<a class="site-navigation-brand navbar-brand" href="https://sipilpediaacademy.com/">
							
					</a>

		
					<ul class="site-navigation-quicknav navbar-nav flex-row">
				<li class="nav-item dropdown quicknav-search">
	<a class="nav-link dropdown-toggle" href="#" id="quicknav-search" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"/></svg>
		<body>
    	
  
<?php }else {
	header("Location: login.php");
	exit;
} ?>
	</a>
	<div class="dropdown-menu dropdown-menu-right" aria-labelledby="quicknav-search">
		<div class="px-3 py-2">
			<form role="search" method="get" class="search-form" action="https://sipilpediaacademy.com/">
		<div class="input-group">
			<input type="search" class="form-control search-field" placeholder="Search &hellip;" value="" name="s" aria-label="Search for:" />
			<span class="input-group-append">
				<button type="submit" class="btn btn-secondary search-submit"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"/></svg></button>
			</span>
		</div>
	</form>		</div>
	</div>
</li>
			</ul>
		
	</div>
</nav>

</div>
		<div data-elementor-type="wp-page" data-elementor-id="12614" class="elementor elementor-12614" data-elementor-post-type="page">
						<section class="elementor-section elementor-top-section elementor-element elementor-element-6e181890 elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default" data-id="6e181890" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1ea128bd" data-id="1ea128bd" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-33ff97e0 elementor-widget__width-initial elementor-widget elementor-widget-heading" data-id="33ff97e0" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h1>---KURSUS ROOM---</h1>	
    <H1>  NO.1 DI INDONESIA</H1>	</div>
				</div>
				<div class="elementor-element elementor-element-253a843e elementor-widget elementor-widget-spacer" data-id="253a843e" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-ae068a2 elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="ae068a2" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container has-vivid-cyan-blue-color">
							<p>Tingkatkan Kemampuan di bidang </p>	
            <P> Sipil dengan Para Ahli di Bidangnya</P>					</div>
				</div>
				<div class="elementor-element elementor-element-370861f9 elementor-widget elementor-widget-spacer" data-id="370861f9" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-49da4de2 elementor-widget__width-initial elementor-widget elementor-widget-button" data-id="49da4de2" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a class="elementor-button elementor-button-link elementor-size-md" href="#">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">SEMUA WEBINAR GRATIS !!!</span>
		</span>
					</a>
		</div>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-208158be" data-id="208158be" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
					<div class="elementor-background-overlay"></div>
						<div class="elementor-element elementor-element-28b540ec elementor-widget elementor-widget-image" data-id="28b540ec" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
													<img  width="845" height=" 629" src="web.jpg" alt="" />													</div>
				</div>
				<div class="elementor-element elementor-element-73bb2b67 elementor-widget__width-auto elementor-absolute elementor-view-default elementor-invisible elementor-widget elementor-widget-icon" data-id="73bb2b67" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.4,&quot;sizes&quot;:[]}}" data-widget_type="icon.default">
				<div class="elementor-widget-container">
					<div class="elementor-icon-wrapper">
			<div class="elementor-icon">
						</div>
		</div>
		<div class="shadow  p-3 text-center">
            <h3 class=" ">Hello, <?=$_SESSION['fname']?></h3>
            <a href="logout.php" class="btn btn-warning">
            	Logout
            </a>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-60c247ed elementor-widget__width-auto elementor-absolute elementor-view-default elementor-invisible elementor-widget elementor-widget-icon" data-id="60c247ed" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_direction&quot;:&quot;negative&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.4,&quot;sizes&quot;:[]}}" data-widget_type="icon.default">
				<div class="elementor-widget-container">
					<div class="elementor-icon-wrapper">
			<div class="elementor-icon">
						</div>
		</div>
		
				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
		
				<section class="elementor-section elementor-top-section elementor-element elementor-element-3aacba73 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3aacba73" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-11d2bf53" data-id="11d2bf53" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-491b57b5 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="491b57b5" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-5d417a00" data-id="5d417a00" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-48394f7d elementor-widget elementor-widget-heading" data-id="48394f7d" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h6 class="elementor-heading-title elementor-size-default">A World Full Of Knowledge</h6>		</div>
				</div>
				<div class="elementor-element elementor-element-3e6104bc elementor-widget elementor-widget-heading" data-id="3e6104bc" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Apa yang kamu Dapatkan dari KURSUS ROOM?</h2>		</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-3469994a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3469994a" data-element_type="section">
						<div class="elementor-container elementor-column-gap-wide">
					<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-255e8c4a" data-id="255e8c4a" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-418a3b53 animated-fast elementor-position-top elementor-invisible elementor-widget elementor-widget-image-box" data-id="418a3b53" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="image-box.default">
				<div class="elementor-widget-container">
			<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img decoding="async" width="1200" height="1200" src="https://sipilpediaacademy.com/wp-content/uploads/2020/11/category-04e-7XSWTB8.png" class="attachment-full size-full wp-image-5522" alt="" /></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title">Expert Speaker</h3><p class="elementor-image-box-description">Pemateri Webinar berasal dari kalangan Akademisi dan Praktisi yang Berpengalaman</p></div></div>		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1b197984" data-id="1b197984" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-70545801 animated-fast elementor-position-top elementor-invisible elementor-widget elementor-widget-image-box" data-id="70545801" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="image-box.default">
				<div class="elementor-widget-container">
			<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img decoding="async" width="110" height="113" src="https://sipilpediaacademy.com/wp-content/uploads/2020/11/02-icon-benefit.png" class="attachment-full size-full wp-image-5161" alt="" /></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title">Get Certificates</h3><p class="elementor-image-box-description">Setiap Webinar Peserta akan mendapatkan E Certificae</p></div></div>		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-57bae114" data-id="57bae114" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-dc17970 animated-fast elementor-position-top elementor-invisible elementor-widget elementor-widget-image-box" data-id="dc17970" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="image-box.default">
				<div class="elementor-widget-container">
			<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img loading="lazy" decoding="async" width="110" height="114" src="https://sipilpediaacademy.com/wp-content/uploads/2020/11/03-icon-benefit.png" class="attachment-full size-full wp-image-5162" alt="" /></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title">Sharing &amp; Discussion</h3><p class="elementor-image-box-description">Webinar lebih bersifat Diskusi dan Sharing bertukar Ilmu terkait Teknik Sipil</p></div></div>		</div>
				</div>
					</div>
		</div>
					</div>
		</section>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-6c3bbdeb elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6c3bbdeb" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-554aa2fc" data-id="554aa2fc" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-1618af9b elementor-widget elementor-widget-heading" data-id="1618af9b" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Our Popular WEBINAR</h2>		</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-a545107 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="a545107" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;none&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-9459b6e" data-id="9459b6e" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;none&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-c2ef00d elementor-widget elementor-widget-ucaddon_image_card_carousel" data-id="c2ef00d" data-element_type="widget" data-widget_type="ucaddon_image_card_carousel.default">
				<div class="elementor-widget-container">
			<!-- start Image Card Carousel -->
		<link id='font-awesome-css' href='https://sipilpediaacademy.com/wp-content/plugins/unlimited-elements-for-elementor-premium/assets_libraries/font-awesome5/css/fontawesome-all.min.css' type='text/css' rel='stylesheet' >
		<link id='font-awesome-4-shim-css' href='https://sipilpediaacademy.com/wp-content/plugins/unlimited-elements-for-elementor-premium/assets_libraries/font-awesome5/css/fontawesome-v4-shims.css' type='text/css' rel='stylesheet' >
		<link id='owl-carousel-css' href='https://sipilpediaacademy.com/wp-content/plugins/unlimited-elements-for-elementor-premium/assets_libraries/owl-carousel-new/assets/owl.carousel.css' type='text/css' rel='stylesheet' >

			<style type="text/css">/* widget: Image Card Carousel */

#uc_image_card_carousel_elementor13638{
  min-height:1px;
}

#uc_image_card_carousel_elementor13638 .owl-dots {
overflow:hidden;
display:none !important;
text-align:center;
}

#uc_image_card_carousel_elementor13638 .owl-dot {
border-radius:50%;
display:inline-block;
}

#uc_image_card_carousel_elementor13638 .owl-nav .owl-prev{
    position:absolute;
    display:inline-block;
    text-align:center;
}
#uc_image_card_carousel_elementor13638 .owl-nav .owl-next{
  position:absolute;
  display:inline-block;
  text-align:center;
}

#uc_image_card_carousel_elementor13638 .owl-nav .owl-prev:after{
    content: "←";
}
#uc_image_card_carousel_elementor13638 .owl-nav .owl-next:after{
    content: "→";
}


.uc_dark_carousel *{
	margin:0;
	padding:0;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

.uc_dark_carousel .uc_dark_carousel_box
{
	margin:0 auto;
}

#uc_image_card_carousel_elementor13638 .uc_dark_carousel_container_holder
{
	font-size:14px;
	overflow:hidden;
	position:relative;
	width:100%;
}

.uc_dark_carousel .uc_dark_carousel_content h2
{
	font-size:21px;
}

#uc_image_card_carousel_elementor13638 .uc_dark_carousel_content
{
  display:flex;
  flex-direction:column;
}

#uc_image_card_carousel_elementor13638 .ue-content-bottom
{
  margin-top:auto;
}

#uc_image_card_carousel_elementor13638  .uc_dark_carousel_placeholder
{
  position:relative;
}


#uc_image_card_carousel_elementor13638  .uc_dark_carousel_placeholder img
{
	width:100%;
}

#uc_image_card_carousel_elementor13638 .uc_dark_carousel_content .uc_more_btn {
	display:inline-block;
}

#uc_image_card_carousel_elementor13638 .centered .ue-item{
	border: 3px solid yellow;
}

 
#uc_image_card_carousel_elementor13638 .ue-item {
	opacity: 0.3;
	transform: scale3d(0.8, 0.8, 1);
	transition: all 0.3s ease-in-out;
}

#uc_image_card_carousel_elementor13638 .active.center .ue-item {
	opacity: 1;
	transform: scale3d(1, 1, 1);
	transition: all 0.3s ease-in-out;
}

.ue-item-badge
{
  font-size:11px;
}

#uc_image_card_carousel_elementor13638 .ue-item-badge
{
  position:absolute;
  right:10px;
  top:10px;
}

</style>

			<div class="uc_dark_carousel" style="direction:ltr;" >
   <div class="uc_dark_carousel_box owl-carousel " id="uc_image_card_carousel_elementor13638" >
      <div class="ue-item-holder">
<div class="uc_dark_carousel_container_holder ue-item" >
  
  <div class="uc_dark_carousel_placeholder">
    <a href="https://sipilpediaacademy.com/courses/webinar-series-teknik-sipil/"  target='_blank'><img decoding="async" src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/Struktur.png" alt="Struktur"></a>
      
    	
    
  </div>
  
    <div class="uc_dark_carousel_content" style="">
    
        <a href="https://sipilpediaacademy.com/courses/webinar-series-teknik-sipil/"  target='_blank'>    <h2>STRUKTUR</h2>
    </a>        
        
        <div class="ue-content-bottom"><a class="uc_more_btn " href="https://sipilpediaacademy.com/courses/webinar-series-teknik-sipil/"  target='_blank'>Lihat Webinar</a></div>
      </div>
    </div>
</div>
<div class="ue-item-holder">
<div class="uc_dark_carousel_container_holder ue-item" >
  
  <div class="uc_dark_carousel_placeholder">
    <a href="https://sipilpediaacademy.com/courses/webinar-series-teknik-sipil/"  target='_blank'><img decoding="async" src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/Bahan.png" alt="Bahan"></a>
      
    	
    
  </div>
  
    <div class="uc_dark_carousel_content" style="">
    
        <a href="https://sipilpediaacademy.com/courses/webinar-series-teknik-sipil/"  target='_blank'>    <h2>MATERIAL</h2>
    </a>        
        
        <div class="ue-content-bottom"><a class="uc_more_btn " href="https://sipilpediaacademy.com/courses/webinar-series-teknik-sipil/"  target='_blank'>Lihat Webinar</a></div>
      </div>
    </div>
</div>
<div class="ue-item-holder">
<div class="uc_dark_carousel_container_holder ue-item" >
  
  <div class="uc_dark_carousel_placeholder">
    <a href="https://sipilpediaacademy.com/courses/webinar-series-teknik-sipil/"  target='_blank'><img decoding="async" src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/Geoteknik.png" alt="Geoteknik"></a>
      
    	
    
  </div>
  
    <div class="uc_dark_carousel_content" style="">
    
        <a href="https://sipilpediaacademy.com/courses/webinar-series-teknik-sipil/"  target='_blank'>    <h2>GEOTEKNIK</h2>
    </a>        
        
        <div class="ue-content-bottom"><a class="uc_more_btn " href="https://sipilpediaacademy.com/courses/webinar-series-teknik-sipil/"  target='_blank'>Lihat Webinar</a></div>
      </div>
    </div>
</div>
<div class="ue-item-holder">
<div class="uc_dark_carousel_container_holder ue-item" >
  
  <div class="uc_dark_carousel_placeholder">
    <a href="https://sipilpediaacademy.com/courses/webinar-series-teknik-sipil/"  target='_blank'><img decoding="async" src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/Manajemen.png" alt="Manajemen"></a>
      
    	
    
  </div>
  
    <div class="uc_dark_carousel_content" style="">
    
        <a href="https://sipilpediaacademy.com/courses/webinar-series-teknik-sipil/"  target='_blank'>    <h2>MANAJEMEN</h2>
    </a>        
        
        <div class="ue-content-bottom"><a class="uc_more_btn " href="https://sipilpediaacademy.com/courses/webinar-series-teknik-sipil/"  target='_blank'>Lihat Webinar</a></div>
      </div>
    </div>
</div>
<div class="ue-item-holder">
<div class="uc_dark_carousel_container_holder ue-item" >
  
  <div class="uc_dark_carousel_placeholder">
    <a href="https://sipilpediaacademy.com/courses/webinar-series-teknik-sipil/"  target='_blank'><img decoding="async" src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/Jembatan.png" alt="Jembatan"></a>
      
    	
    
  </div>
  
    <div class="uc_dark_carousel_content" style="">
    
        <a href="https://sipilpediaacademy.com/courses/webinar-series-teknik-sipil/"  target='_blank'>    <h2>JEMBATAN</h2>
    </a>        
        
        <div class="ue-content-bottom"><a class="uc_more_btn " href="https://sipilpediaacademy.com/courses/webinar-series-teknik-sipil/"  target='_blank'>Lihat Webinar</a></div>
      </div>
    </div>
</div>
<div class="ue-item-holder">
<div class="uc_dark_carousel_container_holder ue-item" >
  
  <div class="uc_dark_carousel_placeholder">
    <a href="https://sipilpediaacademy.com/courses/webinar-series-teknik-sipil/"  target='_blank'><img decoding="async" src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/Jalan.png" alt="Jalan"></a>
      
    	
    
  </div>
  
    <div class="uc_dark_carousel_content" style="">
    
        <a href="https://sipilpediaacademy.com/courses/webinar-series-teknik-sipil/"  target='_blank'>    <h2>JALAN</h2>
    </a>        
        
        <div class="ue-content-bottom"><a class="uc_more_btn " href="https://sipilpediaacademy.com/courses/webinar-series-teknik-sipil/"  target='_blank'>Lihat Webinar</a></div>
      </div>
    </div>
</div>
<div class="ue-item-holder">
<div class="uc_dark_carousel_container_holder ue-item" >
  
  <div class="uc_dark_carousel_placeholder">
    <a href="https://sipilpediaacademy.com/courses/webinar-series-teknik-sipil/"  target='_blank'><img decoding="async" src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/BIM.png" alt="BIM"></a>
      
    	
    
  </div>
  
    <div class="uc_dark_carousel_content" style="">
    
        <a href="https://sipilpediaacademy.com/courses/webinar-series-teknik-sipil/"  target='_blank'>    <h2>BIM</h2>
    </a>        
        
        <div class="ue-content-bottom"><a class="uc_more_btn " href="https://sipilpediaacademy.com/courses/webinar-series-teknik-sipil/"  target='_blank'>Lihat Webinar</a></div>
      </div>
    </div>
</div>
<div class="ue-item-holder">
<div class="uc_dark_carousel_container_holder ue-item" >
  
  <div class="uc_dark_carousel_placeholder">
    <a href="https://sipilpediaacademy.com/courses/webinar-series-teknik-sipil/"  target='_blank'><img decoding="async" src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/SDA.png" alt="SDA"></a>
      
    	
    
  </div>
  
    <div class="uc_dark_carousel_content" style="">
    
        <a href="https://sipilpediaacademy.com/courses/webinar-series-teknik-sipil/"  target='_blank'>    <h2>SDA</h2>
    </a>        
        
        <div class="ue-content-bottom"><a class="uc_more_btn " href="https://sipilpediaacademy.com/courses/webinar-series-teknik-sipil/"  target='_blank'>Lihat Webinar</a></div>
      </div>
    </div>
</div>

   </div>
</div>
			<!-- end Image Card Carousel -->		</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-275f61b5 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="275f61b5" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-95ed515" data-id="95ed515" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-f9e192c elementor-widget__width-inherit elementor-absolute elementor-widget elementor-widget-image" data-id="f9e192c" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
										
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-78575e99 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="78575e99" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-76d64360" data-id="76d64360" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
					<div class="elementor-background-overlay"></div>
						<div class="elementor-element elementor-element-6f422e3 elementor-invisible elementor-widget elementor-widget-image" data-id="6f422e3" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
													<img loading="lazy" decoding="async" width="340" height="420" src="SIPIL.jfif" alt="" />													</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-15cdc35f elementor-invisible" data-id="15cdc35f" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-64e27ac2 elementor-widget elementor-widget-heading" data-id="64e27ac2" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Menjadi Pemateri, Berbagi Ilmu dan Kebahagiaan</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-6e060506 elementor-widget elementor-widget-spacer" data-id="6e060506" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-20b41800 elementor-widget elementor-widget-text-editor" data-id="20b41800" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<p>Ayo bersama kami untuk Berbagi Ilmu dan Sharing Pengalaman di bidang Teknik SIpil</p>						</div>
				</div>
				<div class="elementor-element elementor-element-2ce1ad8b elementor-widget elementor-widget-spacer" data-id="2ce1ad8b" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-148e5ef5 elementor-widget elementor-widget-button" data-id="148e5ef5" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a class="elementor-button elementor-button-link elementor-size-sm" href="https://link.sipilpedia.com/Pembicara" target="_blank">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Become a Speaker</span>
		</span>
					</a>
		</div>
				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-3babbb60 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="3babbb60" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-555a7d5a" data-id="555a7d5a" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-37359247 elementor-invisible elementor-widget elementor-widget-heading" data-id="37359247" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Ayo Belajar Bersama Kami</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-e33fe8f elementor-invisible elementor-widget elementor-widget-text-editor" data-id="e33fe8f" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<p>Kita Belajar, Sharing, Diskusi Bersama tentang Dunia Teknik Sipil</p>						</div>
				</div>
				<div class="elementor-element elementor-element-6c83374a elementor-invisible elementor-widget elementor-widget-text-editor" data-id="6c83374a" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<p>Engineer Indonesia dari berbagai Latar Belakang seperti Mahasiswa, Dosen, PU, Konsultan, Kontraktor, Developer, dan lainnya Sharing dan Berdiskusi di Webinar Series Teknik Sipil</p>						</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-3e51ca19 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3e51ca19" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-6f5b54da elementor-invisible" data-id="6f5b54da" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:&quot;100&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-1adc5aec elementor-widget elementor-widget-counter" data-id="1adc5aec" data-element_type="widget" data-widget_type="counter.default">
				<div class="elementor-widget-container">
					<div class="elementor-counter">
			<div class="elementor-counter-number-wrapper">
				<span class="elementor-counter-number-prefix"></span>
				<span class="elementor-counter-number" data-duration="2000" data-to-value="66" data-from-value="0" data-delimiter=",">0</span>
				<span class="elementor-counter-number-suffix"></span>
			</div>
							<div class="elementor-counter-title">SESSION</div>
					</div>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-7a129b31 elementor-hidden-phone elementor-invisible" data-id="7a129b31" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:&quot;200&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-10818c86 elementor-widget elementor-widget-spacer" data-id="10818c86" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-7782a202 elementor-invisible" data-id="7782a202" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:&quot;100&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-3d0c7c1a elementor-widget elementor-widget-counter" data-id="3d0c7c1a" data-element_type="widget" data-widget_type="counter.default">
				<div class="elementor-widget-container">
					<div class="elementor-counter">
			<div class="elementor-counter-number-wrapper">
				<span class="elementor-counter-number-prefix"></span>
				<span class="elementor-counter-number" data-duration="2000" data-to-value="38362" data-from-value="0" data-delimiter=",">0</span>
				<span class="elementor-counter-number-suffix"></span>
			</div>
							<div class="elementor-counter-title">PESERTA</div>
					</div>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-7460122f elementor-hidden-phone elementor-invisible" data-id="7460122f" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:&quot;200&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-1f9ae210 elementor-widget elementor-widget-spacer" data-id="1f9ae210" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-5740dac3 elementor-invisible" data-id="5740dac3" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:&quot;100&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-7a07f00e elementor-widget elementor-widget-counter" data-id="7a07f00e" data-element_type="widget" data-widget_type="counter.default">
				<div class="elementor-widget-container">
					<div class="elementor-counter">
			<div class="elementor-counter-number-wrapper">
				<span class="elementor-counter-number-prefix"></span>
				<span class="elementor-counter-number" data-duration="2000" data-to-value="63" data-from-value="0" data-delimiter=",">0</span>
				<span class="elementor-counter-number-suffix"></span>
			</div>
							<div class="elementor-counter-title">PEMATERI</div>
					</div>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-1d2c1906 elementor-hidden-phone elementor-invisible" data-id="1d2c1906" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:&quot;100&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-72293665 elementor-widget elementor-widget-spacer" data-id="72293665" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-inner-column elementor-element elementor-element-6a02ccfb elementor-invisible" data-id="6a02ccfb" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:&quot;100&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-40832ae9 elementor-widget elementor-widget-counter" data-id="40832ae9" data-element_type="widget" data-widget_type="counter.default">
				<div class="elementor-widget-container">
					<div class="elementor-counter">
			<div class="elementor-counter-number-wrapper">
				<span class="elementor-counter-number-prefix"></span>
				<span class="elementor-counter-number" data-duration="2000" data-to-value="16000" data-from-value="0" data-delimiter=",">0</span>
				<span class="elementor-counter-number-suffix">+</span>
			</div>
							<div class="elementor-counter-title">ENGINEERS</div>
					</div>
				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<div class="elementor-element elementor-element-4b330f1c elementor-widget elementor-widget-spacer" data-id="4b330f1c" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-70cfd6ff elementor-align-center elementor-mobile-align-justify elementor-widget elementor-widget-button" data-id="70cfd6ff" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a class="elementor-button elementor-button-link elementor-size-md elementor-animation-float" href="tamplate.html">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">View All Webinar</span>
		</span>
					</a>
		</div>
				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-954311f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="954311f" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8d0173d" data-id="8d0173d" data-element_type="column">
			<div class="elementor-widget-wrap">
							</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-1485f4e9 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1485f4e9" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3537dd50" data-id="3537dd50" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-13d39352 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="13d39352" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-283afa76" data-id="283afa76" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-430e9faa elementor-widget elementor-widget-heading" data-id="430e9faa" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			
				</div>
				<div class="elementor-element elementor-element-96e45f3 elementor-widget-mobile__width-auto elementor-widget elementor-widget-ucaddon_owl_sliding_thumbs_gallery" data-id="96e45f3" data-element_type="widget" data-widget_type="ucaddon_owl_sliding_thumbs_gallery.default">
				<div class="elementor-widget-container">
			<!-- start Thumbnail Slider -->

			<style type="text/css">/* widget: Thumbnail Slider */

#uc_owl_sliding_thumbs_gallery_elementor25265{
  min-height:1px;
}

#uc_owl_sliding_thumbs_gallery_elementor25265 .owl-carousel .owl-wrapper-outer {
 direction: ltr;
}

#uc_owl_sliding_thumbs_gallery_elementor25265 .owl-carousel .owl-item {
}

#uc_owl_sliding_thumbs_gallery_elementor25265 .owl-theme .owl-controls .owl-buttons div {
    color: black;
    display: inline-block;
    /* zoom: 1; */
    *: ;
    display: inline;
    font-size: 12px;
    border-radius: 30px; 
    background: #869791; 
    filter: Alpha(Opacity=50);
    opacity: 0.5;
    border-style: solid;
    border-width: 1px;
}

#uc_owl_sliding_thumbs_gallery_elementor25265 .uc-carousel-sync1 .item{
    color: #FFF;
    text-align: center;
    overflow:hidden;
   
}
#uc_owl_sliding_thumbs_gallery_elementor25265 .uc-carousel-sync2 .item{
    color: #FFF;
    text-align: center;
    cursor: pointer;
}

.itemTitle
{
  font-size:32px;
}


#uc_owl_sliding_thumbs_gallery_elementor25265 .itemLink a
{
  display:inline-block;
  text-align:center;
  text-decoration:none;
  transition:0.3s;
}

#uc_owl_sliding_thumbs_gallery_elementor25265 .uc-carousel-slider-thumbs-wrapper .owl-item
{
  opacity:;
}


#uc_owl_sliding_thumbs_gallery_elementor25265 .uc-carousel-slider-thumbs-wrapper .owl-item.synced
{
  opacity:1;
}

#uc_owl_sliding_thumbs_gallery_elementor25265 .ue-item-overlay
{
  position:absolute;
  top:0;
  bottom:0;
  left:0;
  right:0;
  width:100%;
  height:100%;
  z-index:0;
}

#uc_owl_sliding_thumbs_gallery_elementor25265 .ue-item-container
{
  position:relative;
}

#uc_owl_sliding_thumbs_gallery_elementor25265 .ue-thumb
{
  display:flex;
  justify-content:center;
  align-items:center;
}

.itemThumbTitle
{
  transition:0.3s;
}



#uc_owl_sliding_thumbs_gallery_elementor25265 .owl-nav .owl-prev{
    position:absolute;
    display:inline-block;
    text-align:center;
}
#uc_owl_sliding_thumbs_gallery_elementor25265 .owl-nav .owl-next{
  position:absolute;
  display:inline-block;
  text-align:center;
}

#uc_owl_sliding_thumbs_gallery_elementor25265 .ue-thumb-holder
{
  display:block;
}

</style>

			<

</div>
			<!-- end Thumbnail Slider -->		</div>
				</div>
					</div>
		</div>
					</div>
		</section>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-5d75ce97 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5d75ce97" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5ae21716" data-id="5ae21716" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-18bab8ab elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="18bab8ab" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-eef05eb" data-id="eef05eb" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-681863e elementor-widget__width-initial elementor-widget elementor-widget-heading" data-id="681863e" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Kami juga berKolaborasi dengan Institusi dan Asosiasi</h2>		</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-619bda08 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="619bda08" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-34fb0720" data-id="34fb0720" data-element_type="column">
			<div class="elementor-widget-wrap">
							</div>
		</div>
					</div>
		</section>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-b84d3f3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b84d3f3" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-482dd3d" data-id="482dd3d" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-4013e98 elementor-widget elementor-widget-ucaddon_logo_carousel" data-id="4013e98" data-element_type="widget" data-widget_type="ucaddon_logo_carousel.default">
				<div class="elementor-widget-container">
			<!-- start Logo Carousel -->

			<style type="text/css">/* widget: Logo Carousel */

#uc_logo_carousel_elementor38886{
  min-height:1px;
}

#uc_logo_carousel_elementor38886 *{
  box-sizing:border-box;
}

#uc_logo_carousel_elementor38886 .owl-nav .owl-prev{
    position:absolute;
    left:-90px;
    display:inline-block;
    text-align:center;
}
#uc_logo_carousel_elementor38886 .owl-nav .owl-next{
  position:absolute;
    right:-90px;
  display:inline-block;
  text-align:center;
}


#uc_logo_carousel_elementor38886 .owl-dots {
overflow:hidden;
display:none !important;
text-align:center;
}

#uc_logo_carousel_elementor38886 .owl-dot {
border-radius:50%;
display:inline-block;
}


#uc_logo_carousel_elementor38886{
	text-align: center;
  position:relative;
}
#uc_logo_carousel_elementor38886 .uc_logo_carousel_holder{
    display:flex;
    align-items: center;
    justify-content:center;
    flex-wrap: wrap;
    width: 100%;
}
#uc_logo_carousel_elementor38886 .uc_logo_carousel_holder a
{height:100%;
    width: 100%;
  display:flex;
  align-items: center;
    justify-content:center;
}

#uc_logo_carousel_elementor38886  img{
    height:100%;
    width: 100%;
    object-fit: contain;
}




</style>

			<div class="uc_logo_carousel"  style="direction:ltr;">
   <div class="uc_carousel owl-carousel owl-theme " id="uc_logo_carousel_elementor38886" >
   		<div>
    
    <div class="uc_logo_carousel_holder ue-item">
          <a href="#" >
          <img loading="lazy" decoding="async" src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/WhatsApp-Image-2020-12-11-at-07.08.47.jpeg"  src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/WhatsApp-Image-2020-12-11-at-07.08.47.jpeg" alt="WhatsApp Image 2020-12-11 at 07.08" width="250" height="250" >
          </a>
    </div>
	
      
</div>
<div>
    
    <div class="uc_logo_carousel_holder ue-item">
          <a href="#" >
          <img loading="lazy" decoding="async" src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/logo_issc.png"  src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/logo_issc.png" alt="logo_issc" width="1280" height="198" >
          </a>
    </div>
	
      
</div>
<div>
    
    <div class="uc_logo_carousel_holder ue-item">
          <a href="#" >
          <img loading="lazy" decoding="async" src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/AoG.png"  src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/AoG.png" alt="AoG" width="4269" height="4269" >
          </a>
    </div>
	
      
</div>
<div>
    
    <div class="uc_logo_carousel_holder ue-item">
          <a href="#" >
          <img loading="lazy" decoding="async" src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/LOGO-KMKKI.png"  src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/LOGO-KMKKI.png" alt="LOGO KMKKI" width="583" height="583" >
          </a>
    </div>
	
      
</div>
<div>
    
    <div class="uc_logo_carousel_holder ue-item">
          <a href="#" >
          <img loading="lazy" decoding="async" src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/WhatsApp-Image-2021-08-03-at-13.11.55.jpeg"  src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/WhatsApp-Image-2021-08-03-at-13.11.55.jpeg" alt="WhatsApp Image 2021-08-03 at 13.11" width="425" height="425" >
          </a>
    </div>
	
      
</div>
<div>
    
    <div class="uc_logo_carousel_holder ue-item">
          <a href="#" >
          <img loading="lazy" decoding="async" src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/WhatsApp-Image-2020-10-13-at-16.08.39.jpeg"  src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/WhatsApp-Image-2020-10-13-at-16.08.39.jpeg" alt="WhatsApp Image 2020-10-13 at 16.08" width="1094" height="589" >
          </a>
    </div>
	
      
</div>
<div>
    
    <div class="uc_logo_carousel_holder ue-item">
          <a href="#" >
          <img loading="lazy" decoding="async" src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/HMS_400x400.jpg"  src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/HMS_400x400.jpg" alt="HMS_400x400" width="400" height="400" >
          </a>
    </div>
	
      
</div>
<div>
    
    <div class="uc_logo_carousel_holder ue-item">
          <a href="#" >
          <img loading="lazy" decoding="async" src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/HMS-UNS.jpg"  src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/HMS-UNS.jpg" alt="HMS UNS" width="900" height="739" >
          </a>
    </div>
	
      
</div>
<div>
    
    <div class="uc_logo_carousel_holder ue-item">
          <a href="#" >
          <img loading="lazy" decoding="async" src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/Graphic1.jpg"  src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/Graphic1.jpg" alt="Graphic1" width="1598" height="1600" >
          </a>
    </div>
	
      
</div>
<div>
    
    <div class="uc_logo_carousel_holder ue-item">
          <a href="#" >
          <img loading="lazy" decoding="async" src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/2022-01-05-SSI-Logo-BW.jpg"  src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/2022-01-05-SSI-Logo-BW.jpg" alt="2022-01-05 - SSI Logo - B&amp;W" width="1930" height="1672" >
          </a>
    </div>
	
      
</div>
<div>
    
    <div class="uc_logo_carousel_holder ue-item">
          <a href="#" >
          <img loading="lazy" decoding="async" src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/0-01.png"  src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/0-01.png" alt="0-01" width="655" height="165" >
          </a>
    </div>
	
      
</div>
<div>
    
    <div class="uc_logo_carousel_holder ue-item">
          <a href="#" >
          <img loading="lazy" decoding="async" src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/cortec-1.png"  src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/cortec-1.png" alt="cortec (1)" width="500" height="171" >
          </a>
    </div>
	
      
</div>
<div>
    
    <div class="uc_logo_carousel_holder ue-item">
          <a href="#" >
          <img loading="lazy" decoding="async" src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/preogresi-logo-quote-min-1024x1024-1.png"  src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/preogresi-logo-quote-min-1024x1024-1.png" alt="preogresi-logo-quote-min-1024x1024" width="1024" height="1024" >
          </a>
    </div>
	
      
</div>
<div>
    
    <div class="uc_logo_carousel_holder ue-item">
          <a href="#" >
          <img loading="lazy" decoding="async" src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/logo-bumiyasa.png"  src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/logo-bumiyasa.png" alt="logo bumiyasa" width="1908" height="2280" >
          </a>
    </div>
	
      
</div>
<div>
    
    <div class="uc_logo_carousel_holder ue-item">
          <a href="#" >
          <img loading="lazy" decoding="async" src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/sst-logo.png"  src="https://sipilpediaacademy.com/wp-content/uploads/2022/03/sst-logo.png" alt="sst-logo" width="400" height="400" >
          </a>
    </div>
	
      
</div>

   </div>	
</div>
			<!-- end Logo Carousel -->		</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-179c32b0 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="179c32b0" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-58c118e" data-id="58c118e" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-4c38bb4a elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="4c38bb4a" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-6f26a17b" data-id="6f26a17b" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
					<div class="elementor-background-overlay"></div>
						<div class="elementor-element elementor-element-17b93a98 elementor-widget elementor-widget-heading" data-id="17b93a98" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Apa Kata Para Engineer Tentang Sipilpedia Academy</h2>		</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-22b8d2bc elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="22b8d2bc" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-50267540" data-id="50267540" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-938c36b elementor-widget elementor-widget-html" data-id="938c36b" data-element_type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
			<div id='ndrsl-6244ebad09bfc44b15cfe174' class='ndrsl-widget '></div>		</div>
				</div>
					</div>
		</div>
					</div>
		</section>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-7148276 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7148276" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-69f796c" data-id="69f796c" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-228cda7 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="228cda7" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-7211b47" data-id="7211b47" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
					<div class="elementor-background-overlay"></div>
						<div class="elementor-element elementor-element-08c72e6 elementor-widget elementor-widget-ucaddon_typewriter_text_effect" data-id="08c72e6" data-element_type="widget" data-widget_type="ucaddon_typewriter_text_effect.default">
				<div class="elementor-widget-container">
			<!-- start Typewriter Text Effect -->
			<style type="text/css">/* widget: Typewriter Text Effect */

#uc_typewriter_text_effect_elementor40320
{
  text-align:center;
}

</style>

			<div id="uc_typewriter_text_effect_elementor40320">
  <span class="begining_text" style="color:#000000;">Terimakasih untuk </span> 
  <span class="uc-typewriter-element" style="color:#0410FF;">436 </span>  
  <span class="ending_text" style="color:#000000;">Donatur </span> 
</div>

<!-- end of typewriter widget -->
			<!-- end Typewriter Text Effect -->		</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-1b6ba16 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="1b6ba16" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-cf73621" data-id="cf73621" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;none&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-0dc40ad elementor-widget elementor-widget-ucaddon_marquee" data-id="0dc40ad" data-element_type="widget" data-widget_type="ucaddon_marquee.default">
				<div class="elementor-widget-container">
			<!-- start Text Marquee Effect -->
			<style type="text/css">/* widget: Text Marquee Effect */

#uc_marquee_elementor51395  {
    white-space: nowrap;
    overflow: hidden;
    box-sizing: border-box;
    margin:0 auto;
}

#uc_marquee_elementor51395 div.marquee_text {
    display: inline-block;
  
    
	padding-left: 100%;
    animation: marquee 200s linear infinite;  
	

 	
    

    
}
@keyframes marquee {
    0%   { transform: translate(0, 0); }
    100% { transform: translate(-100%, 0); }
}

@keyframes marquee_flip {
  	0% { transform: translate(-100%, 0); }
    100%   { transform: translate(0, 0); }
    
}

#uc_marquee_elementor51395 a
{
  text-decoration:none;
}

</style>

			<div class="ue_marquee" id="uc_marquee_elementor51395">
<div class="marquee_text">
  <a href="#" >	
    Abd. Jasari Sofyaun Abdan Sakha Syakura Abdul Haris Abdul hasyim abdul rahman jalil Abi Naras Shandy Abubakar h kadjidjo Achfas Zacoeb Achmad Bilal Ngumar Achmad Djunaidi, ST Achmad taufik Ade Faisal Aditya Yudy Anggoro, ST. Adityo budi Adrian Priyan Afif Bagus Ansori Afif Maolana Ageng Bekti Prakoso agnes luvena agung Agung Budi Hidayat Agus Ilhamy Agus Salim Agustana Agustinus atuh Ahadiar Rahman Ahmad Mukhlish Ahmad Shohibuddaroini Ahmad Solihin Ahmad yani Aji Sodikin Ajie Setiajie Akbar Alif Akhmudiyanto Aksan Alan Alexander Sihombing Alfha Lee Hikmah Ali Syaputra Amarudin ANANG ROKIM Andi Muflih Marsuq Muthaher Andik dwi yulianto Andri Arthono Andri yunan pratama Andriani Satriawan Andrisman Satria Andy Krisna angga Anggi nurbana ANID SUPRIYADI Anis Annin Hudaya Stadin Anrizal Anto esta Anugerah Kornelius s. Anwar jumadi Anwar Subianto Ardi Anolu Ardi Palin Ardian Nor Ardika Saputra Ari Ambada Ari Kurniawan Ari Supriatna Arief Fath Atiya Arief gunawan ARIEF WIBOWO, ST Arif Hariyadi Arif Hidayat Arif Rahman Putranto Ariningsih Suprapti aris ariyadi Aris Dwi Anggara Arjun Asep Nuralam Ashar Rahmadi Ashari Awaluddin Awaluddin Saptarengga Badaruddin Kahar Bakti Sulistyo Bambang Dwi Ariyanto Bambang Hadibroto Bambang Priyo. S Baso Suriyadi Basri Mustakim Abidin BASTIAN Bayu Muhamad Taufik BAYU YUNIANTO Benny Bakri Binsar Hutagalung Boedya Djatmika Bondan Satria Budi Budi Setiawan Calvin Camellia Nazir, ST, MT Carter Kandou Christian juniarto Dadang Pratisto Danang Adi Setiaji Dannar Dar Dasril datta Datta Widawardhana Davy R Dede Supriyatna
  </a>	
</div>
</div>
			<!-- end Text Marquee Effect -->		</div>
				</div>
				<div class="elementor-element elementor-element-1b7d1c9 elementor-widget elementor-widget-ucaddon_marquee" data-id="1b7d1c9" data-element_type="widget" data-widget_type="ucaddon_marquee.default">
				<div class="elementor-widget-container">
			<!-- start Text Marquee Effect -->
			<style type="text/css">/* widget: Text Marquee Effect */

#uc_marquee_elementor65728  {
    white-space: nowrap;
    overflow: hidden;
    box-sizing: border-box;
    margin:0 auto;
}

#uc_marquee_elementor65728 div.marquee_text {
    display: inline-block;
  
    
	padding-left: 100%;
    animation: marquee 200s linear infinite;  
	

 	
    

    
}
@keyframes marquee {
    0%   { transform: translate(0, 0); }
    100% { transform: translate(-100%, 0); }
}

@keyframes marquee_flip {
  	0% { transform: translate(-100%, 0); }
    100%   { transform: translate(0, 0); }
    
}

#uc_marquee_elementor65728 a
{
  text-decoration:none;
}

</style>

			<div class="ue_marquee" id="uc_marquee_elementor65728">
<div class="marquee_text">
  <a href="#" >	
    Dedi Rachmawan Della Amelia Della Nashir Pradana Deni Ardiansyah Denise Evanitania Destri Desviana Maspaitella Desy Trisnasari Devlin Tedy Dian Novitasari DIAN RACHDIANTO diarto trisnoyuwono Didik Yulianto Dikky Hidayat Dimas Maulana Syirodjudin Doddy Doni Rinaldi Basri Dr. Devi Oktaviana Latif,ST., M.Eng Dr. Livian Teddy, ST.,MT Dr. Wiwid Suryono, MM Draga Hasan Saputra Dwiana Fitriani Dwie agus s Dwijayanto Pribadi Eddy Ristanto Eddy susanto jo Edi effendi Eduardo K. Edulan Edward Van Martino Edwin Edy Purwanto Egga Eka YudhaIrawan Eko Eko agus priyono Eko Sudarmono Eko susanto Eko Walujodjati, ST, MT Elvin Hery Susanto Elyf Fendi Erik Sunarya, S.T., M.S. Erik Tjandra Widjaksono Ermitha Ery Agung Ettim dwi yoga Eva Rita Evan cornelius Evan Suhendra F Pungky Pramesti Fahri Hamzah fandi novianto Faqih M Fathur Rumatiga Faza Ramadhani Fazrai ari habibi Febriyani Sofyan Feby Ilham Ramadhan Fery Riswanto Firdaus Bagus Alya Frans Rabung Fuad Harwadi Galuh Dwi Raharjo Geni Firuliadhim Gunawan Guspita Gusti Sudika Habiburrahman Hafid hasan badri Hamzah handoko Handy Wibowo Harist Syahier Hasmar Halim Hedy Sarunan, S.T. Helmi Fadlilah Hendra Saputra hendra saputra Hendra Teh Hendry Zacharias Hengki Muliawan Silalahi Henky Joseph Herdiana Mutmainah Herri Purwanto Herry Widhiarto Hery khuandong Hery susanto Husni Hasibuan I Gede Yohan Kafrain I GUSTI AYU SWASTI ASTUTI I GUSTI NGURAH EKA PARTAMA I Made Junaedi I wayan adiyana I Wayan Artana IHWAN NUSUR Ika apriyani Ikhwan Ramadhianto Ilham Purwanto Ilham Syahidul Akbar ILMUDDIN Imam Agung Baskoro Iman Hari Pramono Inanda Andita M Indrawan Indrawati Sumeru Indriati Martha Patuti Ir Muhammad Arfan MT Ir Parulian Marpaung, M.M Ir. Bambang Periambodo, ST Ir. Bing Santosa, M.T.
  </a>	
</div>
</div>
			<!-- end Text Marquee Effect -->		</div>
				</div>
				<div class="elementor-element elementor-element-1269d54 elementor-widget elementor-widget-ucaddon_marquee" data-id="1269d54" data-element_type="widget" data-widget_type="ucaddon_marquee.default">
				<div class="elementor-widget-container">
			<!-- start Text Marquee Effect -->
			<style type="text/css">/* widget: Text Marquee Effect */

#uc_marquee_elementor78947  {
    white-space: nowrap;
    overflow: hidden;
    box-sizing: border-box;
    margin:0 auto;
}

#uc_marquee_elementor78947 div.marquee_text {
    display: inline-block;
  
    
	padding-left: 100%;
    animation: marquee 200s linear infinite;  
	

 	
    

    
}
@keyframes marquee {
    0%   { transform: translate(0, 0); }
    100% { transform: translate(-100%, 0); }
}

@keyframes marquee_flip {
  	0% { transform: translate(-100%, 0); }
    100%   { transform: translate(0, 0); }
    
}

#uc_marquee_elementor78947 a
{
  text-decoration:none;
}

</style>

			<div class="ue_marquee" id="uc_marquee_elementor78947">
<div class="marquee_text">
  <a href="#" >	
    Ir. Dadang Pratisto Ir. Herman Tanri Ir. Oey Tjie Hui, M.T Ir. Sudiono Daslim, ST., MT. Ir. Zainuddin, MT Ir.Sugianto, ST.,M.Si Irana Zahirah Widyasih Irfan Anshari Ismail Batara Iwan Kusumo Diharjo Jabar NurSani Jamal Mahbub Jamaluddin bangki Jawara Ali Muhammad Harahap Jefri Hasgian Jefri tarigan Jerry Atmaja Johan Puspowardojo Johanes Boma Pasaribu Joni Hermanto Joris Titus Jubinardo purba Juli Hendrianto JULTAVIA ELBACH, ST.,MM Jwantoro Kamal Fitri Kartika nur rahma putri Kartika Purwitasari Khairunnisa Masturoh Kirman Kodrat insany taqwim Komarudin Kresno N Soetomo Kris Bintoro LA HARUDI La Rahman Lani Maruta Lintang Gumilang luciana Luciana Buarlele Lulu Mumtaza Kaysa Lutfi Dwi Rahardian M Ircham Bagus T M Rizki R C M Zainal Zahari M. Agphin Ramadhan M. Husnal Yudian M. YUNUS NASRULLAH M.sang gumilar Mahfuddin Marsiano Marthen Lomi Marwan Bahruddin Nawer MARWIJI Masdar M. Syam Meiborn Simanjuntak., S.T., M.T. Moch. Luqman A Moga Kriya Gularsa Mohammad Komarudin Mohd Isneini Muchamad Taufik Muh Aswi Muhammad abror abyyu Muhammad Arif Yusry Muhammad Diaz Ariansyah Muhammad Irwansyah Muhammad Jusar Muhammad Kalifardi Muhammad Khidir Muhammad Kholidun muhammad rivaat Muhammad Rizally MUHAMMAD SYAIFULLAH Muhammad Thaahaa Muhammad Ujianto Muhammad widhijono santjoko, ST Muhammad Yahdiman Muhammad Yani Muhammad zaenal muttaqin Muhammad Zulkifli Harahap Muhardi Mukhlisya Dewi Ratna Putri Murdiyono Musa Abdul Jabbar Muslih Mustaqim rizzal Muttaqin Nanda Weri Viana Nasher andi Nasir Ibrahim T Nelly Hartati Ni Nyoman Yulya Larantika,ST. Nofita harwin Norman W. A. Supit Nugraha adi putra Nur Ramadhan Nurul Kurniawan, S.Pd Nusada putra Nyoman Pande Kurniawan Okty Diana Wulan Sari, ST., MS Perdiansyah perdipo Petrus Marpaung Prajapati Utomo Prasetyo Indra Sasmito prastiwo anggoro Puryanto Putu Resika Qurotul Aini
  </a>	
</div>
</div>
			<!-- end Text Marquee Effect -->		</div>
				</div>
				<div class="elementor-element elementor-element-632d114 elementor-widget elementor-widget-ucaddon_marquee" data-id="632d114" data-element_type="widget" data-widget_type="ucaddon_marquee.default">
				<div class="elementor-widget-container">
			<!-- start Text Marquee Effect -->
			<style type="text/css">/* widget: Text Marquee Effect */

#uc_marquee_elementor85485  {
    white-space: nowrap;
    overflow: hidden;
    box-sizing: border-box;
    margin:0 auto;
}

#uc_marquee_elementor85485 div.marquee_text {
    display: inline-block;
  
    
	padding-left: 100%;
    animation: marquee 200s linear infinite;  
	

 	
    

    
}
@keyframes marquee {
    0%   { transform: translate(0, 0); }
    100% { transform: translate(-100%, 0); }
}

@keyframes marquee_flip {
  	0% { transform: translate(-100%, 0); }
    100%   { transform: translate(0, 0); }
    
}

#uc_marquee_elementor85485 a
{
  text-decoration:none;
}

</style>

			<div class="ue_marquee" id="uc_marquee_elementor85485">
<div class="marquee_text">
  <a href="#" >	
    R. Setioningsih Rachmad Gunawan rachmansyah Rachmat ksatria Raden Herdian Bayu Ash Siddiq Rahmat Arief Rahmat hidayat Raiyyan Rahmi Isda Raka Hafiz Farhan Rangga Sugiarto Reginson Reki Arbianto Reni Suryanita Reni warti Rexy Mahendra Reza Prama Arviandi Reza Ryansyah Rian Fahmi Miftahul Rizky Ricky Chandra Ricky Habeahan Rico Trisno Ridho Aldino Ridwan Ginanjar Rikhardus Tanlain Riki Amir Hamzah Rio Syahid Rivai rivai sargawi Riyanny Pratiwi Rizki Wijaya robby nikolus Robby Setiadi Kwandou Robi Fernando Rofie Fowler Rona Ariyansyah Rooseno Adi Rudi Sanjaya Rudiyanyo Abidin Ruslan Ryanhariyanto S Andriansyah Samsul Samsul Afif Rahmawan samudi Samuel Hanson Saraswati Noor Rachma Sayid muhammad ichsan Seplika Yadi Sidharta T. Sigit widiatmoko Silman Pongmanda Siti Nurul Hijah Sondy putra Stefanus Sugito suheri chaidrata Suherman Sujiati Jepriani Supriyadi Supriyadi Surya Bermansyah Surya Supratman SUTJIPTO Syafaruddin Syaripin Syifa Tahadjuddin Tajudin Nur Taufik Al Amin, ST Taufik Setiadi Taufiq Lilo Adi Sucipto Taufiq Rochman Teguh Pambudi Teodard Handoyo tito heri warsito Tomy marcello Tomy Rohmawan TOTOK ANDI PRASETYO Trijeti Trijono Samodro Trio Pahlawan Trisno Widodo Uaity Umar Hamdani Utari Vicky Wildan Yustisia Virgo saputra Wahyu Wahyudi salam Wawan Julianto ,ST wayan subawa welling ikhmatius hia welly nawi Werenfridus Seran Bria Widnyana Willy Toron Wincoko Yassir Naim Yastri Irpano Putra, ST Yayan Supriyantana Yenny Nurchasanah Yohanes Laka Suku Yudiono Susilo Yurdinus Panji Lelean Yus Iskandar Yusuf Akbar Megi Putra zainal Zainal latif Zulfahmi, A. Md
  </a>	
</div>
</div>
			<!-- end Text Marquee Effect -->		</div>
				</div>
					</div>
		</div>
					</div>
		</section>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-26090943 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="26090943" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6e256405" data-id="6e256405" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-section elementor-inner-section elementor-element elementor-element-4a4390eb elementor-section-content-top elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4a4390eb" data-element_type="section">
						<div class="elementor-container elementor-column-gap-wide">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5d93d687" data-id="5d93d687" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-40b8c6b0 elementor-widget elementor-widget-heading" data-id="40b8c6b0" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h3 class="elementor-heading-title elementor-size-default">Pertanyaan yang sering ditanyakan (FAQ)</h3>		</div>
				</div>
				<div class="elementor-element elementor-element-4d782c4f elementor-widget elementor-widget-text-editor" data-id="4d782c4f" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<p>Berikut adalah Pertanyaan-pertanyaan yang sering ditanyakan terkait WEBINAR SERIES TEKNIK SIPIL</p>						</div>
				</div>
				<div class="elementor-element elementor-element-6e44133c elementor-align-left elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="6e44133c" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a class="elementor-button elementor-button-link elementor-size-md elementor-animation-shrink" href="https://link.sipilpedia.com/WAwebinar" target="_blank">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Hubungi Kami</span>
		</span>
					</a>
		</div>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b9147fe" data-id="b9147fe" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-46ccffe0 elementor-widget elementor-widget-toggle" data-id="46ccffe0" data-element_type="widget" data-widget_type="toggle.default">
				<div class="elementor-widget-container">
					<div class="elementor-toggle">
							<div class="elementor-toggle-item">
					<div id="elementor-tab-title-1181" class="elementor-tab-title" data-tab="1" role="button" aria-controls="elementor-tab-content-1181" aria-expanded="false">
												<span class="elementor-toggle-icon elementor-toggle-icon-right" aria-hidden="true">
															<span class="elementor-toggle-icon-closed"><i class="fas fa-plus"></i></span>
								<span class="elementor-toggle-icon-opened"><i class="elementor-toggle-icon-opened fas fa-minus"></i></span>
													</span>
												<a class="elementor-toggle-title" tabindex="0">Apakah Webinar diselenggarakan secara Online?</a>
					</div>

					<div id="elementor-tab-content-1181" class="elementor-tab-content elementor-clearfix" data-tab="1" role="region" aria-labelledby="elementor-tab-title-1181"><p>Ya, Webinar diselenggarakan secara Online menggunakan Aplikasi Bigmarker</p></div>
				</div>
							<div class="elementor-toggle-item">
					<div id="elementor-tab-title-1182" class="elementor-tab-title" data-tab="2" role="button" aria-controls="elementor-tab-content-1182" aria-expanded="false">
												<span class="elementor-toggle-icon elementor-toggle-icon-right" aria-hidden="true">
															<span class="elementor-toggle-icon-closed"><i class="fas fa-plus"></i></span>
								<span class="elementor-toggle-icon-opened"><i class="elementor-toggle-icon-opened fas fa-minus"></i></span>
													</span>
												<a class="elementor-toggle-title" tabindex="0">Apakah Webinar ini GRATIS?</a>
					</div>

					<div id="elementor-tab-content-1182" class="elementor-tab-content elementor-clearfix" data-tab="2" role="region" aria-labelledby="elementor-tab-title-1182"><p>Webinar ini Gratis tanpa dipungut biaya</p></div>
				</div>
							<div class="elementor-toggle-item">
					<div id="elementor-tab-title-1183" class="elementor-tab-title" data-tab="3" role="button" aria-controls="elementor-tab-content-1183" aria-expanded="false">
												<span class="elementor-toggle-icon elementor-toggle-icon-right" aria-hidden="true">
															<span class="elementor-toggle-icon-closed"><i class="fas fa-plus"></i></span>
								<span class="elementor-toggle-icon-opened"><i class="elementor-toggle-icon-opened fas fa-minus"></i></span>
													</span>
												<a class="elementor-toggle-title" tabindex="0">Apakah Webinar ini memakai Aplikasi Zoom?</a>
					</div>

					<div id="elementor-tab-content-1183" class="elementor-tab-content elementor-clearfix" data-tab="3" role="region" aria-labelledby="elementor-tab-title-1183"><p>Tidak. Webinar menggunakan Bigmarker yang berbasis web tanpa harus menginstal Aplikasi.</p><p>Panduannya bisa dilihat disini <a href="https://youtu.be/K7Yyu_M0yRs" target="_blank" rel="noopener">https://youtu.be/K7Yyu_M0yRs</a></p></div>
				</div>
							<div class="elementor-toggle-item">
					<div id="elementor-tab-title-1184" class="elementor-tab-title" data-tab="4" role="button" aria-controls="elementor-tab-content-1184" aria-expanded="false">
												<span class="elementor-toggle-icon elementor-toggle-icon-right" aria-hidden="true">
															<span class="elementor-toggle-icon-closed"><i class="fas fa-plus"></i></span>
								<span class="elementor-toggle-icon-opened"><i class="elementor-toggle-icon-opened fas fa-minus"></i></span>
													</span>
												<a class="elementor-toggle-title" tabindex="0">Apakah Webinar bisa diakses via Live Youtube?</a>
					</div>

					<div id="elementor-tab-content-1184" class="elementor-tab-content elementor-clearfix" data-tab="4" role="region" aria-labelledby="elementor-tab-title-1184"><p>Untuk saat ini Webinar tidak bisa diakses secara Live di Youtube</p></div>
				</div>
							<div class="elementor-toggle-item">
					<div id="elementor-tab-title-1185" class="elementor-tab-title" data-tab="5" role="button" aria-controls="elementor-tab-content-1185" aria-expanded="false">
												<span class="elementor-toggle-icon elementor-toggle-icon-right" aria-hidden="true">
															<span class="elementor-toggle-icon-closed"><i class="fas fa-plus"></i></span>
								<span class="elementor-toggle-icon-opened"><i class="elementor-toggle-icon-opened fas fa-minus"></i></span>
													</span>
												<a class="elementor-toggle-title" tabindex="0">Apakah Webinar ini bisa diakses memakai Smartphone?</a>
					</div>

					<div id="elementor-tab-content-1185" class="elementor-tab-content elementor-clearfix" data-tab="5" role="region" aria-labelledby="elementor-tab-title-1185"><p>Bisa. Webinar bisa diakses via Laptop atau bisa juga diakses pakai Smartphone</p><p>Untuk panduan akses Webinar via Smartphone bisa dilihat disini <a href="https://youtu.be/QEuu4Vh63mE" target="_blank" rel="noopener">https://youtu.be/QEuu4Vh63mE</a></p></div>
				</div>
							<div class="elementor-toggle-item">
					<div id="elementor-tab-title-1186" class="elementor-tab-title" data-tab="6" role="button" aria-controls="elementor-tab-content-1186" aria-expanded="false">
												<span class="elementor-toggle-icon elementor-toggle-icon-right" aria-hidden="true">
															<span class="elementor-toggle-icon-closed"><i class="fas fa-plus"></i></span>
								<span class="elementor-toggle-icon-opened"><i class="elementor-toggle-icon-opened fas fa-minus"></i></span>
													</span>
												<a class="elementor-toggle-title" tabindex="0">Apakah Webinar ini ada Sertifikatnya?</a>
					</div>

					<div id="elementor-tab-content-1186" class="elementor-tab-content elementor-clearfix" data-tab="6" role="region" aria-labelledby="elementor-tab-title-1186"><p>Ya. Jika mengikuti Webinar sampai akhir dan mengisi feedback yang disampaikan di akhir acara, pasti akan mendapatkan E Certificate</p></div>
				</div>
							<div class="elementor-toggle-item">
					<div id="elementor-tab-title-1187" class="elementor-tab-title" data-tab="7" role="button" aria-controls="elementor-tab-content-1187" aria-expanded="false">
												<span class="elementor-toggle-icon elementor-toggle-icon-right" aria-hidden="true">
															<span class="elementor-toggle-icon-closed"><i class="fas fa-plus"></i></span>
								<span class="elementor-toggle-icon-opened"><i class="elementor-toggle-icon-opened fas fa-minus"></i></span>
													</span>
												<a class="elementor-toggle-title" tabindex="0">Apakah File materi dibagikan ke Peserta?</a>
					</div>

					<div id="elementor-tab-content-1187" class="elementor-tab-content elementor-clearfix" data-tab="7" role="region" aria-labelledby="elementor-tab-title-1187"><p>Jika mendapatkan izin dari Pemateri, File Materi pasti akan dibagikan kepada Peserta</p></div>
				</div>
							<div class="elementor-toggle-item">
					<div id="elementor-tab-title-1188" class="elementor-tab-title" data-tab="8" role="button" aria-controls="elementor-tab-content-1188" aria-expanded="false">
												<span class="elementor-toggle-icon elementor-toggle-icon-right" aria-hidden="true">
															<span class="elementor-toggle-icon-closed"><i class="fas fa-plus"></i></span>
								<span class="elementor-toggle-icon-opened"><i class="elementor-toggle-icon-opened fas fa-minus"></i></span>
													</span>
												<a class="elementor-toggle-title" tabindex="0">Apakah ada Rekaman Webinar yang dishare di Youtube?</a>
					</div>

					<div id="elementor-tab-content-1188" class="elementor-tab-content elementor-clearfix" data-tab="8" role="region" aria-labelledby="elementor-tab-title-1188"><p>Jika mendapatkan izin dari Pemateri, Rekaman Webinar pasti akan dibagikan kepada Peserta</p></div>
				</div>
								</div>
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
		

<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="row">

			
							<div class="col-12 text-center">
					<p>Copyright @2021 SIPILPEDIA ACADEMY</p>
				</div>
			
		</div>
	</div>
</footer>

</div><!-- close .site-wrap -->


    <script type="text/javascript">
        jQuery(document).ready(function($){
            function ssc_link_copy(element) {
                var $temp = $("<input>");
                $("body").append($temp);
                $temp.val(element).select();
                document.execCommand("copy");
                $temp.remove();
            }
            $('.btn-copy-input-clipboard').on('click', function(){
                var the_link = $(this).siblings('input').val();
                ssc_link_copy(the_link);
                $(this).find('span').html('Copied!');
                setTimeout(() => {
                    $(this).find('span').html('Copy');
                }, 2000);
            });
            $('.btn-copy-textarea-clipboard').on('click', function(){
                var the_link = $(this).siblings('textarea').val();
                ssc_link_copy(the_link);
                $(this).find('span').html('Copied!');
                setTimeout(() => {
                    $(this).find('span').html('Copy');
                }, 2000);
            });
        });
    </script>
    		<script>
		( function ( body ) {
			'use strict';
			body.className = body.className.replace( /\btribe-no-js\b/, 'tribe-js' );
		} )( document.body );
		</script>
		<script> /* <![CDATA[ */var tribe_l10n_datatables = {"aria":{"sort_ascending":": activate to sort column ascending","sort_descending":": activate to sort column descending"},"length_menu":"Show _MENU_ entries","empty_table":"No data available in table","info":"Showing _START_ to _END_ of _TOTAL_ entries","info_empty":"Showing 0 to 0 of 0 entries","info_filtered":"(filtered from _MAX_ total entries)","zero_records":"No matching records found","search":"Search:","all_selected_text":"All items on this page were selected. ","select_all_link":"Select all pages","clear_selection":"Clear Selection.","pagination":{"all":"All","next":"Berikutnya","previous":"Previous"},"select":{"rows":{"0":"","_":": Selected %d rows","1":": Selected 1 row"}},"datepicker":{"dayNames":["Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu"],"dayNamesShort":["Ming","Sen","Sel","Rab","Kam","Jum","Sab"],"dayNamesMin":["M","S","S","R","K","J","S"],"monthNames":["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"],"monthNamesShort":["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"],"monthNamesMin":["Jan","Feb","Mar","Apr","Mei","Jun","Jul","Agu","Sep","Okt","Nov","Des"],"nextText":"Next","prevText":"Prev","currentText":"Today","closeText":"Done","today":"Today","clear":"Clear"}};/* ]]> */ </script><link rel='stylesheet' id='e-animations-css' href='https://sipilpediaacademy.com/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.20.3' media='all' />
<script src="https://sipilpediaacademy.com/wp-content/plugins/mighty-addons-pro/assets/js/particles.min.js?ver=1.5.3" id="mt-particlesjs-js"></script>
<script src="https://sipilpediaacademy.com/wp-content/plugins/mighty-addons/assets/js/rpb.js?ver=1.9.3" id="mt-rpbjs-js"></script>
<script src="https://sipilpediaacademy.com/wp-content/plugins/mighty-addons/assets/js/wrapper-link.js?ver=1.9.3" id="mt-wrapperlinkjs-js"></script>
<script src="https://sipilpediaacademy.com/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2" id="jquery-ui-core-js"></script>
<script src="https://sipilpediaacademy.com/wp-includes/js/jquery/ui/mouse.min.js?ver=1.13.2" id="jquery-ui-mouse-js"></script>
<script src="https://sipilpediaacademy.com/wp-includes/js/jquery/ui/slider.min.js?ver=1.13.2" id="jquery-ui-slider-js"></script>
<script src="https://sipilpediaacademy.com/wp-includes/js/jquery/ui/draggable.min.js?ver=1.13.2" id="jquery-ui-draggable-js"></script>
<script src="https://sipilpediaacademy.com/wp-includes/js/jquery/jquery.ui.touch-punch.js?ver=0.2.2" id="jquery-touch-punch-js"></script>
<script src="https://sipilpediaacademy.com/wp-content/themes/larisdigital-wp/assets/lib/bootstrap4/js/bootstrap.min.js?ver=4.3.1" id="bootstrap4-js"></script>
<script src="https://sipilpediaacademy.com/wp-content/themes/larisdigital-wp/assets/lib/sticky/jquery.sticky.min.js?ver=1.0.4" id="sticky-js"></script>
<script src="https://sipilpediaacademy.com/wp-content/themes/larisdigital-wp/assets/lib/mmenu/jquery.mmenu.min.js?ver=6.1.8" id="mmenu-js"></script>
<script src="https://sipilpediaacademy.com/wp-content/themes/larisdigital-wp/assets/js/script.min.js?ver=1.9.1" id="larisdigital-js"></script>
<script src="https://sipilpediaacademy.com/wp-content/plugins/dw-sejoli-donation-extra/dependencies/sejoli-donation/public/js/jquery-mask-plugin.js?ver=1.14.16" id="jquery-mask-js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/progress.min.js?ver=2.4.1" id="semantic-ui-progress-js"></script>
<script src="https://sipilpediaacademy.com/wp-content/plugins/dw-sejoli-donation-extra/dependencies/sejoli-donation/public/js/sejoli-donation-public.js?ver=1.2.3" id="sejoli-donation-js"></script>
<script src="https://sipilpediaacademy.com/wp-content/plugins/unlimited-elements-for-elementor-premium/assets_libraries/owl-carousel-new/owl.carousel.min.js?ver=1.5.32" id="owl-carousel-js"></script>
<script src="https://sipilpediaacademy.com/wp-content/plugins/elementor/assets/lib/jquery-numerator/jquery-numerator.min.js?ver=0.2.1" id="jquery-numerator-js"></script>
<script src="https://sipilpediaacademy.com/wp-content/uploads/ac_assets/typewriter_title/typed.js?ver=1.5.32" id="uc_ac_assets_file_typed_js_14740-js"></script>
<script src="https://sipilpediaacademy.com/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.18.1" id="elementor-pro-webpack-runtime-js"></script>
<script src="https://sipilpediaacademy.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.20.3" id="elementor-webpack-runtime-js"></script>
<script src="https://sipilpediaacademy.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.20.3" id="elementor-frontend-modules-js"></script>
<script src="https://sipilpediaacademy.com/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2" id="wp-polyfill-inert-js"></script>
<script src="https://sipilpediaacademy.com/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.14.0" id="regenerator-runtime-js"></script>
<script src="https://sipilpediaacademy.com/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script>
<script src="https://sipilpediaacademy.com/wp-includes/js/dist/hooks.min.js?ver=c6aec9a8d4e5a5d543a1" id="wp-hooks-js"></script>
<script src="https://sipilpediaacademy.com/wp-includes/js/dist/i18n.min.js?ver=7701b0c3857f914212ef" id="wp-i18n-js"></script>
<script id="wp-i18n-js-after">
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
</script>
<script id="elementor-pro-frontend-js-before">
var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/sipilpediaacademy.com\/wp-admin\/admin-ajax.php","nonce":"751bbf4026","urls":{"assets":"https:\/\/sipilpediaacademy.com\/wp-content\/plugins\/elementor-pro\/assets\/","rest":"https:\/\/sipilpediaacademy.com\/wp-json\/"},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},"facebook_sdk":{"lang":"id_ID","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/sipilpediaacademy.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
</script>
<script src="https://sipilpediaacademy.com/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.18.1" id="elementor-pro-frontend-js"></script>
<script src="https://sipilpediaacademy.com/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2" id="elementor-waypoints-js"></script>
<script id="elementor-frontend-js-before">
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Bagikan di Facebook","shareOnTwitter":"Bagikan di Twitter","pinIt":"Buat Pin","download":"Unduh","downloadImage":"Unduh gambar","fullscreen":"Layar Penuh","zoom":"Perbesar","share":"Bagikan","playVideo":"Putar Video","previous":"Sebelumnya","next":"Selanjutnya","close":"Tutup","a11yCarouselWrapperAriaLabel":"Carousel | Horizontal scrolling: Arrow Left & Right","a11yCarouselPrevSlideMessage":"Slide sebelumnya","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Layar lebar","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.20.3","is_static":false,"experimentalFeatures":{"e_optimized_assets_loading":true,"additional_custom_breakpoints":true,"container":true,"e_swiper_latest":true,"container_grid":true,"theme_builder_v2":true,"block_editor_assets_optimize":true,"ai-layout":true,"landing-pages":true,"e_image_loading_optimization":true,"page-transitions":true,"notes":true,"form-submissions":true,"e_scroll_snap":true},"urls":{"assets":"https:\/\/sipilpediaacademy.com\/wp-content\/plugins\/elementor\/assets\/"},"swiperClass":"swiper","settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":12614,"title":"WEBINAR%20%E2%80%93%20SIPILPEDIA%20ACADEMY","excerpt":"","featuredImage":false}};
</script>
<script src="https://sipilpediaacademy.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.20.3" id="elementor-frontend-js"></script>
<script src="https://sipilpediaacademy.com/wp-content/plugins/elementor-pro/assets/js/elements-handlers.min.js?ver=3.18.1" id="pro-elements-handlers-js"></script>
<script id="mightypro-main-js-extra">
var MightyAddonsPro = {"ajaxUrl":"https:\/\/sipilpediaacademy.com\/wp-admin\/admin-ajax.php","baseUrl":"https:\/\/sipilpediaacademy.com\/wp-content\/plugins\/mighty-addons-pro\/","instaPagingAction":"get_insta_paging_media","addToCartAction":"mighty_woo_add_to_cart","addProductNonce":"8bef0b5bf8","pgPagingAction":"get_products_grid_paging"};
</script>
<script src="https://sipilpediaacademy.com/wp-content/plugins/mighty-addons-pro/assets/js/main.js?ver=1.5.3" id="mightypro-main-js"></script>

<!--   Unlimited Elements Scripts  --> 
<script type='text/javascript'>
// Image Card Carousel scripts: 
jQuery(document).ready(function(){	
function uc_image_card_carousel_elementor13638_start(){
		
  var objCarousel = jQuery('#uc_image_card_carousel_elementor13638');
  
  		objCarousel.owlCarousel({
            loop: true,
			margin: 30,
			nav: false,
            navText : ["",""],                                             
            dotsEach:false,
			center: true,            autoplay:true,
			navigation:false,
            autoplayTimeout:4000,
            smartSpeed: 2000,  
			responsiveClass: true,
			responsive: {
			       0 : {
						items:1
					},
					768 : {
						items:2
					},
					980 : {
						items:3
					}
			}
		  });
  
								
			objCarousel.trigger("uc-object-ready");
			jQuery("body").trigger("uc-remote-parent-init", [objCarousel]);
			
          
                var itemsNumber = objCarousel.find(".owl-item:not(cloned)").length;       
  		var clonedItemsNumber = objCarousel.find(".owl-item.cloned").length / 2; // amount of cloned items on one side
  		var minDeviation = -clonedItemsNumber;
  		var maxDeviation = itemsNumber + (clonedItemsNumber * 2);
  		             
        objCarousel.on("click", ".owl-item", function(){
            for(let i = minDeviation; i <= maxDeviation; i++){
              if(jQuery(this).index() - clonedItemsNumber  == i){
                objCarousel.trigger('to.owl.carousel', [i, 300, true]);
              }
            }
        });
                
}if(jQuery("#uc_image_card_carousel_elementor13638").length) uc_image_card_carousel_elementor13638_start(); else
	jQuery( document ).on( 'elementor/popup/show', () => { if(jQuery("#uc_image_card_carousel_elementor13638").length) uc_image_card_carousel_elementor13638_start();});
});
// Thumbnail Slider scripts: 
jQuery(document).ready(function() {
  
  var sync1 = jQuery("#uc_owl_sliding_thumbs_gallery_elementor25265 .uc-carousel-sync1");
  var sync2 = jQuery("#uc_owl_sliding_thumbs_gallery_elementor25265 .uc-carousel-sync2");
   
  sync1.owlCarousel({
    loop: true,
    items: 1,    
    singleItem : true,
    autoplayHoverPause: true,
    smartSpeed: 1000,      
    autoplay : true,
    autoPlaySpeed: 2000,
    autoplayTimeout:4000,
    slideSpeed : 2000,
    pagination:false,
    responsiveRefreshRate : 200,
	nav:true,
    navText: ["<i class='fas fa-arrow-left'></i>","<i class='fas fa-arrow-right'></i>"]
  }).on('changed.owl.carousel', syncPosition);
    
  sync2.owlCarousel({
    loop:true,
    center:true,    
    responsive:{
        0:{
            items:2,
        },
        767:{
            items:3,
        },
     	1024:{
            items:5,
        }
    },
    pagination:false,
	margin:10,
    responsiveRefreshRate : 100,
    changeItemOnClick:true
  }).on('changed.owl.carousel', syncPosition2);
  
  var sync1Carousel = sync1.data("owl.carousel");
  var sync2Carousel = sync2.data("owl.carousel");
	
  function syncPosition(){
        
        var currentItem2 = sync2Carousel.relative(sync2Carousel.current());
    
        var currentItem = sync1Carousel.relative(sync1Carousel.current());
	
    	if(currentItem2 == currentItem)
          	return(true);
    
		sync2Carousel.to(currentItem, 500, true);				
  }
  
  function syncPosition2(){
        
    	var currentItem2 = sync1Carousel.relative(sync1Carousel.current());
        
		var currentItem = sync2Carousel.relative(sync2Carousel.current());
    	
    	if(currentItem2 == currentItem)
          	return(true);
		
		sync1Carousel.to(currentItem, 500, true);				
	  
  }
  
  
  
});
// Logo Carousel scripts: 
jQuery(document).ready(function(){	
function uc_logo_carousel_elementor38886_start(){
		
  var objCarousel = jQuery('#uc_logo_carousel_elementor38886');
  
  		objCarousel.owlCarousel({
			loop: true,
                center:false,                                           
                autoplayTimeout: 4000,
                autoplayHoverPause: true,
                smartSpeed: 1000, 
                navText: ["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
                nav: false,
                navigation:true,
                autoplay: true,
				margin: 20,
                responsive : {
					0 : {
						items:1,
					},
					768 : {
						items:2,
					},
					980 : {
						items:5,
					} 
			}
		  });
  
								
			objCarousel.trigger("uc-object-ready");
			jQuery("body").trigger("uc-remote-parent-init", [objCarousel]);
			  

}if(jQuery("#uc_logo_carousel_elementor38886").length) uc_logo_carousel_elementor38886_start(); else
	jQuery( document ).on( 'elementor/popup/show', () => { if(jQuery("#uc_logo_carousel_elementor38886").length) uc_logo_carousel_elementor38886_start();});
});
// Typewriter Text Effect scripts: 
jQuery( document ).ready(function() {
      Typed.new('#uc_typewriter_text_effect_elementor40320 .uc-typewriter-element', {
        strings: ["436"],
        typeSpeed: 300,
		typeSpeed: 50,
		backSpeed: 0,
		startDelay: 1500,
		backDelay: 1500,
		loop: true,
		loopCount: false,
		showCursor: false,
		attr: null
      });
  });
</script>
<nav id="site-navigation-offcanvas" class="site-navigation-offcanvas-left mm-menu mm-offcanvas has-black-background-colorprymary">
	<ul id="site-navigation-offcanvas-nav" class="site-navigation-offcanvas-nav navbar-nav"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-6178"><a href="isi.html">ABOUT ROOMS</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11308"><a href="koding mbak malaykat/1.html">MANI PAGE</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-12614 current_page_item menu-item-16629"><a href="ll.html" aria-current="page">Mamber ship</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7595"><a href="webinar.html">WEBINAR</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6179"><a href="#">SHORT COURSE</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11651"><a href="https://sipilpediaacademy.com/member-area/">ROOM</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11652"><a href="https://sipilpediaacademy.com/dashboard/">BIM ACADEMI</a></li>
  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11653"><a href="https://sipilpediaacademy.com/instructor-registration/">EDX</a></li>
  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11653"><a href="https://sipilpediaacademy.com/instructor-registration/">UNDEMY</a></li>
  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11653"><a href="koding mbak malaykat/tamplate.html">UJI COBA/GRATS</a></li>
</ul>
</li>
</ul></nav>

<div class="site-backtotop">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M177 159.7l136 136c9.4 9.4 9.4 24.6 0 33.9l-22.6 22.6c-9.4 9.4-24.6 9.4-33.9 0L160 255.9l-96.4 96.4c-9.4 9.4-24.6 9.4-33.9 0L7 329.7c-9.4-9.4-9.4-24.6 0-33.9l136-136c9.4-9.5 24.6-9.5 34-.1z"/></svg>
</div>
        <script>
            jQuery(document).ready(function($){
                $(document).on('click', '.smaui-has-submenu', function(){
                    var submenu = $(this).next('.smaui-submenu');
                    if(submenu.hasClass('open')){
                        submenu.removeClass('open').slideUp();
                    }else{
                        submenu.addClass('open').slideDown();
                    }
                });

                var submenus = $('.smaui-submenu');

                $.each(submenus, function(i, sub){
                    var submenu_items = $(sub).find('.menu-button');
                    $.each(submenu_items, function(x, item){
                        var link = $(item).data('link');
                        if(link){
                            $.each($('body').attr('class').split(' '), function (index, className) {
                                if (link.indexOf(className) === 0) {
                                    var parent = $(item).parents('.smaui-submenu').data('parent');
                                    $('#'+parent).addClass('open').trigger('click');
                                }
                            });
                        }
                    });
                });
                
            });
        </script>
    
</body>
</html>

</div>
