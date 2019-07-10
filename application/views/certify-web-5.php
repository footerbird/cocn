<!DOCTYPE html>
<html>
<head>
<?php include_once('templete/pub_head_london.php') ?>
</head>
<body>
<?php include_once('templete/pub_nav.php') ?>
<!-- 公司认证-->
<div class="container mt15 mb20 bg-white">
  <div class="padding20 certify-panel-only">
    <div class="certify-box after-cls">
      <h3 class="col-default f20 ta-c pt20">确认公司信息并付款</h3>
      <div class="fl-l w500">
        <dl class="info2 mt50">
          <dt>公司名称：</dt>
          <dd>
            <p class="col-default">杭州名商网络有限公司</p>
          </dd>
        </dl>
        <dl class="info2 mt10">
          <dt>统一社会信用代码：</dt>
          <dd>
            <p class="col-default">3229832840284</p>
          </dd>
        </dl>
        <dl class="info2 mt10">
          <dt>法定代表人：</dt>
          <dd>
            <p class="col-default">杭州名</p>
          </dd>
        </dl>
        <dl class="info2 mt10">
          <dt>注册资本：</dt>
          <dd>
            <p class="col-default">100万元整</p>
          </dd>
        </dl>
        <dl class="info2 mt10">
          <dt>成立时间：</dt>
          <dd>
            <p class="col-default">2014年09月26日</p>
          </dd>
        </dl>
        <dl class="info2 mt10">
          <dt>资费：</dt>
          <dd>
            <p class="col-default">1000元</p>
          </dd>
        </dl>
      </div>
      <div class="fl-r mt50">
        <img src="http://iph.href.lu/86x86?text=86*86" width="" height="" alt="" class="mr25 in-block fl-l">
        <img src="http://iph.href.lu/86x86?text=86*86" width="" height="" alt="" class="mr25 in-block fl-l">
        <img src="http://iph.href.lu/86x86?text=86*86" width="" height="" alt="" class="in-block fl-l">
      </div>
      <div class="clearfix"></div>
      <div class="note mt25 pb20">
        <p class="col-default fb mb25">
          资费说明
        </p>
        <p class="lh20">1. 审核资费为每年 1000元/人民币<br />2. 官网系统服务周期为1年，从审核通过开始计算<br />2. 审核成功或失败，审核费用不退还</p>
      </div>
      <p class="ta-c mt45 mb50">
        <a href="/page/certify-web-6" class="pub-btn pub-btn-d2434a w140">在线支付</a>
      </p>

    </div>
  </div>
</div>

<?php include_once('templete/pub_foot.php') ?>
<script type="text/javascript">
$(function(){
    //certify-panel-only
    $(".certify-panel-only").css({
        "min-height" : ($(window).height()-$(".pub-head").outerHeight()-$(".footer").outerHeight()-35)+"px"
    })
})
</script>
</body>
</html>
