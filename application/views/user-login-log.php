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
        <a href="/page/user-personal" class="">个人信息</a>
        <a href="/page/user-company-certify" class="">公司认证</a>
        <a href="/page/user-accounts" class="">收款账户</a>
        <a href="/page/user-login-log" class="on">登录日志</a>
      </div>
      <div class="mt25 after-cls">
        <table width="100%" class="inner-table">
          <thead>
            <tr>
              <th width="25%" align="left">登录时间</th>
              <th width="20%">登录方式</th>
              <th width="25%">定位</th>
              <th width="30%" align="left">备注</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td align="left">2019-03-29 12:03:18</td>
              <td align="center">移动端</td>
              <td align="center">浙江省杭州市</td>
              <td align="left">异常登录：非常用设备</td>
            </tr>
            <tr>
              <td align="left">2019-03-29 12:03:18</td>
              <td align="center">pc</td>
              <td align="center">浙江省杭州市</td>
              <td align="left">异常登录：非常用地区</td>
            </tr>
            <tr>
              <td align="left">2019-03-29 12:03:18</td>
              <td align="center">pc</td>
              <td align="center">浙江省杭州市</td>
              <td align="left">-</td>
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
  //切换行业数据、地区分析
  $("#col_left_tab_box .tab a").on('click',function() {
      $(this).addClass('on').siblings().removeClass('on');
      var index = $(this).index();
      number = index;
      $('#col_left_tab_box .content dd').hide();
      $('#col_left_tab_box .content dd:eq(' + index + ')').show();
  });
})
</script>
</body>
</html>
