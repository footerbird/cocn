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
        <h4>支付</h4>
      </div>
    </header>
    <div class="container pt44 pb50">
      <div class="cont-box">
        <div class="trading-pages-box mt15">
          <div class="bd after-cls">
            <dl class="pay-wrap">
              <dt>标的公司：</dt>
              <dd>杭州名商网络有限公司</dd>
            </dl>
            <dl class="pay-wrap">
              <dt>资金用途：</dt>
              <dd>股权一口价交易定金</dd>
            </dl>
            <dl class="pay-wrap">
              <dt>应付金额：</dt>
              <dd>
                <font class="col-f4364c">1000,000</font>元
              </dd>
            </dl>
          </div>
        </div>
        <div class="lh34 mt5 mb5 col-base f16 pl15 pr15">选择以下支付方式</div>
          <div class="trading-pages-box pl0 pr0">
            <div class="bd">
              <div class="weui-cells weui-cells_checkbox mt0">
                <label class="weui-cell weui-check__label">
                  <div class="weui-cell__bd">
                    <input type="radio" class="weui-radio" name="payway" checked="checked">
                    <i class="mr5"></i>
                    支付宝
                  </div>
                  <div class="weui-cell__ft">
                    <i class="ico-zfb"></i>
                  </div>
                </label>
                <label class="weui-cell weui-check__label">
                  <div class="weui-cell__bd">
                    <input type="radio" name="payway" class="weui-radio">
                    <i class="mr5"></i>
                    微信
                  </div>
                  <div class="weui-cell__ft">
                    <i class="ico-wechat"></i>
                  </div>
                </label>
                <label class="weui-cell weui-check__label">
                  <div class="weui-cell__bd">
                    <input type="radio" name="payway" class="weui-radio">
                    <i class="mr5"></i>
                    线下汇款
                  </div>
                  <div class="weui-cell__ft">
                    <i class="ico-xxhk"></i>
                  </div>
                </label>
              </div>

            </div>
          </div>
          <p class="f30 ta-c mt40 mb10">
            &yen;1000.00
          </p>
          <p class="ta-c">
            <a href="/mobile/pay-result.php" class="btn-pay">确认支付</a>
          </p>
        </div>
      </div>
    </div>
    <div class="back-top" id="back-top" >
    	<i class="ico-back-top"></i>
    </div>
    <?php include_once('templete/pub_foot.php') ?>

    <!-- <?php include_once('templete/tabbar.php') ?> -->
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
