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
    <div class="certify-box after-cls pt50">
      <div class="ta-c mt30">
        <i class="alert-ico-succ41 mr10"></i>
        <h3 class="col-4eb470 f20 ta-c pt15 pb30">支付成功</h3>
      </div>
      <h3 class="col-default f20 ta-c pt30">杭州名商网络有限公司</h3>
      <div class="mt25 pb20 ta-c">
        <p class="col-f2743d">
          <i class="alert-ico-wait mr10"></i>
            预计剩余等待时间
            <font>1天3小时</font>
        </p>
        <p class="col-gray9 mt45">
          我们将在3个工作日内完成公司信息审核，如有疑问，请联系 4008000999
        </p>
      </div>
    </div>
  </div>
</div>
<div class="container mt15 mb20 bg-white">
  <div class="padding20 certify-panel-only">
    <div class="certify-box after-cls pt50">
      <h3 class="col-default f20 ta-c pt30">杭州名商网络有限公司</h3>
      <div class="mt25 pb20 ta-c">
        <p class="col-d2434a">
          <i class="alert-ico-fail mr10"></i>
            审核失败
        </p>
        <p class="col-gray9 mt45">
          失败原因：描述，由管理员手动输入（系统将提供管理员个别快捷选项）
        </p>
      </div>
      <p class="ta-c mt45 mb50">
        <a href="/page/certify-web" class="pub-btn-b">重新提交材料，发起复审</a>
      </p>
    </div>
  </div>
</div>
<div class="container mt15 mb20 bg-white">
  <div class="padding20 certify-panel-only">
    <div class="certify-box after-cls pt50">
      <h3 class="col-default f20 ta-c pt30">杭州名商网络有限公司</h3>
      <div class="mt25 pb20 ta-c">
        <p class="col-0bb56b">
          <i class="alert-ico-succ mr10"></i>
            审核通过
        </p>
        <p class="col-gray9 mt45">
          官网服务周期 2019年01月01日 - 2022年01月01日
        </p>
      </div>
      <p class="ta-c mt45 mb50">
        <a href="/page/user-cocn-zero" class="pub-btn w140 mr10">设置官网</a>
        <a href="#" class="pub-btn-b w140">我要融资</a>
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
    if($(".manage-panel").length == 1){
        $(".manage-panel").css({
            "min-height" : ($(window).height()-$(".pub-head").outerHeight()-$(".footer").outerHeight()-35)+"px",
            "margin-bottom" : "0"
        })
    }

})
</script>
</body>
</html>
