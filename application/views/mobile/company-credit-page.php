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
        <h4>公司信用详情</h4>
      </div>
    </header>
    <div class="container pt44 pb50">
      <div class="cont-box">
        <div class="circle-half-bg">
          <div class="company-credit-page-box">
            <div class="hd">
              <div class="name">杭州官网科技有限公司</div>
              <font class="state-blue">在业</font>
            </div>
            <div class="bd">
              <div class="left">
                <ul class="detail">
                  <li>
                    <label>[法定代表人]</label><em>共育秀</em>
                  </li>
                  <li>
                    <label>[注册资本]</label><em>4800.00万元人民币</em>
                  </li>
                  <li>
                    <label>[成立时间]</label><em>2019-09-09</em>
                  </li>
                  <li>
                    <label>[所属行业]</label><em>住宿餐饮</em>
                  </li>
                  <li>
                    <label>[企业地址]</label><em>安徽省蚌埠市淮上区龙华路209号</em>
                  </li>
                  <li>
                    <label>[信用代码]</label><em>384395308580935590</em>
                  </li>
                  <li>
                    <label>[信用代码]</label><em>互联网技术、信息技术开发;计算机软件销售及其技术开发、技术咨询、技术服务;网上商务咨询、网上贸易代理(不得从事电信增值、金融业务);计算机系统服务;企业管理咨询;商务信息咨询;信息系统集成服务;;电子产品租赁;电子产品、通讯设备及配件销售;软件开发;网络工程、自动化工程设计、施工;网站设计与开发;网页制作;平面及立体设计及制作;设计、制作、发布、代理国内各类广告;展示展览服务;企业形象设计、装饰设计;影视器材租赁、销售。(依法须经批准的项目,经相关部门批准后互联网技术、信息技术开发;计算机软件销售及其技术开发、技术咨询、技术服务;网上商务咨询、网上贸易代理(不得从事电信增值、金融业务);计算机系统服务;企业管理咨询;商务信息咨询;信息系统集成服务;;电子产品租赁;电子产品、通讯设备及配件销售;软件开发;网络工程、自动化工程设计、施工;网站设计与开发;网页制作;平面及立体设计及制作;设计、制作、发布、代理国内各类广告;展示展览服务;企业形象设计、装饰设计;影视器材租赁、销售。(依法须经批准的项目,经相关部门批准后互联网技术、信息技术开发;计算机软件销售及其技术开发、技术咨询、技术服务;网上商务咨询、网上贸易代理(不得从事电信增值、金融业务);计算机系统服务;企业管理咨询;商务信息咨询;信息系统集成服务;;电子产品租赁;电子产品、通讯设备及配件销售;软件开发;网络工程、自动化工程设计、施工;网站设计与开发;网页制作;平面及立体设计及制作;设计、制作、发布、代理国内各类广告;展示展览服务;企业形象设计、装饰设计;影视器材租赁、销售。(依法须经批准的项目,经相关部门批准后互联网技术、信息技术开发;计算机软件销售及其技术开发、技术咨询、技术服务;网上商务咨询、网上贸易代理(不得从事电信增值、金融业务);计算机系统服务;企业管理咨询;商务信息咨询;信息系统集成服务;;电子产品租赁;电子产品、通讯设备及配件销售;软件开发;网络工程、自动化工程设计、施工;网站设计与开发;网页制作;平面及立体设计及制作;设计、制作、发布、代理国内各类广告;展示展览服务;企业形象设计、装饰设计;影视器材租赁、销售。(依法须经批准的项目,经相关部门批准后</em>
                  </li>
                </ul>
              </div>
              <div class="action">
                <a href="javascript:;" class="gz">关注</a>
              </div>
            </div>
          </div>
          <div class="company-credit-page-ft">
            <a href="#" class="img-box a">
              <p>开通公司官网</p>
            </a>
            <a href="#" class="img-box b">
              <p>发起公司股权交易</p>
            </a>
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
      })
    </script>
    </body>
</html>
