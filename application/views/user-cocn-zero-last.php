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
          <!-- <a href="/page/user-cocn-zero-news" class="base had">
            <em>5</em>
            新闻中心</a>
          <a href="/page/user-cocn-zero-product" class="base had">
            <em>6</em>
            产品中心</a> -->
          <a href="/page/user-cocn-zero-limit" class="base had">
            <em>5</em>
            权限设置</a>
          <a href="/page/user-cocn-zero-limit" class="base on">
            <em>6</em>
            完成设置</a>
      </div>
      <div class="mt25 after-cls">
        <div class="w350 m-auto pt15 mb10">
          <p class="pl22 f18 lh28 col-default">
            <i class="alert-ico-succ"></i>
            恭喜，您已完成官网基础设置
          </p>
          <div class="zero-last-info after-cls">
            <dl class="info">
              <dt>公司名称：</dt>
              <dd>杭州XXXXXXXXXX</dd>
            </dl>
            <dl class="info">
              <dt>官网实名网址：</dt>
              <dd>jjj.co.cn</dd>
            </dl>
            <dl class="info">
              <dt>服务有效期限：</dt>
              <dd>2019-04-04至2019-09-04</dd>
            </dl>
            <!-- <dl class="info">
              <dt>专业实名网址：</dt>
              <dd>wl.co.cn</dd>
            </dl> -->
            <dl class="info">
              <dt>实名服务年费：</dt>
              <dd><em class="in-block f20 col-f4364c">5000<i class="f14 ml3 in-block">元/人民币</i>
              </em></dd>
            </dl>
          </div>
        </div>
        <div class="w350 m-auto mb10">
          <p class="ta-c mt30 pb25" style="margin-left:-38px;">
            <a href="/page/trading-pay" class="pub-btn pub-btn-d2434a w140">支付</a><a href="/page/user-cocn" class="in-block col-3daaef ml20">>>&nbsp;预览公司官网</a></p>
        </div>
        <div class="remark lh24 mt40">
          <p class="f12 col-default fb mb15">公司实名网址使用规范</p>
          <p class="f12 col-gray5">
            1. 交易时候需要注意的事项
            <br />
            2. 交易手续费说明
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

})
</script>
</body>
</html>
