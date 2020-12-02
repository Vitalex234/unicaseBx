<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">



<?foreach($arResult["ITEMS"] as $arItem):

    $attLinkValue = $arItem["DISPLAY_PROPERTIES"]["ATT_LINK"][VALUE];

	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

    <div class="item" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>);">
        <div class="container-fluid">
            <div class="caption bg-color vertical-center text-left">
                <div class="big-text fadeInDown-1">

                    <?echo $arItem["~NAME"];?>
                </div>

                <div class="excerpt fadeInDown-2 hidden-xs">
                    <?echo $arItem["~PREVIEW_TEXT"];?>
                </div>
                <div class="button-holder fadeInDown-3">
                    <a href="<?=$arItem["DISPLAY_PROPERTIES"]["ATT_LINK"]["LINK_ELEMENT_VALUE"][$attLinkValue]["DETAIL_PAGE_URL"]?>" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Купить</a>
                </div>
            </div><!-- /.caption -->
        </div><!-- /.container-fluid -->
    </div>


<?endforeach;?>

</div>


