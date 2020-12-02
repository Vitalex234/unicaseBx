<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $item
 * @var array $actualItem
 * @var array $minOffer
 * @var array $itemIds
 * @var array $price
 * @var array $measureRatio
 * @var bool $haveOffers
 * @var bool $showSubscribe
 * @var array $morePhoto
 * @var bool $showSlider
 * @var bool $itemHasDetailUrl
 * @var string $imgTitle
 * @var string $productTitle
 * @var string $buttonSizeClass
 * @var CatalogSectionComponent $component
 */
?>

<div class="product">
    <div class="product-image">
        <div class="image">
            <a href="detail.html"><img src="<?=$item['PREVIEW_PICTURE']['SRC']?>"
                                       alt=""></a>
        </div><!-- /.image -->

<!--        <div class="tag new"><span>new</span></div>-->
    </div><!-- /.product-image -->


    <div class="product-info text-left">
        <h3 class="name"><a href="<?=$item['DETAIL_PAGE_URL']?>"><?=$productTitle?></a></h3>
<!--        <div class="rating rateit-small"></div>-->
        <div class="description"></div>

        <div class="product-price">
				<span class="price">
					<? echo $price['PRINT_RATIO_PRICE']?>				</span>
<!--            <span class="price-before-discount">$ 800</span>-->

        </div><!-- /.product-price -->

    </div><!-- /.product-info -->
    <div class="cart clearfix animate-effect">
        <div class="action">
            <ul class="list-unstyled">
                <li class="add-cart-button btn-group">
                    <button class="btn btn-primary icon"
                            data-toggle="dropdown" type="button">
                        <i class="fa fa-shopping-cart"></i>
                    </button>
                    <div class="action" id="<?=$itemIds['BASKET_ACTIONS']?>">
                        <a class="lnk btn btn-primary btn-tocart" id="<?=$itemIds['BUY_LINK']?>"
                           href="javascript:void(0)" rel="nofollow">
                            В корзину
                        </a>
                    </div>

                </li>

                <li class="lnk wishlist">
                    <a class="add-to-cart" href="detail.html"
                       title="Wishlist">
                        <i class="icon fa fa-heart"></i>
                    </a>
                </li>

                <li class="lnk">
                    <a class="add-to-cart" href="detail.html"
                       title="Compare">
                        <i class="fa fa-retweet"></i>
                    </a>
                </li>
            </ul>
        </div><!-- /.action -->
    </div><!-- /.cart -->
</div>

