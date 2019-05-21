<!DOCTYPE html>
<html>
<head>
<?php include_once('templete/pub_head_london.php') ?>
</head>
<body>
<?php include_once('templete/pub_nav_inside.php') ?>
<!-- 用户中心开始 -->
<div class="container-full">
  <?php include_once('templete/pub_leftnav.php') ?>
  <div class="view-frt">
    <div class="manage-panel">
      <div class="sub-nav-panel">
        <span class="title">股权交易</span>
      </div>
      <div class="mt15 after-cls">
        <div class="table-top-tools after-cls">
          <div class="tools-fl-l">
            <input type="text" name="" value="" placeholder="编号/公司名称">
            <a href="javascript:;" class="pub-btn f12">搜索</a>
            <label class="pos-rela ml10 f12"><input type="checkbox" name="" value=""><i class=""></i><font>仅显示有效订单</font></label>
          </div>
          <div class="tools-fl-r">
            <div class="filter mr5">
              <div class="select-panel">
                <select class="select mr10 w120" name="">
                  <option value="">交易方向</option>
                  <option value="">买入</option>
                  <option value="">卖出</option>
                  <option value="">全部</option>
                </select>
                <select class="select mr10 w120" name="">
                  <option value="">交易方式</option>
                  <option value="">标价</option>
                  <option value="">拍卖</option>
                  <option value="">全部</option>
                </select>
                <select class="select w120" name="">
                  <option value="">交易类型</option>
                  <option value="">股权转让</option>
                  <option value="">增资配股</option>
                  <option value="">全部</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <table width="100%" class="inner-table">
          <thead>
            <tr>
              <th width="6%" align="center">序号</th>
              <th width="30%" align="left">名称</th>
              <th width="10%" align="center">交易股权</th>
              <th width="8%" align="right">交易额</th>
              <th width="12%" align="center">交易方向</th>
              <th width="10%" align="left">交易方式</th>
              <th width="10%" align="left">交易类型</th>
              <th width="15%" align="left">状态</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td align="center">1</td>
              <td align="">
                <a href="/page/user-dealing-succ-transfer" class="col-default">杭州名商网络有限公司</a>
              </td>
              <td align="center">0.10%</td>
              <td align="right">&yen;999</td>
              <td align="center">买入</td>
              <td align="">一口价</td>
              <td align="">股权转让</td>
              <td align="left">
                <p class="f12 col-default">
                <a href="/page/user-dealing-succ-transfer" class="col-default">交易完成</a>
                </p>
                <p class="f12 col-gray6">
                  2019-08-30 13:09:19
                </p>
              </td>
            </tr>
            <tr>
              <td align="center">1</td>
              <td align="">
                <a href="/page/trading-pay" class="col-default">杭州名商网络有限公司</a>
              </td>
              <td align="center">0.10%</td>
              <td align="right">&yen;999</td>
              <td align="center">买入</td>
              <td align="">一口价</td>
              <td align="">股权转让</td>
              <td align="left">
                <p class="f12 col-default">
                  <a href="/page/trading-pay" class="f12 col-default">支付</a>
                </p>
                <p class="f12 col-gray6">
                  2019-08-30 13:09:19
                </p>
              </td>
            </tr>
            <tr>
              <td align="center">1</td>
              <td align="">
                <a href="/page/user-dealing-wait-transfer" class="col-default">杭州名商网络有限公司</a>
              </td>
              <td align="center">0.10%</td>
              <td align="right">&yen;999</td>
              <td align="center">买入</td>
              <td align="">一口价</td>
              <td align="">股权转让</td>
              <td align="left">
                <p class="f12 col-d2434a">
                  <a href="/page/user-dealing-wait-transfer" class="col-d2434a">待过户</a>
                </p>
                <p class="f12 col-gray6">
                  2019-08-30 13:09:19
                </p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>
<!-- footer -->
<?php include_once('templete/pub_foot_inside.php') ?>
<script src="/htdocs/js/slick/slick.min.js?<?php echo CACHE_TIME; ?>"></script>
<link rel="stylesheet" href="/htdocs/js/slick/slick.css?<?php echo CACHE_TIME; ?>">
<script type="text/javascript">
$(function(){
})
</script>
</body>
</html>
