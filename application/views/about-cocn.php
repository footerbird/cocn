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
          <p>官网（www.ioio.cn）创立于2019年，是国内知名的股权交易型平台，是服务于企业的金融基础设施和公共平台；致力于为企业提供股权交易、增资扩股、公司转让等核心设施服务；并提供竞品对手公司相关信用信息查询，极大促进了企业股权交易便利化。</p>
          <p>
            <b>官网提供什么样的服务？</b>
          </p>
          <p>1、股权交易
              <br>买卖双方可以在官网平台通过一口价、投资人出价、拍卖等三种交易方式实行公司股权交易、增资扩股、公司转让等交易；
          </p>
          <p>2、公司信用查询
              <br>可通过官网平台公司信用查询，了解竞争对手的信用状态，监控竞争对手股权转让、交易等相关信息、查询公司在业等相关情况；
          </p>
          <p>3、开通官网
              <br>作为卖方，需统一认证官网，行驶公司相关股权转让、交易等功能，且具备公司唯一认证官网营销平台，为公司打造线上品牌推广，推进公司品牌宣传；
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
