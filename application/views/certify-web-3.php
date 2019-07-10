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
      <div class="" id="a">
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
      </div>
      <div class="" id="b" style="display:none">
        <dl class="info2 mt50">
          <dt class="lh36">公司名称：</dt>
          <dd>
            <input type="text" name="" value="" placeholder="" class="w380">
          </dd>
        </dl>
        <dl class="info2 mt10">
          <dt class="lh36">统一社会信用代码：</dt>
          <dd>
            <input type="text" name="" value="" placeholder="" class="w190">
          </dd>
        </dl>
        <dl class="info2 mt10">
          <dt class="lh36">法定代表人：</dt>
          <dd>
            <input type="text" name="" value="" placeholder="" class="w190">
          </dd>
        </dl>
        <dl class="info2 mt10">
          <dt class="lh36">注册资本：</dt>
          <dd>
            <input type="text" name="" value="" placeholder="" class="w190">
          </dd>
        </dl>
        <dl class="info2 mt10">
          <dt class="lh36">成立时间：</dt>
          <dd>
  						<input type="text" name="" placeholder="成立时间" class="datetxt w190" id="date" />
          </dd>
        </dl>
      </div>

      <p class="ta-c mt45 mb50">
        <a href="/page/certify-web-4" class="pub-btn w140 mr10">提交审核资料</a><a href="javascript:;" id="afresh" class="pub-btn-b">公司不正确，重新填写</a>
      </p>
    </div>
  </div>
</div>

<?php include_once('templete/pub_foot.php') ?>
<script src="/htdocs/js/lyz.calendar.min.js?<?php echo CACHE_TIME; ?>"></script>
<script type="text/javascript">
$(function(){
  // 时间选择器
  $("#date").calendar({
		readonly : false
	});
  //重新写
  $('#afresh').on('click',function(){
    $('#a').hide();
    $('#b').show();
  });
  //certify-panel-only
  $(".certify-panel-only").css({
      "min-height" : ($(window).height()-$(".pub-head").outerHeight()-$(".footer").outerHeight()-35)+"px"
  })

})
</script>
</body>
</html>
