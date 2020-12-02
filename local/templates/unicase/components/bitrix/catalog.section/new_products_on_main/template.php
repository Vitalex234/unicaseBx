<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 *
 *  _________________________________________________________________________
 * |    Attention!
 * |    The following comments are for system use
 * |    and are required for the component to work correctly in ajax mode:
 * |    <!-- items-container -->
 * |    <!-- pagination-container -->
 * |    <!-- component-end -->
 */

$this->setFrameMode(true);


$elementEdit = CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_EDIT');
$elementDelete = CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_DELETE');
$elementDeleteParams = array('CONFIRM' => GetMessage('CT_BCS_TPL_ELEMENT_DELETE_CONFIRM'));

?>

<div class="product-slider outer-top-xs">
    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4" >

        <?
        foreach ($arResult['ITEMS'] as $item): ?>
            <div class="item item-carousel item-newproducts">
                <div class="products">
                    <?
                    $APPLICATION->IncludeComponent(
                        'bitrix:catalog.item',
                        'newproducts',
                        array(
                            'RESULT' => array(
                                'ITEM' => $item,
                                'AREA_ID' => $areaIds[$item['ID']],
                                'TYPE' => 'card',
                                'BIG_LABEL' => 'N',
                                'BIG_DISCOUNT_PERCENT' => 'N',
                                'BIG_BUTTONS' => 'N',
                                'SCALABLE' => 'N'
                            ),
                            'PARAMS' => $generalParams
                        ),
                        $component,
                        array('HIDE_ICONS' => 'Y')
                    );
                    ?>


                </div><!-- /.products -->
            </div><!-- /.item -->
        <? endforeach ?>
    </div><!-- /.home-owl-carousel -->
</div><!-- component-end -->