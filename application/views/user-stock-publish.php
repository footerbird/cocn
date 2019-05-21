<!DOCTYPE html>
<html>
<head>
<?php include_once('templete/pub_head_london.php') ?>
</head>
<body>
<?php include_once('templete/pub_nav.php') ?>
<!-- 股权交易中心 -->
<div class="attention">
  <div class="container">
    <div class="f18 ta-c">
      您需要完成实名认证才能发布股权信息。
      <a href="/page/certify-person"  class="col-f4364c underline">点击认证</a>
    </div>
  </div>
</div>
<div class="container mb20">
  <div class="bg-white">
    <div class="trading-info after-cls">
      <div class="f16 col-default pt30">
        发布股权交易
      </div>
      <p class="col-gray6 pb15 lh26 pt5">
        发布股权交易适合公司法定代表人或持有公司股权的股东。法定代表人可发起股权转让和增资扩股，股东可发起股权转让交易。
      </p>
      <p>
        <a href="#" class="col-3daaef lh26">新手发布股权交易，应该注意什么？</a>
      </p>
      <p>
        <a href="#" class="col-3daaef lh26">怎么样管理我发布的股权交易信息？</a>
      </p>
      <div class="bg-f2f6f8 pl35 pt20 pb20 pr35 mt20 mb20">
        <p class="lh26 col-gray6">
          股权交易规则：<br />1、发布普通股权交易收取 0.2% 的交易手续费，交易成功后从交易款中扣除；<br />2、普通股权交易有效期为 30天，过期后，用户需要重新发布；<br />3、全资转让交易收取 5% 的交易手续费，交易成功后从交易款中扣除；<br />4、全资转让交易使用暗拍方式，拍卖结束后公布竞拍结果。
        </p>
      </div>
      <div class="stock-publish-info mt20 pb15 after-cls">
        <table class="" width="100%">
          <tbody>
            <tr>
              <td width="33.33%">
                <dl class="info2">
                  <dt>公司名称</dt>
                  <dd>杭州名商网络有限公司</dd>
                </dl>
              </td>
              <td width="33.33%">
                <dl class="info2">
                  <dt>发布人身份</dt>
                  <dd>法定代表人</dd>
                </dl>
              </td>
              <td width="33.33%">
                <dl class="info2">
                  <dt>我的持股比例</dt>
                  <dd>90%</dd>
                </dl>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="hr fl-l mb15"></div>
      <div class="col-default pt20">
        股权发行方式
      </div>
      <div class="full-select mt15">
        <select class="normal-select lh30 h30 w190" name="" id="fxfs">
          <option value="0">请选择股权发行方式</option>
          <option value="1">股权转让</option>
          <option value="2">增资扩股</option>
          <option value="3">公司转让</option>
        </select>
      </div>
      <p class="f12 col-gray6 pt10 lh24">
        公司股东依法将自己的股东权益有偿转让给他人，使他人取得股权的民事法律行为。
      </p>
      <p>
        <a href="#" class="f12 col-3daaef lh24">了解更多股权转让信息？</a>
      </p>
      <div class="col-default pt20">
        股权交易方式
      </div>
      <div class="full-select mt15">
        <select class="normal-select lh30 h30 w190" name="" id="jyfs">
          <option value="0">请选择股权交易方式</option>
          <option value="1">一口价</option>
          <option value="2">投资人出价</option>
          <option value="3">拍卖</option>
        </select>
      </div>
      <p class="f12 col-gray6 pt10 lh24">
        交易手续费：<em class="col-ff6a29">0.2%</em>，买家可以直接点击购买，所以一口价出售速度比其它方式快三倍。
      </p>
      <p>
        <a href="#" class="f12 col-3daaef lh24">了解更多股权转让信息？</a>
      </p>
      <div class="hr fl-l mt15 mb25"></div>
      <a href="javascript:;" class="pub-btn w200 mb25" id="stock_deal_start_btn">开始，发布股权交易</a>
      <a href="/page/user-stock-yikoujia.php">内部一口价</a>
      <a href="/page/user-stock-chujia.php">内部投资人出价</a>
      <a href="/page/user-stock-paimai.php">内部拍卖</a>
      <a href="/page/user-stock-kuogu.php">内部增资扩股</a>
    </div>
  </div>
</div>
<?php include_once('templete/pub_foot.php') ?>

<script type="text/javascript">
$(function(){
  // $('#jyfs').on('change',function () {
  //   var selectVal = $(this).val();
  //   switch(selectVal) {
  //       case 0:
  //           alert("请选择股权交易方式！");
  //           break;
  //       case 1:
  //           $('#stock_deal_start_btn').location.href = "page/user-stock-yikoujia.php";
  //           break;
  //       case 2:
  //           $('#stock_deal_start_btn').location.href = "page/user-stock-chujia.php";
  //           break;
  //       case 3:
  //           $('#stock_deal_start_btn').location.href = "page/user-stock-paimai.php";
  //           break;
  //       // default:
  //       //     alert("请选择股权交易方式！");
  //       //     break;
  //   }
  // })
})
</script>
</body>
</html>
