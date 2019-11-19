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
        <h4>股权交易</h4>
      </div>
    </header>
    <div class="container pt44 pb50">
      <div class="cont-box">
        <div class="circle-half-bg">
          <form class="search-box company">
            <i class="ico-search"></i>
            <input type="search" class="search-bar-input" id="" placeholder="公司编号/公司名称" required="">
          </form>
          <div class="top-filter">
            <table width="100%">
              <tbody>
                <tr>
                  <td width="38%">
                    <input class="fangxiang" type="text" value="交易方向" name="fangxiang" id="faxiang">
                  </td>
                  <td width="37%">
                      <input class="fangshi" type="text" value="交易方式" name="fangshi" id="fangshi">
                  </td>
                  <td width="25%">
                    <input class="leixing" type="text" value="交易类型" name="leixing" id="leixing">
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="user-dealing">
            <table class="" width="100%">
              <thead>
                <tr>
                  <th align="left" width="28%">名称</th>
                  <th align="center" width="24%">交易方向</th>
                  <th align="center" width="24%">交易类型</th>
                  <th align="right" width="24%">投资方式</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <a href="/mobile/user-dealing-succ-transfer.php" class="col-base ellip">公司名称公司名称公司名称公司名称</a>
                  </td>
                  <td align="center">买入</td>
                  <td align="center">一口价</td>
                  <td align="right">股权转让</td>
                </tr>
                <tr>
                  <td colspan="4">
                    <div class="cont">
                      <div class="row">
                        <div class="cols"><em class="tit">股权交易：</em><em class="text">0.6%</em>
                        </div>
                        <div class="cols"><em class="tit">交易额：</em><em class="text">&yen;290,000</em>
                        </div>
                      </div>
                      <div class="row">
                        <div class="cols"><em class="tit">交易状态：</em><a href="/mobile/user-dealing-succ-transfer.php"  class="text">交易完成</a>
                        </div>
                      </div>
                    </div>
                    <div class="line"></div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="/mobile/user-dealing-fail-transfer.php" class="col-base ellip">公司名称公司名称公司名称公司名称</a>
                  </td>
                  <td align="center">买入</td>
                  <td align="center">一口价</td>
                  <td align="right">股权转让</td>
                </tr>
                <tr>
                  <td colspan="4">
                    <div class="cont">
                      <div class="row">
                        <div class="cols"><em class="tit">股权交易：</em><em class="text">0.6%</em>
                        </div>
                        <div class="cols"><em class="tit">交易额：</em><em class="text">&yen;290,000</em>
                        </div>
                      </div>
                      <div class="row">
                        <div class="cols"><em class="tit">交易状态：</em><a href="/mobile/user-dealing-fail-transfer.php"  class="text">交易失败</a>
                        </div>
                      </div>
                    </div>
                    <div class="line"></div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="/mobile/trading-pay.php" class="col-base ellip">公司名称公司名称公司名称公司名称</a>
                  </td>
                  <td align="center">买入</td>
                  <td align="center">一口价</td>
                  <td align="right">股权转让</td>
                </tr>
                <tr>
                  <td colspan="4">
                    <div class="cont">
                      <div class="row">
                        <div class="cols"><em class="tit">股权交易：</em><em class="text">0.6%</em>
                        </div>
                        <div class="cols"><em class="tit">交易额：</em><em class="text">&yen;290,000</em>
                        </div>
                      </div>
                      <div class="row">
                        <div class="cols"><em class="tit">交易状态：</em><a href="/mobile/trading-pay.php" class="text">支付</a>
                        </div>
                      </div>
                    </div>
                    <div class="line"></div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="/mobile/user-dealing-wait-transfer.php" class="col-base ellip">公司名称名称</a>
                  </td>
                  <td align="center">买入</td>
                  <td align="center">一口价</td>
                  <td align="right">股权转让</td>
                </tr>
                <tr>
                  <td colspan="4">
                    <div class="cont">
                      <div class="row">
                        <div class="cols"><em class="tit">股权交易：</em><em class="text">0.6%</em>
                        </div>
                        <div class="cols"><em class="tit">交易额：</em><em class="text">&yen;290,000</em>
                        </div>
                      </div>
                      <div class="row">
                        <div class="cols"><em class="tit">交易状态：</em><a href="/mobile/user-dealing-wait-transfer.php" class="text ing">交易中</a>
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
      $("#faxiang").picker({
    	  toolbarTemplate:'<div class="toolbar"><div class="toolbar-inner"><h1 class="title">选择交易方向</h1><a href="javascript:;" class="picker-button close-picker">完成</a></div></div>',
    	  cols: [
    	    {
    	      textAlign: 'center',
    	      values: ['买入','卖出','全部']
          }
        ]
    	});
      $("#leixing").picker({
    	  toolbarTemplate:'<div class="toolbar"><div class="toolbar-inner"><h1 class="title">选择交易类型</h1><a href="javascript:;" class="picker-button close-picker">完成</a></div></div>',
    	  cols: [
    	    {
    	      textAlign: 'center',
    	      values:['股权转让','增资配股','公司转让','全部类型']
          }
        ]
    	});
      $("#fangshi").picker({
    	  toolbarTemplate:'<div class="toolbar"><div class="toolbar-inner"><h1 class="title">选择交易方式</h1><a href="javascript:;" class="picker-button close-picker">完成</a></div></div>',
    	  cols: [
    	    {
    	      textAlign: 'center',
    	      values:['标价','拍卖','全部方式']
          }
        ]
      });
    })
    </script>
    </body>
</html>
