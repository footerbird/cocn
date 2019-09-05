<!DOCTYPE html>
<html>

    <head>
    <?php include_once('templete/pub_head.php') ?>
    </head>
    <body>
    <header class="header">
      <div class="header-title">
        <a href="javascript:history.go(-1);" id="" class="back">
          <i class="ico-header-back"></i>
        </a>
        <h4>股权交易中心</h4>
      </div>
    </header>
    <div class="container pt44 pb50">
      <div class="cont-box">
        <a href="/mobile/trading-pages.php" class="col-base">一口价</a>
        <a href="/mobile/trading-pages-paimai.php" class="col-base">拍卖</a>
        <a href="/mobile/trading-pages-yijia.php" class="col-base">投资人出价</a>
        <a href="/mobile/trading-pages-zengzi.php" class="col-base">增资扩股</a>
        <a href="/mobile/trading-pages-zhuanrang.php" class="col-base">公司转让</a>



      </div>
    </div>
    <div class="back-top" id="back-top" >
    	<i class="ico-back-top"></i>
    </div>
    <?php include_once('templete/pub_foot.php') ?>

    <?php include_once('templete/tabbar.php') ?>
    <?php include_once('templete/right-login.php') ?>
    <script type="text/javascript">
    $(function () {
      //返回顶部
      $(".container").on("scroll",function(){
        	var $_top = $(".cont-box").offset().top;
        	var $_hh = $(".header").height();
        	var $_height = $(this).height();
          // console.log($_height);
        	if( $_top - $_hh + $_height < 0 ){
    			$("#back-top").fadeIn();
        	}else{
        		$("#back-top").fadeOut();
        	}
        });
        $(".ico-back-top").on("click",function(){//go top
        	$(".container").animate({scrollTop:0},500)
        });

      })
    </script>
    </body>
</html>
