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
      <h3 class="col-default f20 ta-c pt20">审核公司信息</h3>
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
      <p class="ta-c mt45 mb50">
        <a href="/page/certify-web-4" class="pub-btn w140 mr10">提交审核资料</a><a href="/page/certify-web-2" class="pub-btn-b">公司不正确，重新填写</a>
      </p>
    </div>
  </div>
</div>

<?php include_once('templete/pub_foot.php') ?>
<script type="text/javascript">
$(function(){
  //certify-panel-only
  $(function(){
    $(".certify-panel-only").css({
        "min-height" : ($(window).height()-385)+"px"
    })
    if($(".manage-panel").length == 1){
        $(".manage-panel").css({
            "min-height" : ($(window).height()-385)+"px",
            "margin-bottom" : "0"
        })
    }
  })

})
</script>
</body>
</html>
