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
            <div class="bd">
              <ul class="trade-input">
                <li class="tit">股权发行方式：</li>
                <li class="cont">
                  <label><input type="text" name="" value="股权转让" id="faxing"><span><i class="ico-arrow-d2"></i></span></label>
                </li>
                <li class="tip">
                  <p class="col-gray9">公司股东依法将自己股东权益有偿转让给他人，使他人取得股权的民事法律行为。</p>
                  <a href="#" class="col-3daaef">了解更多股权转让交易信息？</a>
                </li>
                <li class="tit">股权交易方式：</li>
                <li class="cont">
                    <label><input type="text" name="" value="一口价" id="jiaoyi"><span><i class="ico-arrow-d2"></i></span></label>
                </li>
                <li class="tip">
                  <p class="col-gray9">交易手续费：<em class="col-f4364c">0.2%</em>,买家可以直接点击购买，所以一口价出售速度比其他方式快三倍。</p>
                  <a href="#" class="col-3daaef">了解更多股权转让交易信息？</a>
                </li>
              </ul>
              <p class="ta-c mt35 mb25">
                <a href="javascript:;" id="go_publish" class="btn-default">发布股权交易</a>
              </p>
            </div>
            <div class="ft">
              <div class="tip">
                <table width="100%" class="f14">
                  <tbody>
                    <tr>
                      <td width="40%" align="right" class="tit">发布人身份：</td>
                      <td width="60%" align="left" class="cont">法定代表人</td>
                    </tr>
                    <tr>
                      <td width="" align="right" class="tit">我的持股比例：</td>
                      <td width="" align="left" class="cont">90%</td>
                    </tr>
                    <tr>
                      <td width="" align="right" class="tit">持股公司：</td>
                      <td width="" align="left" class="cont">网络有限公司</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="trading-pages-info">
          <div class="f16 tit">发布股权交易</div>
          <div class="text">发布股权交易适合公司法定代表人或持有公司股权的股东。法定代表人可发起股权转让和增资扩股，股东可发起股权转让交易。<br/><a href="#" class="col-3daaef">新手发布股权交易，应该注意什么？</a><br/><a href="#" class="col-3daaef">怎么样管理我发布的股权交易信息？</a>
          </div>
          <div class="f14 tit">股权交易规则</div>
          <div class="col-gray6">
            <p class="text">1、发布普通股权交易收取 0.2% 的交易手续费，交易成功后从交易款中扣除；</p>
            <p class="text">2、普通股权交易有效期为 30天，过期后，用户需要重新发布；</p>
            <p class="text">3、全资转让交易收取 5% 的交易手续费，交易成功后从交易款中扣除。</p>
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
        $.modal({
          title:'提示',
          text:'进入账户资料，设置收款账户',
          buttons: [
              { text: "设置" , onClick: function(){
                  window.location.href="/mobile/user-account-set.php";
              } },
              { text: "取消" , onClick: function(){

              } }
          ]
        });
        //筛选
        $("#faxing").picker({
      	  toolbarTemplate:'<div class="toolbar"><div class="toolbar-inner"><h1 class="title">选择股权发行方式</h1><a href="javascript:;" class="picker-button close-picker">完成</a></div></div>',
      	  cols: [
      	    {
      	      textAlign: 'center',
      	      values: ['股权转让','增资扩股','公司转让']
            }
          ],
           onChange:function(p,v,dv){
             if(v == '增资扩股'){
               $('#jiaoyi').val('一口价').attr("disabled","disabled");
               $('#go_publish').attr('href','/mobile/user-stock-kuogu.php');
             }else{
               $('#jiaoyi').removeAttr('disabled');
               $("#jiaoyi").picker({
                 toolbarTemplate:'<div class="toolbar"><div class="toolbar-inner"><h1 class="title">选择股权交易方式</h1><a href="javascript:;" class="picker-button close-picker">完成</a></div></div>',
                 cols: [
                   {
                     textAlign: 'center',
                     values: ['一口价','投资人出价','拍卖']
                   }
                 ],
               onChange:function(p,v,dv){
                 console.log(p,v,dv);
                 switch(v){
                   case "一口价":
                 $('#go_publish').attr('href','/mobile/user-stock-yikoujia.php');
                     break;
                   case "投资人出价":
                 $('#go_publish').attr('href','/mobile/user-stock-chujia.php');
                     break;
                   case "拍卖":
                   $('#go_publish').attr('href','/mobile/user-stock-paimai.php');
                     break;
                 }
               }
               });
             }
           }
      });

        // $('#faxing').on('change',function (){
        //   var selectVal = $(this).val();
        //   if(selectVal= "增资扩股"){
        //     $('#go_publish').attr('href','/mobile/user-stock-kuogu.php');
        //     $("#jiaoyi").picker({
        //   	  toolbarTemplate:'<div class="toolbar"><div class="toolbar-inner"><h1 class="title">选择股权交易方式</h1><a href="javascript:;" class="picker-button close-picker">完成</a></div></div>',
        //   	  cols: [
        //   	    {
        //   	      textAlign: 'center',
        //   	      values: ['一口价']
        //         }
        //       ]
        //   	});
        //   }else{
        //     $("#jiaoyi").picker({
        //   	  toolbarTemplate:'<div class="toolbar"><div class="toolbar-inner"><h1 class="title">选择股权交易方式</h1><a href="javascript:;" class="picker-button close-picker">完成</a></div></div>',
        //   	  cols: [
        //   	    {
        //   	      textAlign: 'center',
        //   	      values: ['一口价','投资人出价','拍卖']
        //         }
        //       ]
        //   	});
        //     $('#jiaoyi').on('change',function () {
        //        var selectVal = $(this).val();
        //        switch($(this).val()){
        //          case selectVal= "一口价":
        //        $('#go_publish').attr('href','/mobile/user-stock-yikoujia.php');
        //            break;
        //          case selectVal= "投资人出价":
        //        $('#go_publish').attr('href','/mobile/user-stock-chujia.php');
        //            break;
        //          case selectVal= "拍卖":
        //          $('#go_publish').attr('href','/mobile/user-stock-paimai.php');
        //            break;
        //        }
        //     });
        //   }
        // });

      })
    </script>
    </body>
</html>
