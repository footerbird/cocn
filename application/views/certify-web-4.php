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
      <dl class="info2 mt50">
        <dt>公司名称：</dt>
        <dd>
          <p class="col-default">杭州名商网络有限公司</p>
        </dd>
      </dl>
      <dl class="info2 mt5">
        <dt class="col-gray9">请上传公司营业执照<br />（复印件盖章）</dt>
        <dd>
          <label class="upload-label mt8" for="">
            <input type="file" name="" value="">
          </label>
        </dd>
      </dl>
      <dl class="info2 mt25">
        <dt>法定代表人：</dt>
        <dd>
          <p class="col-default">林赞松</p>
        </dd>
      </dl>
      <dl class="info2 mt10">
        <dt class="col-gray9">请上传身份证复印件</dt>
        <dd>
          <label class="upload-label mt8 mr10" for="">
            <input type="file" name="" value="">
          </label>
          <label class="upload-label mt8 mr10" for="">
            <input type="file" name="" value="">
          </label>
          <a href="/htdocs/images/idcard-sample.jpg" target="_blank" class="col-3daaef f12">样本查看</a>
        </dd>
      </dl>
      <dl class="info2 mb20">
        <dt>&nbsp;</dt>
        <dd>
          <div class="w80 ml5 mt5 mr10 ta-c col-gray9 f12 fl-l">
            身份证正面
          </div>
          <div class="w80 ml5 mt5 mr10 ta-c col-gray9 f12 fl-l">
            身份证反面
          </div>
        </dd>
      </dl>
      <!-- <p class="ta-c mt50 pos-rela mb10" style="left:-40px;">
          <label class="col-default"><input type="checkbox" name="yuedu" value="yuedu" id=""><i></i><font>我已阅读并同意<a href="#" class="col-3daaef">《公司审核条款》</a></font></label>
      </p> -->
      <p class="ta-c mt50 mb50">
        <a href="/page/certify-web-5" class="pub-btn w140 mr10">确认审核</a><a href="/page/certify-web-2" class="pub-btn-b">公司不正确，重新填写</a>
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
