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
        <h4>设置</h4>
      </div>
    </header>
    <div class="container pt44 pb50">
      <div class="cont-box">
        <div class="mine-set">
          <div class="weui-cells">
            <a class="weui-cell weui-cell_access" href="javascript:;">
              <div class="weui-cell__hd">
                <p>账户名称</p>
              </div>
              <div class="weui-cell__bd ta-c">
                <p class="col-base">
                  林海
                  <font class="state-wshiming">未实名</font>
                  <font class="state-yshiming">已实名</font></p>
              </div>
              <div class="weui-cell__ft">进行实名认证
              </div>
            </a>
          </div>
          <div class="weui-cells">
            <a class="weui-cell weui-cell_access" href="javascript:;">
              <div class="weui-cell__bd">
                <p>安全设置</p>
              </div>
              <div class="weui-cell__ft">
                修改密码
              </div>
            </a>
          </div>
          <div class="weui-cells">
            <a class="weui-cell weui-cell_access" href="javascript:;">
              <div class="weui-cell__bd">
                <p>绑定手机</p>
              </div>
              <div class="weui-cell__ft">
                182****3794
              </div>
            </a>
            <a class="weui-cell weui-cell_access" href="javascript:;">
              <div class="weui-cell__bd">
                <p>绑定微信</p>
              </div>
              <div class="weui-cell__ft">
                dalaoban
              </div>
            </a>
            <a class="weui-cell weui-cell_access" href="javascript:;">
              <div class="weui-cell__bd">
                <p>绑定微博</p>
              </div>
              <div class="weui-cell__ft">
                mingshang.weibo.com
              </div>
            </a>
            <a class="weui-cell weui-cell_access" href="javascript:;">
              <div class="weui-cell__bd">
                <p>绑定邮箱</p>
              </div>
              <div class="weui-cell__ft">
                maimai@marksmile.com
              </div>
            </a>
          </div>
          <div class="weui-cells">
            <a class="weui-cell weui-cell_access" href="/mobile/home.php">
              <div class="weui-cell__bd ta-c">
                退出登录
              </div>
            </a>
          </div>
        </div>

      </div>
    </div>
    <!-- <div class="back-top" id="back-top" >
    	<i class="ico-back-top"></i>
    </div> -->
    <?php include_once('templete/tabbar.php') ?>

    <?php include_once('templete/pub_foot.php') ?>

    <script>
    $(function () {
      //返回顶部
      // $(".container").on("scroll",function(){
      //   	var $_top = $(".cont-box").offset().top;
      //   	var $_hh = $(".header").height();
      //   	var $_height = $(this).height();
      //     // console.log($_height);
      //   	if( $_top - $_hh + $_height < 0 ){
    	// 		$("#back-top").fadeIn();
      //   	}else{
      //   		$("#back-top").fadeOut();
      //   	}
      //   });
      //   $(".ico-back-top").on("click",function(){//go top
      //   	$(".container").animate({scrollTop:0},500)
      //   });
      })
    </script>
    </body>
</html>
