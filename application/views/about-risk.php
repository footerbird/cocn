<!DOCTYPE html>
<html>
<head>
<?php include_once('templete/pub_head_london.php') ?>
</head>
<body>
<?php include_once('templete/pub_nav.php') ?>
<!-- 帮助中心 -->
<div class="container mb20">
  <div class="breadcrumbs"><a href="/">首页</a><em></em>隐私条款</div>
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
              <a href="/page/about-download.php" >文档下载</a>
            </li>
          </ul>
      </div>
    </div>
    <div class="help-r-content">
      <div class="bd">
        <div class="title after-cls"><em class="line"></em><span>股权投资风险</span></div>
        <div class="pt30 pb30 pl30 pr30">
          <h3 class="f16 ta-c lh32 mb20"><b>杭州官网科技有限公司股权非公开转让信息平台<br>特别风险揭示书</b></h3>
          <p>尊敬的投资者：
              <br>为了使您更好地了解杭州官网科技有限公司股权交易系统（以下简称“官网科技”）公司股权交易的投资风险，根据《杭州官网科技有限公司股权交易系统投资者适当性管理细则（试行）》的规定，本公司特向您提供《杭州官网科技有限公司股权非公开转让信息平台特别风险揭示书》，揭示参与股票非公开转让存在的风险，请您认真阅读并签署。
          </p>
          <p><b>一、重要提示</b>
              <br><br>1、官网科技股权转让制度规则与传统证券交易所的制度规则存在较大差别。在参与公司股票非公开转让之前，请您务必认真阅读《杭州官网科技有限公司股权交易系统业务规则（试行）》等有关业务规则、细则、指引和通知。
              <br>2、官网科技提供全国非上市公司股权交易信息，为公司提供股权非公开转让服务信息，作为全新的市场，相关制度规则还需要不断修订和完善，请您务必密切关注相关制度调整。
              <br>3、官网科技股权交易系统，股权交易信息遵守公司法等相关法律，股权在官网科技展示并非公开转让的非上市公众公司，公司股东人数不可以超过200人。
              <br>官网科技公司不对股权转让公司的投资价值及投资者的收益作出实质性判断或者保证。
              <br>4、官网科技股权交易公司的信息披露要求与上市公司不同。负责指导和督促股权交易公司的信息披露，但对披露内容不进行实质性审核。
              <br>5、公司股权交易价格可能因多种原因发生波动，投资者应充分关注投资风险。本公司仅为投资者提供股权非公开转让信息，对投资损失不承担任何责任。
              <br>6、除官网科技公司规定的情形外，不符合股权非公开转让准入标准的投资者只能参与自身持有或曾持有的公司股权，不得委托买卖其他公司的股权。
          </p>
          <p><b>二、风险揭示</b>
              <br><br>参与公司股权非公开转让，除股权投资的共有风险外，还应特别关注以下风险：
              <br>1、公司风险：部分公司具有规模较小，对单一技术依赖度较高，受技术更新换代影响较大；对核心技术人员依赖度较高；客户集中度高，议价能力不强等特点。部分公司抗市场风险和行业风险的能力较弱，业务收入可能波动较大。
              <br>2、流动性风险：与上市公司相比，本平台公司股权相对集中，市场整体流动性低于正规证券交易所。
              <br>3、信息风险：公司股权转让信息披露要求和标准低于上市公司，除公司所披露的信息外，投资者还需认真获取和研判其他信息，审慎做出投资决策。
              <br>本风险揭示书的揭示事项仅为列举性质，未能详尽列示股票非公开转让的全部投资风险和可能导致投资损失的所有因素。您在参与此项业务前，请务必对此有清醒的认识。我们诚挚地建议您，从风险承受能力、风险认知能力、投资目标、心理和生理承受能力等自身实际情况出发，审慎参与股权非公开转让，合理配置金融资产。
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
