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
        <h4>股权变更列表</h4>
      </div>
    </header>
    <div class="container pt44 pb50">
      <div class="cont-box">
        <div class="circle-half-bg">
          <div class="user-stock">
            <ul class="user-stock-ul">
              <li>
                <div class="hd">
                  <span class="">名商网络有限名商网络有限公司名商网络有限名商网络有限公司</span>
                </div>
                <div class="bd">
                  <table width="100%">
                    <tbody>
                      <tr>
                        <td align="right" width="21%">
                          <div class="tit ta-r">公司名称:</div></td>
                        <td align="left" width="30%">
                          <div class="cont">5.5%</div></td>
                        <td align="right" width="19%">
                          <div class="tit ta-r">注册资本:</div></td>
                        <td align="left" width="30%">
                          <div class="cont">1000万人民币</div></td>
                      </tr>
                      <tr>
                        <td align="right" width="21%">
                          <div class="tit ta-r">法定代表人:</div></td>
                        <td align="left" width="30%">
                          <div class="cont">5.5%</div></td>
                        <td align="right" width="19%">
                          <div class="tit ta-r">在售比例:</div></td>
                        <td align="left" width="30%">
                          <div class="cont">19%</div></td>
                      </tr>
                      <tr>
                        <td align="right" width="21%"><div class="tit ta-r">注册日期:</div></td>
                        <td align="left" width="30%"><div class="cont">2019年11月12日</div></td>
                        <td align="right" width="19%"><div class="tit ta-r">发售日期:</div></td>
                        <td align="left" width="30%"><div class="cont">2019年11月12日</div></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </li>
            </ul>
          </div>
          <div class="user-dealing">
            <table class="" width="100%">
              <thead>
                <tr>
                  <th align="left" width="28%">股权比例</th>
                  <th align="center" width="24%">交易方向</th>
                  <th align="center" width="24%">交易类型</th>
                  <th align="right" width="24%">股权状态</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    0.5%
                  </td>
                  <td align="center">转入</td>
                  <td align="center">一口价</td>
                  <td align="right">冻结</td>
                </tr>
                <tr>
                  <td colspan="4">
                    <div class="cont">
                      <div class="row">
                        <div class="cols"><em class="tit">交易额：</em><em class="text col-3cb391">&yen;290,000</em>
                        </div>
                      </div>
                      <div class="row">
                        <div class="cols"><em class="tit">转让状态：</em><em class="text">交易完成</em><em class="date">2019-09-08 12:07:09</em>
                        </div>
                      </div>
                    </div>
                    <div class="line"></div>
                  </td>
                </tr>
                <tr>
                  <td>
                    0.5%
                  </td>
                  <td align="center">转出</td>
                  <td align="center">一口价</td>
                  <td align="right">冻结</td>
                </tr>
                <tr>
                  <td colspan="4">
                    <div class="cont">
                      <div class="row">
                        <div class="cols"><em class="tit">交易额：</em><em class="text col-f4364c">&yen;90,000</em>
                        </div>
                      </div>
                      <div class="row">
                        <div class="cols"><em class="tit">转让状态：</em><em class="text">交易完成</em><em class="date">2019-09-08 12:07:09</em>
                        </div>
                      </div>
                    </div>
                    <div class="line"></div>
                  </td>
                </tr>
              </tbody>
            </table>
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

      //筛选
      $("#rightBar_choose .list li").find('.item').on('click',function(){
        if($(this).hasClass("choosed")) {
            $(this).removeClass("choosed");
        }else {
            $(this).addClass("choosed");
            $(this).parent().siblings().find(".item").removeClass("choosed");
        }
      });

      //tr点击跳转
      $("#trading_center").find('tr').on('click',function(){
        location.href = $(this).children("td").find('a').attr("href");
      });
      })
    </script>
    </body>
</html>
