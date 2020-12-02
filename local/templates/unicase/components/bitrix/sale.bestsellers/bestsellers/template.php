<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var CBitrixComponentTemplate $this */
/** @var array $arParams */
/** @var array $arResult */
/** @global CDatabase $DB */

//$this->setFrameMode(true); ?>


<div class="sidebar-widget-body outer-top-xs">
    <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
        <? foreach (array_chunk($arResult["ITEMS"], 2) as $arPartItems): ?>
        <div class="item">
            <div class="products best-product">
                <? foreach ($arPartItems as $item): ?>
                <div class="product">
                    <div class="product-micro">
                        <div class="row product-micro-row">
                            <div class="col col-xs-5">
                                <div class="product-image">
                                    <div class="image">
                                        <a href="<?= $item['DETAIL_PAGE_URL'] ?>" data-lightbox="image-1"
                                           data-title="<?= $item['NAME'] ?>">
                                            <img data-echo="<?= $item['PREVIEW_PICTURE']['SRC'] ?>"
                                                 src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" alt=""
                                                class="special-deals-img">
                                            <div class="zoom-overlay"></div>
                                        </a>
                                    </div><!-- /.image -->

                                    <!-- <div class="tag tag-micro new">
                                         <span>new</span>
                                     </div>-->

                                </div><!-- /.product-image -->
                            </div><!-- /.col -->
                            <div class="col col-xs-7">
                                <div class="product-info">
                                    <h3 class="name"><a href="<?= $item['DETAIL_PAGE_URL'] ?>"><?= $item['NAME'] ?></a>
                                    </h3>
                                    <!--                                            <div class="rating rateit-small"></div>-->
                                    <div class="product-price">
				<span class="price">
                    <? echo $item['PRICES']['BASE']['PRINT_VALUE'] ?></span>

                                    </div><!-- /.product-price -->
                                    <div class="action" id="<?= $itemIds['BASKET_ACTIONS'] ?>">
                                        <a class="lnk btn btn-primary <?= $buttonSizeClass ?>"
                                           id="<?= $itemIds['BUY_LINK'] ?>"
                                           href="javascript:void(0)" rel="nofollow">
                                            В корзину
                                        </a>
                                    </div>
                                </div><!-- /.col -->
                            </div><!-- /.product-micro-row -->
                        </div><!-- /.product-micro -->

                    </div>
                </div>
                    <? endforeach; ?>

            </div>
        </div>
            <? endforeach; ?>

    </div>
</div>