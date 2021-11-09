<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Billsify Home</title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/main.css" />
    <!-- Core CSS file -->
    <link rel="stylesheet" href="css/photoswipe.css">

    <!-- Skin CSS file (styling of UI - buttons, caption, etc.)
         In the folder of skin CSS file there are also:
         - .png and .svg icons sprite,
         - preloader.gif (for browsers that do not support CSS animations) -->
    <link rel="stylesheet" href="css/default-skin/default-skin.css">
</head>
<body class="homepage is-preload">
<div id="page-wrapper">

    <?php
    include_once "../templates/components/nav.php";
    ?>

    <?php
    if ($_SERVER['REQUEST_URI'] === '/billsify/public/' or $_SERVER['REQUEST_URI'] === '/billsify/public/home') {
        include_once "../templates/views/home.php";
    } else if ($_SERVER['REQUEST_URI'] === '/billsify/public/application_details') {
        include_once "../templates/views/application_details.php";
    } else if ($_SERVER['REQUEST_URI'] === '/billsify/public/contact') {
        include_once "../templates/views/contact.php";
    } else if ($_SERVER['REQUEST_URI'] === '/billsify/public/go_premium') {
        include_once "../templates/views/go_premium.php";
    } else {
        include_once "../templates/components/404.php";
    }
    ?>

    <?php
    include_once "../templates/components/footer.php";
    ?>

</div>


<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe.
         It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides.
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <button class="pswp__button pswp__button--share" title="Share"></button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader-active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>

</div>

<script src="js/news-loader.js"></script>

<script src="js/budget-calculator.js"></script>
<!-- Core JS file -->
<script src="js/photoswipe.min.js"></script>

<!-- UI JS file -->
<script src="js/photoswipe-ui-default.min.js"></script>

<script src="js/gallery.js"></script>

<!--[if lt IE 9]>
<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
<![endif]-->

<!-- Async script executes immediately and must be after any DOM elements used in callback. -->
<script	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA90pNmvagA3ZZ2JyPDcWvHm-fcXd_4gto&callback=initMap&libraries=&v=weekly" async></script>
<script src="js/map-loader.js"></script>

</body>
</html>