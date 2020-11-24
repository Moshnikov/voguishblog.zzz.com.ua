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
<div class="blog-articals">
<?php foreach($arResult["ITEMS"] as $arItem):?>
    <div class="blog-artical">
        <div class="blog-artical-info">
            <div class="blog-artical-info-img">
                <a href="<?=$arItem['DETAIL_PAGE_URL'];?>"><img src="<?=$arItem['DETAIL_PICTURE']['SRC'];?>" title="post-name"></a>
            </div>
            <div class="blog-artical-info-head">
                <h2><a href="<?=$arItem['DETAIL_PAGE_URL'];?>"><?=$arItem['NAME'];?></a></h2>
                <h6>Posted on, <?=$arItem['ACTIVE_FROM'];?></h6>

            </div>
            <div class="blog-artical-info-text">
                <p><?=$arItem['PREVIEW_TEXT'];?><a href="<?=$arItem['DETAIL_PAGE_URL'];?>">[...]</a></p>
            </div>
            <div class="artical-links">
                <ul>
                    <li><small> </small><span><?=$arItem['DISPLAY_ACTIVE_FROM'];?></span></li>
                    <li><a href="#"><small class="admin"> </small><span><?=$arItem['PROPERTIES']['AUTHOR']['VALUE'];?></span></a></li>
                    <li><a href="#"><small class="no"> </small><span>No comments</span></a></li>
                    <li><a href="#"><small class="posts"> </small><span>View posts: <?=$arItem['SHOW_COUNTER'] ? $arItem['SHOW_COUNTER'] : 0;?></span></a></li>
                    <li><a href="<?=$arItem['DETAIL_PAGE_URL'];?>"><small class="link"> </small><span>permalink</span></a></li>
                </ul>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
<?php endforeach; ?>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
    <br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
