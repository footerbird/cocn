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
      <h3 class="col-default f20 ta-c pt30">目前仅支持中国大陆地区身份证验证</h3>
      <div class="mt50 pb20 ta-c">
        <p class="col-gray9">
          <a href="/page/certify-person-2" class="pub-btn w180">开始验证</a>
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
