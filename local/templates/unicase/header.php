<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;
echo 'change header on dev site';

//$curPage = $APPLICATION->GetCurPage(true);

/**/ ?><!--<!DOCTYPE html>
<html xml:lang="<? /*=LANGUAGE_ID*/ ?>" lang="<? /*=LANGUAGE_ID*/ ?>">
<head>
	<title><? /*$APPLICATION->ShowTitle()*/ ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
	<link rel="shortcut icon" type="image/x-icon" href="<? /*=SITE_DIR*/ ?>favicon.ico" />
	<? /* $APPLICATION->ShowHead(); */ ?>
</head>
<body class="bx-background-image bx-theme-<? /*=$theme*/ ?>" <? /*$APPLICATION->ShowProperty("backgroundImage");*/ ?>>
<div id="panel"><? /* $APPLICATION->ShowPanel(); */ ?></div>-->


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <!--    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keywords" content="MediaCenter, Template, eCommerce">
        <meta name="robots" content="all">-->

    <title><? $APPLICATION->ShowTitle() ?></title>
    <? $APPLICATION->ShowHead(); ?>

    <!-- Bootstrap Core CSS -->
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/bootstrap.min.css'); ?>

    <!-- Customizable CSS -->
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/main.css'); ?>
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/green.css'); ?>
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/owl.carousel.css'); ?>
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/owl.transitions.css'); ?>
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/lightbox.css'); ?>
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/animate.min.css'); ?>
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/rateit.css'); ?>
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/bootstrap-select.min.css'); ?>
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/font-awesome.min.css'); ?>
    <? Asset::getInstance()->addCss('http://fonts.googleapis.com/css?family=Roboto:300,400,500,700'); ?>
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/images/favicon.ico'); ?>
    <? Asset::getInstance()->addCss('https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap'); ?>

    <? Asset::getInstance()->addJS(SITE_TEMPLATE_PATH . '/js/jquery-1.11.1.min.js'); ?>
    <? Asset::getInstance()->addJS(SITE_TEMPLATE_PATH . '/js/bootstrap.min.js'); ?>
    <? Asset::getInstance()->addJS(SITE_TEMPLATE_PATH . '/js/bootstrap-hover-dropdown.min.js'); ?>
    <? Asset::getInstance()->addJS(SITE_TEMPLATE_PATH . '/js/owl.carousel.min.js'); ?>
    <? Asset::getInstance()->addJS(SITE_TEMPLATE_PATH . '/js/echo.min.js'); ?>
    <? Asset::getInstance()->addJS(SITE_TEMPLATE_PATH . '/js/jquery.easing-1.3.min.js'); ?>
    <? Asset::getInstance()->addJS(SITE_TEMPLATE_PATH . '/js/bootstrap-slider.min.js'); ?>
    <? Asset::getInstance()->addJS(SITE_TEMPLATE_PATH . '/js/jquery.rateit.min.js'); ?>
    <? Asset::getInstance()->addJS(SITE_TEMPLATE_PATH . '/js/lightbox.min.js'); ?>
    <? Asset::getInstance()->addJS(SITE_TEMPLATE_PATH . '/js/bootstrap-select.min.js'); ?>
    <? Asset::getInstance()->addJS(SITE_TEMPLATE_PATH . '/js/wow.min.js'); ?>
    <? Asset::getInstance()->addJS(SITE_TEMPLATE_PATH . '/js/scripts.js'); ?>


    <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
    <!--[if lt IE 9]>
<? Asset::getInstance()->addJS(SITE_TEMPLATE_PATH . '/js/html5shiv.js'); ?>
<? Asset::getInstance()->addJS(SITE_TEMPLATE_PATH . '/js/respond.min.js'); ?>
    <![endif]-->

</head>
<body class="cnt-home">
<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>


<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">

    <!-- ============================================== TOP MENU ============================================== -->
    <div class="top-bar animate-dropdown">
        <div class="container">
            <div class="header-top-inner">
                <div class="cnt-account">
<!--TODO Расставить ссылки на пункты меню-->
                    <? $APPLICATION->IncludeComponent("bitrix:menu", "topmenu", array(
                        "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                        "CHILD_MENU_TYPE" => "top",    // Тип меню для остальных уровней
                        "DELAY" => "N",    // Откладывать выполнение шаблона меню
                        "MAX_LEVEL" => "1",    // Уровень вложенности меню
                        "MENU_CACHE_GET_VARS" => "",    // Значимые переменные запроса
                        "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                        "MENU_CACHE_TYPE" => "N",    // Тип кеширования
                        "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
                        "ROOT_MENU_TYPE" => "top",    // Тип меню для первого уровня
                        "USE_EXT" => "N",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
                        "COMPONENT_TEMPLATE" => ".default"
                    ),
                        false
                    ); ?>

                </div><!-- /.cnt-account -->

                <div class="cnt-block">
                    <ul class="list-unstyled list-inline">
                        <li class="dropdown dropdown-small">
<!--                            TODO сделать рабочий вывод выбора валюты через компонент-->
                            <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span
                                        class="key">currency :</span><span class="value">USD </span><b
                                        class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">RUB</a></li>
                                <li><a href="#">USD</a></li>
                            </ul>
                        </li>

                        <li class="dropdown dropdown-small">
