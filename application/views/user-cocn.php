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
        <span class="title">公司官网</span>
      </div>
      <div class="mt10 after-cls">
        <div class="mb10">
          <a href="/page/certify-web" class="abtn-gsrz">
            <i class="ico-white-add mr3"></i>
              公司官网认证
          </a>
        </div>
        <table width="100%" class="inner-table">
          <thead>
            <tr>
              <th width="7%" align="center">序号</th>
              <th width="15%" align="left">公司名称</th>
              <th width="10%" align="left">公司网址</th>
              <th width="11%" align="left">法定代表人</th>
              <th width="12%" align="left">开通日期</th>
              <th width="12%" align="left">有效期</th>
              <th width="10%" align="left">我的角色</th>
              <th width="10%" align="left">官网状态</th>
              <th width="13%" align="right">&nbsp;</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td align="center">1</td>
              <td align="">
                <a href="/page/user-cocn-settings" class="col-default">杭州名商网络有限公司</a>
              </td>
              <td align="center">marksmile.com</td>
              <td align="left">林赞松</td>
              <td align="">2019-04-11</td>
              <td align="">2022-04-11</td>
              <td align="">法定代表人</td>
              <td align="">正常</td>
              <td align="right">
                <a href="#" class="col-default ml10">续费</a>
                <a href="/page/user-cocn-settings" class="col-default ml10">管理</a>
              </td>
            </tr>
            <tr>
              <td align="center">2</td>
              <td align="">
                <a href="/page/user-cocn-settings" class="col-default">杭州名商网络有限公司</a>
              </td>
              <td align="center">marksmile.com</td>
              <td align="left">林赞松</td>
              <td align="">2019-04-11</td>
              <td align="">2022-04-11</td>
              <td align="">网站负责人</td>
              <td align="">已过期</td>
              <td align="right">
                <a href="#" class="col-default ml10">认证</a>
              </td>
            </tr>
            <tr>
              <td align="center">3</td>
              <td align="">
                <a href="/page/user-cocn-settings" class="col-default">杭州名商网络有限公司</a>
              </td>
              <td align="center">marksmile.com</td>
              <td align="left">林赞松</td>
              <td align="">2019-04-11</td>
              <td align="">2022-04-11</td>
              <td align="">网站负责人</td>
              <td align="" class="col-d2434a">待付款</td>
              <td align="right">
                <a href="#" class="col-default ml10">支付</a>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="cocn-kaitong">
          <p class="ta-c f18 col-default pt30 pb30">
            您尚未开通公司官网或授权获得官网管理权限
          </p>
          <img src="/htdocs/images/inner-nothing.png" alt="" class="m-auto">
          <p class="ta-c col-gray6 lh28 pt30 pb50">
            如果您是公司法人，可以点击开通公司官网，<br />发布公司新闻、产品、管理评论或者出售公司股权。
          </p>
          <p class="ta-c pb30 pt20">
            <a href="/page/user-cocn-zero" class="w140 pub-btn">
              开始设置
            </a>
          </p>
        </div>
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
