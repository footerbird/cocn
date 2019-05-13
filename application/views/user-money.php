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
        <span class="title">资金流水</span>
      </div>
      <div class="mt15 after-cls">
        <div class="table-top-tools after-cls">
          <div class="tools-fl-l">
            <div class="filter mr5">
              <div class="select-panel">
                <select class="select mr10 w120" name="">
                  <option value="">时间</option>
                  <option value="">当天</option>
                  <option value="">一个月</option>
                  <option value="">三个月</option>
                  <option value="">一年</option>
                </select>
                <select class="select mr10" name="">
                  <option value="">账号/持有人</option>
                  <option value="">公司账号/杭州名商网络有限公司</option>
                  <option value="">个人账号/立群/中国农业银行</option>
                  <option value="">个人账号/立群/支付宝</option>
                </select>
                <select class="select w120" name="">
                  <option value="">收支方向</option>
                  <option value="">收入</option>
                  <option value="">支出</option>
                  <option value="">全部</option>
                </select>
              </div>
            </div>
          </div>
          <div class="tools-fl-r">
            <div class="f12 mr20 fl-l lh36">
              总收入：
              <font class="f16 col-f4364c">988,888</font>
            </div>
            <div class="f12 fl-l lh36">
              总支出：
              <font class="f16 col-0bb56b">8,888</font>
            </div>
          </div>
        </div>
        <table width="100%" class="inner-table">
          <thead>
            <tr>
              <th width="6%" align="center">序号</th>
              <th width="13%" align="left">时间</th>
              <th width="15%" align="left">账号</th>
              <th width="18%" align="left">持有人</th>
              <th width="8%" align="center">收支方向</th>
              <th width="10%" align="right">交易额</th>
              <th width="30%" align="left">摘要</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td align="center">1</td>
              <td align="">
              2019-08-09 11:13:55
              </td>
              <td align="">2048024244924</td>
              <td align="">
                杭州名商网络有限公司
              </td>
              <td align="center">收入</td>
              <td align="right">350,999</td>
              <td align="left">
                <p class="f12 col-gray6">交易股权[一口价]杭州XXX5.5%股权入款(28,000)。</p>
                <p class="f12 col-gray6">
                  2019-08-30 13:09:19
                </p>
              </td>
            </tr>
            <tr>
              <td align="center">2</td>
              <td align="">
              2019-08-09 11:13:55
              </td>
              <td align="">2048024244924</td>
              <td align="">
                立群
              </td>
              <td align="center">收入</td>
              <td align="right">1,350,999</td>
              <td align="left">
                <p class="f12 col-gray6">交易股权[拍卖]杭州XXX5.5%股权入款(28,000元/人民币)。</p>
                <p class="f12 col-gray6">
                  2019-08-30 13:09:19
                </p>
              </td>
            </tr>
            <tr>
              <td align="center">3</td>
              <td align="">
              2019-08-09 11:13:55
              </td>
              <td align="">2048024244924</td>
              <td align="">
                杭州名商网络有限公司
              </td>
              <td align="center">支出</td>
              <td align="right">30,999</td>
              <td align="left">
                <p class="f12 col-gray6">交易股权[增资扩股]杭州XXX5.5%股权扣款(28,000元/人民币)，扣除手续费：90元/人民币。</p>
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
