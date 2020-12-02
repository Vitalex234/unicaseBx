<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
/**
 * @global array $arParams
 * @global CUser $USER
 * @global CMain $APPLICATION
 * @global string $cartId
 */
$compositeStub = (isset($arResult['COMPOSITE_STUB']) && $arResult['COMPOSITE_STUB'] == 'Y');
?>
        <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
            <div class="items-cart-inner">
                <div class="total-price-basket">
                    <span class="lbl"></span>
                    <span class="total-price">
                                        <span class="sign"></i></span>
                                        <span class="value"><?=$arResult['TOTAL_PRICE']?></span>
                                    </span>
                </div>
                <div class="basket">
                    <i class="glyphicon glyphicon-shopping-cart"></i>
                </div>
                <div class="basket-item-count"><span class="count"><?=$arResult['NUM_PRODUCTS']?></span></div>

            </div>
        </a>

