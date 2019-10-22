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
        <h4>股投资人出价</h4>
      </div>
    </header>
    <div class="container pt44 pb50">
      <div class="cont-box">
        <div class="circle-half-bg">
          <a href="/mobile/user-mine-set-certify-person.php" class="attention">您需要完成合格投资人认证才能购买公司股权。<i class="ico-arrow-r2"></i>
          </a>
          <div class="trading-pages-box panel-maxheight">
            <div class="hd">
              <div class="name">杭州官网科技有限公司杭州官网科技有限公司</div>
            </div>
            <div class="bd">
              <table width="100%">
                <tbody>
                  <tr>
                    <td width="50%">
                      <label>项目编号：</label>23
                    </td>
                    <td>
                      <label>有效日期：</label>2019年09月08日
                    </td>
                  </tr>
                  <tr>
                    <td width="50%">
                      <label>投资方式：</label>股权转让
                    </td>
                    <td>
                      <label>交易类型：</label>投资人出价
                    </td>
                  </tr>
                  <tr>
                    <td width="50%">
                      <label>交易股权：</label>5.5%
                    </td>
                    <td>
                      <label>交易限额：</label>最低1%
                    </td>
                  </tr>
                  <tr>
                    <td width="50%" colspan="2">
                      <label>标的总价：</label><font class="col-f4364c">4,980,00</font>元
                    </td>
                  </tr>
                </tbody>
              </table>
              <ul class="trade-input">
                <li class="tit">买入比例：</li>
                <li class="cont">
                  <input type="text" name="" value=""><span>%</span>
                </li>
                <li class="tip mb0">
                  <p class="col-gray9">请填写您期望购买的股权份额，最小1%，不超过3.5%</p>
                  <p class="col-f4364c">示例：2000</p>
                </li>
                <li class="tit">我的意向出价：</li>
                <li class="cont">
                  <input type="text" name="" value=""><span>元/人民币</span>
                </li>
                <li class="tip">
                  <p class="col-gray9">请填写您购买以上份额股权的意向出价</p>
                  <p class="col-gray9">系统将询价发送给股权持有人，对方同意即可成交</p>
                </li>
              </ul>
              <div class="line mt15"></div>
              <p class="ta-c col-gray9 f12 mb15 mt15"><label for="Agree" class="weui-agree in-block">
                <input id="Agree" type="checkbox" class="weui-agree__checkbox">
                <span class="weui-agree__text">我已了解
                </span></label><a href="javascript:;" id="" class="col-3daaef">《股权投资风险》</a><label for="Agree" class="weui-agree in-block">并同意购买公司股权</label></p>
              <p class="ta-c">
                <a href="/mobile/trading-pay.php" class="btn big">我要询价</a>
              </p>
            </div>
            </div>
          </div>
        </div>
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
        //铺满(已算入加认证提示的高度)
        if ($('.panel-maxheight').length == 1) {
            $('.panel-maxheight').css({
              'min-height':($(window).height() - 160)/50+'rem'
            })
        }
      })
    </script>
    </body>
</html>
