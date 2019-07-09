<!DOCTYPE html>
<html>
<head>
<?php include_once('templete/pub_head_london.php') ?>
</head>
<body>
<?php include_once('templete/pub_nav.php') ?>
<!-- 帮助中心 -->
<div class="container mb20">
  <div class="breadcrumbs"><a href="/">首页</a><em></em><a href="/">关于官网</a><em></em><a href="/">分类标题</a><em></em><a href="/">内容标题</a></div>
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
              <a href="/page/about-link.php" class="cur">平台链接</a>
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
        <div class="title after-cls"><em class="line"></em><span>平台链接</span></div>
        <div class="pt30 pb30 pl30 pr30">
          <p class="pb20">
            <b>合作伙伴</b>
          </p>
          <p class="pb5">
            <img src="http://iph.href.lu/120x48?text=120*48" width="" height="" alt="" class="in-block mr20 mb20"><img src="http://iph.href.lu/120x48?text=120*48" width="" height="" alt="" class="in-block mr20 mb20"><img src="http://iph.href.lu/120x48?text=120*48" width="" height="" alt="" class="in-block mr20 mb20"><img src="http://iph.href.lu/120x48?text=120*48" width="" height="" alt="" class="in-block mr20 mb20"><img src="http://iph.href.lu/120x48?text=120*48" width="" height="" alt="" class="in-block mr20 mb20"><img src="http://iph.href.lu/120x48?text=120*48" width="" height="" alt="" class="in-block mr20 mb20"><img src="http://iph.href.lu/120x48?text=120*48" width="" height="" alt="" class="in-block mr20 mb20"><img src="http://iph.href.lu/120x48?text=120*48" width="" height="" alt="" class="in-block mr20 mb20">
          </p>
          <div class="hr mb25"></div>
          <p class="pb10">
            <b>查看详情</b>
          </p>
          <p><a href="#" class="in-block mr10 f12">官网</a><em class="f12 in-block col-gray9 mr10">|</em><a href="#" class="in-block mr10 f12">官网</a><em class="f12 in-block col-gray9 mr10">|</em><a href="#" class="in-block mr10 f12">官网</a><em class="f12 in-block col-gray9 mr10">|</em><a href="#" class="in-block mr10 f12">官网</a>
          </p>
          <div class="hr mb25"></div>
          <p class="pb5">
            <b>申请友情链接</b>
          </p>
          <p>
            欢迎与本网站交换友情链接。联系QQ：
          </p>
          <div class="hr"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once('templete/pub_foot.php') ?>
<script type="text/javascript">
$(function(){
    $(".help-r-content .bd").css({
        "min-height" : ($(".help-nav").outerHeight()-$(".help-r-content .hb").outerHeight(true))+'px'
    })
})
</script>
</body>
</html>
