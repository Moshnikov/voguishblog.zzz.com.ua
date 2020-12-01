<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
</div>

<div class="clearfix"> </div>
<?php if($APPLICATION->GetCurPage(false) == '/'): ?>
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
<?php endif; ?>
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