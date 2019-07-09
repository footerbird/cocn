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
              <a href="/page/about-privacy.php" class="cur">隐私条款</a>
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
        <div class="title after-cls"><em class="line"></em><span>隐私条款</span></div>
        <div class="pt30 pb30 pl30 pr30">
          <p>官网（以下称"本网站"）隐私权保护声明系本网站保护用户个人隐私的承诺，请您务必仔细阅读：</p>
          <p><b>个人资料</b><br>当您在本网站进行用户注册登记、参加网上或公共论坛等各种活动时，在您的同意及确认下，本网站将通过注册表格等形式要求您提供一些个人资料。这些个人资料包括：如姓名、性别、出生日期、电话、通信地址、电子邮件等情况。本网站将对您所提供的资料进行严格的管理及保护，必要时使用相应的技术进行电脑处理，防止您的个人资料丢失、被盗用或遭篡改。
          </p>
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
