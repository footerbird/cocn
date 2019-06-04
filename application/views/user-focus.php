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
        <span class="title">我关注的公司</span>
      </div>
      <div class="mt15 after-cls">
        <table width="100%" class="inner-table">
          <thead>
            <tr>
              <th width="6%" align="center">序号</th>
              <th width="21%" align="left">公司名称</th>

              <th width="15%" align="left">法定代表人</th>
              <th width="15%" align="left">经营状态</th>
              <th width="15%" align="left">官网认证</th>
              <th width="15%" align="left">备注</th>
              <th width="13%" align="right">&nbsp;</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td align="center">1</td>
              <td align="">
                <a href="/page/company-credit-page-simple" class="col-default">杭州名商网络有限公司</a>
              </td>
              <td align="left">林赞松</td>
              <td align="">在业</td>
              <td align="">已认证，股权交易中</td>
              <td align="">杭州，金融</td>
              <td align="right">
                <a href="javascript:;" class="col-default ml10">取消关注</a>
              </td>
            </tr>
            <tr>
              <td align="center">2</td>
              <td align="">
                <a href="/page/company-credit-page-simple" class="col-default">杭州名商网络有限公司</a>
              </td>
              <td align="left">林赞松</td>
              <td align="">注销</td>
              <td align="">已认证</td>
              <td align="">互联网</td>
              <td align="right">
                <a href="javascript:;" class="col-default ml10">关注</a>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="cocn-kaitong">
          <p class="ta-c f18 col-default pt30 pb30">
            您尚未关注任何公司
          </p>
          <img src="/htdocs/images/inner-no-guanzhu.png" alt="" class="m-auto">
          <p class="ta-c col-gray6 lh28 pt30 pb50">
            您可以点击“<a href="/page/company-credit-list" class="col-default">公司信用查询列表</a>”查询感兴趣的公司，快速查找投资对象
          </p>
          <div class="ta-c pb30 pt20">
            <a href="/page/company-credit-list" class="w170 pub-btn mr10">
              查看企业信用
            </a>
          </div>
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
