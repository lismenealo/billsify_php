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

    <script src="https://cdn.tiny.cloud/1/0z5yf56h0vieqgo4vr2zj1lsb6tcnoi8v5w95fcwyvnjuhlw/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({ selector:'#pclu-textarea',branding: false });</script>

    <!-- Calendar -->
    <script src="bower_components/tui-code-snippet/dist/tui-code-snippet.js"></script>
    <link rel="stylesheet" href="bower_components/tui-calendar/dist/tui-calendar.css">

    <!-- If you use the default popups, use this. -->
    <link rel="stylesheet" href="bower_components/tui-date-picker/dist/tui-date-picker.css">
    <link rel="stylesheet" href="bower_components/tui-time-picker/dist/tui-time-picker.css">

</head>
<body class="homepage is-preload">
<div id="page-wrapper">
    <?php
    // Initialize the session
    session_start();

    require_once "../modules/Data/config.php";

    $url = $_SERVER['REQUEST_URI'];
    // Check if the user is logged in, if not then redirect him to login page
    if((!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) &&
        ($url === '/billsify/public/news_feed' || $url === '/billsify/public/appointments'
        || $url === '/billsify/public/app_features' || $url === '/billsify/public/user_settings' || $url === '/billsify/public/reset_password')){
        header("location: login");
        exit;
    }

    if((str_contains($url, 'update') || str_contains($url, 'create') || str_contains($url, 'delete')) && !$isAdmin) {
        header("location: home");
        exit;
    }

    if((str_contains($url, 'appointments') || str_contains($url, 'users') || str_contains($url, 'app_features') || str_contains($url, 'news_feed')) && $isClient) {
        header("location: home");
        exit;
    }

    include_once "../templates/components/nav.php";

    switch ($url) {
        case '/billsify/public/':
        case '/billsify/public/home':
            include_once "../templates/views/home.php";
            break;
        case '/billsify/public/application_details':
            include_once "../templates/views/application_details.php";
            break;
        case '/billsify/public/go_premium':
            include_once "../templates/views/go_premium.php";
            break;
        case '/billsify/public/contact':
            include_once "../templates/views/contact.php";
            break;
        case '/billsify/public/user_profile':
            include_once "../templates/views/user_profile.php";
            break;
        case '/billsify/public/error':
            include_once "../templates/views/error.php";
            break;
        case '/billsify/public/register':
            include_once "../templates/auth/register.php";
            break;
        case '/billsify/public/login':
            include_once "../templates/auth/login.php";
            break;
        case '/billsify/public/logout':
            include_once "../templates/auth/logout.php";
            break;
        case '/billsify/public/reset_password':
            include_once "../templates/auth/reset_password.php";
            break;
        case '/billsify/public/app_features':
            include_once "../templates/features/list.php";
            break;
        case '/billsify/public/app_features_create':
            include_once "../templates/features/create.php";
            break;
        case str_contains($url,'app_features_update'):
            include_once "../templates/features/update.php";
            break;
        case str_contains($url,'app_features_delete'):
            include_once "../templates/features/delete.php";
            break;
        case '/billsify/public/news_feed':
            include_once "../templates/news/list.php";
            break;
        case '/billsify/public/news_feed_create':
            include_once "../templates/news/create.php";
            break;
        case str_contains($url,'news_feed_update'):
            include_once "../templates/news/update.php";
            break;
        case str_contains($url,'/news_feed_delete'):
            include_once "../templates/news/delete.php";
            break;
        case '/billsify/public/appointments':
            include_once "../templates/appointments/list.php";
            break;
        case '/billsify/public/appointments_create':
            include_once "../templates/appointments/create.php";
            break;
        case str_contains($url,'appointments_update'):
            include_once "../templates/appointments/update.php";
            break;
        case str_contains($url,'/appointments_delete'):
            include_once "../templates/appointments/delete.php";
            break;
        case '/billsify/public/users':
            include_once "../templates/users/list.php";
            break;
        case '/billsify/public/users_create':
            include_once "../templates/users/create.php";
            break;
        case str_contains($url,'users_update'):
            include_once "../templates/users/update.php";
            break;
        case str_contains($url,'/users_delete'):
            include_once "../templates/users/delete.php";
            break;
        default:
            include_once "../templates/views/404.php";
            break;
    }

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

<script src="js/jquery.min.js"></script>

<script src="js/jquery.dropotron.min.js"></script>

<script src="js/main.js"></script>

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