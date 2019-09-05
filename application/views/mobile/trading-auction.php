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
        <h4>拍卖</h4>
      </div>
    </header>
    <div class="container pt44 pb50">
      <div class="cont-box">
        <div class="circle-half-bg">
          <div class="trading-pages-box">
            <div class="hd">
              <div class="name">杭州官网科技有限公司杭州官网科技有限公司股权拍卖</div>
            </div>
            <div class="bd">
              <table width="100%">
                <tbody>
                  <tr>
                    <td width="50%" colspan="2">
                      <label>项目编号：</label>23484848
                    </td>
                  </tr>
                  <tr>
                    <td width="50%" colspan="2">
                      <label>剩余时间：</label><div id="countdown" class="countdown"></div>
                    </td>
                  </tr>
                  <tr>
                    <td width="50%">
                      <label>投资方式：</label>股权转让
                    </td>
                    <td>
                      <label>交易类型：</label>拍卖
                    </td>
                  </tr>
                  <tr>
                    <td width="50%">
                      <label>交易股权：</label>5.5%
                    </td>
                    <td>
                      <label>起拍价格：</label><font class="col-f4364c">4,980,00</font>元
                    </td>
                  </tr>
                </tbody>
              </table>
              <ul class="trade-input">
                <li class="tit">参与拍卖：</li>
                <li class="cont">
                  <input type="text" name="" value=""><span>元/人民币</span>
                </li>
                <li class="tip">
                  <p class="col-gray9">请出价，拍卖结束后公布结果<font class="col-f4364c fl-r">示例：2000</font></p>
                </li>
              </ul>
              <p class="f14 col-gray9"><label class="col-gray3">投资金额：</label><font class="col-f4364c">200,980,00</font>元</p>
              <p class="f14 col-gray9"><label class="col-gray3">保证金额：</label><font class="col-f4364c">200,980,00</font>元</p>
              <div class="line mt15"></div>
              <p class="ta-c col-gray9 f12 mb15 mt15"><label for="Agree" class="weui-agree in-block">
                <input id="Agree" type="checkbox" class="weui-agree__checkbox">
                <span class="weui-agree__text">我已了解
                </span></label><a href="javascript:;" id="" class="col-3daaef">《股权投资风险》</a><label for="Agree" class="weui-agree in-block">并同意购买公司股权</label></p>
              <p class="ta-c">
                <a href="/mobile/trading-pay.php" class="btn big">确认出价，并预付保证金</a>
              </p>
              <div class="f14 mt40 mb10">出价记录</div>
              <table width="100%" class="history">
                <thead>
                  <tr>
                    <th align="center" width="50%">
                      时间
                    </th>
                    <th align="left" width="22%">
                      操作
                    </th>
                    <th align="right" width="28%">
                      金额
                    </th>
                  </tr>
                </thead>
                <tbody >
                  <tr>
                    <td align="center">2019-09-09 10:00:09</td>
                    <td align="left">我的出价</td>
                    <td align="right">&yen;12,410</td>
                  </tr>
                  <tr>
                    <td align="center">2019-09-09 10:00:09</td>
                    <td align="left">我的出价</td>
                    <td align="right">&yen;1,012,410</td>
                  </tr>
                  <tr>
                    <td align="center">2019-09-09 10:00:09</td>
                    <td align="left">我的出价</td>
                    <td align="right">&yen;192,410</td>
                  </tr>
                </tbody>
              </table>
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

        //拍卖页面倒计时
        function countDown(id,leftTime,callback){
            var $id = $("#"+id),runtime = 0,wait = leftTime/1000;
            time();

            function time(){
                var str = "";
                wait--;
                if(wait<0){
                    if(typeof(callback)=="function"){
                        callback();
                        return false;
                    }else{
                        return false;
                    }
                }
                var nD=Math.floor(wait/(60*60*24));
                var nH=Math.floor(wait/(60*60))%24;
                var nM=Math.floor(wait/(60)) % 60;
                var nS=wait % 60;

                if(nD){
                    str+= " <font class='col-f4364c'>" + nD + "</font>" + "天";
                }
                if(nD || nH){
                    str+= " <font class='col-f4364c'>" + nH + "</font>" + "小时";
                }
                if(nD || nH || nM){
                    str+= " <font class='col-f4364c'>" + nM + "</font>" + "分";
                }
                str+= " <font class='col-f4364c'>" + nS + "</font>" + "秒";
                $id.html(str);

                setTimeout(function(){
                    time();
                },1000)
            }
        }
        //竞价倒计时
          countDown("countdown",2592000*1000);//从服务器取出剩余时间，如果单位是秒
    })

    </script>
    </body>
</html>
