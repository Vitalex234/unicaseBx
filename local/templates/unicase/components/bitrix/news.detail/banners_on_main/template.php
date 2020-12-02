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

<div class="wide-banner cnt-strip">
    <div class="image">
        <img class="img-responsive" data-echo="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
             src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="">
    </div>
    <div class="strip">
        <div class="strip-inner">
            <h3 class="hidden-xs"><?=$arResult["NAME"]?></h3>
            <h2><?=$arResult["DETAIL_TEXT"];?></h2>
        </div>
    </div>
</div><!-- /.wide-banner -->