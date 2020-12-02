<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogTopComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$this->setFrameMode(true);

if (!empty($arResult['ITEMS']))
{
	$elementEdit = CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_EDIT');
	$elementDelete = CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_DELETE');
	$elementDeleteParams = array('CONFIRM' => GetMessage('CT_BCT_ELEMENT_DELETE_CONFIRM'));
?>
	 <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4" >

        <?
        foreach ($arResult['ITEMS'] as $item):
           ?>

            <div class="item item-carousel item-newproducts">
                <div class="products">
                   <div class="product">
    <div class="product-image">
        <div class="image">
            <a href="detail.html"><img src="<?=$item['PREVIEW_PICTURE']['SRC']?>"
                                       alt=""></a>
        </div><!-- /.image -->

<!--        <div class="tag new"><span>new</span></div>-->
    </div><!-- /.product-image -->


    <div class="product-info text-left">
        <h3 class="name"><a href="<?=$item['DETAIL_PAGE_URL']?>"><?=$item['NAME']?></a></h3>
<!--        <div class="rating rateit-small"></div>-->
        <div class="description"></div>

        <div class="product-price">
				<span class="price">
					<? echo $item['PRICES']['BASE']['PRINT_VALUE']?>				</span>
<!--            <span class="price-before-discount">$ 800</span>-->

        </div><!-- /.product-price -->

    </div><!-- /.product-info -->

</div>


                </div><!-- /.products -->
            </div><!-- /.item -->
        <? endforeach ?>
    </div><!-- /.home-owl-carousel --><?php
}
?>