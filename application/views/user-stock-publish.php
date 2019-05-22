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
          股权交易规则：<br />1、发布普通股权交易收取 0.2% 的交易手续费，交易成功后从交易款中扣除；<br />2、普通股权交易有效期为 30天，过期后，用户需要重新发布；<br />3、全资转让交易收取 5% 的交易手续费，交易成功后从交易款中扣除；
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
        </select>
      </div>
      <p class="f12 col-gray6 pt10 lh24">
        交易手续费：<em class="col-ff6a29">0.2%</em>，买家可以直接点击购买，所以一口价出售速度比其它方式快三倍。
      </p>
      <p>
        <a href="#" class="f12 col-3daaef lh24">了解更多股权转让信息？</a>
      </p>
      
      <!-- 显示一口价 -->
      <div class="block-stock-panel" id="block_yikoujia" style="display: none;">
        <div class="hr fl-l mb15 mt15"></div>
        <div class="fl-l w-all">
          <div class="col-default mb15">
            转让数量
          </div>
          <div class="w300">
            <div class="input">
                <input type="text" name="" value="1"><em>%</em>
            </div>
          </div>
          <p class="mt10 mb25 col-gray9"><em class="col-f4364c">可售股权95%</em></p>
        </div>
        <div class="fl-l w-all">
          <div class="col-default mb15">
            价值设定
          </div>
          <div class="w300">
            <div class="input">
                <input type="text" name="" value="" placeholder="输入金额"><em>元/人民币</em>
            </div>
          </div>
          <p class="mt10 mb25 col-gray9 w300"><em class="col-f4364c">手续费600元</em><em class="col-f4364c fl-r">预收入299,40元</em></p>
        </div>
        <div class="fl-l w-all">
          <div class="col-default mb15">
            最小限额
          </div>
          <div class="">
            <div class="input w300 fl-l">
                <input type="text" name="" value="1"><em>%</em>
            </div>
            <div class="fl-l lh38 ml10 f12 col-gray9">单次投资最低股权比例</div>
          </div>
        </div>
      </div>
      
      <!-- 显示投资人出价 -->
      <div class="block-stock-panel" id="block_chujia" style="display: none;">
        <div class="hr fl-l mb15"></div>
        <div class="fl-l w-all">
          <div class="col-default mb15">
            转让数量
          </div>
          <div class="w300">
            <div class="input">
                <input type="text" name="" value="1"><em>%</em>
            </div>
          </div>
          <p class="mt10 mb25 col-gray9"><em class="col-f4364c">可售股权95%</em></p>
        </div>
        <div class="fl-l w-all">
          <div class="col-default mb15">
            最低平均价设定
          </div>
          <div class="">
            <div class="input w300 fl-l">
                <input type="text" name="" value="" placeholder="输入金额"><em>元/人民币</em>
            </div>
          </div>
          <div class="fl-l lh38 ml10 f12 mb25 col-gray9">用户出价低于最低平均价，则不接收交易提醒</div>
        </div>
        <div class="fl-l w-all">
          <div class="col-default mb15">
            最小限额
          </div>
          <div class="">
            <div class="input w300 fl-l">
                <input type="text" name="" value="1"><em>%</em>
            </div>
            <div class="fl-l lh38 ml10 f12 col-gray9">单次投资最低股权比例</div>
          </div>
        </div>
      </div>
      
      <!-- 显示拍卖 -->
      <div class="block-stock-panel" id="block_paimai" style="display: none;">
        <div class="hr fl-l mb15"></div>
        <div class="fl-l w-all">
          <div class="col-default mb15">
            转让数量
          </div>
          <div class="w300">
            <div class="input">
                <input type="text" name="" value="1"><em>%</em>
            </div>
          </div>
          <p class="mt10 mb25 col-gray9"><em class="col-f4364c">可售股权95%</em></p>
        </div>
        <div class="fl-l w-all mb25">
          <div class="col-default mb15">
            起拍价
          </div>
          <div class="w300">
            <div class="input">
                <input type="text" name="" value="" placeholder="输入金额"><em>元/人民币</em>
            </div>
          </div>
          <!-- <p class="mt10 mb25 col-gray9">用户出价低于最低平均价，则不接收交易提醒</p> -->
        </div>
        <div class="fl-l w-all">
          <div class="col-default mb15">
            保留价
          </div>
          <div class="">
            <div class="input w300 fl-l">
                <input type="text" name="" value="" placeholder="输入金额"><em>元/人民币</em>
            </div>
          </div>
          <div class="fl-l lh38 f12 ml10 mb25 col-gray9">超过保留价才可成交</div>
        </div>
        <div class="fl-l w-all">
          <div class="col-default mb15">
            拍卖周期
          </div>
          <div class="">
            <div class="input no w700">
                <input type="text" name="" value="" class="datetxt fl-l" id="date" placeholder="选择起拍日期"><font class="lh38 f12 in-block ml15 fl-l">9:00</font><font class="lh38 f12 in-block ml5 mr10 fl-l">截至</font><input type="text" name="" value="2019-09-09 21:00" class="end-date fl-l" readonly>
            </div>
          </div>
        </div>
      </div>
      
      <!-- 显示增资扩股 -->
      <div class="block-stock-panel" id="block_kuogu" style="display: none;">
        <div class="hr fl-l mb15"></div>
        <div class="fl-l w-all">
          <div class="col-default mb15">
            公司估值
          </div>
          <div class="w300">
            <div class="input">
                <input type="text" name="" value="" placeholder="输入金额"><em>元/人民币</em>
            </div>
          </div>
          <p class="mt10 mb25 col-gray9"><em class="col-f4364c">可售股权95%</em></p>
        </div>
        <div class="fl-l w-all">
          <div class="col-default mb15">
            增加注册资本
          </div>
          <div class="lh38">
            <div class="input w300 fl-l">
                <input type="text" name="" value="" placeholder="输入金额"><em>元/人民币</em>
            </div><i class="ml10 ico-turn mr10"></i><em class="col-f4364c">20%</em>
          </div>
            <p class="mt10 mb25 col-gray9 w300"><em class="col-f4364c">手续费600元</em><em class="col-f4364c fl-r">预计融资299,40元</em></p>
        </div>
        <div class="fl-l w-all">
          <div class="col-default mb15">
            最小限额
          </div>
          <div class="">
            <div class="input w300 fl-l">
                <input type="text" name="" value="1"><em>%</em>
            </div>
          </div><div class="fl-l lh38 ml10 f12 col-gray9">单次投资最低股权比例</div>
        </div>
      </div>
      
      <!-- 显示付款方式 -->
      <div id="block_payment" style="display: none;">
        <div class="hr fl-l mt25 mb20"></div>
        <div class="fl-l w-all">
          <div class="col-default mb15">
            收款方式
          </div>
          <p class="lh30">
            <label class="pos-rela">
              <input type="radio" name="bank" value="" checked>
              <i></i>
              <font>李群（农业银行）6200988779990</font>
            </label>
          </p>
          <p class="lh30">
            <label class="pos-rela">
              <input type="radio" name="bank" value="">
              <i></i>
              <font>李群（支付宝）15888877689</font>
            </label>
          </p>
          <p class="lh30">
            <label class="pos-rela">
              <input type="radio" name="bank" value="">
              <i></i>
              <font>杭州名商网络有限公司（农业银行）6200988779997</font>
            </label>
            <em class="col-ff6a29 in-block f12 ml5">增资扩股必须为公司对公账号</em>
          </p>
        </div>
      </div>
      
      <div class="hr fl-l mt15 mb25"></div>
      <div class="fl-l w-all mb10">
        <label class=""><input type="checkbox" name="yuedu" value="yuedu" id=""><i></i><font>我已了解<a href="#" class="col-3daaef">《股权交易规则》</a></font>并同意发布股权交易</label>
        <p>
          <a href="javascript:;" class="pub-btn mt25 w200 mb20" id="stock_deal_start_btn">开始，发布股权交易</a>
          <a href="/page/user-stock-yikoujia.php">内部一口价</a>
          <a href="/page/user-stock-chujia.php">内部投资人出价</a>
          <a href="/page/user-stock-paimai.php">内部拍卖</a>
          <a href="/page/user-stock-kuogu.php">内部增资扩股</a>
        </p>
      </div>
    </div>
  </div>
