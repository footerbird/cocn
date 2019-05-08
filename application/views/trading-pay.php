<!DOCTYPE html>
<html>
<head>
<?php include_once('templete/pub_head_london.php') ?>
</head>
<body>
<?php include_once('templete/pub_nav.php') ?>
<!-- 付款-->
<div class="container mt15 mb15 bg-white">
  <div class="padding20">
    <h3 class="col-default f20 ta-c pt20 pb30">确认付款信息</h3>
    <div class="pay-wrap pb20">
      <table width="100%" class="lh36">
        <tbody>
          <tr>
            <td>
              <em class="col-gray9 w90 ta-r in-block">标的公司：</em>
              <em class="f18 col-default">杭州名商网络有限公司</em>
            </td>

            <td colspan="2" align="right">
              <em class="col-gray9 w90 ta-r in-block">应付金额：</em>
              <em class="f30 col-f4364c">20,000</em><em class="ml4 col-f4364c">元/人民币</em>
            </td>
          </tr>
          <tr>
            <td>
              <em class="col-gray9 w90 ta-r in-block">资金用途：</em>
              <em class="f18 col-default">预付定金</em>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="container mt15 mb15 bg-white">
  <div class="pay-wrap pt20">
    <h3 class="f20 pb25">选择以下支付方式：</h3>
  </div>
  <div class="hr fl-l mb20"></div>
  <div class="pay-wrap pb20 after-cls">
    <h3 class="f16 pb20">支付平台</h3>
    <div class="check-pay-box">
      <label for="action1">
        <input type="radio" name="payway" value="" id="action1" checked>
        <i class="tick" id="payway1_tick"></i>
        <img src="/htdocs/images/pay-zfb.png" alt="">
      </label>
    </div>
    <div class="f16 pb15 pt30">
      银行借记卡
    </div>
    <div class="check-pay-box mr10">
      <label for="action2">
        <input type="radio" name="payway" value="" id="action2">
        <i class="tick" id="payway2_tick"></i>
        <img src="/htdocs/images/pay-gs.png" alt="">
      </label>
    </div>
    <div class="check-pay-box mr10">
      <label for="action3">
        <input type="radio" name="payway" value="" id="action3">
        <i class="tick" id="payway3_tick"></i>
        <img src="/htdocs/images/pay-zs.png" alt="">
      </label>
    </div>
    <div class="check-pay-box mr10">
      <label for="action4">
        <input type="radio" name="payway" value="" id="action4">
        <i class="tick" id="paywa4_tick"></i>
        <img src="/htdocs/images/pay-js.png" alt="">
      </label>
    </div>
    <div class="check-pay-box mr10">
      <label for="action5">
        <input type="radio" name="payway" value="" id="action5">
        <i class="tick" id="payway5_tick"></i>
        <img src="/htdocs/images/pay-zg.png" alt="">
      </label>
    </div>
    <div class="check-pay-box mr10">
      <label for="action6">
        <input type="radio" name="payway" value="" id="action6">
        <i class="tick" id="payway6_tick"></i>
        <img src="/htdocs/images/pay-ny.png" alt="">
      </label>
    </div>
    <div class="f16 pb15 pt30">
      其他
    </div>
    <div class="check-pay-box mr10">
      <label for="action7">
        <input type="radio" name="payway" value="xxhk" id="action7">
        <i class="tick" id="payway7_tick"></i>
        <img src="/htdocs/images/pay-o2o.png" alt="">
      </label>
    </div>
    <div class="mt50 ta-c mb20">
      <a href="javascript:;" class="pub-btn pub-btn-d2434a w140 order-confirm-btn">立即付款</a>
    </div>
  </div>
</div>
<div class="container mt15 mb15 bg-white">
  <div class="padding20">
    <div class="ta-c mt30">
      <i class="alert-ico-succ mr10"></i>
      <h3 class="col-4eb470 f20 ta-c pt15 pb30">支付成功</h3>
    </div>
    <div class="pay-wrap pb20 pt20">
      <ul class="history">
        <li>
          <i></i>
          预计<em class="num">2019-09-09</em>前可以完成股权过户
        </li>
        <li>
          <i></i>
          预计<em class="num">2019-09-09</em>需要支付尾款<em class="num">849,999</em>元/人民币
        </li>
      </ul>
    </div>
  </div>
</div>
<?php include_once('templete/pub_foot.php') ?>
<script type="text/javascript">
$(function() {
  $(".order-confirm-btn").on("click", function() {
      if($("input[name=payway]:checked").length == 0) {
          alert("请选择支付方式！");
      } else if($("input[name=payway]:checked").val() == "xxhk") {
          location.href = "/page/trading-pay-o2o";
      }
  })
})
</script>
</body>
</html>
