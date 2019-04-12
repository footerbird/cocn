<!DOCTYPE html>
<html>
<head>
<?php include_once('templete/pub_head_london.php') ?>
</head>
<body>
<?php include_once('templete/pub_nav_inside.php') ?>
<!-- 用户中心开始 -->
<div class="container-full">
  <?php include_once('templete/pub_leftnav.php') ?>
  <div class="view-frt">
    <div class="manage-panel">
      <div class="cocn-step-panel after-cls">
          <a href="/page/user-cocn-zero-web" class="base">
            <em>1</em>
            实名网址</a>
          <a href="/page/user-cocn-zero-connect" class="base">
            <em>2</em>
            联系方式</a>
          <a href="/page/user-cocn-zero-introduce" class="base">
            <em>3</em>
            公司介绍</a>
          <a href="/page/user-cocn-zero-logo" class="base">
            <em>4</em>
            标志设置</a>
          <a href="/page/user-cocn-zero-news" class="base">
            <em>5</em>
            新闻中心</a>
          <a href="/page/user-cocn-zero-product" class="base">
            <em>6</em>
            产品中心</a>
          <a href="/page/user-cocn-zero-limit" class="base">
            <em>7</em>
            权限设置</a>
          <div class="fl-r">
            <a href="/page/user-cocn" class="col-default">返回官网</a>
          </div>
      </div>
      <div class="mt25 after-cls">
        <div class="cocn-kaitong">
          <p class="ta-c f18 col-default pt30 pb30">您正在进行"<font>杭州名商网络有限公司官网</font>"初始化设置</p>
          <img src="/htdocs/images/inner-nothing.png" alt="" class="m-auto">
          <p class="ta-c col-gray6 lh28 pt30 pb50">
            公司官网是“<font>杭州名商网络</font>”<br />良好的官网展示，有利于投资人更好的了解您的公司状态，增加融资机会
          </p>
          <p class="ta-c pb30 pt20">
            <a href="/page/user-cocn-zero-web" class="w140 pub-btn">
              开始设置
            </a>
          </p>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- footer -->
<?php include_once('templete/pub_foot_inside.php') ?>
<script src="/htdocs/js/slick/slick.min.js?<?php echo CACHE_TIME; ?>"></script>
<link rel="stylesheet" href="/htdocs/js/slick/slick.css?<?php echo CACHE_TIME; ?>">
<script type="text/javascript">
$(function(){
  //切换行业数据、地区分析
  $("#col_left_tab_box .tab a").on('click',function() {
      $(this).addClass('on').siblings().removeClass('on');
      var index = $(this).index();
      number = index;
      $('#col_left_tab_box .content dd').hide();
      $('#col_left_tab_box .content dd:eq(' + index + ')').show();
  });
})
</script>
</body>
</html>
