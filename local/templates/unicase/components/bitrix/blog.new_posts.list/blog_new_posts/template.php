<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="owl-carousel blog-slider custom-carousel">

    <?
    if (count($arResult["POSTS"]) > 0):
        foreach ($arResult["POSTS"] as $ind => $curPost):?>
        <?
            preg_match('/<img.*src=".*"/', $curPost[TEXT_FORMATED], $image);
            $text = preg_replace('/<img.*>/','', $curPost[TEXT_FORMATED]);
            $image = preg_replace('/\/resize_cache/','', $image);
            $image = preg_replace('/\/90_90_2/','', $image);
            ?>
            <? //pr($curPost, true); ?>


            <div class="item">
                <div class="blog-post">
                    <div class="blog-post-image">
                        <div class="image">
                            <a href="<?=$curPost[urlToPost] ?>">
                                <?=$image[0]?>
                               </a>
                        </div>
                    </div><!-- /.blog-post-image -->


                    <div class="blog-post-info text-left">
                        <h3 class="name"><a href="#"><?=$curPost[TITLE]?></a></h3>
                        <span class="info">Автор: <?=$curPost[AuthorName]?> </span>
                        <p class="text"><? echo $text; ?></p>
                        <a href="<? echo $curPost[urlToPost]; ?>" class="lnk btn btn-primary">Читать далее...</a>
                    </div><!-- /.blog-post-info -->


                </div><!-- /.blog-post -->
            </div>
        <? endforeach; ?>
    <? endif; ?>
</div><!-- /.owl-carousel -->
