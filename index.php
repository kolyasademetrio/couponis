<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!--jquery-ui.css-->
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-select.css" rel="stylesheet">
    <!-- slick-slider -->
    <link rel="stylesheet" href="plugins/slick-slider/slick.css" type="text/css"/>
    <link rel="stylesheet" href="plugins/slick-slider/slick-theme.css" type="text/css"/>
    <!-- magnific-popup -->
    <link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css">
    <!-- cloud-zoom -->
    <link rel="stylesheet" href="plugins/cloud-zoom/cloud-zoom.css">
    <!-- fonts css -->
    <link rel="stylesheet" href="css/fonts.css">
    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<?php
$page = $_GET['p'];
include 'templates/breadcrumbs.php';

$pages = Array(

    'home'          => 'home__page',
    'suninvestment'  => 'suninvestment__page',
    'news'  => 'news__page',
    'newssingle'  => 'newssingle__page',
    'bitcoinmining'  => 'bitcoinmining__page',
    'buycoupons'  => 'buycoupons__page',
    'couponing'  => 'couponing__page',
    'contact'  => 'contact__page',
);
?>


<body>
    <style>
        .preloader_bg{
            background: #2282c8;
            background: -moz-linear-gradient(top, #2282c8 0%, #a4cae8 100%);
            background: -webkit-linear-gradient(top, #2282c8 0%,#a4cae8 100%);
            background: linear-gradient(to bottom, #2282c8 0%,#a4cae8 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2282c8', endColorstr='#a4cae8',GradientType=0 );

            position:fixed;
            left:0;
            right:0;
            top:0;
            bottom:0;
            z-index:999
        }
        .load{
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translateX( -50% ) translateY( -50% );
            -moz-transform: translateX( -50% ) translateY( -50% );
            -ms-transform: translateX( -50% ) translateY( -50% );
            -o-transform: translateX( -50% ) translateY( -50% );
            transform: translateX( -50% ) translateY( -50% );
            width:100px;
            height:100px;
        }
        .load hr{border:0;margin:0;width:25%;height:25%;position:absolute;border-radius:50%;animation:spin 2s ease infinite}

        .load :first-child{background:#ffdc2c;animation-delay:-1.5s}
        .load :nth-child(2){background:#fff;animation-delay:-1s}
        .load :nth-child(3){background:#21211f;animation-delay:-0.5s}
        .load :last-child{background:#f7f7f7}

        @keyframes spin{
            0%,100%{transform:translate(0)}
            25%{transform:translate(160%)}
            50%{transform:translate(160%, 160%)}
            75%{transform:translate(0, 160%)}
        }

        @media ( max-width: 1025px ) {
            .load {
                width: 50px;
                height: 50px;
            }
        }
    </style>
    <div class="preloader_bg">
        <div class="load">
            <hr/><hr/><hr/><hr/>
        </div>
    </div>


    <div class="wrapper__main">
        <div class="content__main">

            <!--header-->
            <header class="header" id="header">
                <!-- headerTop -->
                <div class="headerTop">
                    <div class="container headerTop__container">
                        <div class="row headerTop__row">
                            <div class="col-xs-12 headerTop__col">
                                <div class="headerTop__inner">
                                    <form action="">
                                        <div class="form-group">
                                            <input id="form-control-email" type="text" class="form-control form-control-email" placeholder="Geben sie ihre E-Mail Adresse ein" name="email" value="">
                                        </div>
                                        <input class="btn btn-default" type="submit" value="Abonnieren">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- headerTop End -->

                <!-- headerBottom -->
                <div class="headerBottom">
                    <div class="container headerBottom__container">
                        <div class="row headerBottom__row">
                            <div class="col-xs-12 headerBottom__col">
                                <div class="headerBottom__inner">
                                    <div class="headerBottom__logoWrap">
                                        <a href="/" class="headerBottom__logoLink">
                                            <img src="images/header/logo.png" alt="" class="headerBottom__logoImg">
                                        </a>
                                    </div>

                                    <nav class="headerBottom__menuWrap" id="headerBottom__menuWrap">
                                        <ul class="headerBottom__menuList">
                                            <li class="headerBottom__menuListItem link_to_home">
                                                <a href="" class="headerBottom__menuLink">Startseite</a>
                                            </li>
                                            <li class="headerBottom__menuListItem">
                                                <a href="" class="headerBottom__menuLink active">Sonnenbeteiligung</a>
                                            </li>
                                            <li class="headerBottom__menuListItem">
                                                <a href="" class="headerBottom__menuLink">Bitcoin mining</a>
                                            </li>
                                            <li class="headerBottom__menuListItem">
                                                <a href="" class="headerBottom__menuLink">Kaufe coupons</a>
                                            </li>
                                            <li class="headerBottom__menuListItem">
                                                <a href="" class="headerBottom__menuLink">Couponing</a>
                                            </li>
                                            <li class="headerBottom__menuListItem">
                                                <a href="" class="headerBottom__menuLink">News</a>
                                            </li>
                                            <li class="headerBottom__menuListItem">
                                                <a href="" class="headerBottom__menuLink">Kontakt</a>
                                            </li>
                                        </ul>
                                    </nav>

                                    <div class="headerBottom__loginLangWrap">
                                        <div class="headerBottom__loginWrap">
                                            <li class="">
                                                <a href="#log-in-dropdown" class="log-in-dropdown-link">Einloggen</a>
                                                <ul class="log-in-dropdown mfp-hide" id="log-in-dropdown">
                                                    <li style="padding: 0px 0px 0px 0px;">
                                                        <form role="form" class="default-form" method="post" action="https://couponis.com/login">
                                                            <div class="input-container envelope">
                                                                <input id="email" type="text" placeholder="E-mail" name="email">
                                                            </div>
                                                            <div class="input-container key">
                                                                <input id="password" type="password" name="password" placeholder="Password">
                                                            </div>
                                                            <div class="form-group">
                                                                <button class="btn-default login-main-button" type="submit">
                                                                <span class="content">
                                                                    <i class="fa fa-lock"></i><span>LOGIN</span>
                                                                </span>
                                                                </button>
                                                            </div>
                                                            <div class="forgot__wrap">
                                                                <a class="forgot-password" href="https://couponis.com/password/reset">Forgot Password?</a>
                                                            </div>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </li>
                                        </div>

                                        <div class="headerBottom__langWrap">
                                            <div class="dropdown change-language-account">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">DE<i></i></a>
                                                <ul class="dropdown-menu show-language-dropdown" style="min-width: unset;">
                                                    <li style="padding: 0px;">
                                                        <form role="form" class="default-form li_language">
                                                            <a href="https://couponis.com/lang/de" class="a_language" style="color: #848484">DE</a>
                                                        </form>
                                                        <hr style="margin-top: 0px;margin-bottom: 0px;border-top: 1px solid #ffe100;width: 28px;">
                                                        <form role="form" class="default-form li_language">
                                                            <a href="https://couponis.com/lang/en" class="a_language" style="color: #848484">EN</a>
                                                        </form>
                                                        <form role="form" class="default-form li_language">
                                                            <a href="https://couponis.com/lang/ru" class="a_language" style="color: #848484">RU</a>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                        <a href="#headerBottom__menuWrap" class="hamburger">
                                            <span></span><span></span><span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- headerBottom End -->
            </header>
            <!--header End-->

            <?php include 'script-to-remove.php'; ?>

            <?php
                $siteMainClasses = 'site__main';
                foreach ( $pages as $pageName => $siteClass ) {
                    if ( $page == $pageName ) {
                        $siteMainClasses .= ' ' . $siteClass;
                        break;
                    }
                }
            ?>

            <div id="main" class="<?php echo $siteMainClasses; ?>">

            <?php
                foreach ( $pages as $pageName => $siteClass ) {

                    if ( $page == $pageName ) {
                        $template = $page;
                        break;
                    }

                }

                $path = '/' . $template . '-content.php';

                include_once __DIR__ . '/templates/' . $template . '-content.php';
            ?>



            </div><!-- site__main -->
        </div><!-- content__main -->

        <footer>
            <div class="footerTop">
                <div class="container footerTop__container">
                    <div class="row footerTop__row">
                        <div class="col-xs-12 footerTop__col">
                            <div class="footerTop__inner">
                                <div class="footerTop__content">
                                    <div class="footerTop__contentInner">Starte dein tägliches Einkommen,<br> mit nur einer Anzahlung oder<br> Kauf eines Coupons!</div>
                                    <div class="footerTop__btnWrap">
                                        <a href="#" class="footerTop__link">ICH Will AUCH</a>
                                    </div>
                                </div>
                                <div class="footerTop__bgEmpty"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footerTop__bg">
                    <div class="footerTop__bgItem"></div>
                    <div class="footerTop__bgItem"></div>
                </div>
            </div>
            
            <!-- footerBottom -->
            <div class="footerBottom">
                <div class="container footerBottom__container">
                    <div class="row footerBottom__row">
                        <div class="col-xs-12 footerBottom__col">
                            <div class="footerBottom__inner">
                                <div class="footer__logoCopyWrap">
                                    <div class="footer__logoWrap">
                                        <a href="#" class="footer__logoLink">
                                            <img src="images/footer/logo-footer.png" alt="logo" class="footer__logoImg">
                                        </a>
                                    </div>
                                    <div class="footer__copyright">Copyright &copy; 2018 MC Couponis</div>
                                </div>

                                <div class="weaccept__wrap">
                                    <div class="weaccept__title">We accept:</div>
                                    <ul class="weaccept__list">
                                        <li class="weaccept__listItem">
                                            <a href="#" class="weaccept__link" target="_blank">
                                                <img src="images/footer/social-icon-1.png" alt="" class="weaccept__img">
                                            </a>
                                        </li>
                                        <li class="weaccept__listItem">
                                            <a href="#" class="weaccept__link" target="_blank">
                                                <img src="images/footer/social-icon--2.png" class="weaccept__img">
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="footer__menuSocialsWrap">
                                    <div class="footer__menuWrap">
                                        <ul class="footer__menu">
                                            <li class="footer__menuListItem">
                                                <a href="#" class="footer__menuLink">Sitemap</a>
                                            </li>
                                            <li class="footer__menuListItem">
                                                <a href="#" class="footer__menuLink">Impressum</a>
                                            </li>
                                            <li class="footer__menuListItem">
                                                <a href="#" class="footer__menuLink">Privacy policy</a>
                                            </li>
                                            <li class="footer__menuListItem">
                                                <a href="#" class="footer__menuLink">FAQ</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="footer__socialsWrap">
                                        <ul class="footer__socials">
                                            <li class="footer__socialsListItem">
                                                <a href="#" class="footer__socialsLink" target="_blank">
                                                    <img src="images/footer/twitter.png" alt="" class="footer__socialsImg">
                                                </a>
                                            </li>
                                            <li class="footer__socialsListItem">
                                                <a href="#" class="footer__socialsLink" target="_blank">
                                                    <img src="images/footer/facebook.png" alt="" class="footer__socialsImg">
                                                </a>
                                            </li>
                                            <li class="footer__socialsListItem">
                                                <a href="#" class="footer__socialsLink" target="_blank">
                                                    <img src="images/footer/instagram.png" alt="" class="footer__socialsImg">
                                                </a>
                                            </li>
                                            <li class="footer__socialsListItem">
                                                <a href="#" class="footer__socialsLink" target="_blank">
                                                    <img src="images/footer/youtube.png" alt="" class="footer__socialsImg">
                                                </a>
                                            </li>
                                            <li class="footer__socialsListItem">
                                                <a href="#" class="footer__socialsLink" target="_blank">
                                                    <img src="images/footer/linkedin.png" alt="" class="footer__socialsImg">
                                                </a>
                                            </li>
                                            <li class="footer__socialsListItem">
                                                <a href="#" class="footer__socialsLink" target="_blank">
                                                    <img src="images/footer/google-plus.png" alt="" class="footer__socialsImg">
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="footer__copyright">Copyright © 2018 MC Couponis</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footerBottom End -->
        </footer>

    </div><!-- wrapper__main -->



<!--          *****************   javascript   ***************                    -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.js"></script>
<!-- bootstrap JS -->
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.js"></script>
<!-- slider JS -->
<script type="text/javascript" src="plugins/slick-slider/slick.js"></script>
<!-- popup JS -->
<script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- niceScroll-->
<script src="plugins/niceScroll/niceScroll.js"></script>
<!-- barrating-->
<script src="plugins/barrating/jquery.barrating.min.js"></script>
<!-- custom js -->
<script type="text/javascript" src="js/custom.js"></script>
<!-- initializations -->
<script type="text/javascript" src="js/init.js"></script>

</body>
</html>






































