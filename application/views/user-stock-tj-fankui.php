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
      <h3 class="col-f2743d f20 ta-c pt30"><i class="alert-ico-wait mr10"></i>您的股权交易申请已提交审核</h3>
      <div class="mt25 pb20 ta-c">
        <p class="col-gray6">概要：通过股权转让一口价交易，发行杭州名商网络有限公司 15% 股权，价值设定 30 万元人民币。
        </p>
        <p class="mt45">
          <a href="/page/user-stock" class="pub-btn">查看我的股权</a>
        </p>
        <p class="col-gray9 mt30">
          如需帮助，请联系品牌顾问 0571-88000365
        </p>
      </div>
    </div>
  </div>
</div>
<!-- <div class="container mt15 mb20 bg-white">
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
</div> -->
<div class="container mt15 mb20 bg-white">
  <div class="padding20 certify-panel-only">
    <div class="certify-box after-cls pt50">
      <h3 class="col-0bb56b f20 ta-c pt30"><i class="alert-ico-succ mr10"></i>恭喜，您已成功发布公司股权交易</h3>
      <div class="mt25 pb20 ta-c">
        <p class="col-gray6">概要：通过股权转让一口价交易，发行杭州名商网络有限公司 15% 股权，价值设定 30 万元人民币。
        </p>
        <p class="mt45">
          <a href="/page/user-stock" class="pub-btn">查看我的股权</a>
        </p>
        <p class="col-gray9 mt30">
          如需帮助，请联系品牌顾问 0571-88000365
        </p>
      </div>

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
