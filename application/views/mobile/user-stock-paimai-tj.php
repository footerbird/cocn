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
        <h4>确认发布</h4>
      </div>
    </header>
    <div class="container pt44 pb50">
      <div class="cont-box">
        <div class="circle-half-bg">
          <div class="trading-pages-box">
            <div class="hd">
              <div class="name publish">杭州官网科技有限公司</div>
            </div>
            <div class="certify-box">
              <dl class="info3">
                <dt>发布人身份：</dt>
                <dd>法定代表人</dd>
              </dl>
              <dl class="info3">
                <dt>我的持股比例：</dt>
                <dd>0%</dd>
              </dl>
              <dl class="info3">
                <dt>股权交易方式：</dt>
                <dd>拍卖</dd>
              </dl>
              <dl class="info3">
                <dt>股权发行方式：</dt>
                <dd>股权转让</dd>
              </dl>
              <dl class="info3">
                <dt>交易手续费：</dt>
                <dd>0.2%</dd>
              </dl>
              <dl class="info3">
                <dt>转让数量：</dt>
                <dd>8%</dd>
              </dl>
              <dl class="info3">
                <dt>起拍价：</dt>
                <dd>2万元/人民币</dd>
              </dl>
              <dl class="info3">
                <dt>保留价：</dt>
                <dd>2万元/人民币</dd>
              </dl>
              <dl class="info3">
                <dt>起拍周期：</dt>
                <dd class="f12">2019.09.09 9:00 - 2019.10.19 9:00</dd>
              </dl>
            </div>
          </div>
          <div class="trading-pages-box mt15">
            <div class="hd">
              <div class="name publish">收款方式</div>
            </div>
            <div class="bd lh20 f14">
              <p class="mb15">杭州名商网络杭州名商网络杭州名商网络杭州名商网络有限公司</p>
              <p class="mb15"><i class="ico-xxhk mr10"></i>中国农业银行</p>
              <p class="mb15">39***3839</p>
            </div>
          </div>
            <p class="ta-c mt40">
              <a href="/mobile/user-stock-tj-fankui.php" class="btn-default">确认，发布股权交易</a>
            </p>
          </div>

        </div>
      </div>
    </div>
    <div class="back-top" id="back-top" >
    	<i class="ico-back-top"></i>
    </div>
    <?php include_once('templete/pub_foot.php') ?>
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
        $('#pamai_start').calendar();
      })
    </script>
    </body>
</html>
