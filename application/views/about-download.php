<!DOCTYPE html>
<html>
<head>
<?php include_once('templete/pub_head_london.php') ?>
</head>
<body>
<?php include_once('templete/pub_nav_a.php') ?>
<!-- 帮助中心 -->
<div class="container mb20">
  <div class="breadcrumbs"><a href="/">首页</a><em></em>文档下载</div>
  <div class="after-cls">
    <div class="help-nav">
      <div class="hb">欢迎来到官网</div>
      <div class="bd">
          <ul>
            <li>
              <a href="/page/about-cocn.php">关于官网</a>
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
              <a href="/page/about-download.php" class="cur">文档下载</a>
            </li>
          </ul>
      </div>
    </div>
    <div class="help-r-content">
      <div class="bd">
        <div class="title after-cls"><em class="line"></em><span>文档下载</span></div>
        <div class="pt30 pb30 pl30 pr30">
          <div class="wdxz">
            <!-- <div class="hd">文档下载</div> -->
            <div class="bd2">
              <p class="item">
                <i class="ico-help-wd"></i>
                <em>我是名字不知道有多少就写多长</em>
                <a href="javascript:;" class="download">下载</a>
              </p>
              <p class="item">
                <i class="ico-help-wd"></i>
                <em>我是名字不知道有多少就写多长</em>
                <a href="javascript:;" class="download">下载</a>
              </p>
              <p class="item">
                <i class="ico-help-wd"></i>
                <em>有多少就写多长</em>
                <a href="javascript:;" class="download">下载</a>
              </p>
            </div>
          </div>
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