<!--                            TODO сделать вторую версию сайта, описание есть в OneNote-->
                            <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span
                                        class="key">language :</span><span class="value">English </span><b
                                        class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/">Russian</a></li>
                                <li><a href="/en">English</a></li>
                            </ul>
                        </li>
                    </ul><!-- /.list-unstyled -->
                </div><!-- /.cnt-cart -->
                <div class="clearfix"></div>
            </div><!-- /.header-top-inner -->
        </div><!-- /.container -->
    </div><!-- /.header-top -->
    <!-- ============================================== TOP MENU : END ============================================== -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                    <!-- ============================================================= LOGO ============================================================= -->
                    <div class="logo">
                        <a href="/">

                            <img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt="">

                        </a>
                    </div><!-- /.logo -->
                    <!-- ============================================================= LOGO : END ============================================================= -->
                </div><!-- /.logo-holder -->

                <div class="col-xs-12 col-sm-12 col-md-6 top-search-holder">
                    <div class="contact-row">
                        <? $APPLICATION->IncludeFile('/include/header_contacts.php', array(), array('MODE' => 'html')); ?>

                    </div><!-- /.contact-row -->
                    <!-- ============================================================= SEARCH AREA ============================================================= -->
                    <div class="search-area">


                        <form>
                            <div class="control-group">


                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:search.suggest.input",
                                    "header_search",
                                    array(
                                        "DROPDOWN_SIZE" => "10",
                                        "INPUT_SIZE" => "40",
                                        "NAME" => "search",
                                        "VALUE" => "",
                                        "PLACEHOLDER" => "Поиск",
                                    )
                                ); ?>

                                <a type="submit" class="search-button" href="#"></a>

                            </div>
                        </form>
                    </div><!-- /.search-area -->
                    <!-- ============================================================= SEARCH AREA : END ============================================================= -->
                </div><!-- /.top-search-holder -->

                <div class="col-xs-12 col-sm-12 col-md-3 animate-dropdown top-cart-row">
                    <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
                    <div class="dropdown dropdown-cart">

                    <?$APPLICATION->IncludeComponent(
                        "bitrix:sale.basket.basket.line",
                        "header_cart",
                        Array(),
                        false
                    );?>

<!--                        <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                            <div class="items-cart-inner">
                                <div class="total-price-basket">
                                    <span class="lbl">cart -</span>
                                    <span class="total-price">
                                        <span class="sign">$</span>
                                        <span class="value">600.00</span>
                                    </span>
                                </div>
                                <div class="basket">
                                    <i class="glyphicon glyphicon-shopping-cart"></i>
                                </div>
                                <div class="basket-item-count"><span class="count">2</span></div>

                            </div>
                        </a>-->

<!--                         TODO Доделать выпадающее меню в корзине в хедере, когда будут товары-->
                        <ul class="dropdown-menu">
                            <li>
                                <div class="cart-item product-summary">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="image">
                                                <a href="detail.html"><img src="assets/images/cart.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">

                                            <h3 class="name"><a href="index.php?page-detail">Simple Product</a></h3>
                                            <div class="price">$600.00</div>
                                        </div>
                                        <div class="col-xs-1 action">
                                            <a href="#"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </div><!-- /.cart-item -->
                                <div class="clearfix"></div>
                                <hr>

                                <div class="clearfix cart-total">
                                    <div class="pull-right">

                                        <span class="text">Sub Total :</span><span class='price'>$600.00</span>

                                    </div>
                                    <div class="clearfix"></div>

                                    <a href="checkout.html"
                                       class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>
                                </div><!-- /.cart-total-->


                            </li>
                        </ul><!-- /.dropdown-menu-->
                    </div><!-- /.dropdown-cart -->

                    <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->
                </div><!-- /.top-cart-row -->
            </div><!-- /.row -->

        </div><!-- /.container -->

    </div><!-- /.main-header -->

    <!-- ============================================== NAVBAR ============================================== -->
    <div class="header-nav animate-dropdown">
        <div class="container">
            <div class="yamm navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse"
                            class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigadRnUofolCIoOtion</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="nav-bg-class">
                    <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                        <div class="nav-outer">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "main_menu",
                                Array(
                                    "ALLOW_MULTI_SELECT" => "N",
                                    "CHILD_MENU_TYPE" => "",
                                    "DELAY" => "N",
                                    "MAX_LEVEL" => "1",
                                    "MENU_CACHE_GET_VARS" => array(""),
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_TYPE" => "N",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "ROOT_MENU_TYPE" => "main",
                                    "USE_EXT" => "Y"
                                )
                            );?>

                            <div class="clearfix"></div>
                        </div><!-- /.nav-outer -->
                    </div><!-- /.navbar-collapse -->


                </div><!-- /.nav-bg-class -->
            </div><!-- /.navbar-default -->
        </div><!-- /.container-class -->

    </div><!-- /.header-nav -->
    <!-- ============================================== NAVBAR : END ============================================== -->

</header>

<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="container">