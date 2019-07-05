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
          <a href="/page/home_model_list">产品列表</a>
        </li>
        <li>
          <a href="/page/home_model_about" class="on">关于我们</a>
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
        <div class="title">关于我们</div>
      </div>
    </div>
    <div class="news-content">
      <div class="news-desc">互联网时代，企业的品牌价值进一步提升，品牌企业需要保护互联网品牌和通过互联网对品牌进行保护，并由此产生了巨大的新商机。
      </div>
      <p>名商网（杭州名商网络有限公司）提供网络品牌专业保护服务，通过品牌资质查询、品牌资质获取、品牌在线监控、品牌资产托管和网络品牌维权等，实现对网络品牌全天候、全方位的保护，为品牌企业解决域名和商标的问题。</p>
      <p>让品牌微笑是名商网的使命。名商网自2011年成立至今，已经成功帮助新浪、阿里巴巴、淘宝、携程、中国长江三峡集团、中国平安集团、沃尔沃、美国Zynga等国内外知名公司实现网络品牌保护。</p>
      <p>2016年，名商网入选杭州G20峰会——互联网“独角兽” TOP 20 企业，为杭州创新企业代言。
      公司坐落于杭州市拱墅区上塘路329号海外海皇冠大酒店商务写字楼11层，拥有一千多平的整层办公场地，现代化办公设施齐全，交通便利。</p>
      <p>
        <img src="http://iph.href.lu/830x320?text=830*320" width="100%" height="" alt="">
        <span></span>
      </p>
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
