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
      <h3 class="col-default f20 ta-c pt20">提交审核材料</h3>
      <dl class="info mt50">
        <dt class="">请上传身份证复印件：</dt>
        <dd>
          <label class="upload-label mt8 mr10">
            <input type="file" name="" value="">
          </label>
          <label class="upload-label mt8 mr10">
            <input type="file" name="" value="">
          </label>
          <a href="/htdocs/images/idcard-sample.jpg" target="_blank" class="col-3daaef f12">样本查看</a>
        </dd>
      </dl>
      <dl class="info2 mb10">
        <dt>&nbsp;</dt>
        <dd>
          <div class="w80 ml12 mt5 mr10 ta-c col-gray9 f12 fl-l">
            身份证正面
          </div>
          <div class="w80 ml10 mt5 mr10 ta-c col-gray9 f12 fl-l">
            身份证反面
          </div>
        </dd>
      </dl>
      <dl class="info mb20">
        <dt class="w140 ta-r lh36">姓名：</dt>
        <dd>
          <input type="text" name="" value="" placeholder="请输入您的姓名">
        </dd>
      </dl>
      <dl class="info">
        <dt class="w140 ta-r lh36">身份证号：</dt>
        <dd>
          <input type="text" name="" value="" placeholder="请输入您的身份证号码">
        </dd>
      </dl>
      <p class="ta-c mt50 pos-rela mb10" style="left:46px;">
          <label class="col-default"><input type="checkbox" name="yuedu" value="yuedu" id=""><i></i><font>我已阅读并同意<a href="#" class="col-default">《个人审核条款》</a></font></label>
      </p>
      <p class="ta-c mb50">
        <a href="/page/user-personal" class="pub-btn w140">确认审核</a>
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
