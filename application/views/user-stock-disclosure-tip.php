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
      <div class="sub-nav-panel">
        <span class="title">我的股权</span>
      </div>
      <div class="mt15 after-cls">
        <div class="cocn-kaitong">
          <p class="ta-c f18 col-default pt30 pb30">
            您尚未完成股权信息披露
          </p>
          <img src="/htdocs/images/inner-nothing.png" alt="" class="m-auto">
          <p class="ta-c col-gray6 lh28 pt30 pb50">股权信息披露有利于投资人更加了解您的公司情况，提高股权交易成功率<br />请正确填写相关内容
          </p>
          <div class="ta-c pb30 pt20">
            <a href="/page/user-stock-disclosure" class="w170 pub-btn mr10">
              提交股权信息披露
            </a>
            <a href="/page/user-stock" class="w170 pub-btn-b">
              暂不填写
            </a>
          </div>
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
})
</script>
</body>
</html>
