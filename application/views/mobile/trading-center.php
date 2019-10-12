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
        <div class="right">
          <a href="javascript:;" class="open-popup col-white" id="" data-target="#rightBar">筛选<i class="ico-sift ml4"></i></a>
        </div>
      </div>
    </header>
    <div class="container pt44 pb50">
      <div class="cont-box">
        <div class="company-credit-content">
          <form class="search-box company">
            <i class="ico-search"></i>
            <input type="search" class="search-bar-input" id="" placeholder="编号/公司名称" required="">
          </form>
          <div class="line"></div>
        </div>
        <div class="trading-center">
          <table width="100%">
            <thead>
              <tr>
                <th width="32%" align="left">名称</th>
                <th width="24%">交易比例</th>
                <th width="24%">交易类型</th>
                <th width="20%" align="right">最新价</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>杭州名商网杭州名商网杭州名商网杭州名商网</td>
                <td align="center">0.08%</td>
                <td align="center">
                  <a href="/mobile/trading-pages.php" class="col-base">一口价</a>
                </td>
                <td class="col-f4364c" align="right">130万</td>
              </tr>
              <tr>
                <td>杭州名商网杭州名商网</td>
                <td align="center">0.08%</td>
                <td align="center">
                  <a href="/mobile/trading-pages-paimai.php" class="col-base">拍卖</a>
                </td>
                <td class="col-f4364c" align="right">130万</td>
              </tr>
              <tr>
                <td>杭州名商网</td>
                <td align="center">0.08%</td>
                <td align="center">
                  <a href="/mobile/trading-pages-yijia.php" class="col-base">投资人出价</a>
                </td>
                <td class="col-f4364c" align="right">130万</td>
              </tr>
              <tr>
                <td>杭州名商网杭州名商网</td>
                <td align="center">0.08%</td>
                <td align="center">
                  <a href="/mobile/trading-pages-zengzi.php" class="col-base">增资扩股</a>
                </td>
                <td class="col-f4364c" align="right">130万</td>
              </tr>
              <tr>
                <td>杭州名商网杭州名商网</td>
                <td align="center">0.08%</td>
                <td align="center">
                  <a href="/mobile/trading-pages-zhuanrang.php" class="col-base">公司转让</a>
                </td>
                <td class="col-f4364c" align="right">130万</td>
              </tr>
            </tbody>
          </table>
          <p class="ta-c pt15 pb15">
            <a href="#" class="col-gray9">加载更多</a>
          </p>
        </div>
      </div>
    </div>
    <div class="back-top" id="back-top" >
    	<i class="ico-back-top"></i>
    </div>
    <?php include_once('templete/pub_foot.php') ?>

    <?php include_once('templete/tabbar.php') ?>
    <?php include_once('templete/rightBar_sift_trading.php') ?>
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

        //筛选
        $("#rightBar_choose .list li").find('.item').on('click',function(){
          if($(this).hasClass("choosed")) {
              $(this).removeClass("choosed");
          }else {
              $(this).addClass("choosed");
              $(this).parent().siblings().find(".item").removeClass("choosed");
          }
        });
      })
    </script>
    </body>
</html>
