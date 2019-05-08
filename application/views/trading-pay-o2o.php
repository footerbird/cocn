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
    <h3 class="col-default f20 ta-c pt20 pb30">线下支付信息</h3>
    <div class="pay-wrap pb20">
      <table width="100%" class="lh36">
        <tbody>
          <tr>
            <td>
              <em class="col-gray9 w90 ta-r in-block">应付金额：</em>
              <em class="f30 col-f4364c">20,000</em><em class="ml4 col-f4364c">元/人民币</em>
            </td>
          </tr>
          <tr>
            <td>
              <em class="col-gray9 w90 ta-r in-block">汇款识别码：</em>
              <em class="f18 col-default">GTSDSFSDF</em>
              <em class="f12 col-ff6a29 ml10">请牢记</em>
            </td>
          </tr>
        </tbody>
      </table>
      <p class="ta-r col-3daaef">
        <i class="ico-call mr3"></i>
        <a href="#" class="col-3daaef f12">如需帮助，请联系</a>
      </p>
    </div>
  </div>
</div>
<div class="container mt15 mb15 bg-white pb40">
  <div class="pay-wrap pt20">
    <h3 class="f20 ta-c pb25">接受汇款的银行账号</h3>
    <img src="/htdocs/images/o2opay1.png" alt="" class="m-auto">
    <div class="f12 col-ff6a29 ta-c pb15 pt50">
      汇款单填写示意图 为使您顺利完成线下支付，请您务必按照以下汇款单信息进行填写：
    </div>
    <img src="/htdocs/images/o2opay2.png" alt="" class="m-auto">
    <div class="mt50 ta-c">
      <a href="javascript:;" class="pub-btn mr30">图片保存本页面</a>
      <a href="javascript:;" class="pub-btn w140 ml30">打印本页</a>
    </div>
  </div>
</div>
<?php include_once('templete/pub_foot.php') ?>
<script type="text/javascript">
$(function() {

})
</script>
</body>
</html>
