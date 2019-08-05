<!DOCTYPE html>
<html>

    <head>
    <?php include_once('templete/pub_head.php') ?>
    </head>

    <body>
    <div class="header">
        <div class="header-container">
            <a href="<?php echo base_url() ?>mobile/home" target="_parent" class="logo">
                <img src="/htdocs/mobile/images/logo.png" height="100%" />
            </a>
        </div>
    </div>
    <div class="container pt45 pb50">
        <!--banner图轮播-->
        <div class="swiper-container banner-swiper" id="banner_swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="javascript:;">
                        <img src="/htdocs/mobile/images/banner_1.jpg" />
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="javascript:;">
                        <img src="/htdocs/mobile/images/banner_2.jpg" />
                    </a>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
        
    </div>
    <?php include_once('templete/tabbar.php') ?>
    
    <?php include_once('templete/pub_foot.php') ?>
    <link rel="stylesheet" href="/htdocs/mobile/dist/css/swiper.min.css?<?php echo CACHE_TIME; ?>">
    <link rel="stylesheet" href="/htdocs/mobile/dist/css/animate.min.css?<?php echo CACHE_TIME; ?>">
    <script src="/htdocs/mobile/dist/js/swiper.min.js?<?php echo CACHE_TIME; ?>"></script>
    <script src="/htdocs/mobile/dist/js/swiper.animate.min.js?<?php echo CACHE_TIME; ?>"></script>
    <script>
    window.onload = function(){
        
    }
    
    $(function(){
        var mySwiper_banner = new Swiper ('#banner_swiper', {
            loop : true,
            autoplay: {
                delay: 8000,//8秒切换一次
            },
            pagination: {
                el: '.swiper-pagination',
            }
        })
    })
    
    </script>
    </body>
</html>