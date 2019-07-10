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
              <a href="/page/about-rule.php" class="cur">用户协议</a>
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
        <div class="title after-cls"><em class="line"></em><span>用户协议</span></div>
        <div class="pt30 pb30 pl30 pr30">
          <p>感谢您申请官网账户！在成为官网用户之前，请您仔细阅读以下条文，确保您理解并同意本协议全部内容。
          </p>
          <p><b>一、用户注册</b><br>您同意本协议并注册成功即成为玉米网的注册用户直至您的账户注销。玉米网可能在必要的时候对本协议条款及玉米网各单项服务协议进行更改，此种更改在玉米网上公布生效。您可以选择停止使用玉米网相关的服务或者注销您在玉米网的账户，否则玉米网将认为您同意更改后的服务条款。未在玉米网发布的服务条款将不具有法律效力，除非签有书面协议，并且仅对签署协议的当事人有效。
          </p>
          <p><b>二、用户账户</b><br>您应当能够独立行使权利或承担责任。为此，玉米网有权利要求您提供相应的证明，但玉米网并没有要求您提供证明的义务。如果您是自然人，您应当年满18周岁或在监护人的监护下。如果您是公司或其他组织体，应当合法成立并是能够独立行使权利并承担责任的主体。否则玉米网有权单方面终止服务。<br>如果使用玉米网提供的各单项服务，您可能还需要提交其他相关的资料和信息。为了提供更好的服务，您也可以向我们提供其他资料和信息，我们将按照玉米网的隐私政策保护您的资料和信息。<br>您应当保护好您的账户，除非已经得到您的提前通知，玉米网将认为您的账户处于您的控制之下。如果您的账户在不受您控制的情况下处于风险状态或者已经发生损失，请您及时以有效方式通知玉米网，您可以要求玉米网暂停服务或者冻结账户。<br>如果您使用玉米网账户直接访问其他网站，您应当遵守该网站的服务条款。
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
