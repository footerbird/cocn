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
        <h4>发布股权交易</h4>
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
            </div>
          </div>
          <div class="trading-pages-box mt15">
            <div class="bd">
              <ul class="trade-input">
                <li class="tit">转让数量：</li>
                <li class="cont">
                  <input type="text" name="" value="" id=""><span>%</span>
                </li>
                <li class="tip">
                  <p class="col-f4364c">可售份额98%</p>
                </li>
                <li class="tit">起拍价：</li>
                <li class="cont">
                  <input type="text" name="" value="" id=""><span>万元/人民币</span>
                </li>
                <li class="tit">保留价：</li>
                <li class="cont">
                  <input type="text" name="" value="" id=""><span>万元/人民币</span>
                </li>
                <li class="tip">
                  <p class="col-gray9">超过保留价才可成交</p>
                </li>
                <li class="tit">拍卖周期：</li>
                <li class="cont time after-cls">
                  <input type="text" name="" value="" id="pamai_start"><span>9:00截止</span><input type="text" name="" value="2019/12/20 9:00" id="" readonly>
                </li>
              </ul>
            </div>
            <div class="ft">
              <div class="tip">
                <p class="">1、发布普通股权交易收取 0.2% 的交易手续费，交易成功后从交易款中扣除；</p><br/>
                <p class="">2、普通股权交易有效期为 30天，过期后，用户需要重新发布；</p><br/>
                <p class="">3、全资转让交易收取 5% 的交易手续费，交易成功后从交易款中扣除；</p><br/>
                <p class="">4、全资转让交易使用暗拍方式，拍卖结束后公布竞拍结果。</p>
              </div>
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
                      Mike 28393
                    </div>
                    <div class="weui-cell__ft">
                      <i class="ico-zfb"></i>
                    </div>
                  </label>
                  <label class="weui-cell weui-check__label">
                    <div class="weui-cell__bd">
                      <input type="radio" name="payway" class="weui-radio">
                      <i class="mr5"></i>
                      杭州名商网 农行 494***44
                    </div>
                    <div class="weui-cell__ft">
                      <i class="ico-xxhk"></i>
                    </div>
                  </label>
                </div>
                <p class="ta-c col-gray9 f12 mb15 mt35"><label for="Agree" class="weui-agree in-block">
                  <input id="Agree" type="checkbox" class="weui-agree__checkbox">
                  <span class="weui-agree__text">我已了解
                  </span></label><a href="javascript:;" id="" class="col-3daaef">《股权交易规则》</a><label for="Agree" class="weui-agree in-block">并同意发布股权交易</label></p>
              </div>
              <p class="ta-c mb25">
                <a href="/mobile/user-stock-paimai-tj.php" class="btn-default">提交，发布股权交易</a>
              </p>
            </div>
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
