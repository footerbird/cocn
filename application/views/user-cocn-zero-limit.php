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
          <a href="/page/user-cocn-zero-web" class="base had">
            <em>1</em>
            实名网址</a>
          <a href="/page/user-cocn-zero-connect" class="base had">
            <em>2</em>
            联系方式</a>
          <a href="/page/user-cocn-zero-introduce" class="base had">
            <em>3</em>
            公司介绍</a>
          <a href="/page/user-cocn-zero-logo" class="base had">
            <em>4</em>
            标志设置</a>
          <a href="/page/user-cocn-zero-news" class="base had">
            <em>5</em>
            新闻中心</a>
          <a href="/page/user-cocn-zero-product" class="base had">
            <em>6</em>
            产品中心</a>
          <a href="/page/user-cocn-zero-limit" class="base on">
            <em>7</em>
            权限设置</a>
      </div>
      <div class="mt25 after-cls">

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

})
</script>
</body>
</html>
