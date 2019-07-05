<!DOCTYPE html>
<html>
<head>
<?php include_once('templete/pub_head_model.php') ?>
</head>
<body>
<!-- 开始 -->
<div class="pub-head" id="pub_head">
  <div class="container">
    <a href="/page/home_model" class="main-logo fl-l"></a>
    <div class="fl-r">
      <a href="javascript:;" id="headerToggle" class="header__toggle"><span></span></a>
      <ul class="main-nav clearfix">
        <li>
          <a href="/page/home_model">首页</a>
        </li>
        <li>
          <a href="/page/home_model_list" class="on">产品列表</a>
        </li>
        <li>
          <a href="/page/home_model_about">关于我们</a>
        </li>
        <li>
          <a href="/page/home_model_news">新闻中心</a>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="bgblack" id="bgblack"></div>
<div class="container after-cls bg-white">
  <div class="news-page after-cls">
    <div class="news-hd after-cls">
      <div class="fl-l w-all after-cls">
        <div class="title">产品名称</div>
      </div>
    </div>
    <div class="news-content">
      <!-- <div class="news-desc">互联网时代，企业的品牌价值进一步提升，品牌企业需要保护互联网品牌和通过互联网对品牌进行保护，并由此产生了巨大的新商机。
      </div> -->
      <p>
        <img src="http://iph.href.lu/830x320?text=830*320" width="100%" height="" alt="">
        <span></span>
      </p>
      <p>价 格：面议</p>
      <p>快速卷帘门又称快速软帘门，是指每秒运行速度超过0.6米的门，是快速升降的无障碍隔离门，主要作用是快速隔离，从而保证车间空气质量无尘等级。具有保温、保冷、防虫、防风、防尘、隔音、防火、防异味、采光等多项功能，并广泛用于食品、化学、纺织、电子、超市、冷冻、物流、仓储等多种场所，可极高的满足高性能物流及洁净场所，并且节省能源，高速自动关闭，提高作业效率，创造更佳的作业环境等优点。</p>
      <div class="hr mb20 mt20"></div>
    </div>
  </div>
</div>
<?php include_once('templete/pub_foot_model.php') ?>
<script type="text/javascript">
$(function(){
  $("#headerToggle").on('click',function () {
    $("#pub_head").toggleClass('pub-head-on');
    $("body").toggleClass('on');
  });
  $("#bgblack").on('click',function () {
    $("#pub_head").removeClass('pub-head-on');
    $("body").removeClass('on');

  })
})
</script>
</body>
</html>
