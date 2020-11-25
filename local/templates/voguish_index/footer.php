<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
</div>
<div class="col-md-3 bann-left">
    <div class="b-search">
        <form>
            <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
            <input type="submit" value="">
        </form>
    </div>
    <h3>Recent Posts</h3>
    <?$APPLICATION->IncludeComponent("bitrix:news.list", "posts_sidebar", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "1",	// Код информационного блока
		"IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "3",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
    <!--<div class="blo-top">
    <div class="blog-grids">
        <div class="blog-grid-left">
            <a href="single.html"><img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/1b.jpg" class="img-responsive" alt=""></a>
        </div>
        <div class="blog-grid-right">
            <h4><a href="single.html">Little Invaders </a></h4>
            <p>pellentesque dui, non felis. Maecenas male </p>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="blog-grids">
        <div class="blog-grid-left">
            <a href="single.html"><img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/2b.jpg" class="img-responsive" alt=""></a>
        </div>
        <div class="blog-grid-right">
            <h4><a href="single.html">Little Invaders </a></h4>
            <p>pellentesque dui, non felis. Maecenas male </p>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="blog-grids">
        <div class="blog-grid-left">
            <a href=""><img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/3b.jpg" class="img-responsive" alt=""></a>
        </div>
        <div class="blog-grid-right">
            <h4><a href="single.html">Little Invaders </a></h4>
            <p>pellentesque dui, non felis. Maecenas male </p>
        </div>
        <div class="clearfix"> </div>
    </div>
</div> -->
    <h3>Categories</h3>
    <div class="blo-top">
        <li><a href="#">||   Lorem Ipsum passage</a></li>
        <li><a href="#">||   Finibus Bonorum et</a></li>
        <li><a href="#">||   Treatise on the theory</a></li>
        <li><a href="#">||   Characteristic words</a></li>
        <li><a href="#">||   combined with a handful</a></li>
        <li><a href="#">||   which looks reasonable</a></li>
    </div>
    <h3>Newsletter</h3>

    <div class="blo-top">
        <div class="name">
            <form>
                <input type="text" placeholder="email" required="">
            </form>
        </div>
        <div class="button">
            <form>
                <input type="submit" value="Subscribe">
            </form>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<div class="clearfix"> </div>
<?php if ($APPLICATION->GetCurPage(false) == '/'):?>
    <div class="fle-xsel">
    <ul id="flexiselDemo3">
        <li>
            <a href="#">
                <div class="banner-1">
                    <img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/6.jpg" class="img-responsive" alt="">
                </div>
            </a>
        </li>
        <li>
            <a href="#">
                <div class="banner-1">
                    <img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/5.jpg" class="img-responsive" alt="">
                </div>
            </a>
        </li>
        <li>
            <a href="#">
                <div class="banner-1">
                    <img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/1.jpg" class="img-responsive" alt="">
                </div>
            </a>
        </li>
        <li>
            <a href="#">
                <div class="banner-1">
                    <img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/4.jpg" class="img-responsive" alt="">
                </div>
            </a>
        </li>
        <li>
            <a href="#">
                <div class="banner-1">
                    <img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/6.jpg" class="img-responsive" alt="">
                </div>
            </a>
        </li>
        <li>
            <a href="#">
                <div class="banner-1">
                    <img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/1.jpg" class="img-responsive" alt="">
                </div>
            </a>
        </li>
    </ul>

    <script type="text/javascript">
        $(window).load(function() {

            $("#flexiselDemo3").flexisel({
                visibleItems: 5,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint:480,
                        visibleItems: 2
                    },
                    landscape: {
                        changePoint:640,
                        visibleItems: 3
                    },
                    tablet: {
                        changePoint:768,
                        visibleItems: 3
                    }
                }
            });

        });
    </script>
    <script type="text/javascript" src="<?=DEFAULT_TEMPLATE_PATH;?>/js/jquery.flexisel.js"></script>
    <div class="clearfix"> </div>
</div>
<?php endif;?>
<div class="footer">
    <div class="col-md-3 foot-1">
        <h4>Quick Links</h4>
        <ul>
            <li><a href="#">||   Lorem Ipsum passage</a></li>
            <li><a href="#">||   Finibus Bonorum et</a></li>
            <li><a href="#">||   Treatise on the theory</a></li>
        </ul>
    </div>
    <div class="col-md-3 foot-1">
        <h4>Favorite Resources</h4>
        <ul>
            <li><a href="#">||   Characteristic words</a></li>
            <li><a href="#">||   combined with a handful</a></li>
            <li><a href="#">||   which looks reasonable</a></li>
        </ul>
    </div>
    <div class="col-md-3 foot-1">
        <h4>About Us</h4>
        <ul>
            <li><a href="#">||  Even slightly believable</a></li>
            <li><a href="#">||  Hidden in the middle</a></li>
            <li><a href="#">||  Ipsum therefore always</a></li>
        </ul>
    </div>
    <div class="col-md-3 foot-1">
        <h4>Custom Menu</h4>
        <ul>
            <li><a href="#">||  Internet tend to repeat</a></li>
            <li><a href="#">||  Alteration in some form</a></li>
            <li><a href="#">||  This book is a treatise</a></li>
        </ul>
    </div>

    <div class="clearfix"> </div>
    <div class="copyright">
        <p>Copyrights © 2015 Voguish All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>
    </div>
</div>
</div>
</body>
</html>
