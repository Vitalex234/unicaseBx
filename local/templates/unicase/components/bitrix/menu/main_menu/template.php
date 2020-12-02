<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="nav navbar-nav">

<?
$previousLevel = 0;
$displayItem = false;

foreach($arResult as $arItem):?>

    <? if($arItem["IS_PARENT"] && $arItem["PARAMS"]["UF_MAIN_MENU"] == 1 && $arItem["DEPTH_LEVEL"] == 1) {
        $displayItem = true;
    } elseif ($arItem["IS_PARENT"] && $arItem["PARAMS"]["UF_MAIN_MENU"] == 0 && $arItem["DEPTH_LEVEL"] == 1) {
        $displayItem = false; } ?>

    <? if ($displayItem): ?>
	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li class="<?if ($arItem["SELECTED"]):?>active<?endif?> dropdown  yamm"><a href="<?=$arItem["LINK"]?>"  data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown"><?=$arItem["TEXT"]?></a>
				<ul class="dropdown-menu">
		<?else:?>
			<li<?if ($arItem["SELECTED"]):?> class="yamm-content"<?endif?>><a href="<?=$arItem["LINK"]?>" class=""><?=$arItem["TEXT"]?></a>
				<ul>
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li<?if ($arItem["SELECTED"]):?> class="item-selected"<?endif?>><a href="<?=$arItem["LINK"]?>" ><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?endif?>

	<?endif?>

    <?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
<div class="menu-clear-left"></div>
<?endif?>