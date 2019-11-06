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
        <h4>确认付款</h4>
      </div>
    </header>
    <div class="container pt44 pb50">
      <div class="cont-box">
        <div class="circle-half-bg">
          <div class="trading-pages-box">
            <div class="f16 ta-c">确认公司信息并付款</div>
            <div class="certify-box after-cls">
              <dl class="info2 mt10">
                <dt>公司名称：</dt>
                <dd>
                  <p class="col-base">杭州名商网络有限公司</p>
                </dd>
              </dl>
              <dl class="info2">
                <dt>统一社会信用代码：</dt>
                <dd>
                  <p class="col-base">3229832840284</p>
                </dd>
              </dl>
              <dl class="info2">
                <dt>法定代表人：</dt>
                <dd>
                  <p class="col-base">杭州名</p>
                </dd>
              </dl>
              <dl class="info2">
                <dt>注册资本：</dt>
                <dd>
                  <p class="col-base">100万元整</p>
                </dd>
              </dl>
              <dl class="info2">
                <dt>成立时间：</dt>
                <dd>
                  <p class="col-base">2014年09月26日</p>
                </dd>
              </dl>
              <dl class="info2">
                <dt>资费：</dt>
                <dd>
                  <p class="col-base">1000元</p>
                </dd>
              </dl>
              <img src="/htdocs/mobile/images/certify-web-5-pic.png" alt="" class="img">
            </div>
            <div class="f16 mt20">资费说明</div>
            <div class="ft mt10">
              <div class="tip mb10">
                <p>1. 审核资费为每年 1000元/人民币<br />2. 官网系统服务周期为1年，从审核通过开始计算<br />3. 审核成功或失败，审核费用不退还</p>
              </div>
            </div>
          </div>
        </div>
        <div class="ta-c mt40">
          <a href="/mobile/trading-pay.php" class="btn-default">在线支付</a>
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

      })
    </script>
    </body>
</html>