</div>

<!-- 设置收款账户 -->
<div id="alert_noaccount" class="upwin" style="min-width: 360px; display: none;">
  <div class="upwin-title">提示<a href="javascript:;" class="upwin-title-close" onclick="Pop.exit();"></a></div>
  <div class="upwin-content pt0">
    <div style="padding:20px 0;font-size:14px;line-height:24px;word-break:break-all;text-align:center;">
      <p style="font-size: 16px; padding-bottom: 10px;">您尚未关联收款银行信息</p>
      <p style="color: #999;">进入账户资料，设置我的收款账户</p>
    </div>
    <div style="text-align:center;padding:0 0 12px;">
      <a href="/page/user-accounts-set" class="alert-btn0">设置收款账户</a>
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
  
  $('#fxfs').on('change',function () {
    $(".block-stock-panel").hide();
    $("#block_payment").hide();
    var selectVal = $(this).val();
    switch(selectVal) {
        case "0":
            Pop.alert("请选择股权发行方式！");
            $('#jyfs').html('<option value="0">请选择股权交易方式</option>');
            break;
        case "1"://股权转让
        case "3"://公司转让
            $("#jyfs").html('<option value="0">请选择股权交易方式</option>'+
                            '<option value="1">一口价</option>'+
                            '<option value="2">投资人出价</option>'+
                            '<option value="3">拍卖</option>');
            break;
        case "2"://增资扩股只有一口价
            $("#jyfs").html('<option value="1">一口价</option>');
            $("#block_payment").show();
            $("#block_kuogu").show();
            $('#stock_deal_start_btn').prop("href","/page/user-stock-kuogu-tj");
            break;
    }
  })
  
  $('#jyfs').on('change',function () {
    $(".block-stock-panel").hide();
    $("#block_payment").hide();
    var selectVal = $(this).val();
    switch(selectVal) {
        case "0":
            $("#block_payment").hide();
            Pop.alert("请选择股权交易方式！");
            break;
        case "1"://一口价
            $("#block_payment").show();
            $("#block_yikoujia").show();
            $('#stock_deal_start_btn').prop("href","/page/user-stock-yikoujia-tj");
            break;
        case "2"://投资人出价
            $("#block_payment").show();
            $("#block_chujia").show();
            $('#stock_deal_start_btn').prop("href","/page/user-stock-chujia-tj");
            break;
        case "3"://拍卖
            $("#block_payment").show();
            $("#block_paimai").show();
            $('#stock_deal_start_btn').prop("href","/page/user-stock-paimai-tj");
            break;
    }
  })
  
  Pop.open('alert_noaccount');
  
})
</script>
</body>
</html>
