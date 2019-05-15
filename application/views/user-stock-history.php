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
        <span class="title">资产流通记录</span>
      </div>
      <div class="mt15 after-cls">
        <table width="100%" class="inner-table">
          <thead>
            <tr>
              <th width="6%" align="center">序号</th>
              <th width="16%" align="left">时间</th>
              <th width="24%" align="left">公司名称</th>
              <th width="13%" align="center">交易量</th>
              <th width="13%" align="center">方向</th>
              <th width="28%" align="left">摘要</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td align="center">1</td>
              <td align="left">2019-03-09 12:09:20</td>
              <td align="left">杭州名商网络有限公司</td>
              <td align="center">.99%</td>
              <td align="center">购入</td>
              <td align="left"><p class="f12 col-gray6">交易成功</p></td>
            </tr>
            <tr>
              <td align="center">2</td>
              <td align="left">2019-03-09 12:09:20</td>
              <td align="left">杭州名商网络有限公司</td>
              <td align="center">.99%</td>
              <td align="center">卖出</td>
              <td align="left"><p class="f12 col-gray6">交易成功</p></td>
            </tr>
            <tr>
              <td align="center">1</td>
              <td align="left">2019-03-09 12:09:20</td>
              <td align="left">杭州名商网络有限公司</td>
              <td align="center">.99%</td>
              <td align="center">发布</td>
              <td align="left"><p class="f12 col-gray6">交易成功</p></td>
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
