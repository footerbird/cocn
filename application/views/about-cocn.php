<!DOCTYPE html>
<html>
<head>
<?php include_once('templete/pub_head_london.php') ?>
</head>
<body>
<?php include_once('templete/pub_nav.php') ?>
<!-- 帮助中心 -->
<div class="container mb20">
  <div class="breadcrumbs"><a href="/">首页</a><em></em>关于官网</div>
  <div class="after-cls">
    <div class="help-nav">
      <div class="hb">欢迎来到官网</div>
      <div class="bd">
          <ul>
            <li>
              <a href="/page/about-cocn.php" class="cur">关于官网</a>
            </li>
            <li>
              <a href="/page/about-contact.php">联系我们</a>
            </li>
            <li>
              <a href="/page/about-privacy.php">隐私条款</a>
            </li>
            <li>
              <a href="/page/about-rule.php">用户协议</a>
            </li>
            <li>
              <a href="/page/about-link.php">平台链接</a>
            </li>
            <li>
              <a href="/page/about-callback.php">客户服务</a>
            </li>
            <li>
              <a href="/page/about-download.php" >文档下载</a>
            </li>
          </ul>
      </div>
    </div>
    <div class="help-r-content">
      <div class="bd">
        <div class="title after-cls"><em class="line"></em><span>关于官网</span></div>
        <div class="pt30 pb30 pl30 pr30">
          <p>官网是致力于为用户提供域名专业服务的平台，由国内域名资深人士创办运营，自2012年4月份上线以来成长迅速，目前已拥有超过18万个注册用户，包括域名投资者、企业和个人用户等，在域名行业取得了颇高的知名度和良好的口碑。
          <br>官网是国内首家多渠道域名出售、交易平台，致力于为客户提供域名出售、域名交易、域名管理的一站式服务平台。官网竭诚为用户管理交易域名提供多种便利服务，包括域名出售、域名购买、担保交易、域名预订、域名停放等。</p>
          <p class="pb5">
            <b>官网有什么优势</b>
          </p>
          <p>
            ——— 官网拥有完善的多渠道域名销售联盟，通过官网出售域名，可同步到国内各大注册商平台whois查询结果页面免费展示、出售，让更多的终端买家看到您的域名并购买，每天超100万次的搜索请求，增加您的售出机会！
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once('templete/pub_foot.php') ?>
<script type="text/javascript">
$(function(){
    var contentH = $(window).height()-$(".pub-head").outerHeight()-$(".footer").outerHeight()-$(".breadcrumbs").outerHeight()-20;
    var helpnavH = $(".help-nav").outerHeight();
    var minHelpH;
    if($(".help-r-content .hb").length == 1){
        minHelpH = helpnavH > contentH ? (helpnavH-$(".help-r-content .hb").outerHeight(true)) : (contentH-$(".help-r-content .hb").outerHeight(true));
    }else{
        minHelpH = helpnavH > contentH ? helpnavH : contentH;
    }
    $(".help-r-content .bd").css({
        "min-height" : minHelpH+'px'
    })
})
</script>
</body>
</html>
