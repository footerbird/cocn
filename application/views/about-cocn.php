<!DOCTYPE html>
<html>
<head>
<?php include_once('templete/pub_head_london.php') ?>
</head>
<body>
<?php include_once('templete/pub_nav_a.php') ?>
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
          <p>官网 [CO.CN] 创立于2017年，专注中小企业股权交易信息发布和展示，企业融资发展新平台。服务于企业的金融基础设施和公共信息发布平台。致力于为企业提供股权交易、增资扩股、公司转让等核心设施服务；提供公司信用查询等相关业务，为企业股权规范和成长提供新的途径。</p>
          <p>
            <b>官网提供什么样的信息服务？</b>
          </p>
          <p>1. 股权交易
              <br>股权持有人和投资人可以在官网平台通过一口价、投资人出价、拍卖等三种方式，实行公司股权交易、增资扩股、公司转让等交易信息交互；
          </p>
          <p>2. 公司信用查询
              <br>通过官网平台公司信用查询，了解关注企业的信用状态，实时了解股权转让、过户等信息，了解公司经营相关状态；
          </p>
          <p>3. 官方网站
              <br>每家公司都需要有自己的官方平台，让投资人和社会公众了解公司。官网为公司提供了最具权威的官方网站平台，解决官网建设的各种难题。
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
